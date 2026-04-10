<?php
header("Content-Type: text/html; charset=UTF-8");

// Route alias: /column/* should behave like /DM_matome/* in test scope.
$matome_dir = dirname(__DIR__).'/DM_matome';
if (!is_dir($matome_dir)) {
	http_response_code(404);
	exit('Not Found');
}
if (isset($_GET['pages']) && !preg_match('/^[0-9A-Za-z_-]+$/', (string)$_GET['pages'])) {
	http_response_code(404);
	exit('Not Found');
}

$current_dir = getcwd();
chdir($matome_dir);
include('./index.php');
chdir($current_dir);
