<?php get_header(); ?>

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
		<div class="span8">
			<?php if ( have_posts() ) : ?>

				<section id="posts">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
				</section>

				<?php twentytwelve_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
					</div><!-- .entry-content -->

				<?php else : ?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				<?php endif; // end current_user_can() check ?>

				</article><!-- #post-0 -->

			<?php endif; // end have_posts() check ?>

			<div class="paging">
				<a href="#">Next</a>
				/
				<a href="#">Previous</a>
			</div>
		</div>

		<!--
		=============================================================================
		Sidebar Area
		=============================================================================
		-->
		<div class="span4">
			<div id="sidebar1">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<!--
		=============================================================================
		Sidebar Area
		=============================================================================
		-->
	</div>

<?php get_footer(); ?>