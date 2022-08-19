<?php /**
 * Page Silohon Theme
 * @package silohon */ get_header();
 
if( is_front_page() ) :
    get_template_part('template/special', 'page');
else : ?>
    <div class="container">
        <?php the_title(); ?>
        <?php get_sidebar(); ?>
    </div>

<?php endif;

get_footer();