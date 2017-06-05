<?php get_header(); ?>

<div id="main">
    <div class="content col-md-8">

        <section>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <span class="category"><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></span>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="date-info">Postat <span class="date"><?php the_date('j F, Y'); ?></span></div>

                <div class="content-info">
                    <?php the_content(); ?>
                </div>
                <hr>
                <?php if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>
            </div>
            <?php endwhile; ?>

            <?php if ( $wp_query->max_num_pages > 1) : ?>
                <nav class="nav-pager">
                    <div class="nav-before"><?php next_posts_link( __( '<span>' . ' Äldre inlägg' . '</span>' ) ); ?></div>
                    <div class="nav-after"><?php previous_posts_link( __( '<span>' . 'Nyare inlägg' . '</span>' ) ); ?></div>
                </nav>
            <?php endif; ?>

            <?php wp_reset_query(); ?>

        </section>
    </div>
    <?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
