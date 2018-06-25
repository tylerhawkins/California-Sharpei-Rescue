<?php get_header(); ?>

	<main id="maincontent" class="page-main">
		<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="available-dog-container clearfix">
					<div class="available-dog-col left">
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<div class="feature-image">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</div>
						<?php endif; ?>
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="available-dog-col right">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="actions-toolbar">
								<a href="<?php echo get_permalink( get_page_by_path( 'adopt' ) ) ?>" class="btn">Adopt</a>
								<a href="<?php echo get_permalink( get_page_by_path( 'donate' ) ) ?>" class="btn secondary">Donate</a>
							</div>

							<div class="content-wrap">
								<?php the_content(); // Dynamic Content ?>
							</div>

							<div class="actions-toolbar">
								<a href="<?php echo get_permalink( get_page_by_path( 'adopt' ) ) ?>" class="btn">Adopt</a>
								<a href="<?php echo get_permalink( get_page_by_path( 'donate' ) ) ?>" class="btn secondary">Donate</a>
							</div>
						</article>
					</div>
				</div>
			<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>
