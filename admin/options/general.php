<?php /**
 * Theme Option Silohon for General Settings.
 * @package silohon */

// Custom Logo
register_setting( 'general-setting-group', 'silo_logo' );
add_settings_section( 'general-setting', null, null, 'silo_general' );
add_settings_field( 'silo-logo', 'Custom Logo', 'custom_logo',
    'silo_general', 'general-setting' );
    function custom_logo(){ ?>
        <input id="silo_logo_upload" type="text" name="silo_logo" value="<?php echo esc_attr( get_option('silo_logo') ); ?>" />
        <input id="silo_logo" class="button button-primary" type="button" value="Upload">
    <?php }

// Back to Top
register_setting( 'general-setting-group', 'silo_backtop' );
add_settings_field( 'silo-backtop', 'Back To Top', 'back_to_top',
    'silo_general', 'general-setting' );
    function back_to_top(){ ?>
        <select name="silo_backtop" id="silo_backtop">
            <option value="" <?php if(get_option('silo_backtop')=='') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('silo_backtop')=='true') : echo 'selected'; endif; ?>>Show</option>
            <option value="false" <?php if(get_option('silo_backtop')=='false') : echo 'selected'; endif; ?>>Hidden</option>
        </select>
    <?php }

// Lazy load Image
register_setting( 'general-setting-group', 'lazyload_image' );
add_settings_field( 'lazy-image', 'Lazyload Image', 'lazy_loading_image',
    'silo_general', 'general-setting' );
    function lazy_loading_image(){ ?>
        <select name="lazyload_image" id="lazyload_image">
            <option value="" <?php if(get_option('lazyload_image')=='') : echo 'selected'; endif; ?>>Choose</option>
            <option value="true" <?php if(get_option('lazyload_image')=='true') : echo 'selected'; endif; ?>>Active</option>
            <option value="false" <?php if(get_option('lazyload_image')=='false') : echo 'selected'; endif; ?>>False</option>
        </select>
    <?php }