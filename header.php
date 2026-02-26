<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emiko Golf — Premium custom golf head covers. Handcrafted leather designs with personalized embroidery.">
    <meta property="og:title" content="Emiko Golf — Custom Head Covers">
    <meta property="og:description" content="Premium handcrafted golf head covers with custom embroidery and personalization.">
    <meta property="og:type" content="website">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="site-nav" id="siteNav">
    <a href="<?php echo home_url(); ?>" class="nav-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Emiko Golf">
    </a>
    <ul class="nav-links" id="navLinks">
        <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
        <li><a href="<?php echo function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/'); ?>">Shop</a></li>
        <li><a href="<?php echo home_url(); ?>/#gallery">Gallery</a></li>
        <li><a href="<?php echo home_url(); ?>/#process">Process</a></li>
        <li><a href="<?php echo function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/'); ?>" class="nav-cta">Shop Now</a></li>
    </ul>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>
