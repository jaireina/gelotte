<?php
/**
 * Template Name: Home template
 *
 * @package gelotte
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
// $main_column_size = bootstrapBasicGetMainColumnSize();
?>

        <!-- Begin Content -->
        <div class="crop-wrapper">
            <div class="wide-wrapper">
                <div class="image-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GHD_home_desktop.jpg" />
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>