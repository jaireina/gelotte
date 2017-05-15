<?php
/*
Plugin Name: GHD Project
Description: This plugin allows you to create a project.
Author: Bob Martin
Author URI: http://www.spyderbit.com
Version: 0.0.1
License: GPL2
*/

if( !defined('ABSPATH') ) die();

require_once ( plugin_dir_path(__FILE__) . 'ghd-project-cpt.php' );
require_once ( plugin_dir_path(__FILE__) . 'ghd-project-render-admin.php' );
require_once ( plugin_dir_path(__FILE__) . 'ghd-project-fields.php' );

function ghd_admin_enqueue_scripts() {
    global $pagenow, $typenow;
    $screen =  get_current_screen();
    var_dump($screen->post_type);

    if ( $typenow == 'project' ) {
        wp_enqueue_style( 'ghd-admin-css', plugins_url( 'css/admin-projects.css', __FILE__ ) );
    }


}
add_action( 'admin_enque_scripts' , 'ghd_admin_enque_scripts' );
