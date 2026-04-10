<?php

class Form
{
	protected $config = array();
	protected $fields = array();
	protected $data = array();
	
	public $validation;
	
	public function __construct($data = array())
	{
		$this->config = Config::load('form');
		
		foreach($this->config as $config)
		{
			$this->fields[] = $config['field'];
		}
		
		if (input_method() == 'post')
		{
			$this->set($_POST);
			
			if (count($_FILES) > 0)
			{
				foreach ($this->config as $config)
				{
					$field = $config['field'];
					if ($this->is_upload_field($field))
					{
						if (isset($_POST['_delete']) and isset($field, $_POST['_delete']) and isset($data[$field]))
						{
							@unlink($data[$field]['tmp_name']);
							unset($data[$field]);
						}
						
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
	
	public function get($field = null, $glue = null)
	{
		$value = $this->validation->get($field);
		
		if ($field != null and $glue != null and is_array($value))
		{
			return implode($glue, $value);
		}
		
		return $value;
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
	
	public function checked($field, $value)
	{
		$values = $this->validation->get($field);
		
		if (is_array($values))
		{
			if (in_array($value, $values))
			{
				return ' checked="checked"';
			}
		}
		else
		{
			if ($values == $value)
			{
				return ' checked="checked"';
			}
		}
	}
	
	public function selected($field, $value)
	{
		$values = $this->validation->get($field);
		
		if (is_array($values))
		{
			if (in_array($value, $values))
			{
				return ' selected="selected"';
			}
		}
		else
		{
			if ($values == $value)
			{
				return ' selected="selected"';
			}
		}
	}
	
	public function get_options($field)
	{
		$options = array();
		$config = $this->get_config($field);
		
		if ($config && isset($config['options']))
		{
			$options = $config['options'];
		}
		
		return $options;
	}
	
	public function get_delete_file_button($field, $label = 'ファイルを削除する')
	{
		$button = '';
		
		if ($this->is_upload_field($field))
		{
			$button .= '<label for="_delete_' . $field . '">';
			$button .= '<input type="checkbox" id="_delete_' . $field . '" name="_delete[]" value="' . $field . '"> ';
			$button .= $label . '</label>';
		}
		
		return $button;
	}
	
	private function is_upload_field($field)
	{
		$config = $this->get_config($field);
		
		if ( ! $config)
		{
			return false;
		}
		
		if (isset($config['rules']))
		{
			$rules = explode('|', $config['rules']);
			
			foreach ($rules as $rule)
			{
				if (strpos($rule, 'upload[') === 0)
				{
					return true;
				}
			}
		}
		
		return false;
	}
	
	private function get_config($field)
	{
		$field_key = array_search($field, $this->fields, true);
		
		if ($field_key === false)
		{
			return false;
		}
		
		return $this->config[$field_key];
	}
}

