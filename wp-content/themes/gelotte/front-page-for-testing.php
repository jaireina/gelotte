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

                <!-- End HEADER TEMPLATE SECTION -->

                    <!-- Begin Content -->

                    <!-- THIS AREA TO BE USED FOR TESTING PURPOSES -->
                    <div id="top-content-wrapper">

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

                    </div><!-- End Top Content Wrapper -->

                    <div id="middle-content-wrapper">

                    </div><!-- End Middle Content Wrapper -->

                    <div id="bottom-content-wrapper">

                    </div><!-- End Bottom Content Wrapper -->

                    <!-- THIS AREA TO BE USED FOR TESTING PURPOSES -->

                <!-- BEGIN FOOTER TEMPLATE SECTION -->
                <?php get_footer(); ?>