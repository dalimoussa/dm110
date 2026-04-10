<?php
$path = __DIR__ . "/.htpasswd";
$htaccess = __DIR__ . "/.htaccess";
$content = file_get_contents($htaccess);
$content = preg_replace("/AuthUserFile\s+.*/", "AuthUserFile " . $path, $content);
file_put_contents($htaccess, $content);
echo "Setup complete. AuthUserFile set to: " . $path;
?>