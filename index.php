<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nordic
 */

get_header(); ?>

<!-- Breadcrumb -->
<div class="breadcrumb-container">
    <nav class="breadcrumb">
        <a href="#" class="breadcrumb-link">Furniture</a>
        <span class="breadcrumb-separator">/</span>
        <a href="#" class="breadcrumb-link">Chairs & Stools</a>
        <span class="breadcrumb-separator">/</span>
        <a href="#" class="breadcrumb-link current">Chairs</a>
    </nav>
</div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Chairs</h1>
        <p class="hero-description">
            Make a statement in your home with Scandinavian design chairs from renowned brands.<br>
            With us at Nordic Nest, you can find everything from classic wooden dining chairs to<br>
            luxurious chairs upholstered in leather. Choose from a range of sizes and designs to<br>
            perfectly match your dining room or table.
        </p>
    </div>
</section>

<!-- Filter Section -->
<section class="filter-section">
    <div class="filter-container">
        <button class="filter-btn primary">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="22,3 2,3 10,12.46 10,19 14,21 14,12.46 22,3"></polygon>
            </svg>
            Filter
        </button>

        <div class="filter-options">
            <button class="filter-option">Categories ▼</button>
            <button class="filter-option">Brands ▼</button>
            <button class="filter-option">Colours ▼</button>
            <button class="filter-option">Material ▼</button>
            <button class="filter-option">Collections ▼</button>
            <button class="filter-option">Designers ▼</button>
            <button class="filter-option">In stock</button>
        </div>

        <div class="sort-section">
            <span class="results-text">1199 results sorted by</span>
            <button class="sort-btn">▲ Popularity ▼</button>
        </div>
    </div>
</section>

<!-- Product Grid -->
<section class="products-section">
    <div class="products-container">
        <div class="product-grid">

            <?php

            $product_posts = get_posts( array(
                'numberposts' => -1,
                'order' => 'ASC',
                'include' => array(),
                'exclude' => array(),
                'post_type' => 'product',
                'suppress_filters' => true,
            ) );

            foreach( $product_posts as $post ){
                setup_postdata( $post );

                get_template_part('./template-parts/product-card');


            }

            wp_reset_postdata();

            ?>

        </div>

        <!-- Load More Button -->
        <div class="load-more-section">
            <p class="showing-text">Showing 8 of 1199 products</p>
            <button class="load-more-btn">Show more</button>

            <!-- Pagination -->
            <div class="pagination">
                <span class="page-number active">1</span>
                <span class="page-number">2</span>
                <span class="page-ellipsis">...</span>
                <span class="page-number">34</span>
                <button class="page-next">→</button>
            </div>
        </div>
    </div>
</section>

<!-- Popular Filters -->
<section class="popular-filters">
    <div class="filters-container">
        <h2 class="filters-title">POPULAR FILTERS</h2>
        <div class="filter-tags">
            <span class="filter-tag">&Tradition chairs</span>
            <span class="filter-tag">Muuto chairs</span>
            <span class="filter-tag">Gubi chairs</span>
            <span class="filter-tag">Leather chair</span>
            <span class="filter-tag">Brown chair</span>
            <span class="filter-tag">Wooden chair</span>
            <span class="filter-tag">Oak chair</span>
            <span class="filter-tag">Grey chair</span>
            <span class="filter-tag">Beige chair</span>
            <span class="filter-tag">Green chair</span>
            <span class="filter-tag">Stolab chairs</span>
            <span class="filter-tag">Pink chair</span>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="content-section">
    <div class="content-container">
        <div class="content-text">
            <h2>Modern chairs for the home</h2>
            <p>Chairs are an important part of what turns a house into a home. After all, it is around the dinner table where the family meet every day, where we spend quality time with the ones we love and where we celebrate life's big and small <u>occasions</u>. Suitable and comfortable chairs enhance these occasions as well as being important parts of the interior of a room.</p>

            <p>Here at Nordic Nest, you will find modern dining chairs and kitchen chairs from well-known brands.</p>

            <h2>Chairs with Scandinavian design</h2>
            <p>Here at Nordic Nest, we have a large selection of renowned Scandinavian brands which, among other items, design and produce high-quality chairs. We recommend <u>Audo Copenhagen</u>, <u>Fritz Hansen</u> and <u>House Doctor</u> if you are looking for stylish Nordic chairs.</p>

            <h2>Chairs with practical designs</h2>
            <p>Various types of chairs are designed to fit a variety of needs: some are stackable to save space, others are collapsible to ensure they can be easily moved – it all depends on the demand of the occasion. For celebrations or large gatherings, it can be useful to have extra chairs that are easy to manage and relocate. A great chair is both a practical object of rest but can also serve as a beautiful interior detail in your home!</p>

            <h2>The right size dining chairs for your <u>table</u></h2>
            <p>When choosing the size of your chairs for your dining room or kitchen table, it is important that you consider the table dimensions to make sure that the dining room chairs will comfortably fit. A rule of thumb is that there should be a space of 25 – 35 cm between the table and chair surface.</p>

            <h2>Designer dining chairs to match your table style</h2>
            <p>In addition to the size, it is wise to think about what kind of style and materials you want. If you already have a table, this is a natural starting point and you can choose a chair that either matches the material and style of the table, or an exciting contrast to this. In our assortment, you will be able to find everything from classic wooden chairs to elegant leather chairs in grey or black.</p>
            <p>Tip: Why not cover your dining chairs with <u>seat cushions and pads</u> in a stylish design? In addition to making your chairs a little softer and more comfortable, it is also a simple way to add colour or texture to your dining room interior!</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
