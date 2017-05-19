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
            <!-- <div class="slider-thumbs" style="height: 80px; width: 100%; background-color: grey;" ><h1>Slider Thumbs</h1></div> -->
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

<div id="bottom-content-wrapper">
    <div class="row">
        <div class="col-md-4">
            <h1>PROJECT NAME</h1>
            <p>Lorem ipsum dolor sit amet, erat sodales wisi vivamus nec nonummy nec, augue libero viverra in ut nullam. Erat massa justo, lacus justo porta ullamcorper, adipiscing quam quis, feugiat nec. Donec in nibh pellentesque vitae, congue pretium ab lacus, ante vel justo vel semper vestibulum fermentum, mi ut in vestibulum odio vitae vehicula. Condimentum at neque parturient lacus gravida. Phasellus mollis officia inceptos ultrices, sodales auctor magnis ligula viverra nullam venenatis, feugiat lorem nunc quisque etiam habitasse quisque, sed risus quae feugiat massa arcu feugiat, felis libero.</p>
        </div>
        <div class="col-md-4">
            <h1>PROJECT TEAM</h1>
            <p>Lorem ipsum dolor sit amet, erat sodales wisi vivamus nec nonummy nec, augue libero viverra in ut nullam. Erat massa justo, lacus justo porta ullamcorper, adipiscing quam quis, feugiat nec. Donec in nibh pellentesque vitae, congue pretium ab lacus, ante vel justo vel semper vestibulum fermentum, mi ut in vestibulum odio vitae vehicula. Condimentum at neque parturient lacus gravida. Phasellus mollis officia inceptos ultrices, sodales auctor magnis ligula viverra nullam venenatis, feugiat lorem nunc quisque etiam habitasse quisque, sed risus quae feugiat massa arcu feugiat, felis libero.</p>
        </div>
        <div class="col-md-4">
            <h1>RELEVANT LINKS</h1>
            <p>Lorem ipsum dolor sit amet, erat sodales wisi vivamus nec nonummy nec, augue libero viverra in ut nullam. Erat massa justo, lacus justo porta ullamcorper, adipiscing quam quis, feugiat nec. Donec in nibh pellentesque vitae, congue pretium ab lacus, ante vel justo vel semper vestibulum fermentum, mi ut in vestibulum odio vitae vehicula. Condimentum at neque parturient lacus gravida. Phasellus mollis officia inceptos ultrices, sodales auctor magnis ligula viverra nullam venenatis, feugiat lorem nunc quisque etiam habitasse quisque, sed risus quae feugiat massa arcu feugiat, felis libero.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="placeholder"></div>
    </div>
    <div class="col-md-4">
        <div class="placeholder"></div>
    </div>
    <div class="col-md-4">
        <div class="placeholder"></div>
    </div>
</div>
</div><!-- End Bottom Content Wrapper -->

<?php get_footer(); ?> 
