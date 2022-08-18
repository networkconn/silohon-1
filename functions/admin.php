<?php /**
 * Admin Silohon Theme Function.
 * @package silohon */

/**======================================
 * Add menu page ========================
========================================*/
add_action('admin_menu', 'silo_admin');
function silo_admin(){
    $icon = SILO_URI . '/img/icon.png';
    add_menu_page( THEME_NAME, THEME_NAME, 'manage_options',
        'silo_general', 'silo_general', $icon );
        function silo_general(){
            get_template_part('admin/settings/general', 'setting');
        }
    add_submenu_page( 'silo_general', 'General Settings',
        'General Settings', 'manage_options', 'silo_general', 'silo_general' );
    add_submenu_page( 'silo_general', 'Single Post',
        'Single Post', 'manage_options', 'post_setting', 'post_setting' );
        function post_setting(){
            get_template_part( 'admin/settings/post', 'setting' );
        }

    // Action Admin init
    add_action('admin_init', 'silo_admin_init');
    function silo_admin_init(){
        require SILO_DIR . '/admin/options/general.php';
        require SILO_DIR . '/admin/options/post.php';
    }
}

/**======================================
 * Admin Site Icon ======================
========================================*/
add_action('admin_head', 'silo_fav');
function silo_fav(){
    $default_favicon = SILO_URI . '/img/favicon.png';
    if( ! has_site_icon() ) :
        echo '<link rel="shortcut icon" href="'.$default_favicon.'" type="image/x-icon">
                <link rel="apple-touch-icon" href="'.$default_favicon.'">';
    endif;
}