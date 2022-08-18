<?php /**
 * The Support Silohon Theme.
 * @package silohon */

/**=====================================
 * Setup Theme =========================
=======================================*/
add_action('after_setup_theme', 'silohon_theme');
function silohon_theme(){
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array(
        'comment-list', 'comment-form',
        'search-form',
        'gallery', 'caption',
        'style', 'script' ) );

    register_nav_menus( array(
        'header' => __('Menu Header', 'silohon'),
        'footer' => __('Menu Footer', 'silohon')
    ) );
}

/**=====================================
 * The Sidebar =========================
=======================================*/
add_action('widgets_init', 'silo_sidebar');
function silo_sidebar(){

    // If Is Home
    register_sidebar( array(
        'id' => 'home',
        'name' => esc_html__( 'Home Front Page, and Page Sidebar', 'silohon' ),
    ) );

    // If Is Singular
    register_sidebar( array(
        'id' => 'single',
        'name' => esc_html__( 'Single Post sidebar', 'silohon' ),
    ) );
}
