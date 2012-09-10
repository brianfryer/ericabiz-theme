<?php

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');

// Register Header and Footer navigation menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-nav'  => __( 'Primary Navigation' ),
            'bottom-nav' => __( 'Bottom Navigation' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// Register 'shoulder' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'shoulder',
        'name'          => 'Shoulder (aka the sidebar)',
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

// Register 'promo' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'promo',
        'name'          => 'Promo (just under header)',
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

// Register 'promo' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'subscribe',
        'name'          => 'Subscribe (bottom of posts)',
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

// Register 'footer-ads' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'footer-ads',
        'name'          => 'Footer Ads',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));

// Register 'categories' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'categories',
        'name'          => 'Categories',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

// Register 'four-oh-four' widget ready area
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id'            => 'four-oh-four',
        'name'          => '404 Page Content',
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

// Allow HTML tags to be used in WP titles
function eb_convert_title_html_tags( $string ) {
    global $wp_current_filter;
    $filter = end($wp_current_filter);
    $search = array('#span#', '#/span#');
    $replace = ( in_array($filter, array('wp_title', 'the_title_rss')) || ($filter == 'the_title' && (is_admin() || in_array('wp_head', $wp_current_filter))) ) ? '' : array('<span>', '</span>');
    $string = str_replace( $search, $replace, $string );

    return $string;
}
add_filter( 'the_title', 'eb_convert_title_html_tags' );
add_filter( 'the_title_rss', 'eb_convert_title_html_tags' );
add_filter( 'wp_title', 'eb_convert_title_html_tags' );
add_filter( 'widget_title', 'eb_convert_title_html_tags' );




?>
