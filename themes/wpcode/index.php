<?php get_header(); ?>

<h1>Welcome to WPCode</h1>
<p>You're in the right place to learn to code in WP for free baby!</p>

<h3>---------- LOOP CONTENT BELOW ---------</h3>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    the_title();
    the_content();
  endwhile;
endif;
?>

<?php get_footer(); ?>
