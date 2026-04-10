<?php

/*--------------------------------------------------------------
	
	Script Name : Business Calendar
	Author      : FIRSTSTEP - Motohiro Tani
	Author URL  : https://www.1-firststep.com
	Create Date : 2012/10/05
	Version     : 5.0
	Last Update : 2019/10/10
	
--------------------------------------------------------------*/


session_start();
error_reporting( E_ALL );




mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );




if ( isset( $_POST['logout'] ) && $_POST['logout'] !== '' ) {
	include( dirname(__FILE__) .'/class.business-calendar-login.php' );
	$business_calendar_login = new Business_Calendar_Login();
	
	$business_calendar_login->javascript_action_check();
	$business_calendar_login->referer_check();
	$business_calendar_login->session_check();
	$business_calendar_login->logout_check();
	exit;
}




if ( isset( $_POST['form-year-month'] ) && $_POST['form-year-month'] !== '' ) {
	include( dirname(__FILE__) .'/class.business-calendar-write.php' );
	$business_calendar_write = new Business_Calendar_Write();
	
	$business_calendar_write->javascript_action_check();
	$business_calendar_write->referer_check();
	$business_calendar_write->session_check();
	$business_calendar_write->token_check();
	$business_calendar_write->calendar_write();
	exit;
}




include( dirname(__FILE__) .'/class.business-calendar-admin.php' );
$business_calendar_admin = new Business_Calendar_Admin();




if ( isset( $_GET['year-month'] ) && $_GET['year-month'] !== '' ) {
	$business_calendar_admin->get_year_month();
}




if ( isset( $_SESSION['business_calendar_login'] ) && $_SESSION['business_calendar_login'] === 'business_calendar_login_ok' ) {
	$business_calendar_admin->html_header();
	$business_calendar_admin->header();
	$business_calendar_admin->notice();
	$business_calendar_admin->form_header();
	$business_calendar_admin->calendar_table();
	$business_calendar_admin->form_footer();
	$business_calendar_admin->footer();
} else {
	header( 'Location: login.php' );
}








?>