<?php


require_once( dirname( __FILE__ ) .'/class.business-calendar.php' );




class Business_Calendar_Display Extends Business_Calendar {
	
	// public construct
	public function __construct() {
		
		parent::__construct();
		
	}
	
	
	
	
	// public calendar_table
	public function calendar_table() {
		
		$prev_year_month = date( 'Y-m', mktime( 0, 0, 0, $this->now_month - 1, 1, $this->now_year ) );
		$next_year_month = date( 'Y-m', mktime( 0, 0, 0, $this->now_month + 1, 1, $this->now_year ) );
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/next-calendar/index-display.php' ) ) {
			
			include( dirname( __FILE__ ) .'/../addon/next-calendar/index-display.php' );
			
		} else {
			
			echo <<<EOM


		<div class="calendar1">
			<table>
				<thead>
					<tr id="year-month">
						<th colspan="7">
							<p>{$this->now_year}年{$this->now_month}月</p>
						</th>
					</tr>
					<tr>
						<th class="sunday">日</th>
						<th>月</th>
						<th>火</th>
						<th>水</th>
						<th>木</th>
						<th>金</th>
						<th class="saturday">土</th>
					</tr>
				</thead>
EOM;
			parent::calendar_table_tbody( '', '' );

		$next_year = date( 'Y', mktime( 0, 0, 0, $this->now_month + 1, 1, $this->now_year ) );
		$this->now_month = date( 'm', mktime( 0, 0, 0, $this->now_month + 1, 1, $this->now_year ) );
		$this->now_year = $next_year;

			echo <<<EOM

			</table>
		</div>

		<div class="calendar2">
			<table>
				<thead>
					<tr id="year-month">
						<th colspan="7">
							<p>{$this->now_year}年{$this->now_month}月</p>
						</th>
					</tr>
					<tr>
						<th class="sunday">日</th>
						<th>月</th>
						<th>火</th>
						<th>水</th>
						<th>木</th>
						<th>金</th>
						<th class="saturday">土</th>
					</tr>
				</thead>
EOM;
			
			
			parent::calendar_table_tbody( '', '' );
			
			
			echo <<<EOM

			</table>
		</div>
EOM;
		}
		
	}
	
	
	
	
	// public calendar_table_td - override
	public function calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name ) {
		
		$class_array = array();
		$class_attr  = '';
		
		
		if ( $sun === true ) {
			$class_array[] = 'sunday';
		}
		
		if ( $sat === true ) {
			$class_array[] = 'saturday';
		}
		
		if ( $hol === true ) {
			$class_array[] = 'holiday';
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-class.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/hal-class.php' );
		}
		
		if ( $fes === true ) {
			$class_array[] = 'festival';
		}
		
		
		$class_name = implode( ' ', $class_array );
		
		if ( count( $class_array ) > 0 ) {
			$class_attr = ' class="'. $class_name .'"';
		}
		
		
		echo '						<td'. $class_attr .'><div>'. $day .'</div></td>'.PHP_EOL;
		
	}
	
	
	
	
	// public calendar_footer
	public function calendar_footer() {
		
		$halfday_string = '';
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-string.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/halfday-string.php' );
		}
		
		
		echo <<<EOM

		<p class="holiday-string">{$this->holiday_string}</p>{$halfday_string}
EOM;
		
	}
	
}