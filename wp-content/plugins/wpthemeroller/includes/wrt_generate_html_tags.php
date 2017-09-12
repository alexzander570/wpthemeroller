<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtGenerateHtmlTags{
    public function generateSelectBox($label_name, $box_value, $class_name, $css_prop_name, $serialized_data){
        $select_box_options = unserialize($serialized_data);
        $selected = '';
        $select_box = '<div class="col-lg-12 col-sm-12"><div class="form-group"><label for="text-field">'.$label_name.'</label><br><select class="form-control select_box_css_prop" data-classes="'.$class_name.'" data-prop="'.$css_prop_name.'" name="wrt['.$class_name.']['.$css_prop_name.']">';
        foreach($select_box_options as $value){
            $selected = '';
            if($box_value == $value){
                $selected = 'selected';
            }
            $select_box .= "<option value='".$value."' {$selected}>".ucfirst($value)."</option>";
        }
        $select_box .= '</select></div></div>';
        return $select_box;
    }
    public function geterateColorBox($label_name, $box_value, $class_name, $css_prop_name){
        return '<div class="col-lg-12 col-sm-12"><div class="form-group"><label for="'.$class_name.'_'.$css_prop_name.'">'.$label_name.'</label><br><input type="text" id="wrt_theme_body_background-color" name="wrt['.$class_name.']['.$css_prop_name.']" class="form-control demo"  data-classes="'.$class_name.'" data-prop="'.$css_prop_name.'" value="'.$box_value.'"></div></div>';
    }
    public function generateFontSelectBox($label_name, $box_value, $class_name, $css_prop_name){
        return '<div class="col-lg-12 col-sm-12"><div class="form-group"><label for="inline">'.$label_name.'</label><br/><span>(Current: '.$box_value.')</span><br/><div id="fontSelect" class="fontSelect" target_class="'.$class_name.'" data-font-family="'.$box_value.'"><div class="arrow-down"></div></div><input type="hidden" id="'.$class_name.'" name="wrt['.$class_name.']['.$css_prop_name.']" value="'.$box_value.'"/></div></div>';
    }
    public function generateTextBox($label_name, $box_value, $class_name, $css_prop_name){
        return '<div class="col-lg-12 col-sm-12"><div class="form-group"><label for="'.$class_name.'_'.$css_prop_name.'">'.$label_name.'</label><br><input type="text" class="form-control text_field_css_prop" value="'.$box_value.'" id="'.$class_name.'_'.$css_prop_name.'" name="wrt['.$class_name.']['.$css_prop_name.']" data-classes="'.$class_name.'" data-prop="'.$css_prop_name.'"></div></div>';
    }
}
