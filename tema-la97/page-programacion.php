<?php
/**
 * Template Name: Grilla de Programación
 * Plantilla nativa para la página /programacion/ (TailwindCSS)
 *
 * @package tema-la97
 */

get_header(); ?>

<main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-10">
  
  <!-- Header Banner -->
  <div class="bg-la97-navy rounded-2xl p-5 sm:px-7 mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-lg border border-white/10">
    <div class="flex items-center gap-3.5">
      <div class="bg-white rounded-xl p-1.5 w-12 h-12 flex items-center justify-center shrink-0">
        <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM" class="w-full h-full object-contain">
      </div>
      <div>
        <h1 class="text-xl sm:text-2xl font-black text-white tracking-tight uppercase leading-none mb-1">
          GRILLA DE PROGRAMACIÓN
        </h1>
        <span class="text-la97-yellow text-xs font-extrabold tracking-wider uppercase block">
          97.3 MHz &bull; MAR DEL PLATA
        </span>
      </div>
    </div>

    <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0">
      <a href="#semana" class="px-4 py-2 rounded-full bg-white/15 hover:bg-la97-blue text-white text-xs font-extrabold uppercase tracking-wider border border-white/20 whitespace-nowrap transition-colors">LUNES A VIERNES</a>
      <a href="#sabado" class="px-4 py-2 rounded-full bg-white/15 hover:bg-la97-red text-white text-xs font-extrabold uppercase tracking-wider border border-white/20 whitespace-nowrap transition-colors">SÁBADOS</a>
      <a href="#domingo" class="px-4 py-2 rounded-full bg-white/15 hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-extrabold uppercase tracking-wider border border-white/20 whitespace-nowrap transition-colors">DOMINGOS</a>
    </div>
  </div>

  <?php
  $bloques = array(
      array(
          'id'       => 'semana',
          'badge'    => 'LUNES A VIERNES',
          'badge_bg' => 'bg-la97-yellow text-la97-navy',
          'top_bdr'  => 'border-t-4 border-t-la97-yellow',
          'grad'     => 'from-la97-navy to-la97-blue',
          'title'    => 'Tu compañía de cada día',
          'subtitle' => 'Te acompañamos durante toda tu jornada. ¡Juntos, siempre!',
          'count'    => '7 PROGRAMAS EN VIVO',
          'shows'    => array(
              array('start' => 0,  'end' => 6,  'time' => '00 a 06 hs', 'title' => 'La Trasnoche',   'img' => get_template_directory_uri() . '/assets/img/shows/latrasnoche.jpg',   'desc' => 'La música necesaria para el comienzo de un nuevo día.'),
              array('start' => 6,  'end' => 9,  'time' => '06 a 09 hs', 'title' => 'Bim Bam Bum',    'img' => get_template_directory_uri() . '/assets/img/shows/bimbambum.jpg',     'desc' => 'Todo lo que necesitás saber para estar bien informado, acompañado de clásicos cargados de energía. ¡Buen día, audiencia!'),
              array('start' => 9,  'end' => 13, 'time' => '09 a 13 hs', 'title' => 'Ranking 40X40',  'img' => get_template_directory_uri() . '/assets/img/shows/40x40.jpg',         'desc' => 'El listado de los 40 éxitos más votados, ¡Arriba la energía! A jugar y divertirnos.'),
              array('start' => 13, 'end' => 18, 'time' => '13 a 18 hs', 'title' => 'Música Express', 'img' => get_template_directory_uri() . '/assets/img/shows/musicaexpress.jpg', 'desc' => 'La tarde es más entretenida cuando escuchamos música juntos y participamos por premios increíbles.'),
              array('start' => 18, 'end' => 21, 'time' => '18 a 21 hs', 'title' => 'El Regreso',     'img' => get_template_directory_uri() . '/assets/img/shows/elregreso.jpg',     'desc' => 'La compañía ideal para finalizar la jornada laboral o de estudio. Para volver a informarnos, a jugar y seguir escuchando la mejor música.'),
              array('start' => 21, 'end' => 22, 'time' => '21 a 22 hs', 'title' => 'Top Ten',        'img' => get_template_directory_uri() . '/assets/img/shows/top10.jpg',         'desc' => 'Las 10 canciones más votadas del Ranking 40X40.'),
              array('start' => 22, 'end' => 24, 'time' => '22 a 00 hs', 'title' => 'La Noche',       'img' => get_template_directory_uri() . '/assets/img/shows/noche97.jpg',       'desc' => 'Nuestra mejor selección de canciones para finalizar el día, porque sabemos lo que te gusta.'),
          ),
      ),
      array(
          'id'       => 'sabado',
          'badge'    => 'SÁBADOS',
          'badge_bg' => 'bg-la97-red text-white',
          'top_bdr'  => 'border-t-4 border-t-la97-red',
          'grad'     => 'from-la97-navy to-la97-navy',
          'title'    => 'El ritmo del fin de semana',
          'subtitle' => 'Si trabajás, estudiás o te relajás. ¡La 97 siempre con vos!',
          'count'    => '5 PROGRAMAS EN VIVO',
          'shows'    => array(
              array('start' => 0,  'end' => 6,  'time' => '00 a 06 hs', 'title' => 'La Trasnoche',    'img' => get_template_directory_uri() . '/assets/img/shows/latrasnoche.jpg',    'desc' => 'Palabras justas y la música necesaria para el comienzo de un nuevo día.'),
              array('start' => 6,  'end' => 10, 'time' => '06 a 10 hs', 'title' => 'Súper Clásicos',  'img' => get_template_directory_uri() . '/assets/img/shows/superclasicos.jpg',  'desc' => 'Éxitos indiscutibles que jamás nos cansamos de escuchar. Un repaso de la mejor música desde los 80s en adelante.'),
              array('start' => 10, 'end' => 14, 'time' => '10 a 14 hs', 'title' => 'Ranking 40X40',   'img' => get_template_directory_uri() . '/assets/img/shows/40x40.jpg',          'desc' => 'El listado de los 40 éxitos más votados, ¡Arriba la energía! A jugar y divertirnos.'),
              array('start' => 14, 'end' => 20, 'time' => '14 a 20 hs', 'title' => 'Música Express',  'img' => get_template_directory_uri() . '/assets/img/shows/musicaexpress.jpg',  'desc' => 'La tarde es más entretenida cuando escuchamos música juntos y participamos por premios increíbles.'),
              array('start' => 20, 'end' => 24, 'time' => '20 a 02 hs', 'title' => 'Conexión Sábado', 'img' => get_template_directory_uri() . '/assets/img/shows/conexionsabado.jpg', 'desc' => 'Lo mejor del fin de semana. Comenzamos la previa de una noche espectacular, con música que nos recarga de energía.'),
          ),
      ),
      array(
          'id'       => 'domingo',
          'badge'    => 'DOMINGOS',
          'badge_bg' => 'bg-la97-blue text-white',
          'top_bdr'  => 'border-t-4 border-t-la97-blue',
          'grad'     => 'from-la97-navy to-la97-blue',
          'title'    => 'Música para disfrutar',
          'subtitle' => 'Si trabajás, estudiás o te relajás. ¡La 97 siempre con vos!',
          'count'    => '5 PROGRAMAS EN VIVO',
          'shows'    => array(
              array('start' => 0,  'end' => 6,  'time' => '02 a 06 hs', 'title' => 'La Trasnoche',         'img' => get_template_directory_uri() . '/assets/img/shows/latrasnoche.jpg',    'desc' => 'La mejor música para comenzar el domingo.'),
              array('start' => 6,  'end' => 15, 'time' => '06 a 15 hs', 'title' => 'Súper Clásicos',       'img' => get_template_directory_uri() . '/assets/img/shows/superclasicos.jpg',  'desc' => 'Disfrutemos juntos de nuestros recuerdos, un recorrido por los éxitos desde los 80s en adelante.'),
              array('start' => 15, 'end' => 17, 'time' => '15 a 17 hs', 'title' => 'Top Latino',           'img' => 'https://la97.com.ar/wp-content/uploads/2023/01/top-latino.jpg',           'desc' => 'Suenan las 20 canciones en español más votadas en la radio. ¡Cantá fuerte!'),
              array('start' => 17, 'end' => 20, 'time' => '17 a 20 hs', 'title' => 'La Tarde del Domingo', 'img' => get_template_directory_uri() . '/assets/img/shows/tardedomingo.jpg', 'desc' => 'No te damos tiempo para que pienses que llega el lunes, escuchando música para disfrutar.'),
              array('start' => 20, 'end' => 24, 'time' => '20 a 00 hs', 'title' => 'La Noche del Domingo', 'img' => get_template_directory_uri() . '/assets/img/shows/lanochedomingo.jpg', 'desc' => 'El cierre del fin de semana no es un bajón porque estamos con vos, ¡siempre!'),
          ),
      ),
  );

  foreach ($bloques as $b) :
  ?>
  <section id="<?php echo esc_attr($b['id']); ?>" class="mb-10 scroll-mt-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
      
      <!-- Left Day Summary Card -->
      <div class="lg:col-span-4 bg-gradient-to-br <?php echo esc_attr($b['grad'] . ' ' . $b['top_bdr']); ?> rounded-2xl p-6 text-white flex flex-col justify-between shadow-md">
        <div>
          <span class="inline-block <?php echo esc_attr($b['badge_bg']); ?> text-[11px] font-black px-2.5 py-1 rounded uppercase tracking-wider mb-3">
            <?php echo esc_html($b['badge']); ?>
          </span>
          <h2 class="text-xl sm:text-2xl font-black text-white leading-tight mb-2">
            <?php echo esc_html($b['title']); ?>
          </h2>
          <p class="text-sm text-la97-gray leading-relaxed italic">
            <?php echo esc_html($b['subtitle']); ?>
          </p>
        </div>
        <div class="pt-4 mt-6 border-t border-white/15 text-xs font-extrabold text-la97-yellow tracking-wider uppercase">
          <?php echo esc_html($b['count']); ?>
        </div>
      </div>

      <!-- Right Program Rows -->
      <div class="lg:col-span-8 flex flex-col gap-3">
        <?php foreach ($b['shows'] as $s) : ?>
          <div class="la97-prog-row bg-white border border-la97-gray rounded-xl p-3.5 sm:px-5 flex flex-wrap sm:flex-nowrap items-center justify-between gap-4 shadow-sm hover:border-la97-blue transition-all"
               data-day="<?php echo esc_attr($b['id']); ?>"
               data-start="<?php echo esc_attr($s['start']); ?>"
               data-end="<?php echo esc_attr($s['end']); ?>">
            
            <div class="bg-la97-gray/60 text-la97-navy font-extrabold text-xs sm:text-sm px-3.5 py-2 rounded-lg whitespace-nowrap text-center min-w-[105px]">
              <?php echo esc_html($s['time']); ?>
            </div>

            <div class="bg-white border border-la97-gray rounded-lg p-1 w-28 h-12 flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url($s['img']); ?>" alt="<?php echo esc_attr($s['title']); ?>" class="max-w-full max-h-full object-contain" loading="lazy">
            </div>

            <div class="flex-1 min-w-[200px]">
              <div class="flex items-center gap-2.5 mb-0.5">
                <h3 class="text-base font-black text-la97-navy"><?php echo esc_html($s['title']); ?></h3>
                <span class="la97-on-air-badge hidden bg-la97-red text-white text-[10px] font-black px-2 py-0.5 rounded-full uppercase tracking-wider animate-pulse">
                  ● AHORA AL AIRE
                </span>
              </div>
              <p class="text-xs sm:text-sm text-la97-navy/75 leading-relaxed">
                <?php echo esc_html($s['desc']); ?>
              </p>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <?php endforeach; ?>

</main>

<?php get_footer(); ?>

