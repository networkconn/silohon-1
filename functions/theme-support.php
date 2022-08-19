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

    // Archive Sidebar
    register_sidebar( array(
        'id' => 'archive',
        'name' => esc_html__('Archive Sidebar', 'silohon' ),
    ) );

    register_widget( 'Silo_Search' );
    register_widget( 'Silo_Recent_post' );
    register_widget( 'Silo_Popular_Post' );
}

/**=====================================
 * The Meta ============================
=======================================*/
// The Category no Links
function silo_cats(){
    $categories = get_the_category();
    $sparator = ', ';
    $output = '';
    $i=1;
    if( !empty($categories) ) :
        foreach( $categories as $category ) :
            if($i > 1 ) : $output .= $sparator; endif;
            $output = $category->name;
            $i++;
        endforeach;
    endif;
    echo $output;
}

// The Category With Links
function silo_cat__(){
    $categories = get_the_category();
    $sparator = ', ';
    $output = '';
    $i=1;
    if( !empty($categories) ) :
        foreach( $categories as $category ) :
            if($i > 1 ) : $output .= $sparator; endif;
            $output = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'Post On%s', $category->name ) . '">' . esc_html( $category->name ) . '</a>';
            $i++;
        endforeach;
    endif;
    echo $output;
}

// The Tags Without Links

/**=====================================
 * The Excerpt Length ==================
=======================================*/
add_filter( 'excerpt_length', 'silohon_excerpt' );
function silohon_excerpt( $length ){
    if( !empty( get_option('silo_excerpt') ) ) :
        return get_option('silo_excerpt');
    else :
        return 25;
    endif;
}
add_filter( 'excerpt_more', 'silo_excerpt_more' );
function silo_excerpt_more(){
    return '...';
}