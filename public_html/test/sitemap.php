<?php
header('Content-Type: application/xml; charset=UTF-8');

$sitemap_file = __DIR__.'/sitemap.xml';
if (!is_file($sitemap_file)) {
	http_response_code(404);
	echo '<?xml version="1.0" encoding="UTF-8"?><error><message>sitemap.xml not found</message></error>';
	exit;
}

readfile($sitemap_file);
