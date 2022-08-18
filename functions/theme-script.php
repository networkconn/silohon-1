<?php /**
 * Setup Script and Css Silohon Theme.
 * @package silohon */

/**=====================================
 * Front end Script and Css ============
=======================================*/
add_action('wp_enqueue_scripts', 'silo_script');
function silo_script(){
    wp_enqueue_style( 'main-style', get_stylesheet_uri(),
        [], fileatime( SILO_DIR . '/style.css'), 'all' );
    if( is_home() ) :
        wp_enqueue_style( 'home-style', SILO_URI . '/css/home.css', [],
            fileatime( SILO_DIR . '/css/home.css' ), 'all' );
    endif;
    if( is_front_page() ) :
        wp_enqueue_style( 'front-page', SILO_URI . '/css/front-page.css', [],
            fileatime( SILO_DIR . '/css/front-page.css' ), 'all' );
    endif;
    if( is_archive() ) :
        wp_enqueue_style( 'archive-style', SILO_URI . '/css/archive.css', [],
            fileatime( SILO_DIR . '/css/archive.css'), 'all' );
    endif;
    
    wp_enqueue_script( 'main-script', SILO_URI . '/js/main.js', [],
        fileatime( SILO_DIR . '/js/main.js'), true );
}

/**=====================================
 * Backend Script and Css ==============
=======================================*/
add_action('admin_enqueue_scripts', 'silo_admin_scripts');
function silo_admin_scripts(){
    wp_enqueue_style( 'admin-style', SILO_URI . '/admin/admin.css', [],
        fileatime( SILO_DIR . '/admin/admin.css' ), 'all' );
    wp_enqueue_media();
    wp_enqueue_script( 'admin-js', SILO_URI . '/admin/admin.js', [],
        fileatime( SILO_DIR . '/admin/admin.js' ), true );
}