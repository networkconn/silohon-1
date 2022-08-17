<h1>General Settings</h1>
<?php settings_errors(); ?>
<?php if( !empty(get_option('silo_logo'))) :
        $is_logo = get_option('silo_logo');?>
        <div id="slohonPreviewLogo" style="background-image: url(<?php echo $is_logo; ?>)"></div>
    <?php else : 
        $is_default = SILO_URI . '/img/logo.png'; ?>
        <div id="slohonPreviewLogo" style="background-image: url(<?php echo $is_default; ?>)"></div>
    <?php endif; ?>
<form action="options.php" method="post" class="silo_form">
    <?php settings_fields('general-setting-group');
    do_settings_sections( 'silo_general' );
    submit_button(); ?>
</form>