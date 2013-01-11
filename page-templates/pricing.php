<?php

/*
 * Template Name: Pricing
 */

function my_class_names($classes) {
  $classes[] = 'pricing';
  return $classes;
}
add_filter('body_class','my_class_names');

get_header(); ?>

  <?php the_post(); ?>

  <div class="row-fluid a">
    <div class="span12">
	  <h3 class="title1"><?php the_field('title1'); ?></h3>
    </div>
  </div>

  <div class="row-fluid b">
	<div class="span12">
		<h4 class="title2"><?php the_field('title2'); ?></h4>
	</div>
  </div>
  <?php the_content() ?>

<?php get_footer(); ?> 