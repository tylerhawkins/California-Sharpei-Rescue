<ul class="loop-list">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-img">
						<?php the_post_thumbnail('medium'); ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<div class="post-content">
					<h4 class="title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h4>

					<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

					<div class="excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>

				</div>
			</li>
		<?php endwhile; ?>
	<?php else: ?>
		<li>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</li>
	<?php endif; ?>
</ul>