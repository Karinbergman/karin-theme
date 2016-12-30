<?php get_header(); ?>
        <div id="post" class="content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail( 'full' );
            }
            ?>
            <?php if ( is_front_page()) { ?>
                <h2>
                    <?php echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?>
                </h2>
            <?php } else { ?>
                <h1>
                    <?php echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?>
                </h1>
            <?php } ?>

            <div class="post-info">
                <span class="date"><?php the_date('Y-m-d'); ?></span>
                <span class="category"><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></span>
            </div>

            <?php the_content(); ?>

            // If comments are open or we have at least one comment, load up the comment template.
            <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif; ?>

        <?php endwhile; // end of the loop. ?>
        </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
