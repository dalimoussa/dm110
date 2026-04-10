<?php
require '../../../vendor/autoload.php';
define('APPLICATION_NAME', 'DM110-FORM-PRICE');
define('CREDENTIALS_PATH', 'dm110-form-9e55dcda0bd2.json');
define('SPREADSHEET_ID',   '1W0SiWhipdmhlDaXuYw8mgvnNVMVt4IEX3wDW36WIzgI');
putenv('GOOGLE_APPLICATION_CREDENTIALS='.CONFPATH.CREDENTIALS_PATH);
