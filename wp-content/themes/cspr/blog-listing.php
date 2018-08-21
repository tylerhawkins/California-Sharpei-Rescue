<?php
	/* Template Name: Blog Listing Template */
	get_header();
?>

<main id="maincontent" class="page-main">
	<div class="page-title-wrap">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
	<div class="page-container clearfix<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?> has-sidebar<?php endif ?>">
		<div class="page-content">
			<div class="blog-posts-container">
				<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 10
					);

					$posts = get_posts($args);

					if( count($posts) > 0 ): ?>
						<ul class="blog-posts clearfix">
							<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
								<li class="blog-post">
									<a href="<?php the_permalink(); ?>">
										<div class="img-wrap">
											<?php the_post_thumbnail('custom-size'); ?>
										</div>
										<h5><?php the_title(); ?></h5>
										<p><?php the_excerpt() ?></p>
									</a>
								</li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					<?php else: ?>
						<p>Sorry, no posts are available right now. Please check back later!</p>
					<?php endif;
				?>
			</div>
		</div>
		<?php if ( is_dynamic_sidebar( 'cms-sidebar' ) ): ?>
			<?php get_sidebar(); ?>
		<?php endif ?>
	</div>
</main>

<?php get_footer(); ?>
