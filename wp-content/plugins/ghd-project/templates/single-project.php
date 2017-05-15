<?php
/**
 * Template Name: Single Project Page
 *
 * @package gelotte
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

<?php get_footer(); ?>
