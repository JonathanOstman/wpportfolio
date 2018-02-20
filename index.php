<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<body>
  <?php get_template_part('partials/content', 'navigation'); ?>
  <?php get_template_part('partials/content', 'header'); ?>
<?php if (is_page('About')) : ?>
  <h1 class="about-header"><?php echo get_theme_mod('about_h2','About me!'); ?></h1>
<p class="about-me"><?php echo get_theme_mod('about_text', 'My name is Jonathan Östman and I am studying to become a web developer at Optima vocational school. I am <?php echo $age ; ?> years old and live in Esse, Finland and
   I like playing videogames, fishing and being with my friends. My mother tongue is Swedish but I know a lot of English and some Finnish.
    I am really passionated about my work and hope to get a job in web- or game development in the future!') ?></p>
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
          <a href="<?php the_permalink(); ?>" target="_blank"><img class="project img-fluid" src= <?php the_post_thumbnail_url(); ?>></a>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>

  </section>;
<?php endif; ?>

<?php get_footer(); ?>