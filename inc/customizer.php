<?php
function wpb_customizer_register($wp_customize) {
  // Showcase Section
  $wp_customize->add_section('projects', array(
    'title'   => __('Projects', 'wpbootstrap'),
    'description' => sprintf(__('Options for projects','wpbootstrap')),
    'priority'    => 130
  ));
  $wp_customize->add_setting('projects_h2', array(
    'default'   => _x('My Projects', 'wpbootstrap'),
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control('projects_h2', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'projects',
    'priority' => 2
  ));
  $wp_customize->add_section('header', array(
    'title'   => __('Header', 'wpbootstrap'),
    'description' => sprintf(__('Options for header','wpbootstrap')),
    'priority'  => 130
  ));
  $wp_customize->add_setting('showcase_image',array(
  'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
  'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
  'label'   => __('Showcase Image', 'portfolio'),
  'section' => 'header',
  'settings'=> 'showcase_image',
  'priority'  => 1
  )));
  }

  add_action('customize_register', 'wpb_customizer_register');
?>