<?php
/*
* Plugin Name: Wp Theme Roller
* Plugin URI: 
* Description: This is a plugin to provide a feature to customize the theme styling to the each and every user in the system. When this plugin is activated a customize button is the visible at the right side slider. Using this feature user will be able to chustomize font properties, background properties, border properties and other  basic properties.
* Depends: Wp Page Operation 
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
        $this->createWrtPluginPages();
    }
    public function addAction(){
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueueStylesAndScripts' ) );
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
    public function createWrtPluginPages(){
        $wrt_page_operations_obj = new wrtPageOperations();
        $wrt_page_operations_obj->create_plugin_pages('Theme Settings', 'wrt-theme-settings', 'wrt-theme-settings');
    }
    private function addShortcodes(){
        
    }
}

$am = new wpThemeRoller;



