function setGridNine() {

    var top_content_wrapper_height = jQuery('#top-content-wrapper').height();

    var _innerheight = ( ( top_content_wrapper_height/3 ) - 17 );
    jQuery(".respheight").height(_innerheight);
    jQuery(".grid-nine-image-wrapper").height(_innerheight );
}

function setGridNineImageVertical() {
    var grid_nine_image_wrapper_height = jQuery( '.grid-nine-image-wrapper' ).height();

    var image_1_1_height = jQuery( '.image-1-1' ).height();
    var image_1_2_height = jQuery( '.image-1-2' ).height();
    var image_1_3_height = jQuery( '.image-1-3' ).height();

    var image_2_1_height = jQuery( '.image-2-1' ).height();
    var image_2_2_height = jQuery( '.image-2-2' ).height();
    var image_2_3_height = jQuery( '.image-2-3' ).height();

    var image_3_1_height = jQuery( '.image-3-1' ).height();
    var image_3_2_height = jQuery( '.image-3-2' ).height();
    var image_3_3_height = jQuery( '.image-3-3' ).height();

    jQuery('.image-1-1').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_1_1_height ) / 2 ) );
    jQuery('.image-1-2').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_1_2_height ) / 2 ) );
    jQuery('.image-1-3').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_1_3_height ) / 2 ) );

    jQuery('.image-2-1').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_2_1_height ) / 2 ) );
    jQuery('.image-2-2').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_2_2_height ) / 2 ) );
    jQuery('.image-2-3').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_2_3_height ) / 2 ) );

    jQuery('.image-3-1').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_3_1_height ) / 2 ) );
    jQuery('.image-3-2').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_3_2_height ) / 2 ) );
    jQuery('.image-3-3').css( 'margin-top', ( ( grid_nine_image_wrapper_height - image_3_3_height ) / 2 ) );

}