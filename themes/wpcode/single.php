<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1><?php the_title(); ?></h1>
        <div class="main-content single-post">
          <?php the_content(); ?>
        </div>
      </div><!-- / .col-xy -->
    </div><!-- / .row -->
  </div><!-- / .container -->

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <?php require( get_template_directory() . '/partials/author-box.php' ); ?>
      </div><!-- / .col-xy -->
    </div><!-- / .row -->
  </div><!-- / .container -->

<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>
