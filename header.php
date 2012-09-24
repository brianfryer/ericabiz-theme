<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <!-- Page Title -->
    <title>
    <?php if (is_home() || is_front_page() ) { ?>
        Make Money Online with Successful Entrepreneur Erica Douglass (erica.biz)
    <?php } else {
        echo the_title(); ?>, by Erica Douglass (erica.biz)
    <?php } ?>
    </title>
    
    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=IE8" />
    <meta name="viewport" content="width=1005, maximum-scale=1.0" />
    <link rel="author" href="https://plus.google.com/108643698184666422897/posts"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/ericabiz" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Stylesheet Links -->
    <link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo get_stylesheet_directory_uri() . '/css/ericabiz-style.css' ?>" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.png" />

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- wp_head output -->
    <?php wp_head(); ?>
    <!--./wp_head output-->

    <?php if ( is_user_logged_in() ) { ?>
    <!-- Display header correctly when logged in -->
    <style type="text/css">
        aside.shoulder { top: 28px; }
    </style>
    <?php } ?>

</head>
<body>

    <header class="top">
        <div class="wrapper">

            <div class="branding">
                <?php get_template_part( 'branding' ); ?>
            </div>

            <nav class="primary">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-nav',
                        'container'      => FALSE,
                        'container_id'   => FALSE,
                        'menu_class'     => 'primary-nav',
                        'menu_id'        => FALSE,
                    )
                );
                ?>
            </nav><!--/.primary-->

        </div><!--/.wrapper-->
    </header><!--/.top-->

    <div class="wrapper">
