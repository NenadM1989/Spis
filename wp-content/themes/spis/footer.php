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
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="Spis logo">
			</div>

			<div class="footer-nav">
				<div class="footer-col footer-col-brand">
					<p class="footer-title">Udruženje<br>priređivača<br>igara na sreću</p>
				</div>

				<div class="footer-col">
					<p class="footer-heading">Društvena odgovornost i kampanje</p>
					<ul class="footer-links">
						<li><a href="#">Mozzart</a></li>
						<li><a href="#">MaxBet</a></li>
					</ul>
				</div>

				<div class="footer-col">
					<p class="footer-heading">O nama</p>
					<ul class="footer-links">
						<li><a href="#">O nama</a></li>
						<li><a href="#">Vesti</a></li>
						<li><a href="#">Članice</a></li>
					</ul>
				</div>
			</div>

			<a class="footer-cta" href="#">Get In Touch</a>
		</div>

		<div class="footer-bottom">
			<div class="footer-bottom-left">
				<div class="footer-divider" aria-hidden="true"></div>
				<div class="footer-contact">
					<div class="footer-social">
						<a class="footer-social-btn" href="#" aria-label="Facebook">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M14.5 8.5H16V6h-1.5C12 6 11 7.2 11 9.1V11H9v2.3h2V18h2.4v-4.7h1.9L16.6 11H13.4V9.3c0-.5.2-.8 1.1-.8z" fill="currentColor"/>
							</svg>
						</a>
						<a class="footer-social-btn" href="#" aria-label="Instagram">
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M16.8 5H7.2A2.2 2.2 0 0 0 5 7.2v9.6A2.2 2.2 0 0 0 7.2 19h9.6a2.2 2.2 0 0 0 2.2-2.2V7.2A2.2 2.2 0 0 0 16.8 5zm.7 1.6.7-.1V8l-1 .1-.4-1zM12 9.1A2.9 2.9 0 1 1 9.1 12 2.9 2.9 0 0 1 12 9.1zm0 7A4.1 4.1 0 1 0 7.9 12 4.1 4.1 0 0 0 12 16.1zm5.1 1.3a1.1 1.1 0 0 1-1.1 1.1H8a1.1 1.1 0 0 1-1.1-1.1V9h1.6a4.9 4.9 0 1 0 6.9 0h1.7z" fill="currentColor"/>
							</svg>
						</a>
					</div>
					<div class="footer-meta">
						<a class="footer-phone" href="tel:+3811115111">+381 111-51-11</a>
						<a class="footer-mail" href="mailto:info@spis.rs">info@spis.rs</a>
					</div>
				</div>
			</div>

			<div class="footer-copy">
				<span>© 2025 — 5magazin</span>
				<span>Sva prava zadržana</span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>