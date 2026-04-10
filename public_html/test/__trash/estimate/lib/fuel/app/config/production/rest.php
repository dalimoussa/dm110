<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */


return array(

	/*
	| Name for the password protected REST API displayed on login dialogs
	|
	|	E.g: My Secret REST API
	|
	*/
	'realm' => 'REST API',

	/*
	| array of usernames and passwords for login
	|
	|	array('admin' => '1234')
	|
	*/
	'valid_logins' => array('test' => 'test'),

);


