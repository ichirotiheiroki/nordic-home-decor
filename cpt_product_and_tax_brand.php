
<?php
// Register Custom Post Type: Product
function register_cpt_product() {
    $labels = array(
        'name' => _x('Products', 'Post Type General Name'),
        'singular_name' => _x('Product', 'Post Type Singular Name'),
        'menu_name' => __('Products'),
        'name_admin_bar' => __('Product'),
    );
    $args = array(
        'label' => __('Product'),
        'description' => __('Custom post type for products'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-cart',
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'show_in_rest' => true,
    );
    register_post_type('product', $args);
}
add_action('init', 'register_cpt_product', 0);

// Register Taxonomy: Brand
function register_taxonomy_brand() {
    $labels = array(
        'name'              => _x('Brands', 'taxonomy general name'),
        'singular_name'     => _x('Brand', 'taxonomy singular name'),
        'menu_name'         => __('Brands'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'brand'),
        'show_in_rest'      => true,
    );
    register_taxonomy('brand', array('product'), $args);
}

// Register Taxonomy: Product Category
function register_taxonomy_product_category() {
    $labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name'),
        'menu_name'         => __('Product Categories'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'product_category'),
        'show_in_rest'      => true,
    );
    register_taxonomy('product_category', array('product'), $args);
}

add_action('init', 'register_taxonomy_brand', 0);
add_action('init', 'register_taxonomy_product_category', 0);
