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
						$errors[] = $this->get_error_message($rule, $label);
					}
				}
				else if (function_exists($rule))
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
	
	public static function tel($str)
	{
		$str = trim(mb_convert_kana($str, 'KVa', 'utf-8'));
		if (empty($str)) {
			return true;
		}
		return (! preg_match("/^([0-9-])+$/i", trim($str))) ? false : true;
	}

	public static function email($str)
	{
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
			else if ($option == 'tif' or $option == 'tiff')
			{
				if ($type == IMAGETYPE_TIFF_II or $type == IMAGETYPE_TIFF_MM)
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
		
		return true;
	}
	
	private function get_error_message($rule, $label)
	{
		$message = $this->error_messages[$rule];
		
		return str_replace("%s", $label, $message);
	}

	public function recaptcha($recaptchaToken)
	{
		$secretKey =  '6Ld52WEpAAAAAD94uc0IoMBf08GKbWd5N7e2GixV';
		$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
		$responseData = json_decode($verifyResponse);

		if ($responseData->success) {
			return true;
		} else {
			return false;
		}
	}
}
