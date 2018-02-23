<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<body>
  <?php get_template_part('partials/content', 'navigation'); ?>
  <?php get_template_part('partials/content', 'header'); ?>
<?php if (is_page('About me')) : ?>
  <h1 class="about-header"><?php the_title(); ?></h1>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="about-me">
      <?php the_content(); ?>
    </div>
  <?php endwhile; wp_reset_query();?>
<?php elseif (is_page('Contact')) : ?>
  <p class="contact-header">Contact me!</p>
  <?php echo do_shortcode('[contact-form-7 id="19" title="Contact Form"]'); ?>
<?php else : ?>
  <section class="container-fluid">
    <h1 class="rubrik1"><?php echo get_theme_mod('projects_h2','My projects'); ?></h1>
    <div class="row">
      <?php $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-4 project-div">
          <h1 class="project-header"><?php the_title(); ?></h1>
          <a href="<?php the_permalink(); ?>"><img class="project img-fluid" src= <?php the_post_thumbnail_url(); ?>></a>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </section>;
<?php endif; ?>
<?php get_footer(); ?>