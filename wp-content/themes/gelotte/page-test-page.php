<?php
/**
 * Template Name: Template for Test Page
 *
 * @package gelotte
 */
get_header();

?>

    <!-- Begin Content -->
    <div id="top-content-wrapper">
        <?php

        $post_object = get_field('project_field');

        if( $post_object ):

            // override $post
            $post = $post_object;
            setup_postdata( $post );
            $url =
            $gallery_images = get_field('desktop_gallery');

            ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $gallery_images[0]['sizes']['large']; ?>" />
    </a>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

    </div><!-- End Top Content Wrapper -->

    <!-- BEGIN FOOTER TEMPLATE SECTION -->
<?php get_footer(); ?>


<?php $gallery_images = get_field('desktop_gallery'); ?>

<img src="<?php echo $gallery_images[0]['url']; ?>" />
