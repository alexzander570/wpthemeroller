<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddWrtClasses
 *
 * @author rohitgupta
 */
class addWrtClasses {
    function __construct() {
        $this->addClassesFilters();
    }
    public function addClassesFilters(){
        add_filter('nav_menu_css_class' , array($this, 'custom_nav_class') , 10 , 2);
    }
    function custom_nav_class($classes){
        if(in_array('current-menu-item', $classes)){
            $classes[] = "wrt_current_menu_class";
        }else{
            $classes[] = "wrt_menu_class";
        }
        return $classes;
    }
}

$add_wrt_classes = new addWrtClasses();