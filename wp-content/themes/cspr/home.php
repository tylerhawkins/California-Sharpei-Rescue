<?php
	/* Template Name: Home Page Template */
	get_header();
?>

<main id="maincontent" class="page-main">
	<div class="home-banner-wrap">
		<div class="home-banner">
			<div class="text-box">
				<h2>Our mission is to rescue Shar-Pei from high-kill shelters</h2>
				<p>and give them the time and care they need to find a forever home.</p>
				<a href="<?php echo get_permalink( get_page_by_path( 'available-dogs' ) ) ?>" class="btn">Adopt Today!</a>
			</div>
		</div>
	</div>
	<div class="welcome-text">
		<div class="welcome-text-inner">
			<h2>Welcome!</h2>
			<p>California Shar-Pei Rescue is a registered non-profit Chinese Shar-Pei dog and puppy rescue, serving California and surrounding states. Our mission is to rescue Shar-Pei from high-kill shelters, and give them the time and care they need to find a forever home.</p>
			<p>Since 1988, we have placed hundreds of dogs from our privately-owned and operated 6-acre kennel facility in Northern California. At any give time, we have as many as 25 dogs available for adoption. We welcome you to meet our available dogs.</p>
		</div>
	</div>
	<div class="available-dogs-container">
		<h2>Available Dogs</h2>
		<p class="subtitle">The following dogs are currently available for adoption. Like us on <a href="https://www.facebook.com/californiasharpeirescue/" target="_blank">Facebook</a> and be the first to hear about our new dogs!</p>
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
