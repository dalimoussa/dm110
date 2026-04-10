<?php

return array(
	
	'path' => './config/.serial',
	
	'func' => function($number) { return date('Ymd') . sprintf('%04d', $number); }
	
);
