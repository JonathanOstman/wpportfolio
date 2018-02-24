<footer>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></footer>
<div class="link">
  <?php $loop = new WP_Query( array( 'post_type' => 'social', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

  <a href="<?php the_field('address')?>"><i class="fa fa-<?php the_field('social_media') ?> social" aria-hidden="true"></i></a>

  <?php endwhile; wp_reset_query(); ?>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!--Google analytics-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-98293623-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>