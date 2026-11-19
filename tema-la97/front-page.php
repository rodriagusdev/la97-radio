<?php
/**
 * Portada Principal del Tema La 97 FM (TailwindCSS)
 * Diseño fiel a la referencia visual con la paleta oficial (#273547, #0366A2, #F4B70D, #E2051D, #E3E1E3).
 *
 * @package tema-la97
 */

get_header(); ?>

<main id="main-content" class="flex-1 w-full">
  <!-- =====================================================================
       1. HERO SECTION (Full-width edge-to-edge diagonal ribbons + Headline)
       ===================================================================== -->
  <section class="relative w-full bg-gradient-to-br from-[#E3E1E3]/60 via-white to-[#E3E1E3]/40 overflow-hidden border-b border-la97-gray" aria-labelledby="hero-title">
    <div class="w-full grid grid-cols-1 lg:grid-cols-12 min-h-[440px] lg:min-h-[520px]">
      
      <!-- Left Full-Height Stepped Diagonal Ribbons Flush to Left Screen Edge (#273547, #E2051D, #0366A2, #F4B70D) -->
      <div class="relative lg:col-span-6 h-[260px] sm:h-[320px] lg:h-auto overflow-hidden" aria-hidden="true">
        <div class="la97-stripe-navy"></div>
        <div class="la97-stripe-red"></div>
        <div class="la97-stripe-blue"></div>
        <div class="la97-stripe-yellow"></div>
      </div>

      <!-- Right Hero Typography -->
      <div class="lg:col-span-6 px-6 sm:px-10 lg:px-12 xl:px-16 pt-8 pb-24 lg:py-16 flex flex-col justify-between">
        <!-- Top Right Station Tag with Red Underline -->
        <div class="flex justify-start lg:justify-end mb-4 lg:mb-6">
          <div class="inline-flex flex-col items-start lg:items-end">
            <span class="text-xs font-bold tracking-[0.18em] text-la97-navy uppercase">
              LA 97 FM &bull; MAR DEL PLATA
            </span>
            <span class="w-12 h-[2.5px] bg-la97-red mt-1.5"></span>
          </div>
        </div>

        <div class="my-auto">
          <h1 id="hero-title" class="text-4xl sm:text-6xl xl:text-[4.25rem] font-black text-la97-navy leading-[1.02] tracking-tight mb-5 uppercase">
            LA MÚSICA<br>QUE NOS UNE
          </h1>
          <p class="text-lg sm:text-xl xl:text-2xl text-la97-navy/85 leading-snug mb-8">
            Información, música y compañía.<br>
            <strong class="text-la97-red font-extrabold">Siempre</strong> con vos.
          </p>
          <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav class="inline-flex items-center gap-2.5 text-xs sm:text-sm font-black text-la97-navy hover:text-la97-red hover:gap-4 transition-all uppercase tracking-wider">
            <span>CONOCÉ MÁS</span>
            <span aria-hidden="true" class="text-base">→</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- =====================================================================
       2. FLOATING LIVE AUDIO PLAYER BAR (Full Width)
       ===================================================================== -->
  <div class="w-full px-6 lg:px-12 xl:px-16 -mt-12 relative z-40">
    <div id="player" role="region" aria-label="Reproductor de radio en vivo" class="bg-white rounded-2xl shadow-xl border border-la97-gray p-4 sm:px-8 sm:py-5 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-6">
      
      <!-- Left: EN VIVO Pill + Current Show Thumbnail & Metadata -->
      <div class="flex items-center gap-3.5 sm:gap-5 lg:border-r lg:border-la97-gray lg:pr-6">
        <div class="bg-la97-red text-white text-xs font-black px-3.5 py-2 rounded-lg flex items-center gap-2 shrink-0 shadow-sm">
          <span class="w-2.5 h-2.5 bg-white rounded-full animate-pulse"></span>
          <span>EN VIVO</span>
        </div>

        <div class="flex items-center gap-3.5 min-w-0">
          <div class="w-20 h-13 sm:w-24 sm:h-14 rounded-lg overflow-hidden bg-la97-navy shrink-0 border border-la97-gray shadow-sm flex items-center justify-center">
            <img id="la97NowPlayingImg" src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="Programa en vivo" class="w-full h-full object-cover bg-white">
          </div>
          <div class="min-w-0">
            <span class="text-[10px] font-extrabold text-la97-navy/60 tracking-widest uppercase block">AHORA SONANDO</span>
            <strong id="la97NowPlayingTitle" class="text-sm sm:text-base font-black text-la97-navy block leading-tight truncate">La 97 FM en Vivo</strong>
            <span id="la97NowPlayingSub" class="text-xs font-semibold text-la97-blue block truncate">97.3 MHz • Mar del Plata</span>
          </div>
        </div>
      </div>

      <!-- Right: Transport Controls + Volume Slider + Waveform + Action Circles -->
      <div class="flex items-center justify-between lg:justify-end gap-3 sm:gap-4 flex-1 lg:pl-2">
        
        <!-- Play / Pause Red Circle -->
        <button type="button" id="la97PlayBtn" onclick="la97TogglePlay()" aria-label="Reproducir o pausar transmisión" class="w-11 h-11 rounded-full bg-la97-red hover:opacity-90 text-white flex items-center justify-center text-base shadow-md hover:scale-105 transition-transform shrink-0 cursor-pointer">
          <span id="la97PlayIcon">▶</span>
        </button>

        <!-- Decorative Prev/Next Program Skip Icons (Scrolls to schedule) -->
        <div class="hidden sm:flex items-center gap-2 text-la97-navy">
          <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav title="Ver programa anterior en la grilla" class="p-1.5 hover:text-la97-red transition-colors">
            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav title="Ver siguiente programa en la grilla" class="p-1.5 hover:text-la97-red transition-colors">
            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/></svg>
          </a>
        </div>

        <!-- Accessible Native Range Slider for Volume -->
        <div class="flex-1 max-w-[260px] lg:max-w-[360px] flex items-center">
          <label for="la97VolumeSlider" class="sr-only">Volumen de la radio</label>
          <input type="range" id="la97VolumeSlider" class="la97-volume-slider" min="0" max="100" value="85" aria-valuetext="85%">
        </div>

        <!-- Center-Aligned 10-Bar Equalizer Waveform -->
        <div class="la97-waveform hidden md:inline-flex px-1" id="la97Waveform" aria-hidden="true">
          <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>

        <!-- Yellow Favorite / Share WhatsApp Button + Navy Mute Button -->
        <div class="flex items-center gap-2 shrink-0">
          <a href="https://wa.me/5492236150000?text=Hola%20La%2097!%20Los%20estoy%20escuchando%20en%20vivo" target="_blank" rel="noopener" title="Enviar mensaje a la radio" aria-label="Enviar saludo por WhatsApp" class="w-9 h-9 rounded-full bg-la97-yellow hover:opacity-90 text-la97-navy flex items-center justify-center shadow-sm transition-transform hover:scale-105">
            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
          </a>
          <button type="button" id="la97MuteBtn" onclick="la97Mute()" aria-label="Silenciar o activar volumen" class="w-9 h-9 rounded-full bg-la97-navy hover:bg-la97-blue text-white flex items-center justify-center transition-colors cursor-pointer">
            <span id="la97MuteIcon">🔊</span>
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- =====================================================================
       3. DYNAMIC NEWS SECTION ("LO ÚLTIMO" Full Width with Corner Ribbons)
       ===================================================================== -->
  <section id="lo-ultimo" class="w-full px-6 lg:px-12 xl:px-16 pt-14 pb-12" aria-labelledby="news-heading">
    <div class="flex flex-wrap items-end justify-between gap-4 mb-8">
      <div class="flex items-baseline gap-5">
        <div class="inline-flex flex-col">
          <span class="text-xs font-bold tracking-widest text-la97-navy uppercase">NOTICIAS</span>
          <span class="w-full h-[2.5px] bg-la97-red mt-1"></span>
        </div>
        <h2 id="news-heading" class="text-2xl sm:text-3xl font-black text-la97-navy tracking-tight uppercase">LO ÚLTIMO</h2>
      </div>

      <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="inline-flex items-center gap-2 text-xs font-black text-la97-navy hover:text-la97-red uppercase tracking-wider transition-colors">
        <span>VER TODAS LAS NOTICIAS</span>
        <span aria-hidden="true">→</span>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php
      $noticias_query = new WP_Query(array(
          'posts_per_page'      => 4,
          'post_status'         => 'publish',
          'ignore_sticky_posts' => 1
      ));

      // Exact 4-card color sequence matching mockup using official palette
      $text_colors   = array('text-la97-navy', 'text-la97-red', 'text-la97-blue', 'text-la97-navy');
      $ribbon_colors = array('bg-la97-navy', 'bg-la97-red', 'bg-la97-blue', 'bg-la97-yellow');
      $fallback_imgs = array(
          get_template_directory_uri() . '/assets/img/card1.webp',
          get_template_directory_uri() . '/assets/img/card2.jpg',
          get_template_directory_uri() . '/assets/img/card3.jpg',
          'https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png'
      );
      $index = 0;

      if ($noticias_query->have_posts()) :
          while ($noticias_query->have_posts()) : $noticias_query->the_post();
              $categoria = get_the_category();
              $nombre_cat = !empty($categoria) ? esc_html($categoria[0]->name) : 'GENERAL';
              $txt_cls = $text_colors[$index % 4];
              $rib_cls = $ribbon_colors[$index % 4];
              $fb_img  = $fallback_imgs[$index % 4];
              $index++;
      ?>
          <article id="post-<?php the_ID(); ?>" class="bg-white rounded-xl border border-la97-gray p-5 pb-7 relative overflow-hidden flex flex-col shadow-sm hover:-translate-y-1 hover:shadow-xl transition-all duration-200">
            <div class="h-44 rounded-lg overflow-hidden mb-3 bg-la97-navy/5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
              <?php elseif (!empty($fb_img)) : ?>
                <img src="<?php echo esc_url($fb_img); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
              <?php endif; ?>
            </div>

            <div class="text-[11px] font-extrabold tracking-wider uppercase mb-2 <?php echo esc_attr($txt_cls); ?>">
              <?php echo $nombre_cat; ?>
            </div>
            
            <h3 class="text-base font-extrabold text-la97-navy leading-snug mb-2.5">
              <a href="<?php the_permalink(); ?>" data-la97-nav class="hover:text-la97-red transition-colors"><?php the_title(); ?></a>
            </h3>

            <p class="text-xs text-la97-navy/75 leading-relaxed mb-6 flex-1">
              <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
            </p>

            <div class="pl-5">
              <a href="<?php the_permalink(); ?>" data-la97-nav class="text-xs font-black text-la97-navy hover:text-la97-red tracking-wider uppercase inline-flex items-center gap-1.5 transition-colors">
                <span>LEER MÁS</span>
                <span aria-hidden="true">→</span>
              </a>
            </div>

            <!-- Diagonal Bottom-Left Corner Ribbon (Matches image.jpg) -->
            <div class="la97-corner-ribbon <?php echo esc_attr($rib_cls); ?>" aria-hidden="true"></div>
          </article>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
      ?>
          <p class="text-la97-navy/70 col-span-full"><?php esc_html_e('No hay noticias publicadas aún.', 'tema-la97'); ?></p>
      <?php endif; ?>
    </div>
  </section>

  <!-- =====================================================================
       4. CONTACTO DIRECTO & PROGRAMACIÓN BANNER (#contacto - Full Width)
       ===================================================================== -->
  <section id="contacto" class="w-full px-6 lg:px-12 xl:px-16 pb-16" aria-labelledby="contact-heading">
    <div class="bg-la97-navy rounded-2xl p-6 sm:p-10 text-white shadow-xl border border-white/10 relative overflow-hidden">
      <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
        
        <div class="max-w-md">
          <span class="inline-block bg-la97-yellow text-la97-navy text-[10px] font-black uppercase tracking-widest px-2.5 py-1 rounded mb-3">
            COMUNICATE CON LA RADIO
          </span>
          <h2 id="contact-heading" class="text-2xl sm:text-3xl font-black tracking-tight mb-2">
            ¡ESTAMOS EN CONTACTO!
          </h2>
          <p class="text-sm text-la97-gray leading-relaxed">
            Participá por premios, pedí tus canciones favoritas en el <strong class="text-la97-yellow">Ranking 40X40</strong> o consultá por publicidad comercial.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 flex-1">
          <!-- WhatsApp Oyentes -->
          <a href="https://wa.me/5492236150000" target="_blank" rel="noopener" class="bg-white/10 hover:bg-la97-blue/40 border border-white/15 rounded-xl p-4 flex flex-col justify-between transition-all hover:-translate-y-0.5">
            <span class="text-[10px] font-extrabold text-la97-yellow uppercase tracking-wider mb-1">WHATSAPP OYENTES</span>
            <strong class="text-base font-black text-white">223 615-0000</strong>
            <span class="text-[11px] text-la97-gray mt-2">Mensajes y audios 24 hs →</span>
          </a>

          <!-- Línea de Oyentes -->
          <a href="tel:02234932502" class="bg-white/10 hover:bg-la97-red/30 border border-white/15 rounded-xl p-4 flex flex-col justify-between transition-all hover:-translate-y-0.5">
            <span class="text-[10px] font-extrabold text-la97-gray uppercase tracking-wider mb-1">LÍNEA DE OYENTES</span>
            <strong class="text-base font-black text-white">0223 493-2502</strong>
            <span class="text-[11px] text-la97-gray mt-2">Llamada directa al estudio →</span>
          </a>

          <!-- Depto Comercial -->
          <a href="https://wa.me/5492235211023" target="_blank" rel="noopener" class="bg-white/10 hover:bg-la97-yellow/25 border border-white/15 rounded-xl p-4 flex flex-col justify-between transition-all hover:-translate-y-0.5">
            <span class="text-[10px] font-extrabold text-la97-yellow uppercase tracking-wider mb-1">DEPTO. COMERCIAL</span>
            <strong class="text-base font-black text-white">223 521-1023</strong>
            <span class="text-[11px] text-la97-gray mt-2">Publicidad • 0223 491-6607 →</span>
          </a>
        </div>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
