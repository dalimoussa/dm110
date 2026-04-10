<?php


require_once( dirname( __FILE__ ) .'/class.business-calendar.php' );




class Business_Calendar_Write Extends Business_Calendar {
	
	// public construct
	public function __construct() {
		
		parent::__construct();
		
	}
	
	
	
	
	// public calendar_write
	public function calendar_write() {
		
		$form_year_month = htmlspecialchars( $_POST['form-year-month'], ENT_QUOTES, 'UTF-8' );
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/next-calendar/admin-write.php' ) ) {
			
			include( dirname( __FILE__ ) .'/../addon/next-calendar/admin-write.php' );
			
		} else {
			
			$holiday       = array();
			$write_holiday = '';
			
			
			if ( isset( $_POST['holiday-0'] ) && $_POST['holiday-0'] !== '' ) {
				foreach( $_POST['holiday-0'] as $key => $value ) {
					$holiday[] = htmlspecialchars( $_POST['holiday-0'][$key], ENT_QUOTES, 'UTF-8' );
				}
				$write_holiday = implode( '、', $holiday );
			}
			
			
			$date_file = dirname( __FILE__ ) .'/../data/'.$form_year_month.'-holiday.txt';
			$pointer   = fopen( $date_file, 'w' );
			
			if( ! flock( $pointer, LOCK_EX ) ) {
				$write_result = false;
			} else {
				$write_result = fwrite( $pointer, $write_holiday );
				flock( $pointer, LOCK_UN );
				fclose( $pointer );
			}
			
			
			if ( $write_result === false ) {
				echo 'write_failed-0001,'.$write_holiday;
				exit;
			}
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-write.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/halfday/halfday-write.php' );
			}
			
		}
		
		
		echo 'write_success,'.$write_holiday;
		
	}
	
}