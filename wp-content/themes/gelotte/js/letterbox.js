
var resizeTimer;

jQuery(document).ready(function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        var letterbox = setMaxWidth();
        jQuery('#wrapper').css('max-width', letterbox);
        jQuery( '.content' ).css('max-width', letterbox);
        jQuery( '.footer' ).css('max-width', letterbox);

        jQuery( '.image-wrapper>img').css('margin-top', setImageVertical());
    }, 500);
});

jQuery(window).resize(function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        var letterbox = setMaxWidth();
        jQuery('#wrapper').css('max-width', letterbox);
        jQuery( '.content' ).css('max-width', letterbox);
        jQuery( '.footer' ).css('max-width', letterbox);

        jQuery( '.image-wrapper>img').css('margin-top', setImageVertical());
    }, 500);
});

function setMaxWidth() {
    var letterbox;

    var document_width = jQuery(document).width();
    var window_height = jQuery(window).height();

    var top_content_wrapper_height = jQuery('#top-content-wrapper').height();

    var header_height = jQuery('.main-navigation').height();
    var footer_height = jQuery('.footer').height();
    var content_padding_left = parseInt(jQuery('.content').css('padding-left'));
    var content_padding_right = parseInt(jQuery('.content').css('padding-right'));

    letterbox = Math.round(( .5 * ( document_width - content_padding_left - content_padding_right ) ) - ( .83 * ( window_height - header_height - footer_height ) ) );
    letterbox = ( letterbox > 0 ? letterbox : 0 );

    return document_width - letterbox*2;
}

function setImageVertical() {
    var document_width = jQuery(document).width();

    if ( typeof setProjectTopWrapper !== 'undefined' && jQuery( window.setProjectTopWrapper ) ) {
        setProjectTopWrapper();
    }

    var top_content_wrapper_height = jQuery('#top-content-wrapper').height();
    var image_height;

    if ( document_width > 768 ) {
        jQuery('.mobile-image').css( 'height', '0px' );
        jQuery('.desktop-image').css( 'height', '' );
        image_height = jQuery('.desktop-image>img' ).height();
    } else {
        jQuery('.desktop-image').css( 'height', '0px' );
        jQuery('.mobile-image').css( 'height', '' );
        image_height = jQuery('.mobile-image>img' ).height();
    }

    return ( ( top_content_wrapper_height - image_height ) / 2 );
}