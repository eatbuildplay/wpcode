<?php

$args = [
  'post_type' => 'post',
  'numberposts' => 10
];
$posts = get_posts( $args );

?>

<?php get_header(); ?>

<div class="container">

<?php
if ( $posts ) :
  foreach( $posts as $post ) :
?>


  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="main-content blog">
        <a href="<?php print get_permalink( $post ); ?>">
          <h2><?php print $post->post_title; ?></h2>
        </a>
        <hr />
      </div>
    </div><!-- / .col-xy -->
  </div><!-- / .row -->


<?php
  endforeach;
endif;
?>

</div><!-- / .container -->

<?php get_footer(); ?>
