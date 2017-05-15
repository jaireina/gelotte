<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!--wordpress head-->
    <?php wp_head(); ?>

    <script type="text/javascript">
        var resizeTimer;
        jQuery(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // do your work here
                var content_width = jQuery(".content").width();
                var content_height = jQuery(".content").height();
                var wrapper_width = jQuery("#wrapper").width();
                var document_height = jQuery(document).height();
                var content_ratio = content_height / content_width;
                alert("Content ratio is " + content_ratio + "\nContent width is " + content_width + "\nWrapper width is " + wrapper_width+ "\nWrapper width is " + wrapper_width + "\nDocument height is " + document_height);
                // ...
            }, 300);
        });


        jQuery( window ).resize(function() {

        });
    </script>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'side-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
        <?php dynamic_sidebar('navbar-right'); ?>

        <div class="sidebar-socials">
            <?php get_social_icons(); ?>
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
        <header role="banner">
            <div class="row site-branding">
                <div class="row main-navigation">
                    <div class="col-lg-12 site-menu">
                        <nav class="navbar navbar-default" role="navigation">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle toggle-menu menu-right push-body">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="site-logo">
                                    <?php the_custom_logo(); ?>
                                </div>

                                <div class="site-title-container">
                                    <h1 class="site-title-heading">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                    </h1>
                                </div>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                                    <?php dynamic_sidebar('navbar-right'); ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div><!--.main-navigation-->
            </div>
        </header>

        <div class="content">
            <!-- Begin Content -->
            <div class="crop-wrapper">
                <div class="wide-wrapper">
                    <div class="image-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GHD_home_desktop.jpg" >
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="container">
                <div id="footer-row" class="row site-footer">

                    <div class="site-description">
                        <h1><?php bloginfo('description'); ?></h1>
                    </div>

                    <div class="socials">
                        <?php get_social_icons(); ?>
                    </div>
                </div>
            </div>
        </div>

</div><!-- end container -->

<!--wordpress footer-->
<?php wp_footer(); ?>

<!--call jPushMenu, required-->
<script>
    jQuery(document).ready(function($) {
        $('.toggle-menu').jPushMenu();
    });
</script>

</div>
</body>
</html>