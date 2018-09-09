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
									<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-img">
											<?php the_post_thumbnail('custom-blog'); ?>
										</a>
									<?php endif; ?>

									<div class="post-content">
										<h5 class="title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h5>
										<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
										<div class="excerpt"><?php the_excerpt() ?></div>
									</div>
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
