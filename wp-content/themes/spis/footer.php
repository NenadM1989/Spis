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
	<div class="footer-container page-width-boxed-1">
		<div class="footer-container-top">
			<div class="footer-container-left">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="site logo">
			</div>
			<div class="footer-container-center">
				<div class="footer-center-top">
					<div class="footer-column">
						<p class="footer-column-spis">Udruženje <br> priređivača <br>igara na sreću</p>
					</div>
					<div class="footer-column">
						<p class="top-text-sr">Društvena odgovornost <br> kampanje</p>
					</div>
					<div class="footer-column">
						<p class="footer-text-about">O nama</p>
					</div>
				</div>
				<div class="footer-center-bottom">
					<div class="footer-column">
						<p class="bottom-text hidden">Udruženje priređivača igara na sreću</p>
					</div>
					<div class="footer-column">
						<p class="footer-bottom-text">Mozzart</p>
						<p class="footer-bottom-text">Maxbet</p>
					</div>
					<div class="footer-column">
						<p class="footer-bottom-text">O nama</p>
						<p class="footer-bottom-text">Vesti</p>
						<p class="footer-bottom-text">Članice</p>
					</div>
				</div>

			</div>
			<div class="footer-container-right">
				<a href="#">Get in Touch</a>
			</div>

		</div>
		<div class="footer-container-bottom">

			<!-- LEVO – ISTA ŠIRINA KAO LOGO GORE -->
			<div class="footer-bottom-left">
				<div class="footer-bottom-left-sm">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="">
					</a>
				</div>
				<div class="footer-bottom-left-sm">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="">
					</a>
				</div>
			</div>

			<!-- SREDINA – ISTI GRID KAO GORE -->
			<div class="footer-bottom-center">
				<div class="footer-bottom-grid">

					<!-- PRVA KOLONA – ISPOD "UDRUŽENJE" -->
					<div class="footer-bottom-col footer-bottom-contact">
						<span class="footer-contact-line"></span>
						<p class="footer-phone">+381 111-51-11</p>
						<p>info@spis.rs</p>
					</div>

					<!-- DRUGA KOLONA – PRAZNA -->
					<div></div>

					<!-- TREĆA KOLONA – PRAZNA -->
					<div></div>

				</div>
			</div>

			<!-- DESNO – ISTA ŠIRINA KAO DUGME GORE -->
			<div class="footer-bottom-right">
				<p>© 5magazin<br>Sva prava zadržana</p>
			</div>

		</div>



	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>