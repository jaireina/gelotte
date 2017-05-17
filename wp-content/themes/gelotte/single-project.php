<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<!-- Place somewhere in the <body> of your page -->
<div id="slider" class="flexslider">
    <ul class="slides">
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide01.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide02.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide03.jpg" />>
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide04.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide05.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide06.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide07.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide08.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide09.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide10.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide11.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide12.jpg" />
        </li>
        <!-- items mirrored twice, total of 12 -->
    </ul>
</div>
<div id="carousel" class="flexslider">
    <ul class="slides">
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide01.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide02.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide03.jpg" />>
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide04.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide05.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide06.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide07.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide08.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide09.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide10.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide11.jpg" />
        </li>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide12.jpg" />
        </li>
</div>

<?php get_footer(); ?> 
