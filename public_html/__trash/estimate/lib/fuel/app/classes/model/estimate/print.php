<?php

class Model_Estimate_Print extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'estimate_id' => array(
			'form' => array(
				'type' => false,
			),
		),
		'number' => array(
			'form' => array(
				'type' => false,
			),
		),
		'size_id' => array(
			'label' => 'サイズ',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'radio',
				'options' => array(
					'A4' => 'A4（210mm×297mm）',
					'A3' => 'A3（297mm×420mm）',
					'B5' => 'B5（182mm×257mm）',
					'B4' => 'B4（257mm×364mm）',
				),
			),
		),
		'size' => array(
			'form' => array(
				'type' => false,
			),
		),
		'quantity' => array(
			'label' => '枚数',
			'validation' => array('trim', 'required', 'numeric_min' => array(100), 'numeric_max' => array(50000)),
		),
		'color_id' => array(
			'label' => '印刷色',
			'validation' => array('required', 'match_collection'),
			'form' => array(
				'type' => 'radio',
				'options' => array(
					'101' => '黒１色／片面印刷',
					'102' => '黒１色／両面印刷',
					'201' => 'カラー／片面印刷',
					'202' => 'カラー／両面印刷',
				),
			),
		),
		'color' => array(
			'form' => array(
				'type' => false,
			),
		),
		'paper_id' => array(
			'label' => '印刷用紙',
			'validation' => array('required', 'match_collection', 'check_color'),
			'form' => array(
				'type' => 'radio',
				'options' => array(
					'101' => '白色',
					'102' => 'クリーム色',
					'103' => 'レモン色',
					'104' => 'ピンク色',
					'201' => 'コート紙90kg（一般的）',
					'202' => 'コート紙110kg（少し厚め）',
					'203' => 'マットコート紙90kg（紙に文字が書ける）',
					'204' => 'マットコート紙110kg（紙に文字が書ける）',
				),
			),
		),
		'paper' => array(
			'form' => array(
				'type' => false,
			),
		),
	);


	protected static $_table_name = 'estimate_prints';
	
	protected static $_belongs_to = array(
		'estimate' => array(
			'key_from'       => 'estimate_id',
			'model_to'       => 'Model_Estimate',
			'key_to'         => 'id',
			'cascade_save'   => false,
			'cascade_delete' => false,
		)
	);
	
	public static function _validation_check_color($val)
	{
		$color_name = 'color_id';
		
		if (preg_match('/^.*\.(\d{1,})$/', Validation::active_field()->name, $matches))
		{
			$color_name .= '.'.$matches[1];
		}
		
		$color = Validation::active()->input($color_name);
		
		if (substr($color, 0, 1) != substr($val, 0, 1))
		{
			Validation::active()->set_message('check_color', '印刷色と印刷用紙の組み合わせが正しくありません');
			return false;
		}
		
		return true;
	}
	
	public function get_detail()
	{
		if ($this->paper_id == '201' or $this->paper_id == '203')
		{
			$paper_weight = 90;
		}
		else if ($this->paper_id == '202' or $this->paper_id == '204')
		{
			$paper_weight = 110;
		}
		else
		{
			$paper_weight = null;
		}
		
		$print_price = Model_Print_Price::query()
			->select('price')
			->where('color', substr($this->color_id, 0, 1) === '1' ? 0 : 1)
			->where('size', $this->size_id)
			->where('duplex', substr($this->color_id, 2, 1) === '1' ? 0 : 1)
			->where('paper_weight', $paper_weight)
			->where('number', '<=', $this->quantity)
			->order_by('number', 'desc')
			->limit(1)
			->get_one();
		
		$unit_price = $print_price->price;
		
		// 1色で用紙が白以外の場合は追加料金
		$add = 0;
		if (in_array($this->paper_id, array('102', '103', '104')))
		{
			if ($this->size_id == 'B5' or $this->size_id == 'A4')
			{
				$add = 1;
			}
			else if ($this->size_id == 'B4')
			{
				$add = 2;
			}
			else if ($this->size_id == 'A3')
			{
				$add = 3;
			}
		}
		$unit_price = bcadd($unit_price, $add, 2);
		
		$detail = Model_Estimate_Detail::forge(array(
			'number'        => $this->number,
			'description1'  => '印刷'.($this->number - 1),
			'description2'  => $this->size.'、'.$this->color.'、'.$this->paper,
			'quantity'      => $this->quantity,
			'unit_price'    => $unit_price,
			'amount'        => round(bcmul($unit_price, $this->quantity, 2), 0),
		));
		
		return $detail;
	}
}
