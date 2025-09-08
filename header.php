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
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=<?php echo filemtime(get_template_directory() . '/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/c0f39de499f2824e9afdf6c3b1953d4d?family=GT+Haptik" rel="stylesheet">

    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />-->

    <?php wp_head(); ?>
</head>

<body>
<!-- Top Banner -->
<div class="top-banner">
    <div class="banner-container">
        <div class="banner-left">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <span>FAST WORLDWIDE SHIPPING</span>
        </div>
        <div class="banner-right">
            <div class="language-selector">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
                          stroke="currentColor" stroke-width="2"/>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="search-icon">
                    <defs>
                        <style>.search_svg__a {
                                fill: none;
                                stroke: #1e2022;
                                stroke-linecap: square;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }</style>
                    </defs>
                    <g transform="translate(1 1)">
                        <circle cx="9.5" cy="9.5" r="9.5" class="search_svg__a"></circle>
                        <path d="m14 14 10 10" class="search_svg__a"></path>
                    </g>
                </svg>
            </button>
        </div>

        <!-- Logo -->
        <div class="logo">
            <a aria-label="Start page" class="logo-link" data-spa-link="true" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.24 48" class="logo">
                    <path d="M87.093 48V29.814h-8.185V27.13h19.078v2.684h-8.215V48Zm-17.823-.239a6.4 6.4 0 0 1-1.92-.8 6.1 6.1 0 0 1-1.637-1.535 7 7 0 0 1-1.115-2.4l2.351-1.253a4.9 4.9 0 0 0 1.458 2.639 4.1 4.1 0 0 0 2.8.91 3.93 3.93 0 0 0 2.559-.776 2.72 2.72 0 0 0 .952-2.236 2.8 2.8 0 0 0-.312-1.386 3 3 0 0 0-.834-.939 4.6 4.6 0 0 0-1.175-.626q-.654-.238-1.369-.478-1.012-.328-2.112-.759A8.4 8.4 0 0 1 66.9 37a5.5 5.5 0 0 1-1.488-1.714 5.06 5.06 0 0 1-.581-2.519 5.5 5.5 0 0 1 .506-2.4 5.15 5.15 0 0 1 1.369-1.774 6 6 0 0 1 2.012-1.093 7.7 7.7 0 0 1 2.4-.372 6.5 6.5 0 0 1 4.167 1.342 7.07 7.07 0 0 1 2.381 3.667l-2.531 1.013a4.5 4.5 0 0 0-1.517-2.563 4.17 4.17 0 0 0-2.559-.775 3.67 3.67 0 0 0-2.649.864 2.83 2.83 0 0 0-.893 2.117 2.5 2.5 0 0 0 .312 1.3 3 3 0 0 0 .863.91 5.8 5.8 0 0 0 1.31.67q.759.284 1.622.581 1.221.417 2.277.88a7 7 0 0 1 1.83 1.133 4.8 4.8 0 0 1 1.221 1.625 5.5 5.5 0 0 1 .446 2.326 6.1 6.1 0 0 1-.5 2.578 5.2 5.2 0 0 1-1.355 1.8 5.5 5.5 0 0 1-1.965 1.058 7.9 7.9 0 0 1-2.345.346 8.6 8.6 0 0 1-1.964-.239ZM38.822 48l-13.3-16.547V48H22.84V27.13h2.678l13.3 16.577V27.13H41.5V48Zm8.905 0V27.13h12.8v2.683H50.406v6.411h10.119v2.683H50.406v6.41h10.119V48Zm14.54-26.453-6.059-7.533h-5.8v6.857h-2.682V0h8.007a7.4 7.4 0 0 1 2.8.522 6.7 6.7 0 0 1 2.217 1.461A6.9 6.9 0 0 1 62.221 4.2a7.2 7.2 0 0 1 .536 2.8 7 7 0 0 1-1 3.757 6.7 6.7 0 0 1-2.693 2.474l5.331 6.6-2.129 1.712ZM50.406 11.33h3.66L52.22 9.022l2.08-1.669 2.976 3.708A4.2 4.2 0 0 0 59.3 9.54a4.23 4.23 0 0 0 .774-2.534 4.35 4.35 0 0 0-.343-1.744 4.3 4.3 0 0 0-.931-1.371A4.2 4.2 0 0 0 57.415 3a4.5 4.5 0 0 0-1.681-.313h-5.328Zm52.406 8.75a10 10 0 0 1-3.259-2.191 10.4 10.4 0 0 1-2.188-3.309 10.6 10.6 0 0 1-.8-4.145 10.6 10.6 0 0 1 .8-4.144 10.4 10.4 0 0 1 2.188-3.309 9.9 9.9 0 0 1 3.273-2.191A10.5 10.5 0 0 1 106.918 0a9.9 9.9 0 0 1 4.048.805 12 12 0 0 1 3.274 2.146l-1.22 2.534a10 10 0 0 0-.9-.833 10.5 10.5 0 0 0-1.768-1.165 7.54 7.54 0 0 0-3.556-.8 7.8 7.8 0 0 0-2.991.567 7.2 7.2 0 0 0-2.4 1.579 7.3 7.3 0 0 0-1.591 2.445 8.35 8.35 0 0 0-.581 3.16 8.35 8.35 0 0 0 .581 3.161 7.3 7.3 0 0 0 1.591 2.444 7.2 7.2 0 0 0 2.4 1.58 7.8 7.8 0 0 0 2.991.567 9.6 9.6 0 0 0 1.859-.179 8.5 8.5 0 0 0 1.98-.686l.476 2.684a17 17 0 0 1-2.262.656 10.37 10.37 0 0 1-6.042-.581Zm-13.054.791V0h2.678v20.87Zm-21.665 0V0h7.143a10.7 10.7 0 0 1 4.107.79 10.2 10.2 0 0 1 3.3 2.176 9.9 9.9 0 0 1 2.188 3.294 10.9 10.9 0 0 1 .789 4.174 10.9 10.9 0 0 1-.789 4.174 10 10 0 0 1-2.185 3.292 10.2 10.2 0 0 1-3.3 2.176 10.7 10.7 0 0 1-4.107.79Zm2.678-2.684h4.464a8.3 8.3 0 0 0 3.081-.566 7.2 7.2 0 0 0 2.44-1.595 7.4 7.4 0 0 0 1.607-2.46 8.3 8.3 0 0 0 .581-3.13 8.2 8.2 0 0 0-.581-3.116 7.26 7.26 0 0 0-4.047-4.055 8.1 8.1 0 0 0-3.081-.581h-4.464ZM15.982 20.87 2.678 4.323V20.87H0V0h2.678l13.3 16.577V0h2.678v20.87Zm13.074-.791a9.96 9.96 0 0 1-5.491-5.5 10.8 10.8 0 0 1-.789-4.145 10.8 10.8 0 0 1 .789-4.144 9.95 9.95 0 0 1 5.491-5.5A10.7 10.7 0 0 1 33.194 0a10.85 10.85 0 0 1 4.152.791 9.9 9.9 0 0 1 3.3 2.19 10.2 10.2 0 0 1 2.173 3.31 10.8 10.8 0 0 1 .789 4.144 10.8 10.8 0 0 1-.789 4.145 10.2 10.2 0 0 1-2.173 3.309 9.9 9.9 0 0 1-3.3 2.191 10.8 10.8 0 0 1-4.152.79 10.7 10.7 0 0 1-4.138-.791M30.1 3.264a7.19 7.19 0 0 0-4.063 4.07 8.2 8.2 0 0 0-.58 3.1 8.2 8.2 0 0 0 .58 3.1A7.18 7.18 0 0 0 30.1 17.6a8.53 8.53 0 0 0 6.191 0 7.18 7.18 0 0 0 4.063-4.069 8.2 8.2 0 0 0 .581-3.1 8.2 8.2 0 0 0-.581-3.1 7.19 7.19 0 0 0-4.063-4.07 8.53 8.53 0 0 0-6.191 0Z" style="fill:#1e2022"></path>
                </svg>
            </a>
        </div>

        <!-- Action Icons -->
        <div class="header-actions">
            <button class="action-btn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.70652 15.4304V22.2876L11.7722 18.0019H23.8494V2.5733H1.56366V18.0019H6.70652"
                          stroke="currentColor" stroke-width="1.70588" stroke-miterlimit="10"/>
                    <path d="M5.84943 12.0019H19.5637" stroke="currentColor" stroke-width="1.70588"
                          stroke-miterlimit="10"/>
                    <path d="M5.84943 7.71616H19.5637" stroke="currentColor" stroke-width="1.70588"
                          stroke-miterlimit="10"/>
                </svg>


            </button>
            <button class="action-btn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.7065 13.6947C15.606 13.6947 17.9565 11.3442 17.9565 8.44473C17.9565 5.54524 15.606 3.19473 12.7065 3.19473C9.80705 3.19473 7.45654 5.54524 7.45654 8.44473C7.45654 11.3442 9.80705 13.6947 12.7065 13.6947Z"
                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M9.71179 12.6785C7.99241 13.2191 6.48694 14.2875 5.409 15.732C4.33107 17.1765 3.73541 18.9238 3.70654 20.726C6.51543 22.065 9.59513 22.7387 12.7065 22.6947C15.818 22.7387 18.8977 22.065 21.7065 20.726C21.678 18.9245 21.0831 17.1777 20.0062 15.7333C18.9293 14.2888 17.4249 13.22 15.7065 12.6785"
                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
                </svg>

            </button>
            <button class="action-btn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4565 10.6947L15.7598 5.95697C16.5826 5.14802 17.6903 4.6947 18.8442 4.6947C19.998 4.6947 21.1057 5.14802 21.9285 5.95697C22.333 6.35481 22.6542 6.82917 22.8734 7.3524C23.0927 7.87564 23.2056 8.43728 23.2056 9.00459C23.2056 9.57191 23.0927 10.1335 22.8734 10.6568C22.6542 11.18 22.333 11.6544 21.9285 12.0522L12.6758 21.1947L3.48153 12.0522C3.0771 11.6544 2.75589 11.18 2.53664 10.6568C2.31739 10.1335 2.20447 9.57191 2.20447 9.00459C2.20447 8.43728 2.31739 7.87564 2.53664 7.3524C2.75589 6.82917 3.0771 6.35481 3.48153 5.95697C4.30435 5.14802 5.41204 4.6947 6.56591 4.6947C7.71978 4.6947 8.82747 5.14802 9.65028 5.95697C9.65028 5.95697 13.143 8.84447 14.9565 10.6947"
                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
                </svg>

            </button>
            <button class="action-btn">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.1183 3.24896L19.5301 13.4842M9.2948 3.24896L5.88304 13.4842M1.61835 10.0725H23.7948C23.7948 10.0725 22.9418 22.8666 18.6771 22.8666H6.73598C2.47129 22.8666 1.61835 10.0725 1.61835 10.0725Z"
                          stroke="currentColor" stroke-width="1.70588" stroke-miterlimit="10" stroke-linecap="square"/>
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


    <!-- Mobile Navigation -->
    <div class="header-container-mobile">
        <div class="header-container-mobile__buttons">
            <button data-test-id="toggle-sidebar-menu-button" aria-label="Menu"
                    class="toggle-sidebar-menu-button action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.72 54.78"
                     class="toggle-sidebar-menu-button__icon">
                    <path d="M.007 2.29 65.517.003l.208 5.956L.215 8.247zM.08 48.82h65.55v5.96H.08zM-.001 29.794l.208-5.957 65.51 2.288-.208 5.956z"></path>
                </svg>
            </button>
            <button aria-label="Search" data-test-id="header-search-btn"
                    class="header-search-btn action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.414 26.414" class="header-search-btn__icon">
                    <defs>
                        <style>.search_svg__a {
                                fill: none;
                                stroke: #1e2022;
                                stroke-linecap: square;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }</style>
                    </defs>
                    <g transform="translate(1 1)">
                        <circle cx="9.5" cy="9.5" r="9.5" class="search_svg__a"></circle>
                        <path d="m14 14 10 10" class="search_svg__a"></path>
                    </g>
                </svg>
            </button>
        </div>
        <a aria-label="Start page" class="logo-link" data-spa-link="true" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.24 48" class="logo">
                <path d="M87.093 48V29.814h-8.185V27.13h19.078v2.684h-8.215V48Zm-17.823-.239a6.4 6.4 0 0 1-1.92-.8 6.1 6.1 0 0 1-1.637-1.535 7 7 0 0 1-1.115-2.4l2.351-1.253a4.9 4.9 0 0 0 1.458 2.639 4.1 4.1 0 0 0 2.8.91 3.93 3.93 0 0 0 2.559-.776 2.72 2.72 0 0 0 .952-2.236 2.8 2.8 0 0 0-.312-1.386 3 3 0 0 0-.834-.939 4.6 4.6 0 0 0-1.175-.626q-.654-.238-1.369-.478-1.012-.328-2.112-.759A8.4 8.4 0 0 1 66.9 37a5.5 5.5 0 0 1-1.488-1.714 5.06 5.06 0 0 1-.581-2.519 5.5 5.5 0 0 1 .506-2.4 5.15 5.15 0 0 1 1.369-1.774 6 6 0 0 1 2.012-1.093 7.7 7.7 0 0 1 2.4-.372 6.5 6.5 0 0 1 4.167 1.342 7.07 7.07 0 0 1 2.381 3.667l-2.531 1.013a4.5 4.5 0 0 0-1.517-2.563 4.17 4.17 0 0 0-2.559-.775 3.67 3.67 0 0 0-2.649.864 2.83 2.83 0 0 0-.893 2.117 2.5 2.5 0 0 0 .312 1.3 3 3 0 0 0 .863.91 5.8 5.8 0 0 0 1.31.67q.759.284 1.622.581 1.221.417 2.277.88a7 7 0 0 1 1.83 1.133 4.8 4.8 0 0 1 1.221 1.625 5.5 5.5 0 0 1 .446 2.326 6.1 6.1 0 0 1-.5 2.578 5.2 5.2 0 0 1-1.355 1.8 5.5 5.5 0 0 1-1.965 1.058 7.9 7.9 0 0 1-2.345.346 8.6 8.6 0 0 1-1.964-.239ZM38.822 48l-13.3-16.547V48H22.84V27.13h2.678l13.3 16.577V27.13H41.5V48Zm8.905 0V27.13h12.8v2.683H50.406v6.411h10.119v2.683H50.406v6.41h10.119V48Zm14.54-26.453-6.059-7.533h-5.8v6.857h-2.682V0h8.007a7.4 7.4 0 0 1 2.8.522 6.7 6.7 0 0 1 2.217 1.461A6.9 6.9 0 0 1 62.221 4.2a7.2 7.2 0 0 1 .536 2.8 7 7 0 0 1-1 3.757 6.7 6.7 0 0 1-2.693 2.474l5.331 6.6-2.129 1.712ZM50.406 11.33h3.66L52.22 9.022l2.08-1.669 2.976 3.708A4.2 4.2 0 0 0 59.3 9.54a4.23 4.23 0 0 0 .774-2.534 4.35 4.35 0 0 0-.343-1.744 4.3 4.3 0 0 0-.931-1.371A4.2 4.2 0 0 0 57.415 3a4.5 4.5 0 0 0-1.681-.313h-5.328Zm52.406 8.75a10 10 0 0 1-3.259-2.191 10.4 10.4 0 0 1-2.188-3.309 10.6 10.6 0 0 1-.8-4.145 10.6 10.6 0 0 1 .8-4.144 10.4 10.4 0 0 1 2.188-3.309 9.9 9.9 0 0 1 3.273-2.191A10.5 10.5 0 0 1 106.918 0a9.9 9.9 0 0 1 4.048.805 12 12 0 0 1 3.274 2.146l-1.22 2.534a10 10 0 0 0-.9-.833 10.5 10.5 0 0 0-1.768-1.165 7.54 7.54 0 0 0-3.556-.8 7.8 7.8 0 0 0-2.991.567 7.2 7.2 0 0 0-2.4 1.579 7.3 7.3 0 0 0-1.591 2.445 8.35 8.35 0 0 0-.581 3.16 8.35 8.35 0 0 0 .581 3.161 7.3 7.3 0 0 0 1.591 2.444 7.2 7.2 0 0 0 2.4 1.58 7.8 7.8 0 0 0 2.991.567 9.6 9.6 0 0 0 1.859-.179 8.5 8.5 0 0 0 1.98-.686l.476 2.684a17 17 0 0 1-2.262.656 10.37 10.37 0 0 1-6.042-.581Zm-13.054.791V0h2.678v20.87Zm-21.665 0V0h7.143a10.7 10.7 0 0 1 4.107.79 10.2 10.2 0 0 1 3.3 2.176 9.9 9.9 0 0 1 2.188 3.294 10.9 10.9 0 0 1 .789 4.174 10.9 10.9 0 0 1-.789 4.174 10 10 0 0 1-2.185 3.292 10.2 10.2 0 0 1-3.3 2.176 10.7 10.7 0 0 1-4.107.79Zm2.678-2.684h4.464a8.3 8.3 0 0 0 3.081-.566 7.2 7.2 0 0 0 2.44-1.595 7.4 7.4 0 0 0 1.607-2.46 8.3 8.3 0 0 0 .581-3.13 8.2 8.2 0 0 0-.581-3.116 7.26 7.26 0 0 0-4.047-4.055 8.1 8.1 0 0 0-3.081-.581h-4.464ZM15.982 20.87 2.678 4.323V20.87H0V0h2.678l13.3 16.577V0h2.678v20.87Zm13.074-.791a9.96 9.96 0 0 1-5.491-5.5 10.8 10.8 0 0 1-.789-4.145 10.8 10.8 0 0 1 .789-4.144 9.95 9.95 0 0 1 5.491-5.5A10.7 10.7 0 0 1 33.194 0a10.85 10.85 0 0 1 4.152.791 9.9 9.9 0 0 1 3.3 2.19 10.2 10.2 0 0 1 2.173 3.31 10.8 10.8 0 0 1 .789 4.144 10.8 10.8 0 0 1-.789 4.145 10.2 10.2 0 0 1-2.173 3.309 9.9 9.9 0 0 1-3.3 2.191 10.8 10.8 0 0 1-4.152.79 10.7 10.7 0 0 1-4.138-.791M30.1 3.264a7.19 7.19 0 0 0-4.063 4.07 8.2 8.2 0 0 0-.58 3.1 8.2 8.2 0 0 0 .58 3.1A7.18 7.18 0 0 0 30.1 17.6a8.53 8.53 0 0 0 6.191 0 7.18 7.18 0 0 0 4.063-4.069 8.2 8.2 0 0 0 .581-3.1 8.2 8.2 0 0 0-.581-3.1 7.19 7.19 0 0 0-4.063-4.07 8.53 8.53 0 0 0-6.191 0Z"
                      style="fill:#1e2022"></path>
            </svg>
        </a>
        <div class="header-container-mobile__buttons">
            <a aria-label="My favourites"
               class="header-container-mobile__favorite-btn action-btn"
               data-spa-link="true" href="/my-favourites/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" data-test-id="my-wishlist-link"
                     class="header-container-mobile__favorite-icon">
                    <path d="m11 8 7.071-6.317a5.866 5.866 0 0 1 8.225 0 5.7 5.7 0 0 1 0 8.127L13.959 22 1.7 9.81a5.7 5.7 0 0 1 0-8.127 5.866 5.866 0 0 1 8.225 0S14.582 5.533 17 8"
                          style="fill:none;stroke:currentColor;stroke-linecap:square;stroke-miterlimit:10;stroke-width:2"
                          transform="translate(2 5)"></path>
                </svg>
            </a>
            <button aria-label="Shopping bag" title="You have 1 items in cart" data-test-id="header-cart-icon"
                    class="header-cart-button action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.138 25.265" data-test-id="minicart-link"
                     class="header-cart-icon">
                    <defs>
                        <style>.cart_svg__a {
                                fill: none;
                                stroke: currentColor;
                                stroke-linecap: square;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }</style>
                    </defs>
                    <path d="m18.069 1.265 4 12M10.069 1.265l-4 12M1.069 9.265h26s-1 15-6 15h-14c-5 0-6-15-6-15Z"
                          class="cart_svg__a"></path>
                </svg>
                <span data-test-id="header-cart-icon-count" class="header-cart-icon-badge">1</span></button>
        </div>
    </div>

</header>


<!-- Mobile Side-Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="menu-overlay"></div>
    <div class="menu-content">
        <div class="mobile-menu__logo-container">
            <img  alt=""
                 src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg"
                 class="mobile-menu__logo-icon">
            <button class="menu-close" aria-label="Close menu">✕</button>
        </div>


        <nav class="menu-nav">
            <ul>
                <li class="menu-nav__item link-element"><a class="" href="/tableware/">Tableware</a></li>
                <li class="menu-nav__item link-element"><a href="/home-accessories/">Home accessories</a></li>
                <li class="menu-nav__item link-element"><a href="/cookware--kitchen-accessories/">Cookware & kitchen</a>
                </li>
                <li class="menu-nav__item link-element"><a href="/lighting/">Lighting</a></li>
                <li class="menu-nav__item link-element"><a href="/rugs--textiles/">Rugs & textiles</a></li>
                <li class="menu-nav__item link-element"><a href="/furniture/">Furniture</a></li>
                <li class="menu-nav__item additional-elements">
                    <a class="icon-nav-element"
                       href="/my-pages/">
                        <img loading="lazy" alt=""
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/user.svg"
                             class="icon-nav-element__icon">
                        <div class="icon-nav-element__title">My Pages</div>
                    </a>
                    <a class="icon-nav-element" href="/my-favourites/">
                        <img loading="lazy" alt=""
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/heart_icon.svg"

                             class="icon-nav-element__icon">
                        <div class="icon-nav-element__title">My favourites</div>
                    </a>
                    <a class="icon-nav-element" href="/customer-service/">
                        <img loading="lazy" alt=""
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/nn-icon-service_2.svg"
                             class="icon-nav-element__icon">
                        <div class="icon-nav-element__title">Customer Service</div>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="menu-bottom">
            <a href="/login" class="menu-login">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="menu-login__icon">
                    <defs>
                        <style>.user_svg__a {
                                fill: none;
                                stroke: #1e2022;
                                stroke-miterlimit: 10;
                                stroke-width: 2px
                            }</style>
                    </defs>
                    <circle cx="7" cy="7" r="7" class="user_svg__a" transform="translate(9 3)"></circle>
                    <path d="M12.007 15.645A11.44 11.44 0 0 0 4 26.375 27 27 0 0 0 16 29a27 27 0 0 0 12-2.625 11.44 11.44 0 0 0-8-10.73"
                          class="user_svg__a"></path>
                </svg>
                Log in</a>
            <select class="menu-lang">
                <option value="en-US">English</option>
                <option value="de-DE">Deutsch</option>
                <option value="fr-FR">Français</option>
                <option value="ru-RU">Русский</option>
            </select>
        </div>
    </div>
</div>

<!-- Newsletter Alert -->
<div class="newsletter-alert">
    <span>Sign-up to our newsletter and get 5% off your first order*</span>
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor"
              stroke-width="2"/>
        <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
    </svg>
</div>