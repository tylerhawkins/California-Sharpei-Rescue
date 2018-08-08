<?php get_header(); ?>

	<main id="maincontent" class="page-main">
		<div class="page-title-wrap">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
		<?php if (have_posts()): ?>
			<div class="page-container">
				<div class="page-content">
					<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
		<?php else: ?>
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>
