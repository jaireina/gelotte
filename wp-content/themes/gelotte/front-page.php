<?php
/**
 * Template Name: Front Page
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
            <div class="image-wrapper desktop-image">
            <h1>here</h1>
                <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/GHD_home_desktop-800x480.jpg" /> -->
                    <img class="desktop_image" src="<?php the_field('desktop_image'); ?>" alt="" />
                    <!-- <img class="desktop_image" width="1700" height="350" src="<?php //the_field('desktop_image'); ?>" alt="" /> -->
            </div>
            <div class="image-wrapper media-image">
                    <img class="mobile_image" src="<?php the_field('mobile_image'); ?>" alt="" />
                    <!-- <img class="mobile_image" width="100%" height="100%" src="<?php //the_field('mobile_image'); ?>" alt="" /> -->
                <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/GHD_home_media-300x500.jpg" /> -->
            </div>
        </div>
    </div>

    </div>

<?php get_footer(); ?>