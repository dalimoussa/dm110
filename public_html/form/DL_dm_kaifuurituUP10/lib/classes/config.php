<?php

class Config
{
	protected static $instance;
	
	protected $data;
	
	public static function forge()
	{
		if (static::$instance === null) {
			static::$instance = new static();
		}
		
		return static::$instance;
	}
	
	public function __construct() {}
	
	public static function load($file)
	{
		$path = CONFPATH.$file.'.php';
		
		static::$instance->data[$file] = array();
		
		if (is_file($path))
		{
			static::$instance->data[$file] = include $path;
		}
		
		return static::$instance->data[$file];
	}
	
}
