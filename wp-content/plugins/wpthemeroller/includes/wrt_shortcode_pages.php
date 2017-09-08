<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtShortCodePages{
    public function wrtThemeCustomizer(){
        if(isset($_POST) && !empty($_POST)){
            echo '<pre>';print_r($_POST);die;
        }
        include (__DIR__.'/../templates/customizeTheme.php');
    }
    
    public function wrtCssProperties(){
        include (__DIR__.'templates/wrtCssProperties.php');
    }
}