<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
  <?php bloginfo('name'); ?>
  <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
</title>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
<style>
  .home {
    background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/background.jpg'); ?>) no-repeat center center;
    background-size: cover;
  }
</style>
</head>

