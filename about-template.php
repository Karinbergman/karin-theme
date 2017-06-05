<?php
/**
 * Template Name: About
 */
get_header(); ?>

    <div id="about" class="about-content col-md-8">

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>

            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->

<?php

get_sidebar();
get_footer();