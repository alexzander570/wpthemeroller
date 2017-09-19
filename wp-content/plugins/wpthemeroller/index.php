<?php
/*
* Plugin Name: Wp Theme Roller
* Plugin URI: 
* Description: This is a plugin to provide a feature to customize the theme styling to the each and every user in the system. When this plugin is activated a customize button is the visible at the right side slider. Using this feature user will be able to chustomize font properties, background properties, border properties and other  basic properties.
* Author: Rohit Gupta
* Version: 1.0
* Author URI: 
*/

define ("FONTWEIGHT", serialize (array ("Select","Normal", "100", "200", "300", "400", "500", "600", "700", "800", "900", "Bold", "Bolder", "Lighter")));
define ("FONTFAMILY", serialize (array('Select', 'Georgia, serif', '"Palatino Linotype", "Book Antiqua", Palatino, serif', '"Times New Roman", Times, serif', 'Arial, Helvetica, sans-serif', '"Arial Black", Gadget, sans-serif', '"Comic Sans MS", cursive, sans-serif', 'Impact, Charcoal, sans-serif', '"Lucida Sans Unicode", "Lucida Grande", sans-serif', 'Tahoma, Geneva, sans-serif', '"Trebuchet MS", Helvetica, sans-serif', 'Verdana, Geneva, sans-serif', '"Courier New", Courier, monospace', '"Lucida Console", Monaco, monospace')));
define ("BORDERSTYLE", serialize (array ("Select", "none", "hidden", "dotted", "dashed", "solid", "double", "groove", "ridge", "inset", "outset", "initial", "inherit")));
define("DISPLAYTYPE", serialize(array("Select","none", "inline", "block", "inline-block","flex", "inline-flex", "inline-table", "list-item", "run-in", "table","table-caption","table-column-group","table-header-group","table-footer-group","table-row-group","table-cell","table-column","table-row","initial","inherit")));

define("FLOAT", serialize(array("Select", "left", "right", "none")));

define("TEXTALIGN", serialize(array("Select", "left", "right", "justify", "center")));
define("TEXTDECORATION", serialize(array("Select", "none", "underline", "overline", "line-through", "blink")));
define("TEXTTRANSFORM", serialize(array("Select", "none", "capitalize", "uppercase", "lowercase")));


class wpThemeRoller{
    function __construct(){
        $this->includeFiles();
        $this->addAction();
        $this->addFilters();
        $this->addShortcodes();
    }
    public function addAction(){
        $user_style_operation_obj = new wrtUserStyleOperations();
        add_action( 'init', array($user_style_operation_obj, 'getCurrentUserStyle'));
        add_action( 'admin_menu', array($this,'AddAdminMenu') );
        add_action( 'wp_loaded', array($this, 'register_all_scripts'));
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueueStylesAndScripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'adminEnqueueStylesAndScripts' ) );
        add_action( 'wp_footer', array($this, 'theme_settings_button'));
    }
    function register_all_scripts(){
        wp_register_script('jQuery', plugins_url('utilities/js/jquery-3.2.1.min.js', __FILE__), null, null);
        wp_register_script('jQueryUi', plugins_url('utilities/js/jquery-ui.min.js', __FILE__), array('jQuery'), null);
        wp_register_script('colorPickerJs', plugins_url('utilities/js/jquery.minicolors.min.js', __FILE__), array('jQuery'), null, null);
        wp_register_script('fontPickerJs', plugins_url('utilities/js/jquery.fontselect.js', __FILE__), array('jQuery'), null, null);
        wp_register_script('bootstrapJs', plugins_url('utilities/js/bootstrap.min.js', __FILE__), array('jQuery'), null, null);
        wp_register_script('WrtBasicJs', plugins_url('utilities/js/jQueryWrtBasicJs.js', __FILE__),array('jQuery', 'colorPickerJs', 'fontPickerJs'), null, null);
        
        wp_register_style('jqueryUiCss', plugins_url('utilities/css/jquery-ui.min.css', __FILE__), null, '1.0', null);
        wp_register_style('colorPickerCss', plugins_url('utilities/css/jquery.minicolors.css', __FILE__), null, '1.0', null);
        wp_register_style('bootstrapCss', plugins_url('utilities/css/bootstrap.min.css', __FILE__), null, '1.0', null);
        wp_register_style('bootstrapCssMap', plugins_url('utilities/css/bootstrap.min.css.map', __FILE__), null, '1.0', null);
        wp_register_style('bootstrapRebootCss', plugins_url('utilities/css/bootstrap-theme.min.css', __FILE__), null, '1.0', null);
        wp_register_style('fontselector', plugins_url('utilities/css/fontselect.css', __FILE__), null, '1.0', null);
        wp_register_style('wrt_custom_style', plugins_url('utilities/css/wrt_dummy_style.css', __FILE__), null, '1.0', null);
        wp_register_style('wrt_style', plugins_url('utilities/css/wrt_style.css', __FILE__), null, '1.0', null);
    }
    function adminEnqueueStylesAndScripts(){
        wp_enqueue_script('jQuery');
        wp_enqueue_script('jQueryUi');
        wp_enqueue_script('colorPickerJs');
        wp_enqueue_script('fontPickerJs');
        wp_enqueue_script('bootstrapJs');
        wp_enqueue_script('WrtBasicJs');
        wp_localize_script( 'WrtBasicJs', 'ajaxobj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'siteurl' =>site_url() ) );
        wp_enqueue_style('jqueryUiCss');
        wp_enqueue_style('colorPickerCss');
        wp_enqueue_style('bootstrapCss');
        wp_enqueue_style('bootstrapCssMap');
        wp_enqueue_style('bootstrapRebootCss');
        wp_enqueue_style('fontselector');
        wp_enqueue_style('wrt_style');
        wp_enqueue_style('wrt_custom_style');
    }
    function AddAdminMenu() {
        $wrt_short_code_page_obj = new wrtShortCodePages();
	add_menu_page( 'Theme coustomizer', 'WP Theme Coustomizer', 'manage_options', 'wrt-theme-customizer', array($wrt_short_code_page_obj, 'wrtThemeCustomizer'),'', 60 );
        add_submenu_page( 'wrt-theme-customizer', 'CSS Properties', 'CSS Properties', 'manage_options', 'wrt-css-properties', array($wrt_short_code_page_obj, 'wrtCssProperties') );
    }
   
    public function enqueueStylesAndScripts(){
        wp_enqueue_script('jQuery');
        wp_enqueue_script('jQueryUi');
        wp_enqueue_script('colorPickerJs');
        wp_enqueue_script('fontPickerJs');
        wp_enqueue_script('bootstrapJs');
        wp_enqueue_script('WrtBasicJs');
        wp_localize_script( 'WrtBasicJs', 'ajaxobj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
        
        wp_enqueue_style('jqueryUiCss');
        wp_enqueue_style('colorPickerCss');
        wp_enqueue_style('bootstrapCss');
        wp_enqueue_style('bootstrapCssMap');
        wp_enqueue_style('bootstrapRebootCss');
        wp_enqueue_style('fontselector');
        wp_enqueue_style('wrt_custom_style');
        wp_enqueue_style('wrt_style');
    }
    public function includeFiles(){
        include_once 'includes/wrt_db_operations.php';
        include_once 'includes/add_wrt_classes.php';
        include_once 'includes/wrt_page_operations.php';
        include_once 'includes/wrt_shortcode_pages.php';
        include_once 'includes/wrt_user_style_operations.php';
        include_once 'includes/wrt_generate_html_tags.php';
    }
    static function createWrtPluginPages(){
        $wrtPageOperations_obj = new wrtPageOperations();
        $wrtPageOperations_obj->create_plugin_pages('Theme Settings', 'theme-settings', '', 'Full-Width' );
        $wrtPageOperations_obj->create_plugin_pages('WRT Demo Page', 'wrt-demo-page', '', 'Full-Width' );
    }
    static function removeWrtPluginPages(){
        $wrtPageOperations_obj = new wrtPageOperations();
        $wrtPageOperations_obj->remove_plugin_pages('theme-settings' );
        $wrtPageOperations_obj->remove_plugin_pages('wrt-demo-page' );
    }
    function addShortcodes(){
        $wrt_short_code_page_obj = new wrtShortCodePages();
        add_shortcode( 'theme-settings' , array($wrt_short_code_page_obj, 'wrtCssProperties') );
        add_shortcode( 'wrt-demo-page' , array($wrt_short_code_page_obj, 'wrtDemoPage') );
    }
    
    public function addFilters(){
        
    }
    
    function theme_settings_button(){
        if(is_user_logged_in() && !is_page('wrt-demo-page')){
            echo '<div class="wrt_customize_button" title="Customize site" data-placement="left"><a href="'. get_permalink(get_page_by_path('theme-settings')).'">Customize</a></div>';
        }
    }
}

register_activation_hook( __FILE__, array( 'wpThemeRoller', 'createWrtPluginPages' ) );
register_deactivation_hook( __FILE__, array( 'wpThemeRoller', 'removeWrtPluginPages' ) );
$am = new wpThemeRoller;