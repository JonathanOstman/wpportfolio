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
<?php if(is_single('lampswitch')) : ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/upg5.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php elseif(is_single('pong-game')) : ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/tennisgame.css">
<?php elseif(is_single('top-10-games')) : ?>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ovning2.css" rel="stylesheet">
<?php else : ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php endif; ?>
<?php wp_head(); ?>
<style>
  .home {
    background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/background.jpg'); ?>) no-repeat center center;
    background-size: cover;
  }
</style>
</head>

