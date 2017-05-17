<?php
/**
 * The theme header
 *
 * @package gelotte
 */
?>
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