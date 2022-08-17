<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php if(! has_site_icon()) :
        $default_favicon = SILO_URI . '/img/favicon.png'; ?>
        <link rel="shortcut icon" href="<?php echo $default_favicon; ?>" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo $default_favicon; ?>">
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php if(function_exists('wp_body_open')) : wp_body_open(); endif; ?>
<header class="silo_header">
    <div class="headers container">
        <div id="header_left" class="header_left">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header_mid">
            <a href="<?php bloginfo('url'); ?>">
                <?php if(get_option('silo_logo')==''){
                    $default_logo = SILO_URI . '/img/logo.png';
                    echo '<img class="silo_logo" width="80" height="60" src="'.$default_logo.'" alt="'.get_bloginfo('name').'" />';
                } else{
                    $logo = get_option('silo_logo');
                    echo '<img class="silo_logo" width="80" height="60" src="'.$logo.'" alt="'.get_bloginfo('name').'" />';
                } ?>
            </a>
            <?php wp_nav_menu( array(
                'theme_location' => 'header',
                'container' => 'ul',
                'menu_class' => 'big_menu',
            )); ?>
        </div>
        <div class="header_right"></div>
    </div>
</header>
<!-- Flexbox Menu -->
<div id="silo_flex" class="silo_flex flex100">
    <div class="flex_top">
        <a href="<?php bloginfo('url'); ?>">
            <h3 class="flex_title"><?php bloginfo('name'); ?></h3>
        </a>
        <div id="flex_close" class="flex_close">
            <span></span>
            <span></span>
        </div>
    </div>
    <?php wp_nav_menu( array(
        'theme_location' => 'header',
        'container' => 'ul',
        'menu_class' => 'menu_flex'
    )); wp_nav_menu( array(
        'theme_location' => 'footer',
        'container' => 'ul',
        'menu_class' => 'menu_flex f-moba')); ?>
</div>