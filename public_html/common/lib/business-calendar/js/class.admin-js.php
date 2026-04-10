<?php

class Business_Calendar_Admin_Js {
	
	// public construct
	public function __construct() {
		
		header( 'Content-Type: application/javascript' );
		
		
		echo <<<EOM
(function( $ ) {
	
	// function hidden_append
	function hidden_append( name, value, element ){
		
		$( '<input />' )
			.attr({
				type: 'hidden',
				id: name,
				name: name,
				value: value
			})
			.appendTo( element );
		
	}
	
	
	
	
	// function now_click
	function now_click() {
		
		var url = window.location.href;
		var url = url.replace( /\?.*$/g, '' );
		window.location.href = url;
		
	}
	
	
	
	
	// function logout_click
	function logout_click() {
		
		if ( window.confirm( 'ログアウトしますか？' ) ) {
			
			$.ajax({
				type: 'POST',
				url: window.location.href,
				cache: false,
				dataType: 'text',
				data: 'logout=true&javascript_action=true',
				
				success: function( res ) {
					var response = res.split( ',' );
					if( response[0] === 'logout_success' ){
						window.location.href = response[1];
					} else {
						window.alert( 'ログアウトが失敗しました。' );
						location.reload();
					}
				},
				
				error: function( res ) {
					window.alert( 'Ajax通信が失敗しました。\\nページの再読み込みをしてからもう一度お試しください。' );
				}
			});
			
		}
		
	}
	
	
	
	
	// function write_click
	function write_click() {
		
		if ( window.confirm( '登録してもよろしいですか？' ) ) {
			
			hidden_append( 'javascript_action', 'true', $( 'form#admin-calendar p.submit' ) );
			
			$( '<div>' )
				.addClass( 'loading-layer' )
				.appendTo( 'body' )
				.css({
					'width': $( window ).width() + 'px',
					'height': $( window ).height() + 'px',
					'background': 'rgba( 0, 0, 0, 0.7 )',
					'position': 'fixed',
					'left': '0',
					'top': '0',
					'z-index': '999',
				})
				.append( '<span class="loading"></span>' );
			
			setTimeout(function(){
				
				$.ajax({
					type: $( 'form#admin-calendar' ).attr( 'method' ),
					url: $( 'form#admin-calendar' ).attr( 'action' ),
					cache: false,
					dataType: 'text',
					data: $( 'form#admin-calendar' ).serialize(),
					
					success: function( res ) {
						$( 'div.loading-layer, span.loading' ).remove();
						var response = res.split( ',' );
						if( response[0] === 'write_success' ){
							window.alert( '登録が完了しました。' );
							location.reload();
						} else {
							window.alert( '登録が失敗しました。' );
							$( 'input#javascript_action' ).remove();
						}
					},
					
					error: function( res ) {
						window.alert( 'Ajax通信が失敗しました。\\nページの再読み込みをしてからもう一度お試しください。' );
					}
				});
				
			}, 1000 );
			
		}
		
	}
	
	
	
	
	// DOM
	$( 'form#admin-calendar table td div' ).on({
		
		'mouseenter': function() {
			if ( $( this ).find( 'input' ).length ) {
				$( this ).css({
					'background' : 'rgba( 155, 155, 155, 0.1 )',
					'cursor' : 'pointer'
				});
			}
		},
		
		'mouseleave': function() {
			if ( $( this ).find( 'input' ).length ) {
				$( this ).css({
					'background' : 'transparent',
					'cursor' : 'default'
				});
			}
		},
		
		'click': function() {
			if ( $( this ).find( 'input' ).length ) {
				if ( $( this ).find( 'input' ).eq( 0 ).prop( 'checked' ) ) {
					$( this ).find( 'input' ).eq( 0 ).prop( 'checked', false );
					$( this ).parents( 'td' ).removeClass( 'holiday' );
EOM;
		
		
		
		
		if ( file_exists( dirname( __FILE__ ) .'/../addon/halfday/halfday-prop.js' ) ) {
			include( dirname( __FILE__ ) .'/../addon/halfday/halfday-prop.js' );
		}
		
		
		
		
		echo <<<EOM

				} else {
					$( this ).find( 'input' ).eq( 0 ).prop( 'checked', true );
					$( this ).parents( 'td' ).addClass( 'holiday' );
				}
			}
		}
		
	});
	
	
	$( 'li#now div' ).on( 'click', now_click );
	
	$( 'li#logout div' ).on( 'click', logout_click );
	
	$( 'input#write-button' ).on( 'click', write_click );
	
	
})( jQuery );
EOM;
		
	}
	
}

?>