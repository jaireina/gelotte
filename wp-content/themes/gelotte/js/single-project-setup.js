function setProjectTopWrapper() {
    
    var viewport_height = jQuery(window).height();
    var header_height = jQuery('.main-navigation').height();
    var footer_height = jQuery('.footer').height();
    var top_content_wrapper = ( viewport_height - header_height );

    jQuery('#top-content-wrapper').css( 'height' , ( viewport_height - header_height ) );
    jQuery('#slider').css( 'height' , ( top_content_wrapper - 75 ) );
}