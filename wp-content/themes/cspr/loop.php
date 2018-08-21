<ul class="loop-list">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h4 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h4>
				<!-- /post title -->

				<!-- post details -->
				<div class="info">
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				</div>
				<!-- /post details -->

				<div class="excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>

				<?php //edit_post_link(); ?>
			</li>
		<?php endwhile; ?>
	<?php else: ?>
		<li>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</li>
	<?php endif; ?>
</ul>