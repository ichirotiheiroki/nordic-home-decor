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

<div class="product-page-container">

<!-- GALLERY GRID 3 COLUMNS: thumbs | main-image | info -->
<?php
$gallery_count = $gallery ? count($gallery) : 0;
$visible_thumbs = 5;
$thumb_height = 80;
$gap = 12;
$max_height = $thumb_height * $visible_thumbs + ($visible_thumbs - 1) * $gap;
?>
<?php if ($gallery && $gallery_count > 0): ?>
  <div class="product-gallery-3col">
    <!-- Left: Thumbnails -->
    <div class="product-thumbnails" style="height:<?php echo $max_height; ?>px;">
      <?php if ($gallery_count > $visible_thumbs): ?>
        <button id="thumb-up" onclick="scrollThumbnails(-1)" class="thumb-arrow thumb-arrow-up hidden">↑</button>
      <?php endif; ?>
      <div
        id="thumbnail-container"
        class="thumbnails-list"
        style="max-height:<?php echo $max_height; ?>px;"
        onscroll="handleThumbScroll()"
      >
        <?php foreach ($gallery as $index => $image): ?>
          <div class="thumb-item">
            <img
              src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
              alt="<?php echo esc_attr($image['alt']); ?>"
              class="thumb-img"
              onclick="document.getElementById('main-image').src='<?php echo esc_url($image['sizes']['large']); ?>'"
            />
          </div>
        <?php endforeach; ?>
      </div>
      <?php if ($gallery_count > $visible_thumbs): ?>
        <button id="thumb-down" onclick="scrollThumbnails(1)" class="thumb-arrow thumb-arrow-down">↓</button>
      <?php endif; ?>
    </div>
    <!-- Center: Main Image -->
    <div class="main-image-block" style="height:<?php echo $max_height; ?>px;">
      <img
        id="main-image"
        src="<?php echo esc_url($gallery[0]['url']); ?>"
        alt="<?php echo esc_attr($gallery[0]['alt']); ?>"
        class="main-image"
      />
    </div>
    <!-- Right: Info -->
    <div class="product-info-col">
      <h1 class="product-title"><?php echo esc_html($product_name); ?></h1>
      <?php if ($product_subtitle): ?>
        <h2 class="product-subtitle"><?php echo esc_html($product_subtitle); ?></h2>
      <?php endif; ?>
      <?php if ($description): ?>
        <div class="product-description"><?php echo wp_kses_post($description); ?></div>
      <?php endif; ?>
      <!-- Place here any other info, designer, cta, etc. -->
      <?php if ($designer_name): ?>
        <div class="product-designer">
          <h3 class="designer-title">Designer</h3>
          <p class="designer-name"><?php echo esc_html($designer_name); ?></p>
          <?php if ($designer_bio): ?>
            <p class="designer-bio"><?php echo esc_html($designer_bio); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if ($cta_label && $cta_base_url): ?>
        <div class="product-cta">
          <a href="<?php echo esc_url($cta_base_url . '?' . $cta_url_params); ?>" class="cta-button">
            <?php echo esc_html($cta_label); ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <script>
    // JS for gallery thumbs
    const container = document.getElementById('thumbnail-container');
    const thumbUp = document.getElementById('thumb-up');
    const thumbDown = document.getElementById('thumb-down');
    const thumbHeight = 80 + 12;

    function scrollThumbnails(direction) {
      container.scrollBy({ top: thumbHeight * direction, behavior: 'smooth' });
      setTimeout(handleThumbScroll, 300);
    }
    function handleThumbScroll() {
      if (thumbUp) {
        if (container.scrollTop > 10) {
          thumbUp.classList.remove('hidden');
        } else {
          thumbUp.classList.add('hidden');
        }
      }
      if (thumbDown) {
        if (container.scrollHeight - container.scrollTop <= container.clientHeight + 10) {
          thumbDown.classList.add('hidden');
        } else {
          thumbDown.classList.remove('hidden');
        }
      }
    }
    if (container) {
      container.addEventListener('scroll', handleThumbScroll);
      document.addEventListener('DOMContentLoaded', handleThumbScroll);
    }
  </script>
<?php else: ?>
  <!-- No images fallback -->
  <div class="product-noimage-block">
    <div class="noimage-inner">
      <!-- SVG ICON -->
      <svg class="noimage-svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M3 16.5V8.25A2.25 2.25 0 015.25 6h13.5A2.25 2.25 0 0121 8.25v8.25m-18 0A2.25 2.25 0 005.25 19.5h13.5A2.25 2.25 0 0021 17.25m-18 0v-1.128a.75.75 0 01.28-.585l3.968-3.174a.75.75 0 01.944 0l2.224 1.78a.75.75 0 00.944 0l3.56-2.848a.75.75 0 01.944 0l3.89 3.112a.75.75 0 01.28.585V17.25">
        </path>
      </svg>
      <p class="noimage-text">Product image coming soon</p>
    </div>
  </div>
<?php endif; ?>

<!-- Остальной контент (описание, specs, sustainability, shipping, variants, breadcrumbs) ниже не трогается -->

<?php if ($specifications): ?>
  <div class="product-specs">
    <h3 class="specs-title">Specifications</h3>
    <ul class="specs-list">
      <?php foreach ($specifications as $spec): ?>
        <li>
          <?php echo esc_html($spec['label']); ?>:
          <?php echo esc_html($spec['value']); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<?php if ($sustainability): ?>
  <div class="product-sustainability">
    <h3 class="sustainability-title">Sustainability</h3>
    <div class="sustainability-desc">
      <?php echo wp_kses_post($sustainability); ?>
    </div>
  </div>
<?php endif; ?>

<?php if ($shipping_info): ?>
  <div class="product-shipping">
    <h3 class="shipping-title">Shipping & Returns</h3>
    <div class="shipping-desc">
      <?php echo wp_kses_post($shipping_info); ?>
    </div>
  </div>
<?php endif; ?>

<?php if (!empty($variants_data)): ?>
  <div class="product-variants">
    <h3 class="variants-title">Variants</h3>
    <div class="variants-list">
      <?php foreach ($variants_data as $variant): ?>
        <div class="variant-item">
          <p><strong>Name:</strong> <?php echo esc_html($variant['name']); ?></p>
          <p><strong>Price:</strong> <?php echo esc_html($variant['price']); ?></p>
          <p><strong>SKU:</strong> <?php echo esc_html($variant['sku']); ?></p>
          <p><strong>Color:</strong> <?php echo esc_html($variant['color']); ?></p>
          <p><strong>Material:</strong> <?php echo esc_html($variant['material']); ?></p>
          <p><strong>Stock:</strong> <?php echo esc_html($variant['in_stock'] ? 'In Stock' : 'Out of Stock'); ?></p>
          <?php if (!empty($variant['images'])): ?>
            <div class="variant-images">
              <?php foreach ($variant['images'] as $vimage): ?>
                <img src="<?php echo esc_url($vimage['url']); ?>" alt="<?php echo esc_attr($vimage['alt']); ?>" class="variant-img" />
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
</div>

<!-- Breadcrumbs block -->
<div class="product-breadcrumbs">
  <nav>
    <a href="<?php echo esc_url(home_url()); ?>" class="breadcrumb-link">Home</a>
    <?php if ($categories && !is_wp_error($categories)): ?>
      <?php
        $category = $categories[0];
        $cat_link = get_term_link($category);
      ?>
      <span>/</span>
      <a href="<?php echo esc_url($cat_link); ?>" class="breadcrumb-link">
        <?php echo esc_html($category->name); ?>
      </a>
    <?php endif; ?>
    <?php if ($brands && !is_wp_error($brands)): ?>
      <?php
        $brand = $brands[0];
        $brand_link = get_term_link($brand);
      ?>
      <span>/</span>
      <a href="<?php echo esc_url($brand_link); ?>" class="breadcrumb-link">
        <?php echo esc_html($brand->name); ?>
      </a>
    <?php endif; ?>
  </nav>
</div>
