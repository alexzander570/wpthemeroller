<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtGenerateHtmlTags {

    public function generateSelectBox($label_name, $css_prop_name, $serialized_data, $prop_for='') {
        $select_box_options = unserialize($serialized_data);
        $selected = '';
        $hover_active = '';
        if($prop_for == 'hover'){
            $hover_active = 'hover';
        }
        $select_box = '<div class="form-group"><label for="text-field">' . $label_name . '</label><br /><select class="form-control select_box_css_prop" data-prop="' . $css_prop_name . '" id="' . $css_prop_name . '" " data-propfor="'.$hover_active.'">';
        foreach ($select_box_options as $value) {
            $option_value = $value;
            if($value == 'Select')
                $option_value = '';
        $select_box .= "<option value='{$option_value}' >" . ucfirst($value) . "</option>";
        }
        $select_box .= '</select></div>';
        return $select_box;
    }

    public function geterateColorBox($label_name, $css_prop_name, $prop_for='') {
        $hover_active = '';
        if($prop_for == 'hover'){
            $hover_active = 'hover';
        }
        return '<div class="form-group"><label for="' . $css_prop_name . '">' . $label_name . '</label><br /><input type="text" id="'.$css_prop_name.'" class="form-control demo" data-prop="'.$css_prop_name.'" data-propfor="'.$hover_active.'"/></div>';
    }

    public function generateTextBox($label_name, $css_prop_name, $prop_for='') {
        $hover_active = '';
        if($prop_for == 'hover'){
            $hover_active = 'hover';
        }
        return '<div class="form-group"><label for="'. $css_prop_name . '">' . $label_name . '</label><br /><input type="text" class="form-control text_field_css_prop" id="' . $css_prop_name . '"  data-propfor="'.$hover_active.'"/></div>';
    }

}
