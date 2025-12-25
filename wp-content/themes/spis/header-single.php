<?php

/**
 * Hheader za Single post stranice
 *
 * @package Spis
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header-single-main page-width-full">
        <div class="header-single-container page-width-boxed">
            <div class="header-single-left">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="/wp-content/uploads/2025/12/Logo-1.svg" alt="site logo">
                    <p>SPIS</p>
                </a>
            </div>
            <div class="header-single-menu">
                <nav class="header-single-nav">
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
            <div class="header-single-right"></div>
        </div>
    </header>