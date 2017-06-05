<?php get_header(); ?>
        <div id="post" class="post col-md-8">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="post-content">
                <div class="category"><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></div>
                <div class="comment-count"><a href="<?php echo get_comments_link( $post->ID ); ?>"><?php comments_number( '0', '1', '%' ); ?></a></div>

                <h1><?php echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?></h1>

                <div class="date-info"><span class="date"><?php the_date('j F, Y'); ?></span></div>

            <?php the_content(); ?>
            </div>

            <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif; ?>

        <?php endwhile; // end of the loop. ?>
        </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
