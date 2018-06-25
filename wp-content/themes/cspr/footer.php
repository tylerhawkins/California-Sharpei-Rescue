			<footer class="footer" role="contentinfo">
				<div class="footer-cta-wrap">
					<div class="footer-cta-col left">
						<a href="<?php echo get_permalink( get_page_by_path( 'available-dogs' ) ) ?>">
							<span class="img-wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/sharpei.png" />
							</span>
							<span class="text">View All Dogs</span>
						</a>
					</div>
					<div class="footer-cta-col right">
						<a href="<?php echo get_permalink( get_page_by_path( 'donate' ) ) ?>">
							<span class="img-wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/money-bag.png" />
							</span>
							<span class="text">Donate</span>
						</a>
					</div>
				</div>
				<div class="footer-content-wrap">
					<div class="footer-content">
						<div class="footer-nav"><?php getFooterNav(); ?></div>
						<p class="address">California Chinese Shar Pei Rescue - P.O. Box 492404 - Redding, CA 96049-2404</p>
						<ul class="socials">
							<li><a href="https://www.facebook.com/californiasharpeirescue/" target="_blank"><span class="icon-facebook"></span></a></li>
						</ul>
					</div>
					<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. All rights reserved.</p>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
