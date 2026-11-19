<?php
/**
 * Plantilla de archivo de noticias (TailwindCSS)
 *
 * @package tema-la97
 */

get_header(); ?>

<main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-12">
  <div class="flex items-baseline gap-4 mb-8">
    <div class="inline-flex flex-col">
      <span class="text-xs font-bold tracking-widest text-la97-navy uppercase">ARCHIVO</span>
      <span class="w-full h-[2.5px] bg-la97-red mt-1"></span>
    </div>
    <h1 class="text-2xl sm:text-3xl font-black text-la97-navy uppercase"><?php single_post_title(); ?></h1>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
    <?php
    $text_colors   = array('text-la97-navy', 'text-la97-red', 'text-la97-blue', 'text-la97-navy');
    $ribbon_colors = array('bg-la97-navy', 'bg-la97-red', 'bg-la97-blue', 'bg-la97-yellow');
    $fallback_imgs = array(
        get_template_directory_uri() . '/assets/img/card1.webp',
        get_template_directory_uri() . '/assets/img/card2.jpg',
        get_template_directory_uri() . '/assets/img/card3.jpg',
        'https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png'
    );
    $index = 0;

    if (have_posts()) :
        while (have_posts()) : the_post();
            $categoria = get_the_category();
            $nombre_cat = !empty($categoria) ? esc_html($categoria[0]->name) : 'GENERAL';
            $txt_cls = $text_colors[$index % 4];
            $rib_cls = $ribbon_colors[$index % 4];
            $fb_img  = $fallback_imgs[$index % 4];
            $index++;
    ?>
        <article id="post-<?php the_ID(); ?>" class="bg-white rounded-xl border border-la97-gray p-5 pb-7 relative overflow-hidden flex flex-col shadow-sm hover:-translate-y-1 hover:shadow-xl transition-all">
          <div class="h-44 rounded-lg overflow-hidden mb-3 bg-la97-navy/5">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
            <?php elseif (!empty($fb_img)) : ?>
              <img src="<?php echo esc_url($fb_img); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            <?php endif; ?>
          </div>
          <div class="text-[11px] font-extrabold uppercase tracking-wider mb-2 <?php echo esc_attr($txt_cls); ?>"><?php echo $nombre_cat; ?></div>
          <h2 class="text-base font-extrabold text-la97-navy leading-snug mb-2.5">
            <a href="<?php the_permalink(); ?>" data-la97-nav class="hover:text-la97-red transition-colors"><?php the_title(); ?></a>
          </h2>
          <p class="text-xs text-la97-navy/75 leading-relaxed mb-6 flex-1"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
          <div class="pl-5">
            <a href="<?php the_permalink(); ?>" data-la97-nav class="text-xs font-black text-la97-navy hover:text-la97-red uppercase tracking-wider inline-flex items-center gap-1.5">
              <span>LEER MÁS</span>
              <span aria-hidden="true">→</span>
            </a>
          </div>
          <div class="la97-corner-ribbon <?php echo esc_attr($rib_cls); ?>" aria-hidden="true"></div>
        </article>
    <?php
        endwhile;
    else :
        echo '<p class="text-la97-navy/70">No se encontraron entradas.</p>';
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>
