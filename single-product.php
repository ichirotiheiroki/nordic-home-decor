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
            <a href="#" class="breadcrumb-link">Furniture</a>
            <span class="breadcrumb-separator">/</span>
            <a href="#" class="breadcrumb-link">Sofas & armchairs</a>
            <span class="breadcrumb-separator">/</span>
            <a href="#" class="breadcrumb-link">Armchairs & footstools</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">Lamino arm chair oiled oak/sheep skin</span>
        </nav>
    </div>

    <!-- Product Section -->
    <section class="product-section">
        <div class="product-container">
            <!-- Product Images -->
            <div class="product-images">
                <div class="thumbnail-container">
<?php foreach ($gallery as $index => $image): ?>
                    <div class="thumbnail active"></div>
                    <div class="thumbnail"></div>
                    <div class="thumbnail"></div>
                    <div class="thumbnail"></div>
                </div>
                <?php endforeach; ?>
                <div class="main-image">
                    <div class="image-placeholder">Product Image</div>
                    <button class="image-nav-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    Lamino arm chair oiled oak/sheep skin<br>
                    <span class="product-variant">Sahara (nougat brown)</span>
                </h1>

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

                <div class="product-price">€2,419</div>

                <!-- Color Selector -->
                <div class="color-selector">
                    <div class="color-option">
                        <div class="color-swatch"></div>
                        <span>Sahara (nougat brown)</span>
                    </div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="purchase-controls">
                    <div class="quantity-selector">
                        <button class="qty-btn">-</button>
                        <input type="number" value="1" class="qty-input">
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="add-to-cart-btn">Add to basket</button>
                </div>

                <button class="favorite-btn">
                    <span>Save as favourite</span>
                    <svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="2"/>
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
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="3" width="15" height="13" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 8h4l3 3v5h-7V8z" stroke="currentColor" stroke-width="2"/>
                            <circle cx="5.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="2"/>
                            <circle cx="18.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <span>Free shipping to България</span>
                    </div>
                    <a href="#" class="shipping-link">Shipping info</a>
                </div>

                <!-- Product Details Grid -->
                <div class="product-details-grid">
                    <div class="detail-item">
                        <span class="detail-label">Sheep-skin</span>
                        <div class="detail-icon">🐑</div>
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
                            <p class="review-text">I've always loved this chair and brought one 7 years ago and have had to get another one as my cat is obsessed with it. It looks amazing but it's also so comfy as well.</p>
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
                            <p class="review-text">Classic design. Light and easy to move around yet reassuring sturdy. Ergonomic and supportive.</p>
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


<?php get_footer(); ?>