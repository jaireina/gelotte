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

function ghd_custom_post_types() {

    $project_plural = 'Projects';
    $project_singular = 'Project';
    
    $labels = array(
        'name'               => $project_plural,
        'singular_name'      => $project_singular,
        'menu_name'          => $project_plural,
        'name_admin_bar'     => $project_singular,
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New ' . $project_singular,
        'new_item'           => 'New ' . $project_singular,
        'edit_item'          => 'Edit ' . $project_singular,
        'view_item'          => 'View ' . $project_singular,
        'all_items'          => 'All ' .$project_plural,
        'search_items'       => 'Search ' . $project_plural,
        'parent_item_colon'  => 'Parent ' . $project_plural .'\'',
        'not_found'          => 'No ' . $project_plural . ' found.',
        'not_found_in_trash' => 'No ' . $project_plural . ' found in Trash.',
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
        'supports'           => array( 'title', 'revisions' )
        // ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' )
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'ghd_custom_post_types' );