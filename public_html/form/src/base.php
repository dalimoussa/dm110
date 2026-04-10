<?php

function e($str)
{
	return htmlentities($str, ENT_QUOTES, 'utf-8');
}

function input_method()
{
	return strtolower($_SERVER['REQUEST_METHOD']);
}

function redirect($path)
{
	if (! preg_match('|^https?://|', $path))
	{
		$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
		$path = $protocol.'://'.$_SERVER['HTTP_HOST'].'/'.$path;
	}

	header('Location: '.$path);
	exit();
}

function redirect_back($path)
{
	$referer = null;
	
	isset($_SERVER["HTTP_REFERER"]) and $referer = $_SERVER["HTTP_REFERER"];
	
	if (! empty($referer))
	{
		$path = $referer;
	}
	
	redirect($path);
}

function show_error($errors)
{
	header('HTTP/1.1 500 Internal Server Error');
	echo('<h1>An error has occurred.</h1>');

	if (isset($_SERVER['ENV']) and $_SERVER['ENV'] != 'PRODUCTION')
	{
		echo '<hr>';
		echo '<h2>[error]</h2>';
		echo '<pre>';
		var_dump($errors);
		echo '</pre>';
		echo '<hr>';
		echo '<h2>[session]</h2>';
		echo '<pre>';
		var_dump($_SESSION);
		echo '</pre>';
		echo '<hr>';
	}
}