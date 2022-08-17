    <footer>
        <div class="footop f-max">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                'container' => 'ul',
                'menu_class' => 'silo_foot_menu container',
            )); ?>
        </div>
        <div class="foobot">
            <div class="container silo_foobot">
                <div class="fooleft">
                    &copy;Copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a> <script>document.write(new Date().getFullYear())</script> | All rights Reserved.
                </div>
                <div class="fooright">Designe By: <a rel="nofollow, noindex" target="_blank" href="<?php echo DESIGNER_URI; ?>"><?php echo DESIGNER; ?></a></div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>