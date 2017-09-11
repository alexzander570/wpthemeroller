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
        include (__DIR__.'templates/wrtCssProperties.php');
    }
}