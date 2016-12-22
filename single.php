<?php get_header(); ?>
    <div id="nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
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
                <span><?php the_date('Y-m-d'); ?></span>
                <span><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></span>
            <?php } else { ?>
                <h1>
                    <?php echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?>
                </h1>
                <span><?php the_date('Y-m-d'); ?></span>
                <span><?php the_category('&nbsp;&rsaquo;&nbsp;'); ?></span>
            <?php } ?>
            <?php the_content(); ?>

            // If comments are open or we have at least one comment, load up the comment template.
            <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif; ?>

        <?php endwhile; // end of the loop. ?>
        </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
