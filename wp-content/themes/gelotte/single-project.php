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

    $images = get_field('desktop_gallery');

    if( $images ): ?>
        <div id="slider" class="flexslider">
            <div class="crop-wrapper">
                <div class="wide-wrapper">
                    <ul class="slides">

                        <?php foreach( $images as $image ): ?>
                            <li>

                                    <div class="image-wrapper desktop-image">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>

                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div><!-- End Top Content Wrapper -->

<div id="middle-content-wrapper">

</div><!-- End Middle Content Wrapper -->

<div id="bottom-content-wrapper">

</div><!-- End Bottom Content Wrapper -->

<?php get_footer(); ?> 
