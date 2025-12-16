<?php

/**
 * Template Part: Card News
 * Used in: Homepage, News archive
 */
?>

<a href="<?php echo esc_url(get_the_permalink()); ?>" class="news-card">

    <div class="news-card-image">
        <?php
        if (has_post_thumbnail()) :
            the_post_thumbnail('large', [
                'alt' => esc_attr(get_the_title())
            ]);
        endif;
        ?>

        <div class="news-card-date">
            <span class="news-card-date-month"><?php echo esc_html(get_the_date('M')); ?></span>
            <span class="news-card-date-day"><?php echo esc_html(get_the_date('d')); ?></span>
            <span class="news-card-date-year"><?php echo esc_html(get_the_date('Y')); ?>.</span>
        </div>
    </div>

    <div class="news-card-content">
        <?php
        $location = get_field('location');
        if ($location) :
        ?>
            <p class="news-card-location"><?php echo esc_html($location); ?></p>
        <?php endif; ?>

        <h3 class="news-card-title"><?php the_title(); ?></h3>
    </div>
    <span class="news-card-link">SAZNAJ VIŠE</span>
</a>