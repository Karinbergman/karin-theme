<?php get_header(); ?>
<div id="nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
<div id="page">
    <hr>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_category('&nbsp;&rsaquo;&nbsp;'); echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
