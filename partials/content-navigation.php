<?php
  $defaults = array(
  'container'         => 'nav',
  'container-class'   => 'menu',
  'echo'              => false,
  'fallback-cb'       => false,
  'items-wrap'        => '%3$s',
  'depth'             => 0
);
echo strip_tags(wp_nav_menu( $defaults ), '<nav><a>');
 ?>