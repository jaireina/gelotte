function setProjectTopWrapper() {
    
    var viewport_height = jQuery(window).height();
    var header_height = jQuery( '.main-navigation' ).height();

    jQuery( '#top-content-wrapper' ).css( 'height' , ( viewport_height - header_height ) );
}

jQuery(window).resize(function(){location.reload();});