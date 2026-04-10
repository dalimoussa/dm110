<?php


session_start();
error_reporting( E_ALL );




mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );




include( dirname(__FILE__) .'/class.business-calendar-login.php' );
$business_calendar_login = new Business_Calendar_Login();




if ( isset( $_POST['user'] ) && $_POST['user'] !== '' ) {
if ( isset( $_POST['pass'] ) && $_POST['pass'] !== '' ) {
	$business_calendar_login->javascript_action_check();
	$business_calendar_login->referer_check();
	$business_calendar_login->login_check();
	exit;
}
}




if ( isset( $_SESSION['business_calendar_login'] ) && $_SESSION['business_calendar_login'] === 'business_calendar_login_ok' ) {
	header( 'Location: admin.php' );
} else {
	$business_calendar_login->html_header();
	$business_calendar_login->login_form();
	$business_calendar_login->footer();
}








?>