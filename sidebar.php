<?php /**
 * Sidebar Widgets Silohon Theme.
 * @package silohon */
echo '<aside class="silo_sidebar">';

// For Home, Front Page, Archive Sidebar
if( ! is_single() && ! is_archive() ) :
    if( is_active_sidebar( 'home' )) :
        dynamic_sidebar( 'home' );
    endif;

// For Single Post Sidebar
elseif( is_single( ) ) :
    if( is_active_sidebar( 'single' )) :
        dynamic_sidebar( 'single' );
    endif;

// For single Archive Sidebar
elseif( is_archive() ) :
    if( is_active_sidebar( 'archive' ) ) :
        dynamic_sidebar( 'archive' );
    endif;

endif;

echo '</aside>';