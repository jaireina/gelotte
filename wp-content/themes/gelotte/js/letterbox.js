jQuery(document).ready(function() {
    var letterbox = setMaxWidth();
    jQuery('#wrapper').css('max-width', letterbox);
    jQuery( '.content' ).css('max-width', letterbox);
    jQuery( '.footer' ).css('max-width', letterbox);

    jQuery( '.image-wrapper>img').css('margin-top', setImageVertical());
});

var resizeTimer;
jQuery(window).resize(function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        var letterbox = setMaxWidth();
        jQuery('#wrapper').css('max-width', letterbox);
        jQuery( '.content' ).css('max-width', letterbox);
        jQuery( '.footer' ).css('max-width', letterbox);

        jQuery( '.image-wrapper>img').css('margin-top', setImageVertical());
    }, 300);
});

function setMaxWidth() {
    var letterbox;

    var document_width = jQuery(document).width();
    var document_height = jQuery(document).height();

    var header_height = jQuery('.main-navigation').height();
    var footer_height = jQuery('.footer').height();
    var content_padding_left = parseInt(jQuery('.content').css('padding-left'));
    var content_padding_right = parseInt(jQuery('.content').css('padding-right'));

    letterbox = Math.round(( .5 * ( document_width - content_padding_left - content_padding_right ) ) - ( .83 * (document_height - header_height - footer_height)));
    letterbox = ( letterbox > 0 ? letterbox : 0 );

    return document_width - letterbox*2;
}

function setImageVertical() {
    var document_width = jQuery(document).width();
    var content_height = jQuery('.content').height();
    var image_height;

    if ( document_width > 768 ) {
        image_height = jQuery('.desktop-image>img' ).height();
        jQuery('.desktop-image').css('visibility', 'visible' );
        jQuery('.mogile-image').css('visibility', 'hidden' );
    } else {
        image_height = jQuery('.mobile-image>img' ).height();
        jQuery('.mogile-image').css('visibility', 'visible' );
        jQuery('.desktop-image').css('visibility', 'hidden' );
    }

    return ( (content_height - image_height) / 2 );
}

/*
function set_correct_image_for_viewport() {
    var document_width = jQuery(document).width();

    if ( document_width  > 768 ) {
        jQuery('.desktop-image>img').toggleClass('active', true).css('visibility', 'visible');
        jQuery('.mobile-image>img').toggleClass('active', false).css('visibility', 'hidden');


    } else {
        jQuery('.desktop-image>img').toggleClass('active', false).css('visibility', 'hidden');
        jQuery('.mobile-image>img').toggleClass('active', true).css('visibility', 'visible');
    }
}
*/