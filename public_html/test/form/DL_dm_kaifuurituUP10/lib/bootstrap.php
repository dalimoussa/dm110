<?php

error_reporting(0);
ini_set('display_errors', 0);

mb_internal_encoding('utf-8');

define('DS', DIRECTORY_SEPARATOR);

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

$classes = array('controller', 'config', 'form', 'validation', 'email', 'session', 'serial');

foreach ($classes as $classname)
{
	require CLASSPATH.$classname.'.php';
}

$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$script_name = $_SERVER['SCRIPT_NAME'];
$url_parts = pathinfo($protocol.'://'.$_SERVER['HTTP_HOST'].$script_name);
define('BASE_URL', $url_parts['dirname'].DS);

$action = 'action_'.$url_parts['filename'];

$form_hash = md5(BASE_URL);

Config::forge();
Session::forge($form_hash);

$controller = new Controller($form_hash);
$form = $controller->{$action}();

