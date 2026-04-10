<?php

class Form
{
	protected $config = array();
	protected $data = array();
	
	public $validation;
	
	public function __construct($data = array())
	{
		$this->config = Config::load('form');
		
		if (input_method() == 'post')
		{
			$this->set($_POST);
			
			if (count($_FILES) > 0)
			{
				foreach ($this->config as $config)
				{
					$field = $config['field'];
					if (array_key_exists($field, $_FILES))
					{
						$_file = $_FILES[$field];
						if ($_file['error'] == UPLOAD_ERR_OK) {
							if (array_key_exists($field, $data)) {
								@unlink($data[$field]['tmp_name']);
							}
							
							$p = pathinfo($_file['name']);
							$filename = realpath(dirname(__FILE__).'/../tmp/').'/'.str_replace('.', '', microtime(true)).'_'.md5_file($_file['tmp_name']).'.'.$p['extension'];
							move_uploaded_file($_file['tmp_name'], $filename);
							$this->set($field, array(
								'name'     => $_file['name'],
								'tmp_name' => $filename
							));
						}
						else if ($_file['error'] == UPLOAD_ERR_INI_SIZE or $_file['error'] == UPLOAD_ERR_FORM_SIZE) {
							$this->set($field, array(
								'error' => $_file['error']
							));
						}
						else if ($_file['error'] == UPLOAD_ERR_NO_FILE) {
							if (array_key_exists($field, $data)) {
								$this->set($field, $data[$field]);
							}
						}
					}
				}
			}
		}
		else
		{
			$this->set($data);
		}
		
		$this->validation = new Validation($this->config, $this->data);
	}
	
	public function set($field, $value = null)
	{
		$data = array();
		
		if (is_array($field))
		{
			$data = $field;
		}
		else
		{
			$data[$field] = $value;
		}
		
		foreach ($this->config as $field)
		{
			$field_name = $field['field'];
			if (array_key_exists($field_name, $data))
			{
				$this->data[$field_name] = $data[$field_name];
			}
		}
	}
	
	public function get($field = null)
	{
		return $this->validation->get($field);
	}
	
	public function posted()
	{
		return $this->validation->get();
	}
	
	public function is_error($field = null)
	{
		$errors = $this->validation->errors($field);
		
		return count($errors) > 0;
	}
	
	public function error($field, $open = '', $close = '')
	{
		$errors = $this->validation->errors($field);
		
		if (count($errors) > 0)
		{
			return $open.current($errors).$close;
		}
		
		return '';
	}
	
	public function errors($open = '<ul>', $close = '</ul>', $list_open = '<li>', $list_close = '</li>')
	{
		$errors = $this->validation->errors($field);
		
		if (count($errors) > 0)
		{
			$output = $open."\n";
			
			foreach ($errors as $field_errors)
			{
				foreach ($field_errors as $error)
				{
					$output .= $list_open.$error.$list_close."\n";
				}
			}
			
			$output .= $close."\n";
			return $output;
		}
		
		return '';
	}
}

