<?php
/*
* Plugin Name: Wp Theme Roller
* Plugin URI: 
* Description: This is a plugin to provide a feature to customize the theme styling to the each and every user in the system. When this plugin is activated a customize button is the visible at the right side slider. Using this feature user will be able to chustomize font properties, background properties, border properties and other  basic properties.
* Author: Rohit Gupta
* Version: 1.0
* Author URI: 
*/

class wpThemeRoller{
    function __construct(){
        $this->addAction();
        $this->includeFiles();
        $this->addFilters();
        $this->addShortcodes();
    }
    public function addAction(){
        add_action( 'admin_menu', array($this,'AddAdminMenu') );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueueStylesAndScripts' ) );
    }
    function AddAdminMenu() {
	add_menu_page( 'Theme coustomizer', 'WP Theme Coustomizer', 'manage_options', 'my-unique-identifier', array($this, 'my_plugin_options'),'', 60 );
    }
    public function addFilters(){
        
    }
    public function enqueueStylesAndScripts(){
        wp_enqueue_script('angularJsMain', plugins_url('utilities/js/angular.min.js', __FILE__), null, null);
    }
    public function includeFiles(){
        include_once 'includes/wtr_db_operations.php';
        include_once 'includes/add_wrt_classes.php';
        include_once 'includes/wrt_page_operations.php';
    }
    static function createWrtPluginPages(){
        $wrtPageOperations_obj = new wrtPageOperations();
        $wrtPageOperations_obj->create_plugin_pages('Theme Settings', 'theme-settings' );
    }
    static function removeWrtPluginPages(){
        $wrtPageOperations_obj = new wrtPageOperations();
        $wrtPageOperations_obj->remove_plugin_pages('theme-settings' );
    }
    function addShortcodes(){
        add_shortcode( 'theme-settings' , array($this, 'my_plugin_options') );
    }
    function my_plugin_options(){
        echo 'Hi';
    }
}

register_activation_hook( __FILE__, array( 'wpThemeRoller', 'createWrtPluginPages' ) );
register_deactivation_hook( __FILE__, array( 'wpThemeRoller', 'removeWrtPluginPages' ) );
$am = new wpThemeRoller;