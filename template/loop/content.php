<?php /**
 * Looping the content Silohon Theme.
 * @package silohon */ ?>
<div class="container silo_looping">
    <div class="looping">
        <div class="loop_title">
            <span class="__title">Blog Post</span>
        </div>
        <ul class="__loop">
            <?php while(have_posts()) : the_post(); ?>
            <li class="___loop">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="loop_link">
                    <img width="150" height="150" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="loop_body">
                        <span class="metas"></span>
                        <span class="metas"></span>
                        <span class="metas"></span>
                        <?php the_title('<h2 class="post_title">', '</h2>'); ?>
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <div class="silo_paginate">
            <?php echo paginate_links( array(
                'mid_size' => 2
            )); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>