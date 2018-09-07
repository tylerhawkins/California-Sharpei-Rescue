<?php get_header(); ?>

	<main id="maincontent" class="page-main">
		<div class="page-title-wrap">
			<h1 class="page-title">Search Results</h1>
		</div>
		<?php if (have_posts()): ?>
			<div class="search-results-container page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
				<div class="page-content">
					<h2 class="content-title"><?php echo sprintf( __( '%s Search Results for "%s"', 'html5blank' ), $wp_query->found_posts, get_search_query()); ?></h2>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
				<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?>
					<?php get_sidebar(); ?>
				<?php endif ?>
			</div>
		<?php else: ?>
			<div class="page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
				<div class="page-content">
					<h2 class="content-title"><?php _e( 'Sorry, no results to display.', 'html5blank' ); ?></h2>
				</div>
				<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?>
					<?php get_sidebar(); ?>
				<?php endif ?>
			</div>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>
