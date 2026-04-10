<?php

class Serial
{
	protected $config = array();
	protected $number = null;
	
	public $validation;
	
	public function __construct($data = array())
	{
		$this->config = Config::load('serial');
	}
	
	public function increment()
	{
		$filepath = DOCROOT . $this->config['path'];
		
		$fp = fopen($filepath, 'c+');
		
		if ($fp)
		{
			if (flock($fp, LOCK_EX))
			{
				$number = fgets($fp);
				
				if ( ! preg_match('/^[1-9][0-9]*$/', $number))
				{
					$number = 0;
				}
				
				$this->number = $number + 1;
				
				ftruncate($fp, 0);
				rewind($fp);
				fwrite($fp, $this->number);
				fflush($fp);
				
				flock($fp, LOCK_UN);
			}
			else
			{
				throw new Exception('Failed to lock the file.');
			}
		}
		
		fclose($fp);
	}
	
	public function get()
	{
		if ( ! array_key_exists('path', $this->config))
		{
			return null;
		}
		
		$this->increment();
		
		if (array_key_exists('func', $this->config))
		{
			return $this->config['func']($this->number);
		}
		
		return $this->number;
	}
	
}

