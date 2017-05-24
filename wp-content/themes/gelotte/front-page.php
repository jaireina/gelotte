<?php
/**
 * Template Name: Front Page
 *
 * @package gelotte
 */

get_header();

?>

                    <!-- Begin Content -->
                    <div id="top-content-wrapper">

                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="image-wrapper desktop-image">
                                    <img src="<?php $desktop_image = get_field('desktop_image'); echo $desktop_image['url']; ?>" alt="<?php echo $desktop_image['alt'] ?>" />
                                </div>
                                <div class="image-wrapper mobile-image">
                                    <img src="<?php $mobile_image = get_field('mobile_image'); echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt'] ?>" />
                                </div>
                            </div>
                        </div>

                    </div><!-- End Top Content Wrapper -->

                    <div id="bottom-content-wrapper">

                    </div><!-- End Bottom Content Wrapper -->

                <!-- BEGIN FOOTER TEMPLATE SECTION -->
                <?php get_footer(); ?>