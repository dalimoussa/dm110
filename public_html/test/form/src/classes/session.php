<?php

class Session
{
	protected static $instance;
	
	protected $name;
	protected $data;
	
	public static function forge($name = 'default')
	{
		if (static::$instance === null) {
			static::$instance = new static($name);
		}
		
		return static::$instance;
	}
	
	public function __construct($name = '')
	{
		@session_start();
		$this->name = (string) $name;
		
		if (! array_key_exists($name, $_SESSION) or ! is_array($_SESSION[$name]))
		{
			$_SESSION[$name] = array();
		}
		
		$this->data =& $_SESSION[$name];
	}
	
	public static function set($name, $value = null)
	{
		static::$instance->data[$name] = $value;
	}

	public static function get($name = null, $default = null)
	{
		return isset(static::$instance->data[$name]) ? static::$instance->data[$name] : $default;
	}
	
	public static function destroy()
	{
		static::$instance->data = array();
	}

}
