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

    public function addClassesFilters() {
        add_filter('body_class', array($this, 'wrtAddBodyClass'));
        add_filter('nav_menu_css_class', array($this, 'custom_nav_class'), 10, 2);
        add_filter('nav_menu_link_attributes', array($this, 'wrt_nav_menu_link_atts'), 10, 4);
    }

    function wrtAddBodyClass($classes) {
        $classes[] = 'wrt_theme_body';
        return $classes;
    }

    function custom_nav_class($classes) {

        if (in_array('current-menu-item', $classes)) {
            $classes[] = "wrt_current_menu_class";
        } else {
            $classes[] = "wrt_menu_class";
        }
        return $classes;
    }

    function wrt_nav_menu_link_atts($atts, $item, $args, $depth) {
        $new_atts = array('class' => 'wrt_menu_link_class');
        if (isset($atts['href'])) {
            $new_atts['href'] = $atts['href'];
        }
        return $new_atts;
    }
}

$add_wrt_classes = new addWrtClasses();
