<?php get_header(); ?>

	<main role="main">
		<div class="page-title-wrap">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
		<?php if (have_posts()): ?>
			<div class="page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
				<div class="page-content">
					<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
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
