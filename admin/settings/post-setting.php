<h1>Single Post</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post" class="silo_form">
    <?php settings_fields('silo-post-group');
    do_settings_sections( 'post_setting' );
    submit_button(); ?>
</form>