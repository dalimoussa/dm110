<?php
header("Content-Type: text/html; charset=UTF-8");

// Route alias: /case/* should behave like /koe/* in test scope.
$route_base_path = '/case/';
$canonical_base_url = 'https://test.dm110.jp/case/';
if (isset($_GET['p'])) {
	$_GET['p'] = (string)max(1, (int)filter_var($_GET['p'], FILTER_SANITIZE_NUMBER_INT));
}
include(dirname(__DIR__).'/koe/index.php');
