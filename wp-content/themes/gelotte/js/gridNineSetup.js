function setGridNine() {

    var top_content_wrapper_height = jQuery('#top-content-wrapper').height();
    // alert('#top-content-wrapper-height = ' + top_content_wrapper_height );

    var _innerheight = ( ( top_content_wrapper_height/3 ) - 17 );
    jQuery(".respheight").height(_innerheight);
    jQuery(".grid-nine-image-wrapper-top").height(_innerheight );
    jQuery(".grid-nine-image-wrapper-middle").height(_innerheight );
    jQuery(".grid-nine-image-wrapper-bottom").height(_innerheight );

}