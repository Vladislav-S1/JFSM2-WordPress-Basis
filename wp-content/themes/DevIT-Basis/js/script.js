( function( $ ) { 
	$( document ).ready( function() {
		$('.hamburger').on('click', function(){
			$(this).parent('#menuToggle').find('#menu-mobile-menu').toggleClass('show')
		} );
		if( $( '.first-info-front-img' ).length > 0 ) {
			$( '.first-info-front-img' ).each( function(){
				var style = $( this ).attr( 'style' );
				style = style.replace( 'background-image:', '' );
				console.log( style );
				$( this ).attr( 'style', 'background:linear-gradient(0deg, rgba(12, 19, 48, 0.75), rgba(12, 19, 48, 0.75)), ' + style );
			});
		}
		$('.rltdpstsplgn-latest-posts .entry-header').each( function(){ 
			$( this ).insertAfter( $( this ).parent().find( '.entry-content a' ) ); 
		});
		$( '.rltdpstsplgn-latest-posts .entry-meta' ).each( function(){ 
			$( this ).appendTo( $( this ).parent().parent().parent() ); 
		});

	console.log ('Hi');
	} );
})( jQuery );