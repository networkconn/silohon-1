<?php /**
 * File Index require Silohon Theme.
 * @package silohon */ get_header();

// The Condition if you blog have posts or not
if ( have_posts() ) :
    // This condition can call the template part.
    get_template_part( 'template/loop/content' );
else :
    // This is condition if your blog not the post.
    get_template_part( 'template/loop/empty' );
endif;

get_footer();