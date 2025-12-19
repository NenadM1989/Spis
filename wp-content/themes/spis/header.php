<?php

/**
 * Prazan header za Spis temu
 *
 * Samo osnovne WP funkcije i struktura
 *
 * @package Spis
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo content_url(); ?>/uploads/2025/12/Site-icon-1.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo content_url(); ?>/uploads/2025/12/Site-icon-1.png" sizes="192x192">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-main page-width-full">
		<div class="header-container page-width-boxed">
			<div class="header-left">
				<a href="<?php echo home_url('/'); ?>">
					<img src="/wp-content/uploads/2025/12/Logo-1.svg" alt="site logo">
					<p>SPIS</p>
				</a>
			</div>
			<div class="header-menu">
				<nav class="header-nav">
					<?php
					wp_nav_menu([
						'theme_location' => 'header-menu',
						'container'      => false,
						'menu_class'     => 'header-menu-list',
						'fallback_cb'    => false,
					]);
					?>
				</nav>
			</div>
			<div class="header-right"></div>
		</div>
	</header>