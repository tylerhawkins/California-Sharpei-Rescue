<?php
	/* Template Name: Home Page Template */
	get_header();
?>

<main id="maincontent" class="page-main">
	<div class="home-banner-wrap">
		<div class="home-banner">
			<div class="text-box">
				<h3>Our mission is to rescue Shar-pei from high-kill Shelters</h3>
				<p>and give them the time and care they need to find a forever home.</p>
				<a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>" class="btn">Adopt Today!</a>
			</div>
		</div>
	</div>
	<?php /*while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
		<div class="entry-content-page">
			<?php the_content(); ?> <!-- Page Content -->
		</div><!-- .entry-content-page -->
	<?php
		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
	*/ ?>
</main>

<?php get_footer(); ?>
