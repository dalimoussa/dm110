<?php


require_once( dirname( __FILE__ ) .'/class.business-calendar.php' );




class Business_Calendar_Admin Extends Business_Calendar {
	
	// public construct
	public function __construct() {
		
		parent::__construct();
		
	}
	
	
	
	
	// public html_header
	public function html_header() {
		
		$fest_css = '';
		$half_css = '';
		$next_css = '';
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/festival-css.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/festival/festival-css.php' );
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-css.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/halfday-css.php' );
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/next-calendar/next-calendar-css.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/next-calendar/next-calendar-css.php' );
		}
		
		
		echo <<<EOM
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8" />
<title>営業日カレンダー【Business Calendar】 - 管理画面</title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" href="../css/reset.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/admin.css" />{$fest_css}{$half_css}{$next_css}
</head>
<body>
EOM;
		
	}
	
	
	
	
	// public header
	public function header() {
		
		echo <<<EOM


<div id="header">
	<ul>
		<li id="now"><div>今月に戻る<span>Now Month</span></div></li>
		<li id="logout"><div>ログアウト<span>Logout</span></div></li>
	</ul>
</div>
EOM;
		
	}
	
	
	
	
	// public footer
	public function footer() {
		
		
		echo <<<EOM


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" defer="defer"></script>
<script src="../js/admin-js.php" defer="defer"></script>
</body>
</html>

EOM;
		
	}
	
	
	
	
	// public notice
	public function notice() {
		
		$halfday_notice = '';
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-notice.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/halfday-notice.php' );
		}
		
		
		echo <<<EOM
{$halfday_notice}
EOM;
		
	}
	
	
	
	
	// public form_header
	public function form_header() {
		
		echo <<<EOM


<form action="{$this->admin_url}" method="post" id="admin-calendar">
	<input type="hidden" name="form-year-month" value="{$this->now_year}-{$this->now_month}" />
	<input type="hidden" name="token" value="{$this->token}" />
EOM;
		
	}
	
	
	
	
	// public calendar_table
	public function calendar_table() {
		
		$prev_year_month = date( 'Y-m', mktime( 0, 0, 0, $this->now_month - 1, 1, $this->now_year ) );
		$next_year_month = date( 'Y-m', mktime( 0, 0, 0, $this->now_month + 1, 1, $this->now_year ) );
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/next-calendar/admin-display.php' ) ) {
			
			include( dirname( __FILE__ ) .'/../addon/next-calendar/admin-display.php' );
			
		} else {
			
			$halfday_name = '';
			
			
			if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-name.php' ) ) {
				include( dirname( __FILE__ ) .'/../addon/halfday/halfday-name.php' );
			}
			
			
			echo <<<EOM


	<div class="calendar">
		<div class="year-month">
			<h1>{$this->now_year}年{$this->now_month}月</h1>
			<ul>
				<li id="prev"><a href="{$this->admin_url}?year-month={$prev_year_month}">前月</a></li>
				<li id="next"><a href="{$this->admin_url}?year-month={$next_year_month}">次月</a></li>
			</ul>
		</div>
EOM;
			
			
			echo <<<EOM


		<table>
			<thead>
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
			
			
			parent::calendar_table_tbody( 'holiday-0', $halfday_name );
			
			
			echo <<<EOM

		</table>
	</div>
EOM;
			
		}
		
	}
	
	
	
	
	// public calendar_table_td - override
	public function calendar_table_td( $sun, $sat, $hol, $hal, $fes, $day, $hol_name, $hal_name ) {
		
		$class_array  = array();
		$class_attr   = '';
		$hol_checked  = '';
		$hal_checked  = '';
		$hal_checkbox = '';
		
		
		if ( $sun === true ) {
			$class_array[] = 'sunday';
		}
		
		if ( $sat === true ) {
			$class_array[] = 'saturday';
		}
		
		if ( $hol === true ) {
			$class_array[]   = 'holiday';
			$hol_checked = ' checked="checked"';
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-checked.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/hal-checked.php' );
		}
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/festival/fes-checked.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/festival/fes-checked.php' );
		}
		
		
		$class_name = implode( ' ', $class_array );
		
		if ( count( $class_array ) > 0 ) {
			$class_attr = ' class="'. $class_name .'"';
		}
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/hal-checkbox.php' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/hal-checkbox.php' );
		}
		
		
		echo '					<td'. $class_attr .'><div>'. $day .'<input type="checkbox" name="'. $hol_name .'[]" value="'. $day .'"'. $hol_checked .' />'.$hal_checkbox.'</div></td>'.PHP_EOL;
		
	}
	
	
	
	
	// public form_footer
	public function form_footer() {
		
		echo <<<EOM

	
	<div class="footer">
		<p class="submit"><input type="button" id="write-button" value="登録する" /></p>
	</div>
</form>
EOM;
		
	}
	
}

?>