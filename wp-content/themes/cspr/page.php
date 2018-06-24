<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="page-title-wrap">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
			<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="page-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
			<?php endif; ?>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
