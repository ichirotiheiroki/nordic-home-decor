<?php get_header(); ?>
<main class="max-w-7xl mx-auto py-12 px-4">
  <h1 class="text-3xl font-bold mb-8"><?php single_term_title() . ' category'; ?></h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="block border rounded p-4 hover:shadow">
        <h2 class="text-xl font-semibold mb-2"><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) the_post_thumbnail('medium', ['class' => 'w-full h-auto rounded']); ?>
      </a>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
