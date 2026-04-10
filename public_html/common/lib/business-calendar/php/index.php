<?php


error_reporting( E_ALL );




mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );




require_once( 'class.business-calendar-display.php' );
$business_calendar_display = new Business_Calendar_Display();




if ( isset( $_GET['year-month'] ) && $_GET['year-month'] !== '' ) {
	$business_calendar_display->get_year_month();
}




$business_calendar_display->calendar_table();
$business_calendar_display->calendar_footer();








?>