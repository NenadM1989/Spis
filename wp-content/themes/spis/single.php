<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Spis
 */

get_header('single');
?>

<div class="single-post-main page-width-full">
	<div class="single-post-container page-width-boxed-6">
		<div class="single-post-top-content">
			<p class="single-post-top-content-newest">Najnovija dešavanja</p>
			<h1 class="single-post-top-content-title"><?php the_title(); ?></h1>
			<p class="single-post-top-content-text">Duis quis mauris vel turpis dignissim tempus sed in risus. Praesent sagittis aliquam vehicula</p>
		</div>
		<div class="single-post-image">
			<img src="/wp-content/uploads/2025/12/DZ3_8379-1-min.png" alt="image">
			<p class="single-post-image-caption">Autor fotografije: ŽIKA SLIKA</p>
		</div>
		<div class="single-post-bottom-container">
			<p class="single-post-bottom-meta">
				<?php echo get_the_date('d. F Y'); ?>, <span class="single-post-bottom-location">Beograd</span>
			</p>
			<div class="single-post-bottom-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
