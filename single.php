<?php
  get_header();
  get_template_part('partials/content', 'navigation');
  get_template_part('partials/content', 'header');
?>

<?php while ( have_posts() ) : the_post(); ?>
<article>
  <h2><?php the_title(); ?></h2>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
  <p><?php echo the_content(); ?><a class="btn btn-primary" href="<?php the_field('project_address'); ?>" target="_blank"><?php echo get_theme_mod('projects_btn','Check it out here'); ?></a> </p>
  <a href="/"><i class="fa fa-backward"></i> <?php echo get_theme_mod('projects_back', 'Back'); ?></a>
</article>
<?php endwhile; wp_reset_query();?>


<?php get_footer(); ?>