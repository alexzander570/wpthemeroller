<?php
/**
 * Pinfolio Customizer functionality
 *
 * @package WordPress
 * @subpackage Pinfolio
 * @since Pinfolio 1.0
 */

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Pinfolio 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function pinfolio_customize_register( $wp_customize ) 
{
	
	$image_dirpath = get_template_directory_uri() . '/images/';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	
	//-----------------------------------------------------------------
	// PINFOLIO : CUSTOMIZER PANELS -----------------------------------
	//-----------------------------------------------------------------

	$wp_customize->add_panel( 'genral_settings', array(
		'title' 	=> __( 'General Settings','pinfolio'),
		'priority' 	=> 11,
	));
	
	//-----------------------------------------------------------------
	// PINFOLIO : COLOR SCHEME SECTION --------------------------------
	//-----------------------------------------------------------------
	
	// Create "Color Scheme" section in customizer 
	$wp_customize->add_section(
		'pinfolio_color_scheme_section',
		array(
			'title'       => __('Color Settings','pinfolio'),
			'description' => __('Please choose color settings for your site.','pinfolio'),
			'panel' 	  => 'genral_settings',
		)
	);
	
	// Set "Color Scheme" option color default value
	$wp_customize->add_setting(
		'color_scheme',
		array(
			'default' => '#F2481A',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	
	// Add "Color Scheme" color picker Control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'color_scheme',
			array(
				'label'    => __('Site Color Scheme','pinfolio'),
				'section'  => 'pinfolio_color_scheme_section',
			)
		)
	);
	
	// Set "Menu Icon" color default value
	$wp_customize->add_setting(
		'menuicon_color',
		array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	
	// Add "Menu Color" color picker Control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'menuicon_color',
			array(
				'label'    => __('Set Menu Icon Color','pinfolio'),
				'section'  => 'pinfolio_color_scheme_section',
			)
		)
	);
	
	//-----------------------------------------------------------------
	// PINFOLIO : FOLLOW ICONS SECTION --------------------------------
	//-----------------------------------------------------------------
	
	// Create "Follow Icons" section in customizer 
	$wp_customize->add_section(
		'pinfolio_follow_icons_section',
		array(
			'title'       => __('Follow Icons','pinfolio'),
			'description' => __('Please add your social profile (if you want to make disable icon, please leave icon url field blank).','pinfolio'),
			'panel' 	  => 'genral_settings',
		)
	);
	
	// Facebook Icon URL 
	$wp_customize->add_setting( 
		'fbicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'fbicon', 
		array(
			'label'       => __('Facebook URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	// Twitter Icon URL 
	$wp_customize->add_setting( 
		'twicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'twicon', 
		array(
			'label'       => __('Twitter URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	// Google Plus Icon URL 
	$wp_customize->add_setting( 
		'gpicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'gpicon', 
		array(
			'label'       => __('Google+ URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	// Dribbble Icon URL 
	$wp_customize->add_setting( 
		'dribicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'dribicon', 
		array(
			'label'       => __('Dribbble URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	// Linkedin Icon URL 
	$wp_customize->add_setting( 
		'linkdicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'linkdicon', 
		array(
			'label'       => __('Linkedin URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);	
	
	// Pinterest Icon URL 
	$wp_customize->add_setting( 
		'piniticon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'piniticon', 
		array(
			'label'       => __('Pinterest URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	// Flickr Icon URL 
	$wp_customize->add_setting( 
		'flickricon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'flickricon', 
		array(
			'label'       => __('Flickr URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);	
	
	// Instagram Icon URL 
	$wp_customize->add_setting( 
		'instaicon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'instaicon', 
		array(
			'label'       => __('Instagram URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);	
	
	// Youtube Icon URL 
	$wp_customize->add_setting( 
		'yticon', 
		array(
			'default'        => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'yticon', 
		array(
			'label'       => __('Youtube URL','pinfolio'),
			'section'     => 'pinfolio_follow_icons_section',
		)
	);
	
	//-----------------------------------------------------------------
	// PINFOLIO : HEADER CONTACT SECTION ------------------------------
	//-----------------------------------------------------------------
	
	// Create "CONTACT INFORMATION" section in customizer 
	$wp_customize->add_section(
		'pinfolio_header_contact_section',
		array(
			'title'       => __('Contact Info','pinfolio'),
			'description' => __('Add contact information about your business.','pinfolio'),
			'panel' 	  => 'genral_settings',
		)
	);
	
	// Contact Title Text 
	$wp_customize->add_setting( 
		'contact_title', 
		array(
			'default'        => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'contact_title', 
		array(
			'label'       => __('Enter Contact Us Title','pinfolio'),
			'section'     => 'pinfolio_header_contact_section',
		)
	);
	
	// Contact Address
	$wp_customize->add_setting( 
		'contact_adds', 
		array(
			'default'        => '',
			'sanitize_callback' => 'pinfolio_sanitize_textarea',
		)
	);
	
	$wp_customize->add_control( 
		'contact_adds', 
		array(
			'label'       => __('Enter Contact Address','pinfolio'),
			'type'        => 'textarea',
			'section'     => 'pinfolio_header_contact_section',
		)
	);	
}
add_action( 'customize_register', 'pinfolio_customize_register', 11 );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Pinfolio 1.0
 */
function pinfolio_customize_preview_js() {
	wp_enqueue_script( 'pinfolio-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'pinfolio_customize_preview_js' );

// Santize a Textarea Field
function pinfolio_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}