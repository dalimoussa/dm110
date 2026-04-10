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
			Session::set('data', $form->posted());
			redirect(CONFIRM_URL);
		}
		
		Session::set('data', $form->posted());
		return $form;
	}
	
	public function action_confirm()
	{
		$data = Session::get('data', array());
		
		$form = new Form();
		
		if (empty($data) or ! $form->validation->run($data))
		{
			redirect_back(BASE_URL);
		}
		
		if (input_method() == 'post')
		{
			try
			{
				$this->send_mail($data);
			}
			catch (Exception $e)
			{
				die($e->getMessage());
			}
			
			Session::destroy();
			redirect(COMPLETE_URL);
		}
		
		return $form;
	}
	
	public function send_mail($data)
	{
		$email_config = Config::load('email');
		
		$params = Config::load('smtp');
		$backend = empty($params) ? 'mail' : 'smtp';
		
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
		
		$header_date = date('D, j M Y H:i:s O');
		
		foreach ($email_config as $_config)
		{
			$email_field = $_config['field'] ? : 'email';
			$to = (! empty($_config['to'])) ? $_config['to'] : $data[$email_field];
			
			$recipients = array($to);
			$headers = array('To' => $to);
			
			if (! empty($_config['cc']))
			{
				$cc = explode(',', str_replace(' ', '', $_config['cc']));
				if (count($cc) > 0)
				{
					$headers['Cc'] = implode(', ', $cc);
				}
			}
			
			if (! empty($_config['bcc']))
			{
				$bcc = explode(',', str_replace(' ', '', $_config['bcc']));
				if (count($bcc) > 0)
				{
					$headers['Bcc'] = implode(', ', $bcc);
				}
			}
			
			if (empty($_config['from']))
			{
				$headers['From'] = $data[$email_field];
			}
			else
			{
				$headers['From'] = mb_encode_mimeheader($_config['name']) . ' <' . $_config['from'] . '>';
				if ($backend == 'smtp')
				{
					$headers['Return-Path'] = $_config['from'];
				}
				else
				{
					$params = '-f' . $_config['from'];
				}
			}
			
			$subject = str_replace('%%__serial__%%', $data['__serial'], $_config['subject']);
			$headers['Subject'] = mb_encode_mimeheader($subject);
			
			$headers['Date'] = $header_date;
			
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
			
			$mime = new Mail_Mime("\n");
			
			$body = $clean_room($_config['template'], $data);
			$body = mb_convert_encoding($body, 'ISO-2022-JP-MS', 'auto');
			
			$mime->setTxtBody($body);
			
			$hasAttachment = false;
			if (isset($_config['attachment']) and $_config['attachment'] == true)
			{
				foreach ($attachments as $attachment)
				{
					$mime->addAttachment($attachment['tmp_name'], 'application/octet-stream', mb_convert_encoding($attachment['name'], 'ISO-2022-JP-MS', 'auto'), true, 'base64', 'attachment', '', '', '', 'base64', 'base64', '', 'ISO-2022-JP');
					$hasAttachment = true;
				}
			}
			
			if ($hasAttachment === false)
			{
				$headers['Content-Transfer-Encoding'] = '7bit';
				$headers['Content-Type'] = 'text/plain; charset=ISO-2022-JP';
			}
			
			$body = $mime->get(array(
				'head_charset' => 'ISO-2022-JP',
				'text_charset' => 'ISO-2022-JP',
				'text_encoding' => '7bit'
			));
			
			$headers = $mime->headers($headers);
			
			$mail = Mail::factory($backend, $params);
			$res = $mail->send($recipients, $headers, $body);
			
			if (PEAR::isError($res))
			{
				throw new Exception('メールの送信に失敗しました。管理者にお問い合わせください。');
			}
		}
		
		foreach ($attachments as $attachment)
		{
			@unlink($attachment['tmp_name']);
		}
	}
}
