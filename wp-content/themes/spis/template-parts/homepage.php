<?php
/*
Template Name: Homepage
*/
get_header();
?>

<link rel="stylesheet" href="/wp-content/themes/spis/assets/css/homepage.css">

<!-- Hero -->
<section class="home-hero page-width-full">
    <div class="home-hero-container page-width-boxed-2">
        <h1 class="home-hero-heading">Ujedinjeni za <br>sigurno i održivo tržište igara na sreću</h1>
        <p class="home-hero-text">Mi smo glas licenciranih priređivača igara na sreću u Srbiji i zajedno radimo na stvaranju odgovorne i održive budućnosti </p>
        <a href="#" class="home-hero-btn">Društvena odgovornost i kampanje</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beli.png" alt="Diamond" class="home-diamond">
</section>

<!-- About Us -->
<section class="home-about page-width-full">
    <div class="home-about-container page-width-boxed">
        <div class="home-about-top">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/darko-logo.svg" alt="Dark Logo" class="home-about-logo">
            <h2 class="home-about-heading">Ko smo mi?</h2>
        </div>

        <p class="home-about-bold-text">Savez priređivača igara na sreću (SPIS) okuplja dva vodeća priređivača igara na sreću u Srbiji-Mozzart i Maxbet</p>
        <p class="home-about-text">Kao zajednički glas industrije, zalažemo se razvijanje transparentnog, odgovornog i regulisanog tržišta igara na sreću. Naša misija je da zaštitimo interese svoji članica, podstaknemo inovacije i doprinesemo ekonomskom razvoju Srbije.</p>
    </div>
</section>


<!--News-->
<section class="home-news page-width-full">
    <div class="home-news-container page-width-boxed">
        <div class="home-news-top">
            <p>NAJNOVIJA DEŠAVANJA</p>
            <div class="line-wrapper">
                <span class="line left-line"></span>
                <span class="news-text">Vesti</span>
                <span class="line right-line"></span>
            </div>
        </div>
        <div class="home-news-cards">
            <?php
            $news_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ]);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
                    get_template_part('template-parts/card-news', 'card');
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Nema novosti.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<!--Responsibility-->
<section class="home-responsibility page-width-full">
    <div class="home-responsibility-container page-width-boxed">
        <div class="home-responsibility-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/responsibility.png" alt="Responsibility">
        </div>
        <div class="home-responsibility-right">
            <div class="home-responsibility-title">Društvena odgovornost i inicijative</div>
            <div class="home-responsibility-text">Kao zajednički glas industrije, zalažemo se za razvijanje transparentnog, odgovornog i regulisanog tržišta igara na sreću. Naša misija je da zaštitimo interese svojih članica, podstaknemo inovacije i doprinesemo ekonomskom razvoju Srbije.</div>
            <a href="#" class="home-responsibility-btn">
                SAZNAJ VIŠE
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fi_arrow-down-left.svg" alt="strelica">
            </a>

        </div>
    </div>
</section>

<!--Benefits-->
<section class="home-benefits page-width-full">
    <div class="home-benefits-container page-width-boxed-3">
        <div class="home-benefits-card">
            <p class="home-benefits-number">645</p>
            <p class="home-benefits-text">CALL OUT A FEATURE, BENEFIT OR VALUE OF YOUR SITE THAT CAN STAND ON ITS OWN</p>
        </div>
        <div class="home-benefits-card">
            <p class="home-benefits-number">645</p>
            <p class="home-benefits-text">CALL OUT A FEATURE, BENEFIT OR VALUE OF YOUR SITE THAT CAN STAND ON ITS OWN</p>
        </div>
        <div class="home-benefits-card">
            <p class="home-benefits-number">645</p>
            <p class="home-benefits-text">CALL OUT A FEATURE, BENEFIT OR VALUE OF YOUR SITE THAT CAN STAND ON ITS OWN</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>