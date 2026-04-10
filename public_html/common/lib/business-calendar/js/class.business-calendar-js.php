<?php

class Business_Calendar_Js {

	// PHP public construct
	public function __construct() {

		$dir = dirname( $_SERVER['SCRIPT_NAME'] );
		$dir = dirname( $dir );

		header( 'Content-Type: application/javascript' );


		echo <<<EOM

/*--------------------------------------------------------------

	Script Name : Business Calendar
	Author      : FIRSTSTEP - Motohiro Tani
	Author URL  : https://www.1-firststep.com
	Create Date : 2012/10/05
	Version     : 5.0
	Last Update : 2019/10/10

--------------------------------------------------------------*/

$(function(){

	// function calendar_get
	function calendar_get( y, m, bool ) {

		var wait = 0;

		if ( bool === true ) {
			$( '<div />' )
				.addClass( 'loading-layer' )
				.appendTo( 'div#business-calendar' )
				.css({
					'width': $( 'div#business-calendar' ).width() + 'px',
					'height': $( 'div#business-calendar' ).height() + 'px',
					'background': 'rgba( 255, 255, 255, 0.5 )',
					'position': 'absolute',
					'left': '0',
					'top': '0',
					'z-index': '999'
				})
				.append( '<span class="loading"></span>' );

			wait = 150;
		}

		setTimeout(function(){

			$.ajax({
				type: 'GET',
				url: '{$dir}/php/index.php',
				cache: false,
				dataType: 'html',
				data: 'year-month='+ y +'-'+ m ,

				success: function( res ) {
					$( '#business-calendar' ).html( res );
				},

				error: function( res ) {
					window.alert( 'Ajax通信が失敗しました。\\nページの再読み込みをしてからもう一度お試しください。' );
				}
			});

		}, wait );

	}




	// DOM
	var now_year_month = new Date();
	var now_year       = now_year_month.getFullYear();
	var now_month      = ( '0'+ ( now_year_month.getMonth() + 1 ) ).slice( -2 );

	calendar_get( now_year, now_month, false );



});
EOM;

	}

}

?>