<?php
add_action( 'wp_enqueue_scripts', 'liftup_theme_enqueue_styles' );

function liftup_theme_enqueue_styles() {
  $parent_style = 'parent-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
                  array( $parent_style ),
                  wp_get_theme()->get('Version')
  );
}

if( function_exists('register_sidebar') ) {
  register_sidebar( array(
    'name' => 'Below footer',
    'id' => 'below-footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
}

if( function_exists('register_sidebar') ) {
  register_sidebar( array(
    'name' => 'Below slider',
    'id' => 'below-slider',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
}

