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
                    <img src="<?php the_field('desktop_image'); ?>" alt="" />
            </div>
            <div class="image-wrapper mobile-image">
                    <img src="<?php the_field('mobile_image'); ?>" alt="" />
            </div>
        </div>
    </div>

<?php get_footer(); ?>