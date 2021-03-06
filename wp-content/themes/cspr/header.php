<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Roboto+Condensed:700|Roboto:400,400i" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="page-wrapper">
			<header class="header" role="banner">
				<div class="header-inner clearfix">
					<div class="icon-menu mobile-ctl"></div>

					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/csr_logo.png" alt="California Sharpei Rescue" class="logo-img">
						</a>
					</div>

					<nav class="nav" role="navigation">
						<?php getHeaderNav(); ?>
					</nav>

					<div class="header-search">
						<?php get_template_part('searchform'); ?>
					</div>
				</div>

				<div class="mobile-menu">
					<div class="header-search"><?php get_template_part('searchform'); ?></div>
					<?php getHeaderNav(); ?>
				</div>
			</header>
