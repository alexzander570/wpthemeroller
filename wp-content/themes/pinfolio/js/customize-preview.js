/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	var style = $( '#pinfolio-color-scheme-css' ), api = wp.customize;

	// Site title.
	api( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site tagline.
	api( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	// Contact title.
	api( 'contact_title', function( value ) {
		value.bind( function( to ) {
			$( '#contact-block .ctitle' ).text( to );
		} );
	} );
	
	// Contact address.
	api( 'contact_adds', function( value ) {
		value.bind( function( to ) {
			$( '#contact-block .cadds' ).text( to );
		} );
	} );
	
	// Add custom-background-image body class when background image is added.
	api( 'background_image', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).toggleClass( 'custom-background-image', '' !== to );
		} );
	} );

})( jQuery );
