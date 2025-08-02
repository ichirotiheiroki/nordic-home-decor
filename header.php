<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nordic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=<?php echo filemtime(get_template_directory() . '/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
<!-- Top Banner -->
<div class="top-banner">
    <div class="banner-container">
        <div class="banner-left">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>FAST WORLDWIDE SHIPPING</span>
        </div>
        <div class="banner-right">
            <div class="language-selector">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>English</span>
            </div>
            <div class="currency-selector">€</div>
        </div>
    </div>
</div>



<!-- Header -->
<header class="header">
    <div class="header-container">
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search" class="search-input">
            <button class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="search-icon"><defs><style>.search_svg__a{fill:none;stroke:#1e2022;stroke-linecap:square;stroke-miterlimit:10;stroke-width:2px}</style></defs><g transform="translate(1 1)"><circle cx="9.5" cy="9.5" r="9.5" class="search_svg__a"></circle><path d="m14 14 10 10" class="search_svg__a"></path></g></svg>
            </button>
        </div>

        <!-- Logo -->
        <div class="logo">
            <div class="logo-placeholder">NORDIC NEST</div>
        </div>

        <!-- Action Icons -->
        <div class="header-actions">
            <button class="action-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
            <button class="action-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
            <button class="action-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" stroke="currentColor" stroke-width="2"/>
                    <polyline points="3,6 21,6" stroke="currentColor" stroke-width="2"/>
                    <path d="M16 10a4 4 0 0 1-8 0" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
            <button class="action-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="3" y1="6" x2="21" y2="6" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="12" x2="21" y2="12" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="18" x2="21" y2="18" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navigation">
        <div class="nav-container">
            <div class="nav-primary">
                <a href="#" class="nav-link">TABLEWARE</a>
                <a href="#" class="nav-link">HOME ACCESSORIES</a>
                <a href="#" class="nav-link">COOKWARE & KITCHEN</a>
                <a href="#" class="nav-link">LIGHTING</a>
                <a href="#" class="nav-link">RUGS & TEXTILES</a>
                <a href="#" class="nav-link">FURNITURE</a>
                <a href="#" class="nav-link">Featured</a>
            </div>
            <div class="nav-secondary">
                <a href="#" class="nav-link">OUTDOOR</a>
                <a href="#" class="nav-link">BRANDS</a>
                <a href="#" class="nav-link">SPECIAL OFFERS</a>
                <a href="#" class="nav-link">INSPIRATION</a>
            </div>
        </div>
    </nav>
</header>

<!-- Newsletter Alert -->
<div class="newsletter-alert">
    <span>Sign-up to our newsletter and get 5% off your first order*</span>
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/>
        <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
    </svg>
</div>