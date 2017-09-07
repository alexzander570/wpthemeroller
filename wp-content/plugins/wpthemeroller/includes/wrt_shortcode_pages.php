<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtShortCodePages{
    public function wrtThemeCustomizer(){
        include (__DIR__.'/../templates/customizeTheme.php');
    }
    
    public function wrtCssProperties(){
        include (__DIR__.'templates/wrtCssProperties.php');
    }
}