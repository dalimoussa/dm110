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
			redirect(BASE_URL.'confirm.php');
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
			
			redirect(BASE_URL.'thanks.html');
		}
		
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
}
