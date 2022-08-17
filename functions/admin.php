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
    add_submenu_page( 'silo_general', 'Front Page',
        'Front Page', 'manage_options', 'front_page', 'front_page' );
        function front_page(){
            get_template_part( 'admin/settings/front', 'setting' );
        }
    add_submenu_page( 'silo_general', 'Post Setting',
        'Post Setting', 'manage_options', 'post_setting', 'post_setting' );
        function post_setting(){
            get_template_part( 'admin/settings/post', 'setting' );
        }
    add_submenu_page( 'silo_general', 'Custom Color',
        'Custom Color', 'manage_options', 'custom_color', 'custom_color' );
        function custom_color(){
            get_template_part( 'admin/settings/color', 'setting' );
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