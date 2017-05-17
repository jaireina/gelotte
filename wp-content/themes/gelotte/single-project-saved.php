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

    <?php

    $images = get_field('desktop_gallery');

    if( $images ): ?>

        <div id="carousel" class="flexslider" >
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" style="height: 500px;" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <ul class="list-inline">
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" style="width: 75px; height: 75px;"/>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

<?php get_footer(); ?> 
