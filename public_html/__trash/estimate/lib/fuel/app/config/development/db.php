<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type'        => 'mysql',
		'connection'  => array(
			'hostname'   => 'db',
			'database'   => 'dm110_estimate_dev',
			'username'   => 'root',
			'password'   => 'start2012',
		),
		'profiling'   => true,
	),
);
