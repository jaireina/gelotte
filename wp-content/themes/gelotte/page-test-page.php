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

        <h1>This is the Test Page</h1>
        <?php

        $post_object = get_field('test_field');

        if( $post_object ):

            // override $post
            $post = $post_object;
            setup_postdata( $post );

            ?>
            <div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

    </div><!-- End Top Content Wrapper -->

    <div id="bottom-content-wrapper">

    </div><!-- End Bottom Content Wrapper -->

    <!-- BEGIN FOOTER TEMPLATE SECTION -->
<?php get_footer(); ?>