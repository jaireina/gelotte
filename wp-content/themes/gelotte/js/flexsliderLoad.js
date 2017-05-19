/* Loads the flexslider */
jQuery(window).load(function() {
    jQuery('.flexslider').flexslider( {
        animation: 'slide',
        animationLoop: true,
        pauseOnHover: true,
        controlNav: 'thumbnails',
        directionNav: true,
        touch: true
    });
});