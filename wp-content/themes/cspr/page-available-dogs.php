<?php
	/* Template Available Dogs Template */
	get_header();
?>

<main id="maincontent" class="page-main">
	<div class="page-title-wrap">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
	<div class="available-dogs-container">
		<?php
			$args = array(
				'post_type' => 'available-dog',
				'post_status' => 'publish',
				'posts_per_page' => -1
			);

			$posts = get_posts($args);

			if( count($posts) > 0 ): ?>
				<ul class="available-dogs clearfix">
					<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div class="img-wrap">
									<?php the_post_thumbnail('custom-size'); ?>
								</div>
								<h5><?php the_title(); ?></h5>
							</a>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			<?php else: ?>
				<p>Sorry, no dogs available for adopt right now. Please check back later!</p>
			<?php endif;
		?>
	</div>
</main>

<?php get_footer(); ?>
