<?php

get_header();

$product_id = get_the_ID();
$product_name = get_field('product_name') ?: get_the_title();
$product_subtitle = get_field('product_subtitle');
$description = get_field('description');
$gallery = get_field('gallery');

// SEO
$meta_title = get_field('meta_title');
$meta_description = get_field('meta_description');
$slug = $post->post_name;

// Open Graph
$og_title = get_field('og_title') ?: $meta_title;
$og_description = get_field('og_description') ?: $meta_description;
$og_image = get_field('og_image');

// Pinterest
$pinterest_image = get_field('pinterest_image');
$pinterest_description = get_field('pinterest_description');

// Designer
$designer_name = get_field('designer');
$designer_bio = get_field('designer_bio');

// CTA
$cta_label = get_field('cta_label');
$cta_base_url = get_field('cta_base_url');
$cta_url_params = get_field('cta_url_params');

// Extra
$shipping_info = get_field('shipping_info');
$related_manual = get_field('related_products');
$sustainability = get_field('sustainability');

// Specs
$specifications = get_field('specifications');

// Variants
$variant_type = get_field('variant_type');
$variant_title = get_field('variant_title');
$variant_items = get_field('variants');
$variant_active = get_field('variant_active');

// Бренд
$brands = get_the_terms(get_the_ID(), 'brand');

// Категории (иерархия возможна)
$categories = get_the_terms(get_the_ID(), 'product_category');

// Распаковываем каждый вариант (если есть)
$variants_data = [];

if ($variant_items) {
    foreach ($variant_items as $variant) {
        $variants_data[] = [
                'name' => $variant['variant_name'],
                'price' => $variant['variant_price'],
                'sku' => $variant['variant_sku'],
                'color' => $variant['variant_color'],
                'material' => $variant['variant_material'],
                'in_stock' => $variant['variant_in_stock'],
                'images' => $variant['variant_images'],
        ];
    }
}
?>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <nav class="breadcrumb">
                <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Home</a>
                <?php if ($categories && !is_wp_error($categories)): ?>
                    <?php
                    $category = $categories[0];
                    $cat_link = get_term_link($category);
                    ?>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo esc_url($cat_link); ?>" class="breadcrumb-link">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endif; ?>
                <?php if ($brands && !is_wp_error($brands)): ?>
                    <?php
                    $brand = $brands[0];
                    $brand_link = get_term_link($brand);
                    ?>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo esc_url($brand_link); ?>" class="breadcrumb-link">
                        <?php echo esc_html($brand->name); ?>
                    </a>
                <?php endif; ?>
                <span class="breadcrumb-current">Lamino arm chair oiled oak/sheep skin</span>
            </nav>
        </div>

        <!-- Product Section -->
        <section class="product-section">
            <div class="product-container">
                <!-- Product Images -->
                <div class="product-images">
                    <div thumbsSlider="" class=" swiper thumbnails-swiper">
                        <div class="thumbnail-container swiper-wrapper">
                            <?php foreach ($gallery

                                           as $index => $image): ?>
                                <div class="swiper-slide">
                                    <img
                                            src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" class="thumbnail ">

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class=" swiper main-swiper">
                        <div class="main-image swiper-wrapper">
                            <?php foreach ($gallery as $index => $image): ?>
                                <div class="swiper-slide">
                                    <img
                                            src="<?php echo esc_url($image['sizes']['large']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>"
                                            class="image-placeholder"/>

                                </div>

                            <?php endforeach; ?>
                        </div>
                        <button class="image-nav-btn swiper-button-prev">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </button>
                        <button class="image-nav-btn swiper-button-next">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </button>

                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <div class="product-meta">
                        <span>Yngve Ekström</span>
                        <span>for</span>
                        <span>Swedese</span>
                    </div>

                    <h1 class="product-title">
                        <?php echo esc_html($product_name); ?><br>
                        <span class="product-variant">Sahara (nougat brown)</span>
                    </h1>

                    <div class="product-price">Price: €2,419</div>

                    <div class="product-rating">
                        <div class="stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <span class="rating-text">(4.8)</span>
                    </div>
                    <?php if ($product_subtitle): ?>
                        <h2 class="product-subtitle"><?php echo esc_html($product_subtitle); ?></h2>
                    <?php endif; ?>
                    <?php if ($description): ?>
                        <div class="product-description"><?php echo wp_kses_post($description); ?></div>
                    <?php endif; ?>
                    <?php if ($designer_name): ?>
                        <div class="product-designer">
                            <h3 class="designer-title">Designer</h3>
                            <p class="designer-name"><?php echo esc_html($designer_name); ?></p>
                            <?php if ($designer_bio): ?>
                                <p class="designer-bio"><?php echo esc_html($designer_bio); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="product-specifications">
                        <h3 class="specifications-title">Specifications</h3>
                        <?php foreach ($specifications as $specification) { ?>
                            <div class="product-specification">

                                <p class="specification-label"><?php echo $specification['label']; ?>:</p>
                                <p class="specification-value"><?php echo $specification['value']; ?></p>
                            </div>
                        <?php } ?>
                    </div>


                    <!-- Variant Selector -->
                    <div class="color-selector-container">
                        <div class="color-selector">
                            <div class="color-option">
                                <div class="color-swatch"></div>
                                <span>Sahara (nougat brown)</span>
                            </div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div id="variantsContainer" class="variants-container">
                            <?php foreach ($variants_data as $variant) { ?>
                                <div class="variant-option">
                                    <p class="variant-name"><?php echo $variant['name']; ?></p>
                                    <p class="variant-color">Color: <?php echo $variant['color']; ?></p>
                                    <p class="variant-price">Price: <?php echo $variant['price']; ?></p>
                                    <p class="variant-material">Material: <?php echo $variant['material']; ?></p>
                                    <p class="variant-sku"> In stock: <?php echo $variant['in_stock'] > 0 ? 'Yes' : 'No'; ?></p>
                                    <p class="variant-sku">SKU: <?php echo $variant['sku']; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Quantity and Add to Cart -->
                    <div class="purchase-controls">
                        <div class="quantity-selector">
                            <button class="qty-btn">-</button>
                            <input type="number" value="1" min="1" max="1000" class="qty-input">
                            <button class="qty-btn">+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to basket</button>
                    </div>

                    <button class="favorite-btn">
                        <span class="favorite-btn-text">Save as favourite</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="favorite-btn-icon">
                            <path d="m11 8 7.071-6.317a5.866 5.866 0 0 1 8.225 0 5.7 5.7 0 0 1 0 8.127L13.959 22 1.7 9.81a5.7 5.7 0 0 1 0-8.127 5.866 5.866 0 0 1 8.225 0S14.582 5.533 17 8"
                                  transform="translate(2 5)"
                                  style="fill: none; stroke: currentcolor; stroke-linecap: square; stroke-miterlimit: 10; stroke-width: 2;"></path>
                        </svg>
                    </button>

                    <!-- Stock Info -->
                    <div class="stock-info">
                        <div class="stock-indicator">●</div>
                        <span>In stock</span>
                    </div>

                    <!-- Shipping Info -->
                    <div class="shipping-info">
                        <div class="shipping-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 class="shipping-icon">
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.5 9.4-9-5.19M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16"></path>
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.27 6.96 12 12.01l8.73-5.05M12 22.08V12"></path>
                            </svg>
                            <span><?php echo $shipping_info; ?></span>
                        </div>
                        <a href="#" class="shipping-link">Shipping info</a>
                    </div>

 

                    <!-- Product Details Grid -->
                    <div class="product-details-grid">
                        <div class="detail-item">
                            <span class="detail-label">Sheep-skin</span>
                            <div class="detail-icon">--------</div>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Country of origin</span>
                            <span class="detail-value">Sweden</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Designed Year</span>
                            <span class="detail-value">1956</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section class="reviews-section">
            <div class="reviews-container">
                <h2 class="section-title">Reviews</h2>

                <div class="reviews-content">
                    <div class="reviews-summary">
                        <div class="rating-large">4.8</div>
                        <div class="rating-stars">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-count">Based on 23 reviews</span>
                        </div>

                        <div class="rating-distribution">
                            <div class="rating-bar">
                                <span class="rating-label">★ 5</span>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 91%"></div>
                                </div>
                                <span class="rating-count">21</span>
                            </div>
                            <div class="rating-bar">
                                <span class="rating-label">★ 4</span>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 0%"></div>
                                </div>
                                <span class="rating-count">0</span>
                            </div>
                            <div class="rating-bar">
                                <span class="rating-label">★ 3</span>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 4%"></div>
                                </div>
                                <span class="rating-count">1</span>
                            </div>
                            <div class="rating-bar">
                                <span class="rating-label">★ 2</span>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 4%"></div>
                                </div>
                                <span class="rating-count">1</span>
                            </div>
                            <div class="rating-bar">
                                <span class="rating-label">★ 1</span>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 0%"></div>
                                </div>
                                <span class="rating-count">0</span>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-list">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="review-date">2024-12-28</span>
                            </div>
                            <div class="review-content">
                                <h4 class="review-title">Beautiful and comfortable</h4>
                                <div class="review-author">Jane G</div>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="review-date">2022-12-01</span>
                            </div>
                            <div class="review-content">
                                <h4 class="review-title">Stylish and gorgeous</h4>
                                <p class="review-text">I've always loved this chair and brought one 7 years ago and have
                                    had to get another one as my cat is obsessed with it. It looks amazing but it's also
                                    so comfy as well.</p>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <span class="review-date">2022-10-24</span>
                            </div>
                            <div class="review-content">
                                <p class="review-text">Classic design. Light and easy to move around yet reassuring
                                    sturdy. Ergonomic and supportive.</p>
                                <div class="review-author">David P</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="newsletter-container">
                <h4 class="newsletter-title">Sign-up to our newsletter and get 5% off your first order*</h4>
                <div class="newsletter-form">
                    <input type="email" placeholder="E-mail" class="newsletter-input">
                    <button class="newsletter-btn">SIGN UP</button>
                </div>
                <p class="newsletter-disclaimer">
                    After you have registered for the newsletter, you will receive an email with a 5%<br>
                    discount code. The discount code cannot be used in combination with other discount<br>
                    codes. With the newsletter you can take advantage of our exclusive offers, discover our<br>
                    new arrivals and you will receive inspiration and tips on everything from interior design<br>
                    to table setting. You can unsubscribe at any time.
                </p>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var thumbnailsSwiper = new Swiper(".thumbnails-swiper", {
            direction: 'horizontal',
            spaceBetween: 10,
            slidesPerView: 'auto',
            slideToClickedSlide: true,
            watchSlidesProgress: true,
            watchOverflow: true,
            breakpoints: {
                1281: {
                    direction: 'vertical',
                }
            }
        });

        var mainSwiper = new Swiper(".main-swiper", {
            spaceBetween: 10,
            slidesPerView: 1,
            centeredSlides: true,
            effect: 'fade',
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: thumbnailsSwiper,
            },
            on: {
                slideChange: function () {
                    const activeIndex = mainSwiper.activeIndex;
                    const totalThumbs = thumbnailsSwiper.slides.length;

                    const offset = 1;
                    let targetIndex = Math.max(activeIndex - offset, 0);

                    if (targetIndex + 2 > totalThumbs - 1) {
                        targetIndex = totalThumbs - 3;
                    }

                    thumbnailsSwiper.slideTo(Math.max(targetIndex, 0));
                }
            }
        });


    </script>

<?php get_footer(); ?>