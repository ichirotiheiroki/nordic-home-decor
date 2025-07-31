<?php

add_action('wp_head', 'nordicdecor_product_meta_tags');
function nordicdecor_product_meta_tags() {
  if (!is_singular('product')) return;

  $meta_title = get_field('meta_title') ?: get_the_title();
  $meta_description = get_field('meta_description') ?: '';
  $og_title = get_field('og_title') ?: $meta_title;
  $og_description = get_field('og_description') ?: $meta_description;
  $og_image = get_field('og_image');
  $pinterest_image = get_field('pinterest_image');
  $pinterest_description = get_field('pinterest_description');

  if ($meta_title) {
    echo '<title>' . esc_html($meta_title) . "</title>\n";
  }

  if ($meta_description) {
    echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";
  }

  if ($og_title) {
    echo '<meta property="og:title" content="' . esc_attr($og_title) . '">' . "\n";
  }

  if ($og_description) {
    echo '<meta property="og:description" content="' . esc_attr($og_description) . '">' . "\n";
  }

  if ($og_image && isset($og_image['url'])) {
    echo '<meta property="og:image" content="' . esc_url($og_image['url']) . '">' . "\n";
  }

  if ($pinterest_image && isset($pinterest_image['url'])) {
    echo '<meta name="pinterest:image" content="' . esc_url($pinterest_image['url']) . '">' . "\n";
  }

  if ($pinterest_description) {
    echo '<meta name="pinterest:description" content="' . esc_attr($pinterest_description) . '">' . "\n";
  }
}
