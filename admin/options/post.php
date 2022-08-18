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
        <input type="number" name="silo_excerpt" id="silo_excerpt" value="<?php echo get_option('silo_excerpt'); ?>">
    <?php }

// Show Social Shares
register_setting( 'silo-post-group', 'silo_show_shares' );
add_settings_field( 'silo-shares', 'Share Button',
    'silo_share_button', 'post_setting', 'silo-post' );
    function silo_share_button(){ ?>
        <select name="silo_show_shares" id="silo_show_shares">
            <option value="" <?php if(get_option('silo_show_shares')=='') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silo_show_shares')=='true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silo_show_shares')=='false') : echo 'selected'; endif; ?>>Hidden</option>
        </select>
    <?php }

// Show Next and Prev Single Post
register_setting( 'silo-post-group', 'silo_next_prev' );
add_settings_field( 'silo-next-prev', 'Next Prev Post',
    'silo_nextPrev', 'post_setting', 'silo-post' );
    function silo_nextPrev(){ ?>
        <select name="silo_next_prev" id="silo_next_prev">
            <option value="" <?php if(get_option('silo_next_prev')=='') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silo_next_prev')=='true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silo_next_prev')=='false') : echo 'selected'; endif; ?>>Hidden</option>
        </select>
    <?php }

// Related Post Show
register_setting( 'silo-post-group', 'related_post' );
add_settings_field( 'silo-related', 'Related Post',
    'silo_related_post', 'post_setting', 'silo-post' );
    function silo_related_post(){ ?>
        <input type="number" name="related_post" id="related_post" value="<?php echo get_option( 'related_post' ); ?>">
    <?php }