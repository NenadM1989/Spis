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
	<link rel="stylesheet" href="/wp-content/themes/spis/assets/css/header.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-main page-width-full">
		<div class="header-container page-width-boxed">
			<div class="header-left">
				<a href="<?php echo home_url('/'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="site logo">
					<p>SPIS</p>
				</a>
			</div>
			<div class="header-menu">
				<nav>
					<ul>
						<li><a href="#">O nama</a></li>
						<li><a href="#">Članice</a></li>
						<li><a href="#">Vesti</a></li>
						<li><a href="#">Kontakt</a></li>
					</ul>
				</nav>
			</div>

			<div class="header-right"></div>
		</div>
	</header>