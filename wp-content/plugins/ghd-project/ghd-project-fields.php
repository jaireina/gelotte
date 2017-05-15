<?php

function gelotte_add_custom_metabox() {

    add_meta_box(
        'gelotte_project_meta',
        'Project',
        'ghd_project_meta_callback',
        'project',
        'normal',
        'core'
    );
}
add_action( 'add_meta_boxes', 'gelotte_add_custom_metabox' );

function ghd_project_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'ghd_project_nonce' );
    $ghd_project_stored_meta = get_post_meta( $post->ID ); ?>

    <div>

        <!-- Text Editor for Project Desription -->
        <div class="meta">
            <div class="meta-th">
                <span><?php _e( 'Project Description' ); ?></span>
            </div>
        </div>
        <div class="meta-editor"></div>
        <?php

        $content = get_post_meta( $post->ID, 'project_description', true );
        $editor = 'project_description';
        $settings = array(
            'textarea_rows' => 4,
            'media_buttons' => false
        );

        wp_editor( $content, $editor, $settings);

        ?>

        <!-- Title for Project Team -->
        <div class="meta-row">
            <div class="meta-th">
                <label for="project-team" class="ghd-row-title"><?php _e( 'Project Team' ); ?></label>
            </div>
            <div class="meta-td">
                <input type="text" class="ghd-row-content" name="project_team" id="project-team"
                       value="<?php if ( ! empty ( $ghd_project_stored_meta['project_team'] ) ) {
                           echo esc_attr( $ghd_project_stored_meta['project_team'][0] );
                       } else { ?>Project Team<?php } ?>"/>
            </div>
        </div>

        <!-- Text Editor for Project Team Description -->
        <div class="meta">
            <div class="meta-th">
                <span><?php _e( 'Project Team Description' ); ?></span>
            </div>
        </div>
        <div class="meta-editor"></div>
        <?php

        $content = get_post_meta( $post->ID, 'project_team_description', true );
        $editor = 'project_team_description';
        $settings = array(
            'textarea_rows' => 4,
            'media_buttons' => false
        );

        wp_editor( $content, $editor, $settings);

        ?>

        <!-- Title for Relevant Links -->
        <div class="meta-row">
            <div class="meta-th">
                <label for="relevant-links" class="ghd-row-title"><?php _e( 'Relevant Links' ); ?></label>
            </div>
            <div class="meta-td">
                <input type="text" class="ghd-row-content" name="relevant_links" id="relevant-links"
                       value="<?php if ( ! empty ( $ghd_project_stored_meta['relevant_links'] ) ) {
                           echo esc_attr( $ghd_project_stored_meta['relevant_links'][0] );
                       } else { ?>Relevant Links<?php } ?>"/>
            </div>
        </div>

        <!-- Text Editor for Relevant Links Description -->
        <div class="meta">
            <div class="meta-th">
                <span><?php _e( 'Relevant Links Description' ); ?></span>
            </div>
        </div>
        <div class="meta-editor"></div>
        <?php

        $content = get_post_meta( $post->ID, 'relevant_links_description', true );
        $editor = 'relevant_links_description';
        $settings = array(
            'textarea_rows' => 4,
            'media_buttons' => false
        );

        wp_editor( $content, $editor, $settings);

        ?>

    </div>
    <?php
}

function ghd_project_meta_save( $post_id ) {
    // Checks Save Status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'ghd_project_nonce' ] ) && wp_verify_nonce( $_POST[ 'ghd_project_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Extra script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    if ( isset( $_POST[ 'project_description' ] ) ) {
        update_post_meta( $post_id, 'project_description', sanitize_text_field( $_POST[ 'project_description' ] ) );
    }
    if ( isset( $_POST[ 'project_team' ] ) ) {
        update_post_meta( $post_id, 'project_team', sanitize_text_field( $_POST[ 'project_team' ] ) );
    }
    if ( isset( $_POST[ 'project_team_description' ] ) ) {
        update_post_meta( $post_id, 'project_team_description', sanitize_text_field( $_POST[ 'project_team_description' ] ) );
    }
    if ( isset( $_POST[ 'relevant_links' ] ) ) {
        update_post_meta( $post_id, 'relevant_links', sanitize_text_field( $_POST[ 'relevant_links' ] ) );
    }
    if ( isset( $_POST[ 'relevant_links_description' ] ) ) {
        update_post_meta( $post_id, 'relevant_links_description', sanitize_text_field( $_POST[ 'relevant_links_description' ] ) );
    }
}
add_action( 'save_post', 'ghd_project_meta_save' );


function ghd_load_templates( $original_template ) {
    if ( get_query_var( 'post_type' ) !== 'project' ) {
        //return;
    }

    if ( is_archive() || is_search() ) {

        if ( file_exists( get_stylesheet_directory(). '/archive-project.php' ) ) {

            return get_stylesheet_directory() . '/archive-project.php';

        } else {

            return plugin_dir_path( __FILE__ ) . 'templates/archive-project.php';

        }

    } elseif(is_singular('project')) {

        if (  file_exists( get_stylesheet_directory(). '/single-project.php' ) ) {

            return get_stylesheet_directory() . '/single-project.php';

        } else {

            return plugin_dir_path( __FILE__ ) . 'templates/single-project.php';

        }

    }else{
        return get_page_template();
    }

    return $original_template;


}
add_action( 'template_include', 'ghd_load_templates' );
