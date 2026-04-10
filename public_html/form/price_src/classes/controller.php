<?php

class Controller
{
	public function __construct() {}
	
	public function action_index()
	{
		$data = Session::get('data', array());
		
		$form = new Form($data);
		
		if (input_method() == 'post' and $form->validation->run())
		{
			$data = $form->posted();
			
			try
			{
				$this->send_mail($data);
			}
			catch (Exception $e)
			{
				die($e->getMessage());
			}
			
			try
			{
				$this->save_to_spreadsheet($data);
			}
			catch (Exception $e)
			{
			//	die($e->getMessage());
			}
			
			Session::set('data', $data);

			redirect(BASE_URL.'thanks.html');
		}
		
		Session::set('data', $form->posted());
		return $form;
	}
	
	public function action_thanks()
	{
		$data = Session::get('data', array());
		
		if (empty($data))
		{
			redirect(BASE_URL);
		}
		
		Session::destroy();
	}
	
	private function send_mail($data)
	{
		$email = Email::forge();
		$email_config = Config::load('email');
		
		$attachments = array();
		foreach ($data as $value)
		{
			if (is_array($value) and array_key_exists('name', $value) and array_key_exists('tmp_name', $value))
			{
				if (file_exists($value['tmp_name']))
				{
					$attachments[] = $value;
				}
			}
		}
		
		$serial = new Serial;
		$data['__serial'] = $serial->get();
		
		foreach ($email_config as $_config)
		{
			$to = (! empty($_config['to'])) ? $_config['to'] : $data['email'];
			$email->to($to);
			
			if (! empty($_config['cc']))
			{
				$email->cc($_config['cc']);
			}
			
			if (! empty($_config['bcc']))
			{
				$email->bcc($_config['bcc']);
			}
			
			if (empty($_config['from']))
			{
				$email->return_path($_config['to']);
				$email->from($data['email']);
			}
			else
			{
				$email->return_path($_config['from']);
				$email->from($_config['from'], $_config['name']);
			}
			
			$email->subject(str_replace('%%__serial__%%', $data['__serial'], $_config['subject']));
			
			if (isset($_config['attachment']) and $_config['attachment'] == true)
			{
				foreach ($attachments as $attachment)
				{
					$email->attach($attachment['name'], $attachment['tmp_name']);
				}
			}
			
			$clean_room = function($__file_name, array $__data)
			{
				extract($__data, EXTR_REFS);

				ob_start();

				$file_name = CONFPATH.$__file_name;
				
				try
				{
					include $file_name;
				}
				catch (Exception $e)
				{
					ob_end_clean();
					throw $e;
				}

				return ob_get_clean();
			};
			
			$body = $clean_room($_config['template'], $data);
			$email->body($body);
			
			$email->send();
			
			$email->clear_addresses();
			$email->clear_attachments();
		}
		
		foreach ($attachments as $attachment)
		{
			@unlink($attachment['tmp_name']);
		}
	}
	
	private function save_to_spreadsheet($data)
	{
		$apiconfig = CONFPATH.'googleapi.php';
		if (!is_file($apiconfig))
		{
			return;
		}
		
		$kinds = array();
		foreach ($data as $key => $val)
		{
			if (strpos($key, 'kinds') !== false)
			{
				if (!empty($val))
				{
					$kinds[] = $val;
				}
				if ($key != 'kinds1') {
					unset($data[$key]);
				}
			}
		}
		$data['kinds1'] = implode('、', $kinds);
		
		$values = array_values($data);
		array_unshift($values, '', '', '', '');
		array_pop($values);
		
		require $apiconfig;

		$client = new Google_Client();
		$client->useApplicationDefaultCredentials();
		$client->addScope(Google_Service_Sheets::SPREADSHEETS);
		$client->setApplicationName(APPLICATION_NAME);

		$service = new Google_Service_Sheets($client);

		$value = new Google_Service_Sheets_ValueRange();
		$value->setValues([ 'values' => $values ]);
		$response = $service->spreadsheets_values->append(SPREADSHEET_ID, 'シート1', $value, [ 'valueInputOption' => 'USER_ENTERED' ] );
	}
}
