<?php
/*
Template Name: Members
*/
get_header();
?>

<!-- Hero -->
<section class="members-hero-main page-width-full">
    <div class="members-hero-container page-width-boxed-4">
        <p>Osnivači</p>
        <div class="members-hero-bets">
            <div class="members-hero-mozzart">
                <img src="/wp-content/uploads/2025/12/mozzart.png" alt="mozzart logo">
                <p>MOZZART</p>
            </div>
            <div class="members-hero-maxbet">
                <img src="/wp-content/uploads/2025/12/maxbet.png" alt="maxbet logo">
                <p>MAXBET</p>
            </div>
        </div>
        <div class="members-hero-associate">
            <p>PRIDRUŽENI ČLANOVI</p>
            <img src="/wp-content/uploads/2025/12/balkb-1.png" alt="balkan bet logo">
        </div>
    </div>
</section>

<!--About members-->
<section class="members-about-main page-width-full">
    <div class="members-about-container page-width-boxed">
        <div class="members-about-content">
            <img src="/wp-content/uploads/2025/12/mozz_100-1.png" alt="mozzart dark logo">
            <div class="members-about-content-text">
                <p>Osnovan 2001. godine, Mozzart je izrastao u lidera na tržištu igara na sreću u regionu. Sa oko hiljadu poslovnica u više zemalja i timom od preko pet hiljada profesionalaca, kompanija se ističe vrhunskom ponudom kvota, sopstvenim IT rešenjima i posvećenošću kvalitetu. Mozzart konstantno investira u zajednicu kroz humanitarne akcije i projekte kojima modernizuje društvo.</p>
                <a href="#">Više informacija o kompaniji na linku</a>
            </div>
        </div>
        <div class="members-about-content">
            <img src="/wp-content/uploads/2025/12/mozz_100-1_1.png" alt="maxbet dark logo">
            <div class="members-about-content-text">
                <p>Sa tradicijom dužom od tri decenije, Maxbet je izgradio prepoznatljiv brend u industriji igara na sreću. Kompanija posluje u Srbiji, Republici Srpskoj, Crnoj Gori, Severnoj Makedoniji i svoj razvoj bazira na konstantnom uvođenju inovacija i savremenih tehnologija. Zahvaljujući snažnom korporativnom upravljanju i ulaganju u zaposlene. Maxbet je postao jedan od lidera u regionu. Društvena odgovornost je u osnovi poslovne strategije kompanije, koja u kontinuitetu doprinosi zajednici i neguje dugoročne odnose sa ključnim partnerima.</p>
                <a href="#">Više informacija o kompaniji na linku</a>
            </div>
        </div>
    </div>
</section>

<!--News-->
<section class="members-news page-width-full">
    <div class="members-news-container page-width-boxed">
        <div class="members-news-top">
            <p>NAJNOVIJA DEŠAVANJA</p>
            <div class="members-line-wrapper">
                <span class="members-line members-left-line"></span>
                <span class="members-news-text">Vesti</span>
                <span class="members-line members-right-line"></span>
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

<?php get_footer(); ?>