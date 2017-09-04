<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wrtPageOperations {
    /* Function to create page */

    public function create_plugin_pages($page_title, $page_code, $shortcode_atr = NULL, $template = 'default', $is_content = false) {
        global $wpdb;

        $the_page_title = $page_title;
        $the_page_name = $page_title;

        // the menu entry...
        delete_option($page_code . "_title");
        add_option($page_code . "_title", $the_page_title, '', 'yes');
        // the slug...
        delete_option($page_code . "_name");
        add_option($page_code . "_name", $the_page_name, '', 'yes');
        // the id...
        delete_option($page_code . "_id");
        add_option($page_code . "_id", '0', '', 'yes');

        $the_page = get_page_by_title($the_page_title);

        if (!$the_page) {

            // Create post object
            $_p = array();
            $_p['post_title'] = $the_page_title;
            $atr = '';
            if (!empty($shortcode_atr)) {
                if (is_array($shortcode_atr)) {
                    foreach ($shortcode_atr as $key => $val) {
                        $atr .= " $key=$value";
                    }
                } else {
                    $atr = " $shortcode_atr";
                }
            }
            if ($is_content) {
                $_p['post_content'] = $atr;
            } else {
                $_p['post_content'] = "[" . $page_code . " $atr]";
            }
            if ($page_code) {
                $_p['post_name'] = $page_code;
            }
            $_p['post_status'] = 'publish';
            $_p['post_type'] = 'page';
            $_p['comment_status'] = 'closed';
            $_p['ping_status'] = 'closed';
            $_p['post_category'] = array(1); // the default 'Uncatrgorised'
            // Insert the post into the database
            $the_page_id = wp_insert_post($_p);
        } else {
            // the plugin may have been previously active and the page may just be trashed...

            $the_page_id = $the_page->ID;

            //make sure the page is not trashed...
            $the_page->post_status = 'publish';
            $the_page_id = wp_update_post($the_page);
        }

        if (isset($the_page_id) && !empty($the_page_id)) {
            update_post_meta($the_page_id, '_wp_page_template', $template);
        }

        delete_option($page_code . "_id");
        add_option($page_code . "_id", $the_page_id);
    }

    /* Function to delete page */

    function remove_plugin_pages($page_code) {
        global $wpdb;
        $the_page_title = get_option($page_code . "_title");
        $the_page_name = get_option($page_code . "_name");
        //  the id of our page...
        $the_page_id = get_option($page_code . '_id');   /* get the page id */
        if (empty($the_page_id)) {
            $page = get_page_by_path($page_code);
            $the_page_id = isset($page->ID) ? $page->ID : "";
        }
        if ($the_page_id) {
            wp_delete_post($the_page_id, true); // this will trash, not delete
        }
        delete_option($page_code . "_title");
        delete_option($page_code . "_name");
        delete_option($page_code . "_id");
    }

}
