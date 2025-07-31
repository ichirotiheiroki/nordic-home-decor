<?php
$product_id = get_the_ID();
$product_name = get_field('product_name') ?: get_the_title();
$subtitle = get_field('subtitle') ?: '';
$description = get_field('meta_description') ?: '';
$brand = get_the_terms($product_id, 'brand');
$variant_items = get_field('variants');
$sku = $price = $color = $material = $variant_name = '';
$in_stock = false;

if (is_array($variant_items)) {
  if (isset($variant_items[0]) && is_array($variant_items[0])) {
    $variant = $variant_items[0];
  } else {
    $variant = $variant_items;
  }

  $variant_name = $variant['variant_name'] ?? '';
  $sku = $variant['variant_sku'] ?? '';
  $price = $variant['variant_price'] ?? '';
  $color = $variant['variant_color'] ?? '';
  $material = $variant['variant_material'] ?? '';
  $in_stock_raw = strtolower($variant['variant_in_stock'] ?? '');
  $in_stock = in_array($in_stock_raw, ['yes', '1', 'true']);
}

$gallery = get_field('gallery');
$image_url = is_array($gallery) && isset($gallery[0]['url']) ? $gallery[0]['url'] : '';
$url = get_permalink($product_id);

$designer_name = get_field('designer') ?: '';
$designer_bio = get_field('designer_bio') ?: '';
$logistics = get_field('shipping_info') ?: '';
$sustainability = get_field('sustainability') ?: '';
$cta_label = get_field('cta_label') ?: '';
$cta_base = get_field('cta_base_url') ?: '';
$cta_params = get_field('cta_url_parameters') ?: '';
$related_manual = get_field('related_products');
$pinterest_image = get_field('pinterest_image');
$pinterest_description = get_field('pinterest_description');
$meta_title = get_field('meta_title') ?: $product_name;
$og_title = get_field('og_title') ?: $meta_title;
$og_description = get_field('og_description') ?: $description;
$og_image = get_field('og_image');

$schema = [
  "@context" => "https://schema.org/",
  "@type" => "Product",
  "name" => $product_name,
  "description" => wp_strip_all_tags($description),
  "sku" => $sku,
  "image" => $image_url,
  "brand" => [
    "@type" => "Brand",
    "name" => is_array($brand) && isset($brand[0]) ? $brand[0]->name : ''
  ],
  "offers" => [
    "@type" => "Offer",
    "priceCurrency" => "EUR",
    "price" => $price,
    "availability" => $in_stock ? "https://schema.org/InStock" : "https://schema.org/OutOfStock",
    "url" => $url
  ],
  "additionalProperty" => [
    ["@type" => "PropertyValue", "name" => "Color", "value" => $color],
    ["@type" => "PropertyValue", "name" => "Material", "value" => $material],
    ["@type" => "PropertyValue", "name" => "Variant", "value" => $variant_name],
    ["@type" => "PropertyValue", "name" => "Subtitle", "value" => $subtitle],
    ["@type" => "PropertyValue", "name" => "Designer", "value" => $designer_name],
    ["@type" => "PropertyValue", "name" => "Designer Bio", "value" => $designer_bio],
    ["@type" => "PropertyValue", "name" => "Logistics", "value" => wp_strip_all_tags($logistics)],
    ["@type" => "PropertyValue", "name" => "Sustainability", "value" => wp_strip_all_tags($sustainability)],
    ["@type" => "PropertyValue", "name" => "CTA Label", "value" => $cta_label],
    ["@type" => "PropertyValue", "name" => "CTA Base URL", "value" => $cta_base],
    ["@type" => "PropertyValue", "name" => "CTA Parameters", "value" => $cta_params]
  ]
];

echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
