<?php
/**
 * Template part for displaying a product card in the grid (used in related products, category archive, etc.)
 */

$product_id = get_the_ID();
$product_name = get_field('product_name') ?: get_the_title();
$subtitle = get_field('product_subtitle');
$gallery = get_field('gallery');
$image = $gallery[0]['sizes']['medium'] ?? get_the_post_thumbnail_url($product_id, 'medium') ?? get_template_directory_uri() . '/assets/images/placeholder.jpg';
$brand = get_the_terms($product_id, 'brand');
$category = get_the_terms($product_id, 'product_category');
$price = get_field('price');
$cta_label = get_field('cta_label') ?: 'View Product';
$cta_url = get_field('cta_url') ?: get_permalink();
$designer = get_field('designer');
?>

<!--<a href="--><?php //echo esc_url($cta_url); ?><!--" class="group block border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition bg-white">-->
<!--  --><?php //if ($image): ?>
<!--    <img src="--><?php //echo esc_url($image); ?><!--" alt="--><?php //echo esc_attr($product_name); ?><!--" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-300" />-->
<!--  --><?php //endif; ?>
<!---->
<!--  <div class="p-4">-->
<!--    <h3 class="text-lg font-semibold text-gray-900 mb-1 line-clamp-2">--><?php //echo esc_html($product_name); ?><!--</h3>-->
<!--    --><?php //if ($subtitle): ?>
<!--      <p class="text-sm text-gray-500 line-clamp-1 mb-2">--><?php //echo esc_html($subtitle); ?><!--</p>-->
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //if ($price): ?>
<!--      <p class="text-base font-semibold text-gray-800 mb-2">€--><?php //echo esc_html($price); ?><!--</p>-->
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //if ($brand): ?>
<!--      <p class="text-xs text-gray-400">Brand: <span class="text-gray-700">--><?php //echo esc_html($brand[0]->name); ?><!--</span></p>-->
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //if ($designer): ?>
<!--      <p class="text-xs text-gray-400">Designer: <span class="text-gray-700">--><?php //echo esc_html($designer); ?><!--</span></p>-->
<!--    --><?php //endif; ?>
<!---->
<!--    <div class="mt-4">-->
<!--      <span class="inline-block bg-black text-white text-sm px-4 py-2 rounded hover:bg-gray-800 transition">-->
<!--        --><?php //echo esc_html($cta_label); ?>
<!--      </span>-->
<!--    </div>-->
<!--  </div>-->
<!--</a>-->

<a href="<?php echo esc_url($cta_url); ?>" class="product-card">
    <div class="product-image">
        <?php if ($image): ?>
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($product_name); ?>">
        <?php endif; ?>
    </div>
    <div class="product-info">
        <div class="product-brand"><?php echo esc_html($brand[0]->name); ?></div>
        <h3 class="product-name"><?php echo esc_html($product_name); ?></h3>
        <?php if ($subtitle): ?>
            <p class="text-sm text-gray-500 line-clamp-1 mb-2"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
        <?php if ($designer): ?>
            <p class="text-xs text-gray-400">Designer: <span class="text-gray-700"><?php echo esc_html($designer); ?></span></p>
        <?php endif; ?>
        <div class="product-price">€<?php echo esc_html($price); ?></div>
        <div class="product-stock"><svg width="10" height="10" viewBox="0 0 7 7" class="stock-indicator-dot"><circle cx="3.5" cy="3.5" r="3.5" fill="currentColor"></circle></svg>In stock</div>
    </div>
    <div class="product-actions">
        <button class="action-btn">♡</button>
        <button class="action-btn">⚖</button>
    </div>
</a>
