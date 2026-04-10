<?php

class Business_Calendar {
	
	// property init
	protected $holiday_string  = '';
	
	protected $admin_user      = '';
	protected $admin_pass      = '';
	protected $domain_name     = '';
	
	protected $index_url       = '';
	protected $login_url       = '';
	protected $admin_url       = '';
	protected $token           = '';
	
	protected $now_year        = '';
	protected $now_month       = '';
	
	
	// festival addon property
	protected $api_key         = '';
	
	
	// next calendar addon property
	protected $calendar_length = '';
	
	
	// halfday addon property
	protected $halfday_string  = '';
	
	
	
	
	// public construct
	public function __construct() {
		
		include( dirname( __FILE__ ) .'/config.php' );
		
		$this->holiday_string    = $bc_holiday_string;
		$this->admin_user        = $bc_admin_user;
		$this->admin_pass        = $bc_admin_pass;
		$this->domain_name       = $bc_domain_name;
		
		$this->index_url         = '//'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		$this->login_url         = '//'.$_SERVER['HTTP_HOST'].dirname( $_SERVER['SCRIPT_NAME'] ).'/login.php';
		$this->admin_url         = '//'.$_SERVER['HTTP_HOST'].dirname( $_SERVER['SCRIPT_NAME'] ).'/admin.php';
		$session_id              = htmlspecialchars( session_id(), ENT_QUOTES, 'UTF-8' );
		$this->token             = sha1( $session_id );
		
		$this->now_year          = date( 'Y' );
		$this->now_month         = date( 'm' );
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/festival-config.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/festival/festival-config.php' );
			include( dirname( __FILE__ ) .'/../addon/festival/config-include.php' );
		}
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/next-calendar/next-calendar-config.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/next-calendar/next-calendar-config.php' );
			include( dirname( __FILE__ ) .'/../addon/next-calendar/config-include.php' );
		}
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-config.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/halfday-config.php' );
			include( dirname( __FILE__ ) .'/../addon/halfday/config-include.php' );
		}
		
	}
	
	
	
	
	// public javascript_action_check
	public function javascript_action_check() {
		
		if ( ! ( isset( $_POST['javascript_action'] ) && $_POST['javascript_action'] === 'true' ) ) {
			echo 'spam_failed-0001';
			exit;
		}
		
	}
	
	
	
	
	// public referer_check
	public function referer_check() {
		
		if ( $this->domain_name !== '' ) {
			if ( strpos( $_SERVER['HTTP_REFERER'], $this->domain_name ) === false ) {
				echo 'spam_failed-0002';
				exit;
			}
		}
		
	}
	
	
	
	
	// public session_check
	public function session_check() {
		
		if ( ! ( isset( $_SESSION['business_calendar_login'] ) && $_SESSION['business_calendar_login'] === 'business_calendar_login_ok' ) ) {
			echo 'spam_failed-0003';
			exit;
		}
		
	}
	
	
	
	
	// public token_check
	public function token_check() {
		
		if ( ! ( isset( $_POST['token'] ) && $_POST['token'] === $this->token ) ) {
			echo 'spam_failed-0004';
			exit;
		}
		
	}
	
	
	
	
	// public get_year_month
	public function get_year_month() {
		
		$year_month = htmlspecialchars( $_GET['year-month'], ENT_QUOTES, 'UTF-8' );
		
		if ( preg_match( '/^[0-9]{4}-[0-9]{2}$/', $year_month ) === false ) {
			echo 'spam_failed-0005';
			exit;
		}
		
		$year_month      = preg_split( '/-/', $year_month );
		$this->now_year  = $year_month[0];
		$this->now_month = $year_month[1];
		
	}
	
	
	
	
	// public calendar_table_tbody
	public function calendar_table_tbody( $hol_name, $hal_name ) {
		
		echo <<<EOM

			<tbody>
				<tr>

EOM;
		
		
		$holiday  = array();
		$halfday  = array();
		$festival = array();
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../data/'.$this->now_year.'-'.$this->now_month.'-holiday.txt' ) ) {
			$date_file = dirname( __FILE__ ) .'/../data/'.$this->now_year.'-'.$this->now_month.'-holiday.txt';
			$pointer   = fopen( $date_file, 'r' );
			
			if( ! flock( $pointer, LOCK_SH ) ) {
				echo 'read_failed-0001';
			}
			
			if ( $pointer ) {
				while ( ! feof( $pointer ) ) {
					$read_holiday[] = str_replace( array( "\n", "\r", "\r\n" ), '', fgets( $pointer ) );
				}
				flock( $pointer, LOCK_UN );
				fclose( $pointer );
				
				$holiday = explode( '、', $read_holiday[0] );
			}
		}
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/table-tbody.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/table-tbody.php' );
		}
		
		
		$first_day = date( 'w', mktime( 0, 0, 0, $this->now_month, 1, $this->now_year ) );
		$last_day  = date( 'w', mktime( 0, 0, 0, $this->now_month + 1, 0, $this->now_year ) );
		
		
		for ( $i = 0; $i < $first_day; $i++ ) {
			echo '					<td> </td>'.PHP_EOL;
		}
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/festival-get.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/festival/festival-get.php' );
		}
		
		
		$day = 1;
		while ( checkdate( $this->now_month, $day, $this->now_year ) ) {
			
			$sun = false;
			$sat = false;
			$hol = false;
			$hal = false;
			$fes = false;
			
			if ( date( 'w', mktime( 0, 0, 0, $this->now_month, $day, $this->now_year ) ) === '0' ) {
				
				$sun = true;
				
				if ( array_search( $day, $holiday ) !== false ) {
					$hol = true;
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' );
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' );
				}
				
				$this->calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name );
				
			} else if ( date( 'w', mktime( 0, 0, 0, $this->now_month, $day, $this->now_year ) ) === '6' ) {
				
				$sat = true;
				
				if ( array_search( $day, $holiday ) !== false ) {
					$hol = true;
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' );
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' );
				}
				
				$this->calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name );
				
			} else {
				
				if ( array_search( $day, $holiday ) !== false ) {
					$hol = true;
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/halfday/hal-search.php' );
				}
				
				if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' ) ) {
					include( dirname( __FILE__ ) .'/../addon/festival/fes-search.php' );
				}
				
				$this->calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name );
				
			}
			
			
			if ( date( 'w', mktime( 0, 0, 0, $this->now_month, $day, $this->now_year ) ) === '6' ) {
				echo '				</tr>'.PHP_EOL;
				if ( checkdate( $this->now_month, $day + 1, $this->now_year ) ) {
					echo '				<tr>'.PHP_EOL;
				}
			}
			
			$day++;
			
		}
		
		
		for ( $i = 0; $i < 6 - $last_day; $i++ ) {
			echo '					<td> </td>'.PHP_EOL;
			if ( $i === 6 - $last_day - 1 ) {
				echo '				</tr>'.PHP_EOL;
			}
		}
		
		
		echo <<<EOM
			</tbody>
EOM;
		
	}
	
	
	
	
	// public calendar_table_td - for override in child Class
	public function calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name ) {
		
		
		
	}
	
	
	
	
	// public get_festival
	public function get_festival() {
		
		$festival = array();
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/get-festival.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/festival/get-festival.php' );
		}
		
		return $festival;
		
	}
	
}

?>