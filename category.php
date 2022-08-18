<?php /**
 * Category Section Silohon Theme.
 * @package silohon */ get_header();

if(have_posts()) : ?>

<?php else :
    get_template_part('template/loop/empty');
endif; ?>

<?php get_footer(); ?>