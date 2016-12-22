<?php

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return ' <div><a class="moretag" title="Read more..." href="'. get_permalink($post->ID) . '">Read more...</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add menu to site
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Enable footer widgets
register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

// Enabled sidebar widgets

if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'sidebar1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
register_sidebar(array('name'=>'sidebar2',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'single-post-thumbnail', 590, 180 );
//wp_enqueue_style( 'master', get_template_directory_uri() . '/build/css/master.css');