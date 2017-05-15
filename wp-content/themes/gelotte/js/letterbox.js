jQuery(document).ready(function() {
    var letterbox = setMaxWidth();
    jQuery('#wrapper').css('max-width', letterbox);
    jQuery( '.content' ).css('max-width', letterbox);
    jQuery( '.footer' ).css('max-width', letterbox);

    jQuery( '.image-wrapper>img').css('margin-top', setImageVertical());
    //setImageVertical();
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
        //setImageVertical();
    }, 300);
});

function setMaxWidth() {
    var x = 0;

    var content_width = jQuery('.content').width();
    var content_height = jQuery('.content').height();
    var document_width = jQuery(document).width();
    var document_height = jQuery(document).height();

    var header_height = jQuery('.main-navigation').height();
    var footer_height = jQuery('.footer').height();
    var content_padding_left = parseInt(jQuery('.content').css('padding-left'));
    var content_padding_right = parseInt(jQuery('.content').css('padding-right'));

    x = Math.round(( .5 * ( document_width - content_padding_left - content_padding_right ) ) - ( .83 * (document_height - header_height - footer_height)));
    x = ( x > 0 ? x : 0 );

    return document_width - x*2;
}

function setImageVertical() {
    var content_height = jQuery('.content').height();
    var image_height = jQuery('.image-wrapper>img' ).height();

    //alert('Image height is ' + image_height + '\n\nContent height is ' + content_height);

    return ( (content_height - image_height) / 2 );
}

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