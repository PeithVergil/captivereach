<?php

function __custom_class($classes) {
  $classes[] = 'usecases';
  return $classes;
}
add_filter('body_class','__custom_class');

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
		<?php the_content() ?>
	</div>
</div>

<?php get_footer(); ?>