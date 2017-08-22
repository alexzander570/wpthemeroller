<?php
#-----------------------------------------------------------------#
#------------ PINFOLIO : WP-ENQUEUE STYLES & SCRIPTS -------------#
#-----------------------------------------------------------------#

#-----------------------------------------------------------------#
# FRONT SCRIPT : REGISTER/ENQUEUE JS
#-----------------------------------------------------------------#

if( !function_exists('pinfolio_front_enqueue_scripts') ){
    add_action('wp_enqueue_scripts', 'pinfolio_front_enqueue_scripts');
	
	function pinfolio_front_enqueue_scripts() 
	{	
		// Enqueue 
		wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '1.3', TRUE);
		wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), '1.7.4', TRUE);
		wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array( 'jquery' ), '1.8.1', TRUE);
		wp_enqueue_script('nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.js', array( 'jquery' ), '3.5.6', TRUE);
		wp_enqueue_script('pinfolio-customjs', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', TRUE);
	}
}

#-----------------------------------------------------------------#
# FRONT STYLES : REGISTER/ENQUEUE CSS
#-----------------------------------------------------------------#

if( !function_exists('pinfolio_front_enqueue_styles') ){
	add_action('wp_enqueue_scripts', 'pinfolio_front_enqueue_styles');
	
	function pinfolio_front_enqueue_styles() {	
		// Enqueue 
		wp_enqueue_style('pinfolio-google-lato-font','//fonts.googleapis.com/css?family=Lato:400,300,400italic,700,300italic','', '1.0.0');
		wp_enqueue_style('pinfolio-google-opensans-font','//fonts.googleapis.com/css?family=Open+Sans:400,600,700','', '1.0.0');
		wp_enqueue_style('font-awesome', get_template_directory_uri() . "/css/font-awesome.css", '', '4.2.0');
		wp_enqueue_style('pinfolio-style', get_stylesheet_uri());
		wp_enqueue_style('pinfolio-responsive', get_template_directory_uri() . "/css/bootstrap-responsive.css", '', '2.3.2');
	}
}

#-----------------------------------------------------------------#
# APPEND REQUIRED INFO IN SITE HEAD SECTION
#-----------------------------------------------------------------#
function pinfolio_head_info() 
{
	if(!is_admin()) 
	{
		include_once(get_template_directory().'/includes/pinfolio-custom-css.php');
	}
}
add_action('wp_head', 'pinfolio_head_info');
?>