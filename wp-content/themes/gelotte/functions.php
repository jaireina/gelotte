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

function get_template_name() {
    global $post;
    $file_name = get_page_template_slug( $post->ID );
    // $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

    return $file_name;
}

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

function wpb_adding_scripts() {
    wp_register_script('jPushMenu', get_stylesheet_directory_uri() . '/js/jPushMenu.js', array('jquery'), '1.1.1');
    wp_enqueue_script('jPushMenu');
    wp_register_script('Letterbox', get_stylesheet_directory_uri() . '/js/letterbox.js', array('jquery'), '1.0');
    wp_enqueue_script('Letterbox');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'project');
    return $post_types;
}
add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );