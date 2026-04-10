<?php

class Controller_Estimate extends Controller
{
	var $headers = array (
		'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
		'Expires'       => 'Mon, 26 Jul 1997 05:00:00 GMT',
		'Pragma'        => 'no-cache',
	);

	public function action_index()
	{
		$saved = Session::get('estimate.index', array());

		$form = Fieldset::forge('index')->add_model('Model_Estimate_Deliv');

		if (Security::check_token() and $form->validation()->run())
		{
			Session::set('estimate.index', $form->validated());
			
			if (Input::post('next') == 'print')
			{
				Response::redirect(Uri::create('print'));
			}
			else
			{
				Session::delete('estimate.print');
				Response::redirect(Uri::create('payment'));
			}
		}
		
		if (Input::method() == 'POST' and ! $form->validated('enclosure_types_id'))
		{
			$saved['enclosure_types_id'] = null;
		}
		
		$form->populate($saved, true);
		
		$data = $form->field();
		
		return Response::forge(View::forge('estimate/index', $data), 200, $this->headers);
	}

	public function action_print()
	{
		$saved = Session::get('estimate.print', array());
		
		$form_count = max(1, Input::post('print') ? : count(current($saved)));
		
		$form = Fieldset::forge('print');
		$form->validation()->add_callable('Model_Estimate_Print');
		
		$properties = Model_Estimate_Print::properties();
		foreach ($properties as $p_name => $p)
		{
			if ( ! empty($p) and isset($p['validation']))
			{
				for ($i = 0; $i < $form_count; $i++)
				{
					$field = $p_name.'.'.$i;
					$form->add($field, $p['label']);
					
					if (isset($p['form']['options']))
					{
						$form->field($field)->set_options($p['form']['options']);
					}
					
					if ( ! empty($p['validation']))
					{
						foreach ($p['validation'] as $rule => $args)
						{
							if (is_int($rule) and is_string($args))
							{
								$args = array($args);
							}
							else
							{
								array_unshift($args, $rule);
							}
            
							call_fuel_func_array(array($form->field($field), 'add_rule'), $args);
						}
					}
				}
			}
		}

		if (Security::check_token() and $form->validation()->run())
		{
			Session::set('estimate.print', $form->validated());
			Response::redirect(Uri::create('payment'));
		}
	    
		$form->populate($saved, true);
		
		$data['fields'] = $form->field();
		$data['count']  = $form_count;
		
		return Response::forge(View::forge('estimate/print', $data), 200, $this->headers);
	}

	public function action_payment()
	{
		$saved = Session::get('estimate.payment', array());
		
		$form = Fieldset::forge('payment')->add_model('Model_Estimate');

		if (Security::check_token() and $form->validation()->run())
		{
			Session::set('estimate.payment', $form->validated());
			Response::redirect(Uri::create('confirm'));
		}

		$form->populate($saved, true);
		
		$data = $form->field();
		$data['back'] = (Session::get('estimate.print', false) ? 'print' : null);
		
		return Response::forge(View::forge('estimate/payment', $data));
	}

	public function action_confirm()
	{
		$saved['index']   = Session::get('estimate.index',   false);
		$saved['print']   = Session::get('estimate.print',   false);
		$saved['payment'] = Session::get('estimate.payment', false);

		if ($saved['index'] === false or $saved['payment'] === false)
		{
			Response::redirect(Uri::create(''));
		}
		
		$models = array('Model_Estimate', 'Model_Estimate_Deliv', 'Model_Estimate_Print');
		$options = array();

		foreach ($models as $model)
		{
			foreach ($model::properties() as $p => $setting)
			{
				if (isset($setting['form']['options']))
				{
					$options[$p] = $setting['form']['options'];
				}
			}
		}
		
		foreach ($saved as $key => $_saved)
		{
			if ($_saved !== false)
			{
				foreach ($_saved as $field => $value)
				{
					if (array_key_exists($field, $options))
					{
						$field_text = str_replace('_id', '', $field);
						if (is_array($value))
						{
							foreach ($value as $key2 => $value2)
							{
								$saved[$key][$field_text][$key2] = $options[$field][$value2];
							}
						}
						else
						{
							$saved[$key][$field_text] = $options[$field][$value];
						}
					}
				}
			}
		}

		if (Security::check_token() and Input::method() == 'POST')
		{
			// DB登録処理
			$estimate = Model_Estimate::forge($saved['payment']);
			$estimate->deliv = Model_Estimate_Deliv::forge($saved['index']);
			
			if ($saved['print'] !== false)
			{
				$print_count = count(current($saved['print']));
				for ($i = 0; $i < $print_count; $i++)
				{
					$estimate->prints[$i] = Model_Estimate_Print::forge();
					foreach ($saved['print'] as $field => $values)
					{
						$estimate->prints[$i]->set($field, $values[$i]);
					}
				}
			}
			
			$estimate->save();
			
			Session::delete('estimate');
			Session::set_flash('estimate.id', $estimate->id);
			
			Response::redirect(Uri::create('complete'));
		}
		
		$data = $saved;
		
		return Response::forge(View::forge('estimate/confirm', $data), 200, $this->headers);
	}

	public function action_complete()
	{
		$id = Session::get_flash('estimate.id', false);
		
		if ($id === false)
		{
			Response::redirect(Uri::create(''));
		}
		
		// データ取得
		$estimate = Model_Estimate::find($id, array('related' => array('details')));
		
		$data = array(
			'id'       => $id,
			'subtotal' => $estimate->subtotal,
			'tax'      => $estimate->tax,
			'total'    => $estimate->total,
		);
		
		foreach ($estimate->details as $detail)
		{
			$data['rows'][] = array(
				'description1' => $detail->description1,
				'description2' => $detail->description2,
				'quantity'     => $detail->quantity,
				'unit_price'   => $detail->unit_price,
				'amount'       => $detail->amount,
			);
		}
		
		Session::keep_flash('estimate');
		
		return Response::forge(View::forge('estimate/complete', $data), 200, $this->headers);
	}
	
	public function action_output()
	{
		require_once(APPPATH.'vendor'.DS.'tcpdf/tcpdf.php');
		require_once(APPPATH.'vendor'.DS.'tcpdf/fpdi.php');

		$id = Session::get_flash('estimate.id', false);
		
		if ($id === false)
		{
			Response::redirect(Uri::create(''));
		}
		
		Session::keep_flash('estimate');
		
		$estimate = Model_Estimate::find($id, array('related' => array('details')));

		$pdf = new \FPDI();

		$pdf->SetMargins(16, 15, 15);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->AddPage();

		$pdf->setSourceFile(APPPATH.'vendor'.DS.'tcpdf/tpl/estimate.pdf');
		$tplIdx = $pdf->importPage(1);
		$pdf->useTemplate($tplIdx, null, null, null, null, true);

		$pdf->SetFont('migmix2p');
		
		$pdf->SetFontSize(10);
		$pdf->SetY(10);
		$pdf->Cell(0, 0, date('Y/m/d H:i 発行', $estimate->created_at), 0, 0, 'R');
		
		$pdf->SetFontSize(10);

		$pdf->SetY(45);
		$pdf->Write(0, $estimate->company);
		
		if ($estimate->section != '')
		{
			$pdf->SetY(51);
			$pdf->Write(0, $estimate->section);
			$pdf->SetY(57);
			$pdf->Write(0, $estimate->name.'　様');
		}
		else
		{
			$pdf->SetY(51);
			$pdf->Write(0, $estimate->name.'　様');
		}
		
		$pdf->SetY(72);
		$pdf->SetFontSize(10);
		$pdf->Write(0, '下記の通りお見積申し上げます。');
		
		$pdf->SetFontSize(14);
		$pdf->SetLineWidth(0.5);
		$pdf->SetCellPadding(2);
		$pdf->setFillColor(250);
		
		$pdf->SetY(80);
		$pdf->Cell(40, 12, 'お見積金額',     1, 0, 'C', 1);
		$pdf->Cell(50, 12, '￥'.number_format($estimate->total).'-', 1, 0, 'R', 0);
		
		$pdf->SetFontSize(10);
		$pdf->SetLineWidth(0.1);
		$pdf->SetCellPadding(2);
		$pdf->setFillColor(220);
		
		$pdf->SetY(97);
		$pdf->Cell(100, 10, '',     1, 0, 'C', true);
		$pdf->Cell( 28, 10, '数量', 1, 0, 'C', true);
		$pdf->Cell( 28, 10, '単価', 1, 0, 'C', true);
		$pdf->Cell( 28, 10, '小計', 1, 1, 'C', true);
		
		$pdf->setFillColor(250);
		
		foreach ($estimate->details as $detail)
		{
			$y1 = $pdf->GetY();
			
			$pdf->SetFontSize(10);
			$pdf->Cell(100, 15, '',                               1, 0, 'L', 1);
			$pdf->Cell( 28, 15, number_format($detail->quantity), 1, 0, 'R', 0);
			$pdf->Cell( 28, 15, $detail->unit_price,              1, 0, 'R', 0);
			$pdf->Cell( 28, 15, number_format($detail->amount),   1, 1, 'R', 0);
			
			$y2 = $pdf->GetY();

			$pdf->SetY($y1);
			$pdf->Write(8, $detail->description1);
			
			$pdf->SetY($y1 + 5);
			$pdf->SetFontSize(8);
			$pdf->MultiCell(100, 1, $detail->description2);
			
			$pdf->SetY($y2);
		}

		$pdf->SetFontSize(10);
		$pdf->setFillColor(220);
		$pdf->SetY($pdf->getY() + 4);

		$pdf->Cell(156, 10, '計',                               1, 0, 'L', 1);
		$pdf->Cell( 28, 10, number_format($estimate->subtotal), 1, 1, 'R', 0);
		$pdf->Cell(156, 10, '消費税',                           1, 0, 'L', 1);
		$pdf->Cell( 28, 10, number_format($estimate->tax),      1, 1, 'R', 0);
		$pdf->Cell(156, 10, '合計',                             1, 0, 'L', 1);
		$pdf->Cell( 28, 10, number_format($estimate->total),    1, 1, 'R', 0);
		
		$response = new Response();
		$response->set_header('Content-Type', 'application/pdf');
		$response->set_header('Content-Disposition', 'attachment; filename="dm110_mitsumori.pdf"');
		$response->body($pdf->Output(null, 'S'));

		return $response;
	}
	
	public function action_download_csv()
	{
		if ( ! $this->_basic_auth())
		{
			$response = new Response();
			$response->set_header('WWW-Authenticate', 'Basic realm="'. \Config::get('rest.realm') . '"');
			$response->set_status(401);
			
			return $response;
		}
		
		$estimates = Model_Estimate::find('all');
		
		$csv = mb_convert_encoding(current($estimates)->csv_header(), 'sjis-win').CRLF;
		
		foreach ($estimates as $estimate)
		{
			$csv .= mb_convert_encoding($estimate->to_csv(), 'sjis-win').CRLF;
		}
		
		$response = new Response();
		$response->set_header('Content-Type', 'application/octet-stream');
		$response->set_header('Content-Disposition', 'attachment; filename="estimate_all.csv"');
		$response->body($csv);

		return $response;
	}
	
	public function _basic_auth()
	{
		Config::load('rest', true);
		
		$username = null;
		$password = null;

		if (Input::server('PHP_AUTH_USER'))
		{
			$username = Input::server('PHP_AUTH_USER');
			$password = Input::server('PHP_AUTH_PW');
		}
		
		if (empty($username))
		{
			return false;
		}

		$valid_logins = Config::get('rest.valid_logins');

		if ( ! array_key_exists($username, $valid_logins))
		{
			return false;
		}

		// If actually null (not empty string) then do not check it
		if ($password !== null and $valid_logins[$username] != $password)
		{
			return false;
		}

		return true;
	}

	public function action_404()
	{
		Response::redirect('./');
	}
}
