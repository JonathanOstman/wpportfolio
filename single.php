<?php
  get_header();
  get_template_part('partials/content', 'navigation');
  get_template_part('partials/content', 'header');
?>

<article>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
  <h2><?php the_title(); ?></h2>
  <p><?php the_content(); ?><a href="<?php the_field('project_address'); ?>" target="_blank">check it out here</a> </p>
  <a href="/"> <- Tillbaka</a>
</article>

<?php get_footer(); ?>