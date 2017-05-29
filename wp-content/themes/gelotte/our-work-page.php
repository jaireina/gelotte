<?php
/**
 * Template Name: Our Work Page
 *
 * @package gelotte
 */

get_header();

?>

    <!-- Begin Content -->
    <div id="top-content-wrapper">
        <div class="top-content-inner">

            <div class="row nopadding">

                <div class="respheight grid-nine-top col-sm-12">

                    <div class="col-sm-4 grid-nine-col left">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('top_left');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-1-1" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col middle">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('top_middle');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-1-2" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col right">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('top_right');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-1-3" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="respheight grid-nine-middle col-sm-12">

                    <div class="col-sm-4 grid-nine-col left">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('middle_left');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-2-1" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col middle">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('middle_middle');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-2-2" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col right">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('middle_right');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-2-3" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="respheight grid-nine-bottom col-sm-12">

                    <div class="col-sm-4 grid-nine-col left">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('bottom_left');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-3-1" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col middle">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('bottom_middle');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-3-2" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 grid-nine-col right">
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="grid-nine-image-wrapper">
                                    <?php
                                    $post_object = get_field('bottom_right');
                                    if( $post_object ):

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $gallery_images = get_field('desktop_gallery');

                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="image-3-3" src="<?php echo $gallery_images[0]['url']; ?>" />
                                        </a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div><!-- End Top Content Wrapper -->

    <div id="bottom-content-wrapper">

    </div><!-- End Bottom Content Wrapper -->

    <!-- BEGIN FOOTER TEMPLATE SECTION -->
<?php get_footer(); ?>