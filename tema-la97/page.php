<?php
/**
 * Plantilla para páginas estáticas generales (TailwindCSS)
 *
 * @package tema-la97
 */

get_header(); ?>

<main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-12">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
  ?>
      <article id="page-<?php the_ID(); ?>" <?php post_class('bg-white rounded-2xl border border-la97-gray p-6 sm:p-10 shadow-sm'); ?>>
        <h1 class="text-3xl sm:text-4xl font-black text-la97-navy leading-tight mb-6 pb-4 border-b border-la97-gray uppercase">
          <?php the_title(); ?>
        </h1>

        <div class="prose max-w-none text-la97-navy leading-relaxed space-y-4">
          <?php the_content(); ?>
        </div>
      </article>
  <?php
      endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>

