<?php
header("Content-Type: text/html; charset=UTF-8");

// Fallback endpoint for /recruit when directory routing is bypassed.
include(__DIR__.'/recruit/index.php');
