<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtShortCodePages{
    public function wrtThemeCustomizer(){
        if(isset($_POST) && !empty($_POST)){
            $wrt_db_operation_obj = new wrtDbOperations();
            $user_style_sheet = isset($_POST['wrt'])?$_POST['wrt']:'';
            $wrt_db_operation_obj->saveUserStyleSheet(json_encode($user_style_sheet));
        }
        include (__DIR__.'/../templates/customizeTheme.php');
    }
    
    public function wrtCssProperties(){
        include (__DIR__.'templates/wrtCssProperties.php');
    }
}