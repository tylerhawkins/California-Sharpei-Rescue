<?php
	/* Template Name: Happy Ends Template */
	get_header();
?>

<main id="maincontent" class="page-main">
	<div class="page-title-wrap">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
	<?php if (have_posts()): ?>
		<div class="page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
			<div class="page-content">
				<div class="happy-ends-container">
					<?php
						$args = array(
							'post_type' => 'happy-end',
							'post_status' => 'publish',
							'posts_per_page' => -1
						);

						$posts = get_posts($args);

						if( count($posts) > 0 ): ?>
							<ul class="happy-ends clearfix">
								<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
									<li class="happy-end">
										<div class="img-wrap">
											<?php the_post_thumbnail('large'); ?>
										</div>
										<h5><?php the_title(); ?></h5>
										<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
										<div class="content"><?php the_content() ?></div>
									</li>
								<?php endforeach; wp_reset_postdata(); ?>
							</ul>
						<?php else: ?>
							<p>Sorry, something went wrong. Please contact us!</p>
						<?php endif;
					?>
				</div>
			</div>
			<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?>
				<?php get_sidebar(); ?>
			<?php endif ?>
		</div>
	<?php else: ?>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
	<?php endif; ?>
</main>

<?php get_footer(); ?>