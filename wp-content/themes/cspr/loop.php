<ul class="loop-list">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php if ( 'happy-end' == get_post_type() ): ?>
						<div class="post-img">
							<?php the_post_thumbnail('custom-blog'); ?>
						</div>
					<?php else: ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-img">
							<?php the_post_thumbnail('custom-blog'); ?>
						</a>
					<?php endif ?>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<div class="post-content">
					<?php if ( 'happy-end' == get_post_type() ): ?>
						<h5 class="title"><?php the_title(); ?></h5>
					<?php else: ?>
						<h5 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h5>
					<?php endif ?>

					<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

					<?php if ( 'happy-end' == get_post_type() ): ?>
						<div class="excerpt"><?php the_content() ?></div>
					<?php else: ?>
						<div class="excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>
					<?php endif ?>
				</div>
			</li>
		<?php endwhile; ?>
	<?php else: ?>
		<li>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</li>
	<?php endif; ?>
</ul>