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

    register_nav_menus( array(
        'header' => __('Menu Header', 'silohon'),
        'footer' => __('Menu Footer', 'silohon')
    ) );
}