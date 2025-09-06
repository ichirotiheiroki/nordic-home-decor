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
<!--        --><?php //if ($subtitle): ?>
<!--            <p class="text-sm text-gray-500 line-clamp-1 mb-2">--><?php //echo esc_html($subtitle); ?><!--</p>-->
<!--        --><?php //endif; ?>
<!--        --><?php //if ($designer): ?>
<!--            <p class="text-xs text-gray-400">Designer: <span-->
<!--                        class="text-gray-700">--><?php //echo esc_html($designer); ?><!--</span></p>-->
<!--        --><?php //endif; ?>
        <div class="product-price">€<?php echo esc_html($price); ?></div>
        <div class="product-stock">
            <svg width="10" height="10" viewBox="0 0 7 7" class="stock-indicator-dot">
                <circle cx="3.5" cy="3.5" r="3.5" fill="currentColor"></circle>
            </svg>
            In stock
        </div>
    </div>
    <div class="product-actions">
        <button class="action-btn action-favorite">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.75011 10.34L15.0534 5.60223C15.8762 4.79328 16.9839 4.33997 18.1377 4.33997C19.2916 4.33997 20.3993 4.79328 21.2221 5.60223C21.6265 6.00007 21.9478 6.47443 22.167 6.99767C22.3863 7.5209 22.4992 8.08254 22.4992 8.64986C22.4992 9.21717 22.3863 9.77881 22.167 10.302C21.9478 10.8253 21.6265 11.2996 21.2221 11.6975L11.9694 20.84L2.77511 11.6975C2.37068 11.2996 2.04947 10.8253 1.83022 10.302C1.61096 9.77881 1.49805 9.21717 1.49805 8.64986C1.49805 8.08254 1.61096 7.5209 1.83022 6.99767C2.04947 6.47443 2.37068 6.00007 2.77511 5.60223C3.59793 4.79328 4.70561 4.33997 5.85949 4.33997C7.01336 4.33997 8.12105 4.79328 8.94386 5.60223C8.94386 5.60223 12.4366 8.48973 14.2501 10.34"
                      stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
            </svg>
        </button>
        <button class="action-btn action-cart">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.4118 2.89417L18.8236 13.1294M8.58832 2.89417L5.17656 13.1294M0.911865 9.71768H23.0883C23.0883 9.71768 22.2353 22.5118 17.9706 22.5118H6.0295C1.7648 22.5118 0.911865 9.71768 0.911865 9.71768Z"
                      stroke="currentColor" stroke-width="1.70588" stroke-miterlimit="10" stroke-linecap="square"/>
            </svg>
        </button>
    </div>
</a>
