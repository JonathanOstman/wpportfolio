<?php
  require_once('class-wp-bootstrap-navwalker.php');


  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    require get_template_directory() . '/inc/customizer.php';

  register_nav_menus( array(
    'primary' => __( 'Primary Menu' ),
  ));
}
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'wpb_theme_setup'); add_action('after_setup_theme', 'wpb_theme_setup');












