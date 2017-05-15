<?php

function ghd_register_project() {

    $singular = 'Project';
    $plural = 'Projects';

    $labels = array(
        'name'                  => $plural,
        'singular_name'         => $singular,
        'add_name'              => 'Add New',
        'add_new_item'          => 'Add New ' . $singular,
        'edit'                  => 'Edit',
        'edit_item'             => 'Edit ' . $singular,
        'view'                  => 'View ' . $singular,
        'search_tern'           => 'Search ' . $plural,
        'parent'                => 'Parent ' . $singular,
        'not_found'             => 'No ' . $plural . ' found',
        'not_found_in_trash'    => 'No ' . $plural . ' in Trash'
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'exclude_from Search'   => false,
        'show_in_nav_menus'     => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-admin-tools',
        'can_export'            => true,
        'delete_with_user'      => false,
        'hierarchical'          => false,
        'has_archive'           => true,
        'query_var'             => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        // 'capabilities'          => array(),
        'rewrite'               => array(
            'slug'                  => 'our-work',
            'with_front'            => true,
            'pages'                 => false,
            'feeds'                 => true
        ),
        'supports'                  => array( 'title' )
    );

    register_post_type( $singular, $args );
}
add_action( 'init', 'ghd_register_project' );

function gelotte_add_project_taxonomy() {

    $plural = 'Project Types';
    $singular = 'Project Type';

    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'search_items' => 'Search ' . $plural,
        'popular_items' => 'Popular ' . $plural,
        'all_items' => 'All ' . $plural,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Edit ' . $singular,
        'update_item' => 'Update ' . $singular,
        'add_new_item' => 'Add New ' . $singular,
        'separate_items_with_commas' => 'Separate ' . $plural . ' with commas.',
        'add_or_remove_items' => 'Add or remove ' . $plural . '.',
        'choose_from_most_used' => 'Choose from most used ' . $plural . '.',
        'not_found' => 'No ' . $plural . ' found.',
        'menu_name' => $plural

    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'project-type'),
    );

    register_taxonomy( 'project_type', 'project', $args );
}
add_action( 'init', 'gelotte_add_project_taxonomy' );