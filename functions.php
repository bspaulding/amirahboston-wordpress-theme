<?php

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );

function initialize_sidebar_widgets() {
  register_sidebar(array(
    'before_widget' => '<section class="aside">',
    'before_title'  => '<h1>',
    'after_title'   => '</h1><div class="aside-content">',
    'after_widget'  => '</div></section>'
  ));
}

add_action( 'widgets_init', 'initialize_sidebar_widgets' );
?>
