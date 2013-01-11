<article id="post-<?php the_ID(); ?>" class="post">
	<div class="post_image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="inner">
		<div class="post_title">
			<?php if ( is_single() ) { ?>
				<h2 class="title2"><?php the_title(); ?></h2>
			<?php } else { ?>
				<h2 class="title2">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>
			<?php } // is_single() ?>
		</div>
		<div class="post_date">
			<span><?php the_time('F j, Y') ?> - <?php the_author_posts_link() ?></span>
		</div>
		<div class="post_data">
			<p>
				<?php the_content( __( 'Read More...', 'twentytwelve' ) ); ?>
			</p>
			<div class="divider"></div>
		</div>
	</div>
</article>