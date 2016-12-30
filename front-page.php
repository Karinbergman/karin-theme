<?php get_header(); ?>

<div id="main">
    <div class="content">
            <?php
            $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('showposts=4');
            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="post">
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                    } ?>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                    <div class="post-info">
                        <span class="date"><?php the_date('Y-m-d'); ?></span>
                        <span class="category"><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></span>
                    </div>

                    <?php the_excerpt(); ?>

                </div>
            <?php endwhile; ?>

        <?php wp_reset_query(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
