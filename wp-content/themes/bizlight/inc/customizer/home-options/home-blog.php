<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-blog-title'] = __('LATEST NEWS','bizlight');
$bizlight_customizer_defaults['bizlight-home-blog-enable'] = 1;
$bizlight_customizer_defaults['bizlight-home-blog-category'] = 0;

/*aboutoptions*/
$bizlight_sections['bizlight-home-blog-options'] =
    array(
        'priority'       => 175,
        'title'          => __( 'Home/Front Blog Options', 'bizlight' ),
    );


$bizlight_settings_controls['bizlight-home-blog-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Main Title', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'text',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blog-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Blog', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );


/*creating setting control for bizlight-fs-Category start*/
$bizlight_settings_controls['bizlight-home-blog-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Blog', 'bizlight' ),
            'description'           =>  __( 'Blog will only displayed from this category', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'category_dropdown',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
