<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wtrDbOperations{
    public function createTableUserCustomThemes(){
        global $wpdb;
        $table_name = $wpdb->prefix.'user_custom_themes';
        $charset_collate = $wpdb->get_charset_collate();
        $user_custom_table_sql = "CREATE TABLE IF NOT EXISTS {$table_name} (
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
}

$ct = new wtrDbOperations();
$user_custome_theme_tables = $ct->createTableUserCustomThemes();