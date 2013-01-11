<?php

/*
 * Template Name: Contact Page
 */

function my_class_names($classes) {
  $classes[] = 'contact';
  return $classes;
}
add_filter('body_class','my_class_names');

get_header(); ?>

  <?php the_post(); ?>

  <div class="row-fluid">
    <div class="contact_image"></div>
  </div>

  <div class="row-fluid">
    <div class="span8">
      <?php the_content(); ?>
    </div>
    <div class="span4">
      <?php the_field('contact_info'); ?>
    </div>
  </div>

<?php get_footer(); ?> 