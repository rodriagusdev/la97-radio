<?php
/**
 * Plantilla para ver una noticia individual (TailwindCSS)
 *
 * @package tema-la97
 */

get_header(); ?>

<main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-12">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $categoria = get_the_category();
          $nombre_cat = !empty($categoria) ? esc_html($categoria[0]->name) : 'GENERAL';
  ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-2xl border border-la97-gray p-6 sm:p-10 shadow-sm'); ?>>
        <div class="text-xs font-extrabold text-la97-red uppercase tracking-widest mb-3">
          <?php echo $nombre_cat; ?>
        </div>
        
        <h1 class="text-3xl sm:text-4xl font-black text-la97-navy leading-tight mb-4">
          <?php the_title(); ?>
        </h1>

        <div class="text-xs text-la97-navy/60 font-semibold mb-8 pb-6 border-b border-la97-gray">
          Publicado el <?php echo get_the_date(); ?>
        </div>

        <?php if (has_post_thumbnail()) : ?>
          <div class="mb-8 rounded-xl overflow-hidden shadow">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
          </div>
        <?php endif; ?>

        <div class="prose max-w-none text-la97-navy leading-relaxed space-y-4 text-base sm:text-lg">
          <?php the_content(); ?>
        </div>
      </article>
  <?php
      endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>
