<?php
header("Content-Type: text/html; charset=UTF-8");

// Fallback endpoint for /case when directory routing is bypassed.
include(__DIR__.'/case/index.php');
