<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

?>
<!-- Begin Content -->
<div id="top-content-wrapper">

    <?php

    $desktop_images = get_field('desktop_gallery');
    $mobile_images = get_field('mobile_gallery');

    if( $desktop_images ): ?>
        <div class="the-desktop-slider desktop-image">
            <ul class="desktop-image">
                <?php foreach( $desktop_images as $desktop_image ): ?>
                    <li>
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="image-wrapper desktop-image">
                                    <img src="<?php echo $desktop_image['url']; ?>" alt="<?php echo $desktop_image['alt']; ?>" />
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="the-mobile-slider mobile-image">
            <ul class="mobile-image">
                <?php foreach( $mobile_images as $mobile_image ): ?>
                    <li>
                        <div class="crop-wrapper">
                            <div class="wide-wrapper">
                                <div class="image-wrapper mobile-image">
                                    <img src="<?php echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt']; ?>" />
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

</div><!-- End Top Content Wrapper -->

<div id="middle-content-wrapper">

</div><!-- End Middle Content Wrapper -->

<div id="bottom-content-wrapper">

</div><!-- End Bottom Content Wrapper -->

<?php get_footer(); ?> 
