<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spis
 */

?>

<footer class="footer-main page-width-full">
	<div class="footer-container page-width-boxed-2">
		<div class="footer-top">
			<div class="footer-top-row">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="site logo">
				<div class="footer-top-middle">
					<div class="footer-middle-row">
						<p class="footer-middle-spis">Udruženje <br> priređivača <br>igara na sreću</p>
						<p class="footer-middle-text">Društvena odgovornost <br> kampanje</p>
						<p class="footer-middle-text">O nama</p>
					</div>
					<div class="footer-middle-row">
						<div>
							<p class="footer-middle-spis hidden">Udruženje <br> priređivača <br>igara na sreću</p>
						</div>
						<div class="footer-second-row-text">
							<p>Mozzart</p>
							<p>Maxbet</p>
						</div>
						<div class="footer-second-row-text">
							<p>O nama</p>
							<p>Vesti</p>
							<p>Članice</p>
						</div>
					</div>
				</div>
				<a href="#">Get in Touch</a>
			</div>
		</div>
		<div class="footer-bottom">
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>