<?php get_header(); ?>

<div id="main">
    <div class="content">
        <section>
            <?php while ( have_posts() ) : the_post(); ?>

                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <hr>

            <?php endwhile; ?>

            <!-- TODO: fix next and prev links -->
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                <nav class="nav-pager">
                    <div class="nav-fore"><?php next_posts_link( __( '← Äldre inlägg' ) ); ?></div>
                    <div class="nav-efter"><?php previous_posts_link( __( 'Nyare inlägg →' ) ); ?></div>
                </nav>

            <?php endif; ?>
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

        </section>
    </div>
    <?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
