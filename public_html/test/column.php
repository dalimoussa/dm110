<?php
header("Content-Type: text/html; charset=UTF-8");

// Fallback endpoint for /column when directory routing is bypassed.
include(__DIR__.'/column/index.php');
