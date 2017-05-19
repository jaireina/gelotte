function setProjectTopWrapper() {
    
    var viewport_height = jQuery(window).height();
    var header_height = jQuery( '.main-navigation' ).height();
    var footer_height = jQuery( '.footer' ).height();

    jQuery( '#top-content-wrapper' ).css( 'height' , ( viewport_height - header_height ) );
}