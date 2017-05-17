<?php
/**
 * Plugin Name: GHD Custom Post Types and Taxonomies
 * Plugin URI: http://www.spyderbit.com
 * Description: A simple plugin that adds custom post types and taxonomies
 * Version: 0.1
 * Author: Bob Martin
 * Author URI: http://www.spyderbit.com
 * License: GPL2
 */

/*  Copyright YEAR  YOUR_NAME  (email : your@email.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Custom Post Types */
function ghd_custom_post_types() {

    /* Custom Project Type */

    $plural_name = 'Projects';
    $singular_name = 'Project';
    
    $labels = array(
        'name'               => $plural_name,
        'singular_name'      => $singular_name,
        'menu_name'          => $plural_name,
        'name_admin_bar'     => $singular_name,
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New ' . $singular_name,
        'new_item'           => 'New ' . $singular_name,
        'edit_item'          => 'Edit ' . $singular_name,
        'view_item'          => 'View ' . $singular_name,
        'all_items'          => 'All ' .$plural_name,
        'search_items'       => 'Search ' . $plural_name,
        'parent_item_colon'  => 'Parent ' . $plural_name .'\'',
        'not_found'          => 'No ' . $plural_name . ' found.',
        'not_found_in_trash' => 'No ' . $plural_name . ' found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-admin-tools',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'our-work/projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'revisions' ),
        // ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' )
        'taxonomies'            => array()
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'ghd_custom_post_types' );

// Flush rewrite rules to add permalink slugs
function ghd_rewrite_flush() {
    ghd_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'ghd_rewrite_flush' );

/* Custom Taxonomies */
function ghd_custom_taxonomies() {

    /* Type of Project categories */

    $plural_name = 'Types of Projects';
    $singular_name = 'Type of Project';

    $labels = array(
        'name'              => $plural_name,
        'singular_name'     => $singular_name,
        'search_items'      => 'Search ' . $plural_name,
        'all_items'         => 'All ' . $plural_name,
        'parent_item'       => 'Parent ' . $singular_name,
        'parent_item_colon' => 'Parent ' . $singular_name . ':',
        'edit_item'         => 'Edit ' . $singular_name,
        'update_item'       => 'Update ' . $singular_name,
        'add_new_item'      => 'Add New ' . $singular_name,
        'new_item_name'     => 'New ' . $singular_name,
        'menu_name'         => $singular_name
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-types' ),
    );

    register_taxonomy( 'project-types', array( 'project' ), $args );

    /* Project architect tags (non-hierarchical) */

    $plural_name = 'Project Architects';
    $singular_name = 'Project Architect';


    $labels = array(
        'name'              => $plural_name,
        'singular_name'     => $singular_name,
        'search_items'      => 'Search ' . $plural_name,
        'all_items'         => 'All ' . $plural_name,
        'parent_item'       => 'Parent ' . $singular_name,
        'parent_item_colon' => 'Parent ' . $singular_name . ':',
        'edit_item'         => 'Edit ' . $singular_name,
        'update_item'       => 'Update ' . $singular_name,
        'add_new_item'      => 'Add New ' . $singular_name,
        'new_item_name'     => 'New ' . $singular_name,
        'menu_name'         => $singular_name
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-architects' ),
    );

    register_taxonomy( 'project-architects', array( 'project' ), $args );

    /* Type of Project tags (non-hierarchical) */

    $plural_name = 'Project Tags';
    $singular_name = 'Project Tag';


    $labels = array(
        'name'                       => $plural_name,
        'singular_name'              => $singular_name,
        'search_items'               => 'Search Moods',
        'popular_items'              => 'Popular Moods',
        'all_items'                  => 'All Moods',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit ' . $singular_name,
        'update_item'                => 'Update ' . $singular_name,
        'add_new_item'               => 'Add New  ' . $singular_name,
        'new_item_name'              => 'New '  . $singular_name . ' Name',
        'separate_items_with_commas' => 'Separate ' . $plural_name . ' with commas',
        'add_or_remove_items'        => 'Add or remove ' . $plural_name,
        'choose_from_most_used'      => 'Choose from the most used ' . $plural_name,
        'not_found'                  => 'No ' . $plural_name . ' found.',
        'menu_name'                  => $plural_name,
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => $plural_name ),
    );

    register_taxonomy( 'project-tags', array( 'project' ), $args );


}
add_action ( 'init', 'ghd_custom_taxonomies' );