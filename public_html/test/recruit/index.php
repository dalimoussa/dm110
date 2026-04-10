<?php
header("Content-Type: text/html; charset=UTF-8");

// Route alias: /recruit/ should render the existing recruit page source safely.
$source_file = dirname(__DIR__).'/Naisyoku_bosyu.html';
if (!is_file($source_file)) {
	http_response_code(404);
	exit('Not Found');
}

$current_dir = getcwd();
chdir(dirname(__DIR__));
include('./Naisyoku_bosyu.html');
chdir($current_dir);
