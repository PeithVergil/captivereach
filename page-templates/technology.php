<?php

/*
 * Template Name: Technology
 */

function my_class_names($classes) {
  $classes[] = 'technology';
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
  
  <div class="row-fluid c">
          <div class="span12">
            <div class="techbanner">
              <div class="top">
                <img src="<?php the_field('technology-banner'); ?>">
                <div class="crphone"></div>
              </div>
              <div class="bot">
                <h3 class="title1">Give an overview of the technology</h3>
                <h4 class="title2">Supporting line of text for headline beside for content to the right.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non orci sed lacus tempus venenatis eu vitae turpis. Suspendisse sit amet elit est. Suspendisse quis massa id massa tincidunt viverra. Fusce faucibus velit eu erat dictum non ornare odio laoreet. Ut vitae turpis vulputate nulla condimentum vestibulum. Phasellus vitae purus a lacus faucibus viverra. Donec vehicula luctus nisi, a blandit lacus fringilla eu. Nulla consectetur diam lorem.</p>
                <a href="#" class="more">Learn More</a>
              </div>
            </div>
          </div>
        </div>
  
  <?php the_content() ?>

<?php get_footer(); ?> 