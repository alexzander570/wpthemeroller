<?php
/**
 * indreams Theme Customizer.
 *
 * @package indreams
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function indreams_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';	
}
add_action( 'customize_register', 'indreams_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function indreams_customize_preview_js() {
	wp_enqueue_script( 'indreams_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'indreams_customize_preview_js' );


// Customize function.
if ( ! function_exists( 'indreams_customize_options_register' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'indreams_customize_options_register' );

	/**
	 * Customize: Panel.
	 *
	 * Customize function.
	 *
	 * @param  object WP_Customize  Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function indreams_customize_options_register( $wp_customize ) {
		$wp_customize->get_section('title_tagline')->priority = 1;
	    $wp_customize->remove_section('colors');
	    $wp_customize->remove_section('header_image');

	    /* ========================================
	                Panel: Slider Options
	       ======================================== */
	    $wp_customize->add_panel( 'indreams_slider_panel', array(
	    	'priority'       => 5,
	    	'title'          => __( 'Sliders', 'indreams' ),
	    	'capability'     => 'edit_theme_options',
	    	'theme_supports' => '',
	    	'description'    => '',
	    	'active_callback'=> '', // is_front_page
	    ) );

	    // Section: First Slide.
	    $wp_customize->add_section( 'indreams_first_slide_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_slider_panel',
	    	'title'          => __( 'First Slide', 'indreams' ),
	    ) );

	    //Setting: First Slide Image.
	    $wp_customize->add_setting( 'first_slide_image', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'indreams_sanitize_upload', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: First Slide Image.
	    $wp_customize->add_control( new WP_Customize_Image_Control(
	    	$wp_customize,
	    	'first_slide_image',
	    	array(
	    		'label'      => __( 'Slide image', 'indreams' ),
	    		'section'    => 'indreams_first_slide_section',
	    		'settings'   => 'first_slide_image',
	    	)
	    ) );


	    // Setting: First Slide Title.
	    $wp_customize->add_setting( 'first_slide_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: First Slide Title.
	    $wp_customize->add_control( 'first_slide_title', array(
	    	'label'       => __( 'Slide Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_slide_section',
	    	'type'        => 'textarea', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'first_slide_title',
	    ) );

	    // Setting: First Slide Sub-Title.
	    $wp_customize->add_setting( 'first_slide_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: First Slide Sub-Title.
	    $wp_customize->add_control( 'first_slide_subtitle', array(
	    	'label'       => __( 'Slide Sub-title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_slide_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'first_slide_subtitle',
	    ) );

	    // Setting: First Slide Button Text.
	    $wp_customize->add_setting( 'first_slide_btn_text', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: First Slide Button Text.
	    $wp_customize->add_control( 'first_slide_btn_text', array(
	    	'label'       => __( 'Slide button text', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_slide_section',
	    	'type'        => 'text',
	    	'settings'    => 'first_slide_btn_text',
	    ) );

	    // Setting: First Slide Button Link.
	    $wp_customize->add_setting( 'first_slide_btn_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: First Slide Button Link.
	    $wp_customize->add_control( 'first_slide_btn_link', array(
	    	'label'       => __( 'Slide button link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_slide_section',
	    	'type'        => 'url', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'first_slide_btn_link',
	    ) );


	    // Section: Second Slide.
	    $wp_customize->add_section( 'indreams_second_slide_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_slider_panel',
	    	'title'          => __( 'Second Slide', 'indreams' ),
	    ) );

	    //Setting: Second Slide Image.
	    $wp_customize->add_setting( 'second_slide_image', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'indreams_sanitize_upload', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: Second Slide Image.
	    $wp_customize->add_control( new WP_Customize_Image_Control(
	    	$wp_customize,
	    	'second_slide_image',
	    	array(
	    		'label'      => __( 'Slide image', 'indreams' ),
	    		'section'    => 'indreams_second_slide_section',
	    		'settings'   => 'second_slide_image',
	    	)
	    ) );


	    // Setting: Second Slide Title.
	    $wp_customize->add_setting( 'second_slide_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: Second Slide Title.
	    $wp_customize->add_control( 'second_slide_title', array(
	    	'label'       => __( 'Slide Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_slide_section',
	    	'type'        => 'textarea', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'second_slide_title',
	    ) );

	    // Setting: Second Slide Sub-Title.
	    $wp_customize->add_setting( 'second_slide_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Second Slide Sub-Title.
	    $wp_customize->add_control( 'second_slide_subtitle', array(
	    	'label'       => __( 'Slide Sub-title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_slide_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'second_slide_subtitle',
	    ) );

	    // Setting: Second Slide Button Text.
	    $wp_customize->add_setting( 'second_slide_btn_text', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Second Slide Button Text.
	    $wp_customize->add_control( 'second_slide_btn_text', array(
	    	'label'       => __( 'Slide button text', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_slide_section',
	    	'type'        => 'text',
	    	'settings'    => 'second_slide_btn_text',
	    ) );

	    // Setting: Second Slide Button Link.
	    $wp_customize->add_setting( 'second_slide_btn_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Second Slide Button Link.
	    $wp_customize->add_control( 'second_slide_btn_link', array(
	    	'label'       => __( 'Slide button link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_slide_section',
	    	'type'        => 'url', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'second_slide_btn_link',
	    ) );
	    

	    // Section: Third Slide.
	    $wp_customize->add_section( 'indreams_third_slide_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_slider_panel',
	    	'title'          => __( 'Third Slide', 'indreams' ),
	    ) );

	    //Setting: Third Slide Image.
	    $wp_customize->add_setting( 'third_slide_image', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'indreams_sanitize_upload', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: Third Slide Image.
	    $wp_customize->add_control( new WP_Customize_Image_Control(
	    	$wp_customize,
	    	'third_slide_image',
	    	array(
	    		'label'      => __( 'Slide image', 'indreams' ),
	    		'section'    => 'indreams_third_slide_section',
	    		'settings'   => 'third_slide_image',
	    	)
	    ) );


	    // Setting: Third Slide Title.
	    $wp_customize->add_setting( 'third_slide_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: Third Slide Title.
	    $wp_customize->add_control( 'third_slide_title', array(
	    	'label'       => __( 'Slide Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_slide_section',
	    	'type'        => 'textarea', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'third_slide_title',
	    ) );

	    // Setting: Third Slide Sub-Title.
	    $wp_customize->add_setting( 'third_slide_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Third Slide Sub-Title.
	    $wp_customize->add_control( 'third_slide_subtitle', array(
	    	'label'       => __( 'Slide Sub-title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_slide_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'third_slide_subtitle',
	    ) );

	    // Setting: Third Slide Button Text.
	    $wp_customize->add_setting( 'third_slide_btn_text', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Third Slide Button Text.
	    $wp_customize->add_control( 'third_slide_btn_text', array(
	    	'label'       => __( 'Slide button text', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_slide_section',
	    	'type'        => 'text',
	    	'settings'    => 'third_slide_btn_text',
	    ) );

	    // Setting: Third Slide Button Link.
	    $wp_customize->add_setting( 'third_slide_btn_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: Third Slide Button Link.
	    $wp_customize->add_control( 'third_slide_btn_link', array(
	    	'label'       => __( 'Slide button link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_slide_section',
	    	'type'        => 'url', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'third_slide_btn_link',
	    ) );


	    /* ========================================
	                About Us Section
	       ======================================== */
	    $wp_customize->add_section( 'indreams_about_us_section', array(
	    	'priority'       => 10,
	    	'title'          => __( 'About Us', 'indreams' ),
	    ) );

	    // Setting: First Slide Title.
	    $wp_customize->add_setting( 'about_us_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    // Control: First Slide Title.
	    $wp_customize->add_control( 'about_us_title', array(
	    	'label'       => __( 'About Us Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_about_us_section',
	    	'type'        => 'textarea', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'about_us_title',
	    ) );

	    // Setting: First Slide Sub-Title.
	    $wp_customize->add_setting( 'about_us_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: First Slide Sub-Title.
	    $wp_customize->add_control( 'about_us_subtitle', array(
	    	'label'       => __( 'About Us Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_about_us_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'about_us_subtitle',
	    ) );


	    /* ========================================
	                Panel: Service Section
	       ======================================== */
	    $wp_customize->add_panel( 'indreams_service_panel', array(
	    	'priority'       => 15,
	    	'title'          => __( 'Services', 'indreams' ),
	    	'capability'     => 'edit_theme_options',
	    	'theme_supports' => '',
	    	'description'    => '',
	    	'active_callback'=> '', // is_front_page
	    ) );

	    $wp_customize->add_section( 'indreams_service_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_service_panel',
	    	'title'          => __( 'Heading & Sub-heading Options', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'service_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', // esc_attr, esc_textarea, absint, esc_url_raw, sanitize_hex_color, wp_strip_all_tags, wp_filter_nohtml_kses  // Basically to_json.
	    	'theme_supports' 	   => '', // Optional. This can be used to hide a setting if the theme lacks support for a specific feature (using add_theme_support).
	    ) );

	    $wp_customize->add_control( 'service_title', array(
	    	'label'       => __( 'Service Heading', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_service_section',
	    	'type'        => 'textarea', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
	    	'settings'    => 'service_title',
	    ) );

	    $wp_customize->add_setting( 'service_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'service_subtitle', array(
	    	'label'       => __( 'Service Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'service_subtitle',
	    ) );

	    /* 
	     * First Service Setting
	     */
	    $wp_customize->add_section( 'indreams_first_service_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_service_panel',
	    	'title'          => __( 'First Service', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'first_service_icon', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'first_service_icon', array(
	    	'label'       => __( 'Service Icon', 'indreams' ),
	    	'description' => 'Write here class name for the icon of <a target="_blank" href="http://getbootstrap.com/components/">Glyphicons.</a>',
	    	'section'     => 'indreams_first_service_section',
	    	'type'        => 'text',
	    	'settings'    => 'first_service_icon',
	    ) );

	    $wp_customize->add_setting( 'first_service_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'first_service_title', array(
	    	'label'       => __( 'Service Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'first_service_title',
	    ) );

	    $wp_customize->add_setting( 'first_service_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'first_service_subtitle', array(
	    	'label'       => __( 'Service Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'first_service_subtitle',
	    ) );

	    $wp_customize->add_setting( 'first_service_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'first_service_link', array(
	    	'label'       => __( 'Service link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_first_service_section',
	    	'type'        => 'url',
	    	'settings'    => 'first_service_link',
	    ) );


	    /* 
	     * Second Service Setting
	     */
	    $wp_customize->add_section( 'indreams_second_service_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_service_panel',
	    	'title'          => __( 'Second Service', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'second_service_icon', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'second_service_icon', array(
	    	'label'       => __( 'Service Icon', 'indreams' ),
	    	'description' => 'Write here class name for the icon of <a target="_blank" href="http://getbootstrap.com/components/">Glyphicons.</a>',
	    	'section'     => 'indreams_second_service_section',
	    	'type'        => 'text',
	    	'settings'    => 'second_service_icon',
	    ) );

	    $wp_customize->add_setting( 'second_service_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'second_service_title', array(
	    	'label'       => __( 'Service Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'second_service_title',
	    ) );

	    $wp_customize->add_setting( 'second_service_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'second_service_subtitle', array(
	    	'label'       => __( 'Service Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'second_service_subtitle',
	    ) );

	    $wp_customize->add_setting( 'second_service_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'second_service_link', array(
	    	'label'       => __( 'Service link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_second_service_section',
	    	'type'        => 'url',
	    	'settings'    => 'second_service_link',
	    ) );


	    /* 
	     * Third Service Setting
	     */
	    $wp_customize->add_section( 'indreams_third_service_section', array(
	    	'priority'       => 1,
	    	'panel'          => 'indreams_service_panel',
	    	'title'          => __( 'Third Service', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'third_service_icon', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'third_service_icon', array(
	    	'label'       => __( 'Service Icon', 'indreams' ),
	    	'description' => 'Write here class name for the icon of <a target="_blank" href="http://getbootstrap.com/components/">Glyphicons.</a>',
	    	'section'     => 'indreams_third_service_section',
	    	'type'        => 'text',
	    	'settings'    => 'third_service_icon',
	    ) );

	    $wp_customize->add_setting( 'third_service_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'third_service_title', array(
	    	'label'       => __( 'Service Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'third_service_title',
	    ) );

	    $wp_customize->add_setting( 'third_service_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'third_service_subtitle', array(
	    	'label'       => __( 'Service Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_service_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'third_service_subtitle',
	    ) );

	    $wp_customize->add_setting( 'third_service_link', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_url_raw',
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'third_service_link', array(
	    	'label'       => __( 'Service link', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_third_service_section',
	    	'type'        => 'url',
	    	'settings'    => 'third_service_link',
	    ) );


	    /* ========================================
	                Blogs Section
	       ======================================== */
	    $wp_customize->add_section( 'indreams_blog_section', array(
	    	'priority'       => 20,
	    	'title'          => __( 'Blog Section', 'indreams' ),
	    ) );

	    // Setting: First Slide Title.
	    $wp_customize->add_setting( 'blog_title', array(
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_attr', 
	    	'theme_supports' 	   => '',
	    ) );

	    // Control: First Slide Title.
	    $wp_customize->add_control( 'blog_title', array(
	    	'label'       => __( 'Blog Section Title', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_blog_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'blog_title',
	    ) );

	    $wp_customize->add_setting( 'blog_subtitle', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'blog_subtitle', array(
	    	'label'       => __( 'Blog Section Description', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_blog_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'blog_subtitle',
	    ) );



	    /* ========================================
	                   Footer Section
	       ======================================== */
	    $wp_customize->add_section( 'indreams_footer_section', array(
	    	'priority'       => 25,
	    	'title'          => __( 'Footer Section', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'footer_widget_style', array(
        	'default'              => '3',
	    	'transport'            => 'refresh',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'indreams_sanitize_choices', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'footer_widget_style', array(
	    	'label'       => __( 'Widget Style', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_footer_section',
	    	'type'        => 'radio',
	    	'settings'    => 'footer_widget_style',
	    	'choices'     => array(
	                            '4' => 'Four Widget',
	                            '3' => 'Three Widget',
	                            '2' => 'Two Widget',
	                            '1' => 'One Widget',
	                        ),
	    ) );

	    $wp_customize->add_setting( 'footer_credits', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'wp_kses_allow_span', 
	    	'theme_supports' 		=> '',
	    ) );

	    $wp_customize->add_control( 'footer_credits', array(
	    	'label'       => __( 'Footer Text', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_footer_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'footer_credits',
	    ) );
	    
	    /* ========================================
	                   Footer Section
	       ======================================== */
	    $wp_customize->add_section( 'indreams_custom_style_section', array(
	    	'priority'       => 25,
	    	'title'          => __( 'Custom Style', 'indreams' ),
	    ) );

	    $wp_customize->add_setting( 'custom_theme_color', array(
	    	'default'              => '#2196F3',
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'sanitize_hex_color', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( new WP_Customize_Color_Control(
	    	$wp_customize,
	    	'custom_theme_color',
	    	array(
	    		'label'      => __( 'Theme Color', 'indreams' ),
	    		'section'    => 'indreams_custom_style_section',
	    		'settings'   => 'custom_theme_color',
	    	)
	    ) );
	    

	    $wp_customize->add_setting( 'custom_style', array(
	    	'capability'           => 'edit_theme_options',
	    	'sanitize_callback'    => 'esc_textarea', 
	    	'theme_supports' 	   => '',
	    ) );

	    $wp_customize->add_control( 'custom_style', array(
	    	'label'       => __( 'Custom CSS', 'indreams' ),
	    	'description' => '',
	    	'section'     => 'indreams_custom_style_section',
	    	'type'        => 'textarea',
	    	'settings'    => 'custom_style',
	    ) );
	}
}



/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function indreams_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

/**
* function to sanitize the html strings
* Allowed only the span tag
* @param string $value
* @return string
*/
function wp_kses_allow_span($value) {
   $allowedtags = array(
       'span' => array(
           'class' => array()
       )
   );
   $value = wp_kses($value, $allowedtags);
   return $value;
}


function indreams_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}