<?php

error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: text/html; charset=utf-8');

mb_internal_encoding('utf-8');

define('DS', DIRECTORY_SEPARATOR);

set_include_path('.' . PATH_SEPARATOR . realpath(dirname(__FILE__) . '/modules'));

$assocs = debug_backtrace();

define('DOCROOT', dirname($assocs[0]['file']).DS);

define('CONFPATH', DOCROOT.'config'.DS);

define('CLASSPATH', __DIR__.DS.'classes'.DS);

register_shutdown_function(function ()
{
	$last_error = error_get_last();
	if ($last_error AND in_array($last_error['type'], array(E_PARSE, E_ERROR, E_USER_ERROR, E_COMPILE_ERROR)))
	{
		show_error($last_error);
		exit(1);
	}
});

require __DIR__.DS.'base.php';

require 'Mail.php';
require 'Mail/mime.php';

$classes = array('controller', 'config', 'form', 'validation', 'email', 'session', 'serial');

foreach ($classes as $classname)
{
	require CLASSPATH.$classname.'.php';
}

$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$site_root = $protocol.'://'.$_SERVER['HTTP_HOST'];

if ( ! defined('BASE_URL'))
{
	$script_name = $_SERVER['SCRIPT_NAME'];
	$url_parts = pathinfo($site_root.$script_name);
	
	define('BASE_URL',     $url_parts['dirname'].DS);
	define('CONFIRM_URL',  BASE_URL.'confirm.php');
	define('COMPLETE_URL', BASE_URL.'complete.php');
	
	$action = 'action_'.$url_parts['filename'];
}
else
{
	define('CONFIRM_URL',  trim(BASE_URL, DS).DS.'confirm/');
	define('COMPLETE_URL', trim(BASE_URL, DS).DS.'complete/');
	
	$uri = $site_root.$_SERVER['REQUEST_URI'];
	
	if (strpos($uri, trim(CONFIRM_URL, DS)) === 0)
	{
		$action = 'action_confirm';
	}
	else if (strpos($uri, trim(COMPLETE_URL, DS)) === 0)
	{
		$action = 'action_complete';
	}
	else
	{
		$action = 'action_index';
	}
}

$form_hash = md5(BASE_URL);

Config::forge();
Session::forge($form_hash);

$controller = new Controller($form_hash);
$form = $controller->{$action}();

