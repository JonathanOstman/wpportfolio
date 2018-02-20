<?php if(!is_single('lampswitch' + 'pong-game')) : ?>
<footer>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></footer>
<div class="link">
  <a href=https://www.instagram.com/ostmanjonathan/><i class="fa fa-instagram" aria-hidden="true"></i></a>
  <a href=https://www.facebook.com/jonathan.ostman.92><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
  <a href=https://github.com/JonathanOstman><i class="fa fa-github" aria-hidden="true"></i></a>
</div>
<?php wp_footer(); ?>
<?php endif;?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tennis-game.js">
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