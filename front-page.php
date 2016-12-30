<?php get_header(); ?>

<div id="main">
    <div class="content">
            <?php // Display blog posts on any page @ http://m0n.co/l
            $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('showposts=4' . '&paged='.$paged);
            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="post">
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                    } ?>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>

                    <?php comments_number( 'no responses', 'one response', '% responses' ); ?>.
                </div>
            <?php endwhile; ?>

            <!-- TODO: fix next and prev links -->
            <?php /* if ($paged > 1) { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                    <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                </nav>

            <?php } else { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                </nav>

            <?php }  */?>

        <?php wp_reset_query(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
