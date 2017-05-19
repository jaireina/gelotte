<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_theme_support( 'custom-logo' );

function wp_socials_footer_menu() {
  register_nav_menu('socials-footer-menu',__( 'Socials Footer Menu' ));
}
add_action( 'init', 'wp_socials_footer_menu' );

function get_social_icons() {
    $attr = array (
        'width' => '12', //input only number, in pixel
        'height' => '12', //input only number, in pixel
        'margin' => '10', //input only number, in pixel
        'display' => 'horizontal', //horizontal | vertical
        'alignment' => 'center', //center | left | right
        'attr_id' => 'custom_icon_id', //add custom id to <ul> wraper
        'attr_class' => 'custom_icon_class', //add custom class to <ul> wraper
        'selected_icons' => array ( '2', '1', '3' ) //you can get the icon ID form All Icons page
    );
    if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
}

function ghd_add_scripts() {

    if ( !is_admin() ) {
        wp_register_script('jPushMenu', get_stylesheet_directory_uri() . '/js/jPushMenu.js', array('jquery'), '1.1.1');
        wp_enqueue_script('jPushMenu');
        wp_register_script('Letterbox', get_stylesheet_directory_uri() . '/js/letterbox.js', array('jquery'), '1.0');
        wp_enqueue_script('Letterbox');

        if ( is_single() && get_post_type()=='project' ) {
            wp_register_script('jQuery-flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '2.6.3');
            wp_enqueue_script('jQuery-flexslider');
            wp_register_script('flexslider-load', get_stylesheet_directory_uri() . '/js/flexsliderLoad.js', array('jquery'), '1.0.0');
            wp_enqueue_script('flexslider-load');
            wp_register_script('single-project-setup', get_stylesheet_directory_uri() . '/js/single-project-setup.js', array('jquery'), '0.1');
            wp_enqueue_script('single-project-setup');

            wp_register_style( 'flexslider-styles', get_stylesheet_directory_uri() . '/css/flexslider.css' );
            wp_enqueue_style( 'flexslider-styles' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'ghd_add_scripts' );