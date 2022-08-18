<?php /**
 * Single Post Option Silohon Theme.
 * @package silohon */

// Show Or Not The Post Thumbnail on single post
register_setting( 'silo-post-group', 'silo_thumbnails' );
add_settings_section( 'silo-post', null, null, 'post_setting' );
add_settings_field( 'silo-thumbnails', 'Show Thumbnail',
    'show_post_thumbnail', 'post_setting', 'silo-post' );
    function show_post_thumbnail(){ ?>
        <select name="silo_thumbnails" id="silo_thumbnails">
            <option value="" <?php if(get_option('silo_thumbnails')=='') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silo_thumbnails')=='true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silo_thumbnails')=='false') : echo 'selected'; endif; ?>>Hidden</option>
        </select>
    <?php }

// Excerpt Length
register_setting( 'silo-post-group', 'silo_excerpt' );
add_settings_field( 'silo-excerpt', 'Excerpt Length',
    'count_excerpt_length', 'post_setting', 'silo-post' );
    function count_excerpt_length(){ ?>
        <input type="number" name="silo_excerpt" id="silo_excerpt" value="<?php get_option('silo_excerpt'); ?>">
    <?php }

// Show Social Shares
register_setting( 'silo-post-group', 'silo_show_shares' );