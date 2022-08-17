<?php /**
 * Setup Script and Css Silohon Theme.
 * @package silohon */

add_action('wp_enqueue_scripts', 'silo_script');
function silo_script(){
    wp_enqueue_style( 'main-style', get_stylesheet_uri(),
        [], fileatime( SILO_DIR . '/style.css'), 'all' );
    
    wp_enqueue_script( 'main-script', SILO_URI . '/js/main.js', [],
        fileatime( SILO_DIR . '/js/main.js'), true );
}