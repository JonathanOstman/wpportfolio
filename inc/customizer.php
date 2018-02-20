<?php
function wpb_customizer_register($wp_customize) {
  // Showcase Section
  $wp_customize->add_section('about', array(
    'title'   => __('About', 'wpbootstrap'),
    'description' => sprintf(__('Options for about','wpbootstrap')),
    'priority'    => 130
  ));
  $wp_customize->add_setting('about_h2', array(
    'default'   => _x('About Me', 'wpbootstrap'),
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control('about_h2', array(
    'label'   => __('Heading', 'wpbootstrap'),
    'section' => 'about',
    'priority' => 2
  ));
  $wp_customize->add_setting('about_text', array(
    'default'   => _x('My name is Jonathan Östman and I am studying to become a web developer at Optima vocational school. I am 17 years old and live in Esse, Finland and I like playing videogames, fishing and being with my friends. My mother tongue is Swedish but I know a lot of English and some Finnish. I am really passionated about my work and hope to get a job in web- or game development in the future!', 'wpbootstrap'),
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control('about_text', array(
    'label'   => __('Text', 'wpbootstrap'),
    'section' => 'about',
    'priority' => 3
  ));
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