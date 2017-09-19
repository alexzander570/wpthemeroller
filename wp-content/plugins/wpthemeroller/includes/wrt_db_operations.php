<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtDbOperations{
    function __construct(){
        global $wpdb;
        $this->user_custom_theme = $wpdb->prefix.'user_custom_themes';
        $this->current_user_id = get_current_user_id();
        add_action('wp_ajax_contact_form', array($this, 'saveUserStyleSheet'));
        add_action('wp_ajax_nopriv_contact_form', array($this, 'saveUserStyleSheet'));
        add_action('wp_ajax_get_user_custom_style', array($this, 'get_user_custom_style'));
        add_action('wp_ajax_get_user_custom_style', array($this, 'get_user_custom_style'));
    }
    public function createTableUserCustomThemes(){
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $user_custom_table_sql = "CREATE TABLE IF NOT EXISTS {$this->user_custom_theme} (
            id int(10) NOT NULL AUTO_INCREMENT, 
            user_id int(10) NOT NULL, 
            custom_styling varchar(2000) NOT NULL, 
            created_by int(10) NOT NULL, 
            created_on DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, 
            modified_by int(10), 
            modified_on DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, 
            PRIMARY KEY (id)) {$charset_collate}";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($user_custom_table_sql);
    }

    public function saveUserStyleSheet(){
        global $wpdb;
        $current_user_id = get_current_user_id();
        $response = array("status"=>"error");
        $serialized_data = isset($_POST['data'])?$_POST['data']:'';
        $user_style_sheet = array();
        wp_parse_str($serialized_data, $user_style_sheet);
        $user_style_sheet = $user_style_sheet['wrt'];
        $check_if_already_exists = $this->checkIfCurrentUserHasTheme($current_user_id);
        
        if($check_if_already_exists > 0){
            $current_user_style = json_decode($this->get_current_user_style_sheet($current_user_id), true);
            $new_style = wp_parse_args( $user_style_sheet, $current_user_style);
            
            foreach ($current_user_style as $class_name => $prop_value){
                foreach($user_style_sheet as $new_class_name => $new_prop_value){
                    if($class_name == $new_class_name){
                        foreach($prop_value as $prop=>$value){
                            foreach($new_prop_value as $new_prop => $new_value){
                                if($prop == $new_prop){
                                    if($value != $new_value){
                                        $new_style[$new_class_name][$prop] = $new_value;
                                    }else{
                                        $new_style[$new_class_name][$prop] = $value;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $new_style = json_encode($new_style);

            $result_set = $wpdb->update($this->user_custom_theme, array('custom_styling'=>$new_style, 'modified_by'=>$current_user_id, 'modified_on'=>date("Y-m-d h:i:s")), array('user_id'=>$current_user_id));
        }else{
            $user_style_sheet = json_encode($user_style_sheet);
            $result_set =  $wpdb->insert($this->user_custom_theme, array('user_id'=>$current_user_id, 'custom_styling'=>$user_style_sheet, 'created_by'=>$current_user_id, 'created_on'=>date("Y-m-d h:i:s")), array('%d', '%s', '%d', '%s'));
        }
        if($result_set > 0){
            $response = array("status"=>"success");
        }
        echo json_encode($response);
        die;
    }

    public function get_current_user_style_sheet($current_user_id){
        global $wpdb;
        $style_sheet = $wpdb->get_var($wpdb->prepare("SELECT custom_styling FROM {$this->user_custom_theme} WHERE user_id=%d", $current_user_id));
        return $style_sheet;
    }
    
    function checkIfCurrentUserHasTheme($current_user_id){
        global $wpdb;
        $style_sheet_count = $wpdb->get_var($wpdb->prepare("SELECT count(id) FROM {$this->user_custom_theme} WHERE user_id=%d", $current_user_id));
        return $style_sheet_count;
    }
    
    function get_user_custom_style(){
        global $wpdb;
        $user_style = array();
        $current_user_id = get_current_user_id();
        $class_name = isset($_POST['class_name'])?$_POST['class_name']:'';
        if($class_name != ''){
            $custom_style = json_decode($this->get_current_user_style_sheet($current_user_id), true);
            if(array_key_exists($class_name, $custom_style)){
                $user_style['data'] = $custom_style;
                $user_style['status'] = 'success';
            }
        }else{
            $user_style['status'] = 'notfound';
        }
        echo json_encode($user_style);
        die;
    }
}

$ct = new wrtDbOperations();
$user_custome_theme_tables = $ct->createTableUserCustomThemes();