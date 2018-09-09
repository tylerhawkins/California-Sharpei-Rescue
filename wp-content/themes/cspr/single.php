<?php get_header(); ?>

	<main id="maincontent" class="page-main">
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
					<div class="page-content">
						<h1 class="blog-title"><?php the_title(); ?></h1>

						<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<div class="blog-img img-wrap">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</div>
						<?php endif; ?>

						<?php the_content(); // Dynamic Content ?>
					</div>
					<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?>
						<?php get_sidebar(); ?>
					<?php endif ?>
				</div>
			<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>
