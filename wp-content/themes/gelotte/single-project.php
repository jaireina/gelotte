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
// $main_column_size = bootstrapBasicGetMainColumnSize();
?>

<?php

$images = get_field('desktop_gallery');

if( $images ): ?>

    <div id="carousel" class="flexslider" >
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" style="height: 300px;" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 
