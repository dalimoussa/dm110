<?php

class Validation
{
	protected $config;
	protected $data;
	
	protected $errors;
	
	public function __construct($config, $data = array())
	{
		$this->config = $config;
		$this->data = $data;
		
		$this->error_messages = Config::load('validation');
	}
	
	public function run($data = array())
	{
		if (func_num_args() === 0)
		{
			$data = $this->data;
		}
		
		$this->errors = array();
		
		foreach ($this->config as $field)
		{
			$label = $field['label'];
			$field_name = $field['field'];
			$value = array_key_exists($field_name, $data) ? $data[$field_name] : null;
			$rules = explode('|', $field['rules']);
			
			$errors = array();
			$result = null;
			
			foreach ($rules as $rule)
			{
				$option = null;
				
				if (preg_match('/^(.*)\[(.+)\]$/', $rule, $matches))
				{
					$rule = $matches[1];
					$option = $matches[2];
				}
				
				if (method_exists($this, $rule))
				{
					if ($option !== null)
					{
						$result = $this->{$rule}($value, $option);
					}
					else
					{
						$result = $this->{$rule}($value);
					}
					
					if ($result === false)
					{
						$errors[] = $this->get_error_message($rule, $label, $option);
						break;
					}
				}
				else if (function_exists($rule) and ! is_array($value))
				{
					if ($option !== null)
					{
						$value = $rule($value, $option);
					}
					else
					{
						$value = $rule($value);
					}
				}
			}
			
			if ($result !== false && isset($field['options']) && is_array($field['options']))
			{
				
				if ( ! $this->check_option($value, $field['options']))
				{
					$errors[] = $this->get_error_message('invalid', $label);
				}
			}
			
			$this->data[$field_name] = $value;
			
			count($errors) > 0 and $this->errors[$field_name] = $errors;
		}
		
		return ! (count($this->errors) > 0);
	}
	
	public function get($field = null)
	{
		if ($field != null)
		{
			return isset($this->data[$field]) ? $this->data[$field] : '';
		}
		
		return $this->data;
	}
	
	public function errors($field = null)
	{
		$errors = array();
		
		if (count($this->errors) == 0)
		{
			$errors = array();
		}
		else if ($field == null)
		{
			$errors = $this->errors;
		}
		else if (array_key_exists($field, $this->errors))
		{
			$errors = $this->errors[$field];
		}
		
		return $errors;
	}
	
	public static function required($val)
	{
		if (is_array($val))
		{
			return count($val) > 0;
		}
		else
		{
			$val = trim($val);
			return !(empty($val) and strlen($val) == 0);
		}
	}
	
	public function required_if($val, $options)
	{
		list($field, $options) = explode(',', $options, 2);
		
		if (empty($options))
		{
			return true;
		}
		
		$options = explode(',', $options);
		
		if (in_array($this->data[$field], $options))
		{
			return $this->required($val);
		}
		
		return true;
	}
	
	public function required_with($val, $options)
	{
		$fields = explode(',', $options);
		
		foreach ($fields as $field)
		{
			if ($this->required(@$this->data[$field]))
			{
				return $this->required($val);
			}
		}
		return true;
	}
	
	public function required_with_all($val, $options)
	{
		$fields = explode(',', $options);
		
		foreach ($fields as $field)
		{
			if (!$this->required(@$this->data[$field]))
			{
				return true;
			}
		}
		return $this->required($val);
	}
	
	public function required_without($val, $options)
	{
		$fields = explode(',', $options);
		
		foreach ($fields as $field)
		{
			if (!$this->required(@$this->data[$field]))
			{
				return $this->required($val);
			}
		}
		return true;
	}
	
	public function required_without_all($val, $options)
	{
		$fields = explode(',', $options);
		
		foreach ($fields as $field)
		{
			if ($this->required(@$this->data[$field]))
			{
				return true;
			}
		}
		return $this->required($val);
	}
	
	public static function tel($str)
	{
		$str = trim(mb_convert_kana($str, 'KVa', 'utf-8'));
		if (empty($str)) {
			return true;
		}
		return (! preg_match("/\A([0-9-])+\z/i", trim($str))) ? false : true;
	}

	public static function num($str)
	{
		if (empty($str))
		{
			return true;
		}
		return (preg_match("/\A-?\d+?\z/", $str) === 1) ? true : false;
	}

	public static function num_min($str, $min)
	{
		if (empty($str))
		{
			return true;
		}
		else if (self::num($str) == false)
		{
			return false;
		}
		
		return ($str >= $min);
	}

	public static function num_max($str, $max)
	{
		if (empty($str))
		{
			return true;
		}
		else if (self::num($str) == false)
		{
			return false;
		}
		
		return ($str <= $max);
	}

	public static function email($str)
	{
		if (empty($str))
		{
			return true;
		}
		
		$wsp           = '[\x20\x09]';
		$vchar         = '[\x21-\x7e]';
		$quoted_pair   = "\\\\(?:$vchar|$wsp)";
		$qtext         = '[\x21\x23-\x5b\x5d-\x7e]';
		$qcontent      = "(?:$qtext|$quoted_pair)";
		$quoted_string = "\"$qcontent*\"";
		$atext         = '[a-zA-Z0-9!#$%&\'*+\-\/\=?^_`{|}~]';
		$dot_atom_text = "$atext+(?:[.]$atext+)*";
		$dot_atom      = $dot_atom_text;
		$local_part    = "(?:$dot_atom|$quoted_string)";
		$domain        = $dot_atom;
		$addr_spec     = "${local_part}[@]$domain";

		$dot_atom_loose   = "$atext+(?:[.]|$atext)*";
		$local_part_loose = "(?:$dot_atom_loose|$quoted_string)";
		$addr_spec_loose  = "${local_part_loose}[@]$domain";

		$regexp = "/\A${addr_spec_loose}\z/";

		return preg_match($regexp, $str) === 1;
	}
	
	public function matches($str, $field)
	{
		if (empty($str))
		{
			return true;
		}
		
		return $str == $this->data[$field];
	}
	
	public function max_length($str, $length)
	{
		$val = str_replace(array("\r\n","\n","\r"), '',  $str);
		
		if (mb_strlen($val) > $length)
		{
			return false;
		}
		
		return true;
	}
	
	public static function upload(&$uploaded, $options)
	{
		if ( ! file_exists($uploaded['tmp_name']) or array_key_exists('error', $uploaded) or ! function_exists('exif_imagetype'))
		{
			return true;
		}
		
		$type = exif_imagetype($uploaded['tmp_name']);
		
		$options = explode(',', $options);
		
		foreach ($options as $option)
		{
			$option = strtolower($option);
			
			if ($option == 'jpg' or $option == 'jpeg')
			{
				if ($type == IMAGETYPE_JPEG)
				{
					return true;
				}
			}
			else if ($option == 'gif')
			{
				if ($type == IMAGETYPE_GIF)
				{
					return true;
				}
			}
			else if ($option == 'png')
			{
				if ($type == IMAGETYPE_PNG)
				{
					return true;
				}
			}
			else if ($option == 'tif' or $option == 'tiff')
			{
				if ($type == IMAGETYPE_TIFF_II or $type == IMAGETYPE_TIFF_MM)
				{
					return true;
				}
			}
			else if ($option == 'pdf' and $type === false)
			{
				$handle = fopen($uploaded['tmp_name'], 'r');
				$contents = fread($handle, 4);
				fclose($handle);
				
				if ($contents == '%PDF')
				{
					return true;
				}
			}
		}
		
		@unlink($uploaded['tmp_name']);
		$uploaded = array();
		return false;
	}
	
	public static function upload_max_size(&$uploaded, $size)
	{
		if (is_array($uploaded))
		{
			if (array_key_exists('error', $uploaded))
			{
				return false;
			}
			
			if (filesize($uploaded['tmp_name']) > $size)
			{
				@unlink($uploaded['tmp_name']);
				$uploaded = array();
				return false;
			}
		}
		
		return true;
	}
	
	public static function check_option($val, $options)
	{
		$values = (is_array($val)) ? $val : array($val);
		
		foreach ($values as $_val)
		{
			if ($_val != '' &&  ! in_array($_val, $options, true))
			{
				return false;
			}
		}
		
		return true;
	}
	
	private function get_error_message($rule, $label, $option)
	{
		$message = $this->error_messages[$rule];
		
		return sprintf($message, $label, $option);
	}

}
