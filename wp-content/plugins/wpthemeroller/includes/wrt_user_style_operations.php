<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtUserStyleOperations{
    public function getCurrentUserStyle(){
        $wrtDbOperations_obj = new wrtDbOperations();
        $style_sheet = $wrtDbOperations_obj->get_current_user_style_sheet();
        if(!empty($style_sheet)){
            $style_sheet = json_decode($style_sheet, true);
            $user_custom_style = "<style>";
            foreach($style_sheet as $class_name=>$styles){
                $user_custom_style .= ".{$class_name}{";
                foreach($styles as $style_prop=>$style_prop_value){
                    $user_custom_style .= $style_prop.':'.stripcslashes($style_prop_value).';';
                }
                $user_custom_style .= '}';
            }
            $user_custom_style .= "</style>";
            echo $user_custom_style;
        }
    }
}