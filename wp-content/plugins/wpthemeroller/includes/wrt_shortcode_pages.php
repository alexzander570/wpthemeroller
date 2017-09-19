<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtShortCodePages{
    private $wrtDbOperations_obj, $wrtGenerateHtmlTags_obj;
    function __construct() {
        $this->wrtDbOperations_obj = new wrtDbOperations();
        $this->wrtGenerateHtmlTags_obj = new wrtGenerateHtmlTags();
        add_action("template_redirect", array($this, 'my_theme_redirect'));
    }
    function my_theme_redirect() {
        global $wp;
        $plugindir = __DIR__;
        if (isset($wp->query_vars["pagename"]) && $wp->query_vars["pagename"] == 'theme-settings') {
            $templatefilename = 'wrt_full_width_page.php';
            if (file_exists(TEMPLATEPATH . '/' . $templatefilename)) {
                $return_template = TEMPLATEPATH . '/' . $templatefilename;
            } else {
                $return_template = $plugindir . '/../templates/' . $templatefilename;
            }
            $this->do_theme_redirect($return_template);
        }
    }
    function do_theme_redirect($url) {
        global $post, $wp_query;
        if (have_posts()) {
            include($url);
            die();
        } else {
            $wp_query->is_404 = true;
        }
    }
    public function wrtThemeCustomizer(){
        
        if(isset($_POST) && !empty($_POST)){
            $user_style_sheet = isset($_POST['wrt'])?$_POST['wrt']:'';
            $this->wrtDbOperations_obj->saveUserStyleSheet(json_encode($user_style_sheet));
        }
        $user_style_sheet = json_decode($this->wrtDbOperations_obj->get_current_user_style_sheet(), true);
        include (__DIR__.'/../templates/customizeTheme.php');
    }
    
    public function wrtCssProperties(){
        include (__DIR__.'/../templates/wrtCssProperties.php');
    }

    public function wrtDemoPage(){
        include (__DIR__.'/../templates/wrtCustomizeThemeDemoPage.php');
    }
}