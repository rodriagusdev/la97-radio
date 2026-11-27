<?php
/**
 * Portada Principal (Media Kit) — La 97! FM 97.3
 * @package tema-la97
 */
get_header(); ?>

<main id="main-content" class="flex-1 w-full">

  <!-- ===================================================================
         SECTION 1: HERO & LIDERAZGO KANTAR IBOPE (Pages 1, 2 & 5 of Media Kit)
         =================================================================== -->
  <section id="liderazgo"
    class="mk-hero-surface text-white w-full min-h-[calc(100svh-86px)] flex items-center px-6 lg:px-12 xl:px-16 py-12 lg:py-16">
    <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-10 items-center relative z-10">

      <!-- Left 7 Cols: Page 1 + Page 2 Typography (second on mobile, first on desktop) -->
      <div class="lg:col-span-7 order-2 lg:order-1 space-y-6">
        <div class="space-y-2">
          <div
            class="la97-salvador-entrance text-2xl sm:text-[2rem] xl:text-[2.2rem] font-black leading-[1.02] tracking-tight text-white/75">
            TU RADIO, TU MÚSICA
          </div>

          <h1 class="text-4xl sm:text-6xl xl:text-[4.1rem] font-black leading-[1.02] tracking-tight">
            La radio que conecta a Mar del Plata<span class="text-la97-yellow">.</span>
          </h1>
        </div>

        <p class="text-base sm:text-xl font-bold text-la97-gray leading-relaxed max-w-2xl">
          Música, entretenimiento y compañía. <strong class="text-white font-black">Somos la radio de mayor audiencia
            de Mar del Plata</strong>, con una comunidad que nos elige todos los días, en todas sus plataformas.
        </p>

        <!-- Listener Message CTA (Strictly Oyentes) -->
        <div
          class="mk-glass rounded-2xl px-4 py-3 border border-white/15 flex flex-wrap items-center justify-between gap-3 text-xs font-black text-white max-w-2xl">
          <span class="text-la97-gray">¿Querés salir al aire o pedir tu tema?</span>
          <a href="https://wa.me/5492236150000" target="_blank" rel="noopener"
            class="inline-flex items-center gap-1.5 bg-white text-la97-navy px-3.5 py-2 rounded-xl hover:bg-la97-red hover:text-white transition-colors shrink-0">
            <i class="ph-bold ph-whatsapp-logo text-base"></i><span>MENSAJES 223 615-0000</span>
          </a>
        </div>
      </div>

      <!-- Right 5 Cols: Área 1 — ESCUCHANOS EN VIVO (first on mobile, second on desktop) -->
      <div id="escuchanos-en-vivo" class="lg:col-span-5 order-1 lg:order-2 scroll-mt-24">
        <div class="mk-glass text-white rounded-3xl p-6 sm:p-7 shadow-2xl relative overflow-hidden space-y-5">
          <!-- 1. Now Playing Show Info -->
          <div class="flex items-center gap-4">
            <img id="la97NowPlayingImg"
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg"
              alt="Ranking 40 x 40"
              class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl object-cover border-2 border-white/25 shadow-lg shrink-0">
            <div class="min-w-0 flex-1">
              <div class="text-xs font-black uppercase tracking-widest text-sky-300">AHORA AL AIRE EN LA 97
              </div>
              <div id="la97NowPlayingTitle"
                class="text-xl sm:text-2xl font-black text-white leading-tight mt-0.5 truncate">
                Ranking 40 x 40
              </div>
              <div id="la97NowPlayingSub" class="text-xs font-bold text-la97-gray mt-0.5">
                Christian Carballo y Eugenia Martinez
              </div>
            </div>
          </div>

          <!-- 3. Quantum Audio Tuner / On-Air Visualizer -->
          <div
            class="relative w-full h-32 flex items-center justify-center overflow-hidden rounded-2xl bg-[#101824]/90 border border-la97-blue/50 shadow-inner">
            <canvas id="quantumWaveform" class="w-full h-full block"></canvas>
          </div>

          <!-- 4. Unified Transport & Volume Control Dock -->
          <div
            class="bg-black/30 border border-white/10 rounded-2xl p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3.5">
              <button type="button" id="playToggleBtn" aria-label="Reproducir o pausar radio en vivo"
                class="w-12 h-12 rounded-full bg-la97-red hover:bg-white hover:text-la97-navy text-white flex items-center justify-center shadow-xl transition-all cursor-pointer shrink-0">
                <svg id="playIcon" class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </button>
              <div>
                <div id="playBtnText" class="text-xs font-black uppercase tracking-wider text-white">ESCUCHANOS EN
                  VIVO</div>
              </div>
            </div>

            <div class="flex items-center gap-2.5 sm:w-48 bg-white/5 rounded-xl px-3 py-2 border border-white/10">
              <span class="text-xs font-black uppercase tracking-wider text-la97-gray">VOL</span>
              <input id="volumeSlider" type="range" min="0" max="100" value="85" aria-label="Control de volumen"
                class="la97-volume-slider flex-1 min-w-0">
              <button type="button" id="muteBtn" aria-label="Silenciar audio"
                class="px-2 py-1 rounded bg-white/10 hover:bg-la97-red text-white text-xs font-black uppercase transition-colors cursor-pointer shrink-0">
                MUTE
              </button>
            </div>
            <div class="hidden" id="waveform" aria-hidden="true"></div>
          </div>

          <!-- 4b. Tiempo Ahora en Mar del Plata (Hora, Temperatura y Humedad) -->
          <div
            class="bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 flex flex-wrap items-center justify-between gap-2 text-xs">
            <div class="flex flex-wrap items-center gap-3 font-bold text-white">
              <span
                class="bg-la97-blue/40 text-sky-300 font-black px-2 py-0.5 rounded uppercase tracking-wider text-xs">TIEMPO
                AHORA</span>
              <span class="inline-flex items-center gap-1 font-mono text-sky-300"><i class="ph-bold ph-clock"></i>
                <span id="hthTime">--:-- hs</span></span>
              <span class="inline-flex items-center gap-1"><i class="ph-bold ph-thermometer-simple text-la97-red"></i>
                <span id="hthTemp">--°C</span></span>
              <span class="inline-flex items-center gap-1 text-la97-gray"><i class="ph-bold ph-drop text-sky-300"></i>
                <span id="hthHum">--% Hum</span></span>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-la97-gray/80">
              Mar del Plata
            </span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ===================================================================
         ESPACIO PUBLICITARIO 1: BANNER COMERCIAL LEADERBOARD
         (Oculto por defecto; activar cuando un anunciante contrate el espacio)
         =================================================================== -->
  <section aria-label="Espacio publicitario" class="hidden w-full px-6 lg:px-12 xl:px-16 py-6 bg-transparent">
    <div
      class="mk-glass rounded-2xl p-5 sm:px-8 sm:py-6 border border-dashed border-white/20 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-4 text-center md:text-left">
        <span
          class="bg-white/15 text-white border border-white/20 text-xs font-black px-2.5 py-1 rounded uppercase tracking-wider shrink-0">
          BANNER COMERCIAL
        </span>
        <div>
          <div class="text-sm sm:text-base font-black text-white">
            Espacio Publicitario Principal Disponible (970 × 120 px)
          </div>
          <div class="text-xs text-la97-gray">
            Posicionamiento destacado en portada frente a toda la audiencia de La 97 FM.
          </div>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/publicita-ya/#formulario-publicidad')); ?>"
        class="bg-la97-blue hover:bg-white hover:text-la97-navy text-white text-xs font-black uppercase tracking-wider px-5 py-2.5 rounded-xl transition-colors shrink-0">
        Publicitar aquí →
      </a>
    </div>
  </section>

  <!-- ===================================================================
         PROGRAMACIÓN DESTACADA (Acceso directo a la grilla semanal)
         =================================================================== -->
  <section id="programacion-destacada" aria-label="Programación diaria destacada"
    class="w-full px-6 lg:px-12 xl:px-16 py-12 bg-transparent text-white">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
      <div>
        <span class="bg-la97-red text-white text-xs font-black px-3 py-1 rounded uppercase tracking-wider">
          PROGRAMACIÓN DIARIA • LUNES A VIERNES
        </span>
        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mt-3">
          Nuestros programas <span class="text-sky-300">al aire</span>
        </h2>
        <p class="text-sm text-la97-gray mt-1">
          Contenido y realización 100% local las 24 hs desde Mar del Plata.
        </p>
      </div>
      <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
        class="inline-flex items-center gap-2 bg-white hover:bg-la97-red text-la97-navy hover:text-white text-xs font-black uppercase tracking-wider px-5 py-3 rounded-xl shadow-lg transition-colors shrink-0">
        <span>Ver grilla completa (Lunes a Domingo)</span> <i class="ph-bold ph-arrow-right"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
        class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-white/35 transition-all">
        <div class="flex items-center gap-3">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/bimbambum.jpg"
            alt="Bim Bam Bum" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
          <div>
            <div class="text-xs font-black text-sky-300">06 A 09 HS</div>
            <h3 class="text-sm font-black text-white group-hover:text-sky-300 transition-colors">Bim Bam Bum</h3>
            <div class="text-sm text-sky-300 font-bold">Marina Gorosito</div>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
        class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-white/35 transition-all">
        <div class="flex items-center gap-3">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg"
            alt="Ranking 40 x 40" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
          <div>
            <div class="text-xs font-black text-sky-300">09 A 13 HS</div>
            <h3 class="text-sm font-black text-white group-hover:text-sky-300 transition-colors">Ranking 40 x 40
            </h3>
            <div class="text-sm text-sky-300 font-bold">Martinez / Carballo</div>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
        class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-white/35 transition-all">
        <div class="flex items-center gap-3">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/musicaexpress.jpg"
            alt="Música Express" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
          <div>
            <div class="text-xs font-black text-sky-300">13 A 18 HS</div>
            <h3 class="text-sm font-black text-white group-hover:text-sky-300 transition-colors">Música Express
            </h3>
            <div class="text-sm text-sky-300 font-bold">Gerardo Reboredo</div>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
        class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-white/35 transition-all">
        <div class="flex items-center gap-3">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/elregreso.jpg"
            alt="El Regreso - Top Ten - La Noche"
            class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
          <div>
            <div class="text-xs font-black text-sky-300">18 A 24 HS</div>
            <h3 class="text-sm font-black text-white group-hover:text-sky-300 transition-colors">El Regreso • Top
              Ten • La Noche</h3>
            <div class="text-sm text-sky-300 font-bold">Pablo Larsen</div>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- ===================================================================
         COMUNIDAD INSTAGRAM (@la97siempre) — LA 97! SIEMPRE ESTÁ PASANDO ALGO
         =================================================================== -->
  <section id="novedades-instagram"
    class="w-full px-6 lg:px-12 xl:px-16 py-14 bg-gradient-to-b from-transparent via-la97-navy/30 to-transparent text-white">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
      <div>
        <span
          class="inline-flex items-center gap-2 bg-la97-red text-white text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
          COMUNIDAD EN INSTAGRAM • @LA97SIEMPRE
        </span>
        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mt-3">
          La 97! <span class="text-sky-300">Siempre está pasando algo.</span>
        </h2>
        <p class="text-sm text-la97-gray mt-1 max-w-2xl">
          Novedades, música, entrevistas, sorteos, experiencias y todo lo que sucede dentro y fuera del aire.
        </p>
      </div>

      <div class="flex flex-wrap items-center gap-2.5">
        <a href="https://www.instagram.com/la97siempre/" target="_blank" rel="noopener"
          class="inline-flex items-center gap-2 bg-gradient-to-r from-[#f09433] via-[#dc2743] to-[#bc1888] text-white text-xs font-black uppercase px-4 py-2.5 rounded-xl shadow-lg hover:opacity-90 transition-opacity">
          <i class="ph-bold ph-instagram-logo text-base"></i><span>@la97siempre</span>
        </a>
        <a href="https://www.facebook.com/" target="_blank" rel="noopener"
          class="inline-flex items-center gap-2 bg-la97-blue hover:bg-white hover:text-la97-navy text-white text-xs font-black uppercase px-4 py-2.5 rounded-xl transition-colors">
          <i class="ph-bold ph-facebook-logo text-base"></i><span>Facebook</span>
        </a>
        <a href="https://x.com/La97Siempremdp" target="_blank" rel="noopener"
          class="inline-flex items-center gap-2 bg-white/10 hover:bg-white hover:text-la97-navy text-white text-xs font-black uppercase px-4 py-2.5 rounded-xl border border-white/15 transition-colors">
          <i class="ph-bold ph-x-logo text-base"></i><span>X</span>
        </a>
      </div>
    </div>

    <!-- Modern-Retro Vinyl & Polaroid 6-Post Showcase (Ready for WordPress [instagram-feed] shortcode) -->
    <div class="space-y-6">

      <!-- Top Row: Vinyl Sleeve Feature (7 cols) + Studio Reel Feature (5 cols) -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">

        <!-- 1. Vinyl Sleeve Featured Post -->
        <a href="https://www.instagram.com/la97siempre/p/Df4nRKdxBa_/?hl=en" target="_blank" rel="noopener"
          class="lg:col-span-7 group relative mk-glass rounded-3xl p-5 sm:p-6 border border-white/15 hover:border-white/35 transition-all flex flex-col sm:flex-row items-center gap-6 overflow-hidden">
          <!-- Vinyl disc peeking out on hover -->
          <div
            class="hidden sm:block absolute -right-12 top-1/2 -translate-y-1/2 w-48 h-48 rounded-full bg-gradient-to-br from-zinc-900 via-black to-zinc-800 border-4 border-white/10 shadow-2xl opacity-35 group-hover:opacity-85 group-hover:-right-5 group-hover:rotate-45 transition-all duration-500 pointer-events-none">
            <div class="absolute inset-7 rounded-full border border-white/10"></div>
            <div class="absolute inset-11 rounded-full border border-white/5"></div>
            <div class="absolute inset-16 rounded-full bg-la97-yellow flex items-center justify-center">
              <div class="w-3 h-3 rounded-full bg-la97-navy"></div>
            </div>
          </div>

          <div
            class="relative w-full sm:w-56 aspect-square rounded-2xl overflow-hidden shrink-0 border border-white/15 shadow-xl">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-1.jpg"
              alt="Publicación de @la97siempre"
              class="w-full h-full object-cover sepia-[.12] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
          </div>

          <div class="relative z-10 flex flex-col justify-between py-1 pr-2 sm:pr-12 h-full">
            <div class="space-y-2.5">
              <div class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider text-sky-300">
                <i class="ph-fill ph-vinyl-record text-base"></i>
                <span>97.3 MHz • EN EL AIRE</span>
              </div>
              <h3
                class="text-xl sm:text-2xl font-black text-white leading-tight group-hover:text-sky-300 transition-colors">
                Todo lo que suena y pasa en La 97!
              </h3>
              <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
                La radio más escuchada de Mar del Plata. Clásicos, lanzamientos, entrevistas y la compañía de siempre
                en el dial y en redes.
              </p>
            </div>
            <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between text-xs font-black">
              <span class="text-sky-300">@la97siempre</span>
              <span class="inline-flex items-center gap-1.5 text-sky-300">Ver publicación <i
                  class="ph-bold ph-arrow-up-right"></i></span>
            </div>
          </div>
        </a>

        <!-- 2. Studio Reel Card (Full-bleed visual with warm retro framing) -->
        <a href="https://www.instagram.com/la97siempre/reel/Df5SUTypLp6/?hl=en" target="_blank" rel="noopener"
          class="lg:col-span-5 group relative rounded-3xl overflow-hidden mk-glass border border-white/15 hover:border-white/35 transition-all min-h-[260px] flex flex-col justify-end">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-5.jpg"
            alt="Detrás del Aire en La 97! con Eugenia Martinez y Christian Carballo"
            class="absolute inset-0 w-full h-full object-cover sepia-[.12] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-la97-navy via-la97-navy/55 to-black/15"></div>
          <div class="absolute top-4 right-4 flex items-center justify-end">
            <span
              class="w-9 h-9 rounded-full bg-white/15 text-white border border-white/20 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
              <i class="ph-fill ph-play text-xs"></i>
            </span>
          </div>
          <div class="relative z-10 p-6 space-y-1.5">
            <div class="text-xs font-black uppercase tracking-wider text-sky-300">Detrás del Aire • La 97!
            </div>
            <p class="text-xs sm:text-sm font-bold text-white leading-snug line-clamp-2">
              Una mañana en el estudio con @eugenia_martinez_locutora y @doncarba. Micrófonos abiertos y buena música.
              🎙️
            </p>
          </div>
        </a>

      </div>

      <!-- Bottom Row: 4 Tactile 7" Record Sleeve / Polaroid Cards -->
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

        <!-- 3. Alfajores Marplatenses Reel -->
        <a href="https://www.instagram.com/la97siempre/reel/Df-ri5hJm5U/?hl=en" target="_blank" rel="noopener"
          class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-white/35 hover:-rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-2.jpg"
              alt="Mención histórica a La 97! en Alfajores Marplatenses"
              class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            <span
              class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-black/70 backdrop-blur-md text-la97-yellow flex items-center justify-center border border-white/15">
              <i class="ph-fill ph-play text-xs"></i>
            </span>
          </div>
          <div class="px-1 space-y-1">
            <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider text-sky-300">
              <span>HISTORIA MDP</span>
              <i class="ph-bold ph-arrow-up-right opacity-70 group-hover:opacity-100"></i>
            </div>
            <p class="text-xs font-bold text-white line-clamp-2">
              ✨ Joya marplatense: mención a La 97! junto a @alfajoresmarplatenses.
            </p>
          </div>
        </a>

        <!-- 4. @tutedelacroix -->
        <a href="https://www.instagram.com/la97siempre/p/Df-SIghFM8v/?hl=en" target="_blank" rel="noopener"
          class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-white/35 hover:rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-3.jpg"
              alt="Publicación de @la97siempre con @tutedelacroix"
              class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
          </div>
          <div class="px-1 space-y-1">
            <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider text-sky-300">
              <span>ENTREVISTAS</span>
              <i class="ph-bold ph-arrow-up-right opacity-70 group-hover:opacity-100"></i>
            </div>
            <p class="text-xs font-bold text-white line-clamp-2">
              Novedades y contenido exclusivo junto a @tutedelacroix en La 97! 🎶
            </p>
          </div>
        </a>

        <!-- 5. Mar del Plata -->
        <a href="https://www.instagram.com/la97siempre/p/Df9q-etJaGD/?hl=en" target="_blank" rel="noopener"
          class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-white/35 hover:-rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-4.jpg"
              alt="La 97! en Mar del Plata"
              class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
          </div>
          <div class="px-1 space-y-1">
            <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider text-sky-300">
              <span>MAR DEL PLATA</span>
              <i class="ph-bold ph-arrow-up-right opacity-70 group-hover:opacity-100"></i>
            </div>
            <p class="text-xs font-bold text-white line-clamp-2">
              Presencia y comunidad en cada rincón de la ciudad. @la97siempre 🌊
            </p>
          </div>
        </a>

        <!-- 6. Taylor Swift CMA Awards -->
        <a href="https://www.instagram.com/la97siempre/p/Df7andtEZyr/?hl=en" target="_blank" rel="noopener"
          class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-white/35 hover:rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-6.jpg"
              alt="Taylor Swift en los CMA Awards - La 97!"
              class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
          </div>
          <div class="px-1 space-y-1">
            <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider text-sky-300">
              <span>MÚSICA</span>
              <i class="ph-bold ph-arrow-up-right opacity-70 group-hover:opacity-100"></i>
            </div>
            <p class="text-xs font-bold text-white line-clamp-2">
              ¡Taylor Swift y una noche para la historia en los CMA Awards! 🤠✨
            </p>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ===================================================================
         SECCIÓN COMERCIAL: AUDIENCIA DE VALOR & ESTRATEGIA OMNICANAL
         =================================================================== -->
  <section id="oportunidad-comercial" aria-label="Propuesta comercial para anunciantes"
    class="w-full px-6 lg:px-12 xl:px-16 py-14 bg-transparent text-white space-y-10">
    <!-- Open Editorial Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
      <div class="max-w-2xl">
        <span class="text-xs font-black uppercase tracking-widest text-sky-300">
          PUBLICITÁ CON NOSOTROS
        </span>
        <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-2 leading-tight">
          Una audiencia que importa. <span class="text-sky-300">Conectá tu marca.</span>
        </h2>
        <p class="text-sm sm:text-base text-la97-gray mt-3 leading-relaxed">
          La audiencia no es solamente un número: es la posibilidad de conectar tu empresa con miles de personas todos
          los días en Mar del Plata y la región.
        </p>
      </div>

      <a href="<?php echo esc_url(home_url('/publicita-ya/')); ?>" data-la97-nav
        class="inline-flex items-center gap-2 bg-white hover:bg-la97-red text-la97-navy hover:text-white text-xs font-black uppercase tracking-wider px-5 py-3 rounded-full shadow-lg transition-colors shrink-0">
        <span>Ver campaña integral</span> <i class="ph-bold ph-arrow-right"></i>
      </a>
    </div>

    <!-- Open 6+6 Editorial Split: Key Metrics + Real Studio Photo -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <!-- Left 6 Cols: Open Typographic Stats (No box-in-box) -->
      <div class="lg:col-span-6 space-y-8">
        <div class="space-y-2">
          <div class="flex items-baseline gap-3">
            <span class="text-6xl sm:text-7xl font-black text-white tracking-tighter leading-none">
              20,1<span class="text-4xl sm:text-5xl text-sky-300">%</span>
            </span>
            <span class="text-xs font-black uppercase tracking-widest text-sky-300">
              Share de audiencia
            </span>
          </div>
          <p class="text-base sm:text-lg font-bold text-white/95 leading-snug max-w-xl">
            de quienes escuchan <span class="text-sky-300 font-black">RADIO</span> nos eligen en Mar del Plata. El resto
            se divide en más de 70 emisoras.
          </p>
        </div>

        <!-- 4 Open Typographic Indicators -->
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 pt-6 border-t border-white/10">
          <div>
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">24 hs.</div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-1.5">Programación propia</div>
            <div class="text-sm text-la97-gray mt-0.5">Aire FM 97.3 HD & Streaming</div>
          </div>
          <div>
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">36 años</div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-1.5">De trayectoria</div>
            <div class="text-sm text-la97-gray mt-0.5">Acompañando a MDQ en 2026</div>
          </div>
          <div>
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">+80.000</div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-1.5">Seguidores en Instagram</div>
            <div class="text-sm text-la97-gray mt-0.5">@la97siempre</div>
          </div>
          <div>
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">+70.000</div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-1.5">Seguidores en Facebook</div>
            <div class="text-sm text-la97-gray mt-0.5">Comunidad oficial</div>
          </div>
        </div>
      </div>

      <!-- Right 6 Cols: Full-Bleed Real Studio Photo -->
      <div
        class="lg:col-span-6 relative rounded-3xl overflow-hidden border border-white/15 min-h-[340px] sm:min-h-[380px] flex flex-col justify-end group shadow-2xl">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/radio02.jpg"
          alt="Estudio central de La 97! FM 97.3 en Mar del Plata"
          class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-[#0d1520]/45 to-transparent"></div>
        <div class="relative z-10 p-6 sm:p-8 space-y-1">
          <div class="text-xs font-black uppercase tracking-wider text-sky-300">ESTUDIO CENTRAL · 97.3 MHZ</div>
          <div class="text-xl sm:text-2xl font-black text-white">En vivo los 365 días del año</div>
          <div class="text-xs sm:text-sm text-la97-gray">La cercanía es nuestra fortaleza y celebramos la pasión por la
            música y los buenos contenidos.</div>
        </div>
      </div>
    </div>

    <!-- Cobertura Regional + Prime Time (Clean 2-Col Pair) -->
    <div id="cobertura-alcance" class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
      <div class="lg:col-span-7 mk-glass rounded-3xl p-7 border border-white/10 flex flex-col justify-between gap-4">
        <div>
          <span class="text-xs font-black uppercase tracking-widest text-sky-300">DE MAR DEL PLATA A TODA LA
            REGIÓN</span>
          <h3 class="text-2xl sm:text-3xl font-black tracking-tight mt-1.5 leading-tight text-white">
            Una radio de Mar del Plata con <span class="text-sky-300">alcance regional.</span>
          </h3>
          <p class="text-sm text-la97-gray leading-relaxed mt-2">
            Llegamos con música, información y entretenimiento a Mar del Plata, Batán, Chapadmalal, Miramar, Balcarce,
            Santa Clara del Mar, Mar Chiquita, Coronel Vidal y Lobería.
          </p>
        </div>
      </div>

      <div class="lg:col-span-5 mk-glass rounded-3xl p-7 border border-la97-red/35 flex flex-col justify-between gap-4">
        <div>
          <span class="text-xs font-black uppercase tracking-widest text-la97-red">
            LIDERAZGO EN FRANJA CENTRAL
          </span>
          <h3 class="text-2xl sm:text-3xl font-black text-white leading-none mt-2">
            1ros. en prime time.
          </h3>
          <p class="text-sm font-bold text-la97-gray mt-3 leading-relaxed">
            Lideramos la audiencia en la franja central de <span
              class="bg-la97-red text-white font-black px-2 py-0.5 rounded ml-1">6 a 17 hs.</span>
          </p>
        </div>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-la97-gray">
          <span>Horario de mayor encendido comercial</span>
          <a href="<?php echo esc_url(home_url('/publicita-ya/#formulario-publicidad')); ?>" data-la97-nav
            class="font-black text-sky-300 hover:text-white shrink-0">Pautar →</a>
        </div>
      </div>
    </div>

    <!-- Discreet Single-Line Source -->
    <p class="text-xs text-la97-gray/75 text-center">
      Fuente: Kantar Ibope Media (Medición 2024) · Estudio de audiencia junto al Observatorio de la Universidad FASTA.
    </p>
  </section>

  <!-- ===================================================================
         PERFIL DE PÚBLICO (Page 4 of Media Kit — Glass Bento)
         =================================================================== -->
  <section id="publico-perfil" aria-label="Perfil de audiencia"
    class="w-full px-6 lg:px-12 xl:px-16 py-12 bg-transparent text-white space-y-10">

    <!-- Open Header -->
    <div class="max-w-2xl">
      <span class="text-xs font-black uppercase tracking-widest text-la97-red">AUDIENCIA COMPROBADA</span>
      <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-2 leading-tight">
        Conocé a nuestro <span class="text-sky-300">público.</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

      <!-- Left 4 Cols: Open Demographic Summary + Gender Split -->
      <div class="lg:col-span-4 space-y-8">
        <div class="grid grid-cols-2 gap-6">
          <div>
            <div class="text-4xl sm:text-5xl font-black text-white leading-none">
              35 <span class="text-base font-bold text-la97-gray">años</span>
            </div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-2">Promedio de edad</div>
          </div>
          <div>
            <div class="text-3xl sm:text-4xl font-black text-white tracking-tight leading-none">
              AB C1 C2
            </div>
            <div class="text-xs font-black uppercase tracking-wider text-sky-300 mt-2">Segmento socioecon.</div>
          </div>
        </div>

        <!-- Gender Split Bar -->
        <div class="pt-6 border-t border-white/10">
          <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider mb-2.5">
            <span class="text-white">Mujeres 51%</span>
            <span class="text-sky-300">Hombres 49%</span>
          </div>
          <div class="w-full h-3 rounded-full overflow-hidden flex bg-white/10">
            <div class="bg-la97-red h-full" style="width: 51%"></div>
            <div class="bg-sky-400 h-full" style="width: 49%"></div>
          </div>
        </div>
      </div>

      <!-- Middle 4 Cols: ¿Dónde nos escuchan? -->
      <div class="lg:col-span-4 space-y-5">
        <h3 class="text-xl sm:text-2xl font-black text-white">¿Dónde nos escuchan?</h3>
        <div class="space-y-3.5 text-sm">
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-house text-la97-red text-base"></i> Casa</span><span
                class="text-white font-black">58%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-la97-red rounded-full" style="width:58%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-car text-la97-red text-base"></i> Vehículo</span><span
                class="text-white font-black">43%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-la97-red rounded-full" style="width:43%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-buildings text-la97-red text-base"></i> Trabajo</span><span
                class="text-white font-black">28%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-la97-red rounded-full" style="width:28%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-person-simple-walk text-la97-red text-base"></i> Caminando</span><span
                class="text-white font-black">13%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-la97-red rounded-full" style="width:13%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-speaker-high text-la97-red text-base"></i> Otro</span><span
                class="text-white font-black">4%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-la97-red rounded-full" style="width:4%"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right 4 Cols: ¿En qué dispositivos? -->
      <div class="lg:col-span-4 space-y-5">
        <h3 class="text-xl sm:text-2xl font-black text-sky-300">¿En qué dispositivos?</h3>
        <div class="space-y-3.5 text-sm">
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-radio text-sky-300 text-base"></i> Radio</span><span
                class="text-white font-black">52%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-sky-400 rounded-full" style="width:52%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-laptop text-sky-300 text-base"></i> Internet Computadora</span><span
                class="text-white font-black">52%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-sky-400 rounded-full" style="width:52%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-car-profile text-sky-300 text-base"></i> Vehículo</span><span
                class="text-white font-black">40%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-sky-400 rounded-full" style="width:40%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-device-mobile text-sky-300 text-base"></i> Internet Smartphone</span><span
                class="text-white font-black">29%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-sky-400 rounded-full" style="width:29%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between font-bold"><span class="inline-flex items-center gap-2"><i
                  class="ph-bold ph-phone text-sky-300 text-base"></i> Teléfono</span><span
                class="text-white font-black">14%</span></div>
            <div class="w-full h-2 bg-white/10 rounded-full mt-1.5">
              <div class="h-full bg-sky-400 rounded-full" style="width:14%"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <p class="text-xs text-la97-gray/75 pt-4 border-t border-white/10">
      Datos obtenidos por el Observatorio de la Universidad FASTA y Kantar Ibope Media. Los porcentajes de hábitos de
      escucha corresponden a preguntas de respuesta múltiple (por eso superan el 100%).
    </p>
  </section>

  <!-- ===================================================================
         SECTION 6: TESTIMONIOS REALES & NUBE CONCEPTUAL (Page 11 of Media Kit)
         =================================================================== -->
  <section
    class="relative overflow-hidden w-full px-6 lg:px-12 xl:px-16 py-16 bg-black/35 backdrop-blur-sm text-white border-t border-white/10">
    <!-- Subtle Diagonal Brand Stripes Backdrop (Media Kit Visual Identity) -->
    <div aria-hidden="true" class="pointer-events-none select-none absolute inset-0 overflow-hidden opacity-[0.12]">
      <svg viewBox="0 0 1440 900" preserveAspectRatio="xMaxYMid slice" class="w-full h-full">
        <g transform="rotate(-42 1080 420)">
          <rect x="860" y="-320" width="24" height="1100" rx="12" fill="#273547" />
          <rect x="908" y="-220" width="24" height="1050" rx="12" fill="#0366A2" />
          <rect x="956" y="-140" width="24" height="1000" rx="12" fill="#0366A2" />
          <rect x="1004" y="-260" width="24" height="1080" rx="12" fill="#F4B70D" />
          <rect x="1052" y="-160" width="24" height="1020" rx="12" fill="#F4B70D" />
          <rect x="1100" y="-80" width="24" height="960" rx="12" fill="#E2051D" />
          <rect x="1148" y="-200" width="24" height="1040" rx="12" fill="#E2051D" />
          <rect x="1196" y="-280" width="24" height="1100" rx="12" fill="#0366A2" />
        </g>
      </svg>
      <div class="absolute inset-0 bg-gradient-to-r from-[#1b2636] via-[#1b2636]/75 to-transparent"></div>
    </div>

    <div class="relative z-10">
      <div class="max-w-4xl mx-auto text-center space-y-3">
        <span class="text-xs font-black uppercase tracking-widest text-sky-300">
          TESTIMONIOS REALES
        </span>
        <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
          Las marcas nos eligen. <span class="text-sky-300">La audiencia nos acompaña.</span>
        </h2>
        <div class="pt-3 max-w-3xl mx-auto space-y-2">
          <p class="text-base sm:text-lg font-black text-white">
            Unimos marcas con la mayor audiencia de Mar del Plata.
          </p>
          <p class="text-sm sm:text-base text-la97-gray leading-relaxed">
            El compromiso constante de todo el <strong class="text-white">staff creativo</strong> y de ventas, junto a
            nuestro <strong class="text-white">sistema de publicidad estratégico, multimedial y de impacto</strong>, nos
            permite que las marcas más importantes nos elijan.
          </p>
        </div>
      </div>

      <!-- 1. ANUNCIANTE DESTACADO -->
      <div class="mt-10">
        <div
          class="mk-glass border border-white/15 border-l-4 border-l-la97-blue bg-la97-blue/[0.08] rounded-3xl p-7 sm:p-8 shadow-2xl">
          <div class="space-y-3 max-w-4xl">
            <div class="flex flex-wrap items-center gap-2.5 text-xs">
              <span
                class="bg-la97-blue/30 text-sky-300 border border-la97-blue/60 text-xs font-black uppercase tracking-wider px-2.5 py-0.5 rounded-full">Anunciante</span>
              <span class="font-black text-white text-base sm:text-lg">Adrian Vecchio</span>
              <span class="text-la97-yellow font-bold">★★★★★</span>
              <span class="text-la97-gray">Google · Enero 2026</span>
            </div>
            <p class="text-base sm:text-xl font-bold text-white leading-relaxed">
              "Gente de radio. Mucho trabajo y profesionalismo en lo que hacen. Excelente para publicitar. Es muy
              escuchada."
            </p>
          </div>
        </div>
      </div>

      <!-- 2. OYENTES -->
      <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div
          class="mk-glass border border-white/15 border-l-4 border-l-sky-400/70 rounded-2xl p-6 flex flex-col justify-between gap-4">
          <p class="text-sm text-white/90 leading-relaxed">
            "Yo los escucho desde hace 20 años desde Buenos Aires por internet y ahora por App. Me encanta, son lo
            massss, 24hs con la 97."
          </p>
          <div class="flex items-center justify-between gap-2 text-xs pt-3 border-t border-white/10">
            <div class="flex items-center gap-2">
              <span
                class="bg-sky-400/15 text-sky-300 border border-sky-400/30 text-xs font-black uppercase tracking-wider px-2 py-0.5 rounded-full">Oyente</span>
              <span class="font-black text-white">@collectorcarshop</span>
            </div>
            <span class="text-la97-gray/80">Instagram · Agosto 2025</span>
          </div>
        </div>

        <div
          class="mk-glass border border-white/15 border-l-4 border-l-sky-400/70 rounded-2xl p-6 flex flex-col justify-between gap-4">
          <p class="text-sm text-white/90 leading-relaxed">
            "La mejor compañía siempre. 💛 Sigan alegrando siempre mis días."
          </p>
          <div class="flex items-center justify-between gap-2 text-xs pt-3 border-t border-white/10">
            <div class="flex items-center gap-2">
              <span
                class="bg-sky-400/15 text-sky-300 border border-sky-400/30 text-xs font-black uppercase tracking-wider px-2 py-0.5 rounded-full">Oyente</span>
              <span class="font-black text-white">Roxii Zarate</span>
            </div>
            <span class="text-la97-gray/80">Facebook · Marzo 2026</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
         ESPACIOS DE BANNERS COMERCIALES LATERALES
         (Oculto por defecto; activar cuando un anunciante contrate el espacio)
         =================================================================== -->
  <section aria-label="Banners comerciales"
    class="hidden w-full px-6 lg:px-12 xl:px-16 py-10 bg-la97-navy/55 backdrop-blur-sm text-white border-t border-white/10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div
        class="mk-glass rounded-2xl p-5 border border-dashed border-white/25 flex items-center justify-between gap-4">
        <div>
          <span class="bg-white/10 text-la97-yellow text-xs font-black px-2 py-0.5 rounded uppercase">BANNER
            LATERAL A (480 × 120)</span>
          <div class="text-sm font-black text-white mt-1.5">Espacio Comercial Disponible</div>
        </div>
        <a href="<?php echo esc_url(home_url('/publicita-ya/#formulario-publicidad')); ?>"
          class="text-xs font-black text-la97-yellow hover:underline shrink-0">Consultar →</a>
      </div>
      <div
        class="mk-glass rounded-2xl p-5 border border-dashed border-white/25 flex items-center justify-between gap-4">
        <div>
          <span class="bg-white/10 text-la97-yellow text-xs font-black px-2 py-0.5 rounded uppercase">BANNER
            LATERAL B (480 × 120)</span>
          <div class="text-sm font-black text-white mt-1.5">Espacio Comercial Disponible</div>
        </div>
        <a href="<?php echo esc_url(home_url('/publicita-ya/#formulario-publicidad')); ?>"
          class="text-xs font-black text-la97-yellow hover:underline shrink-0">Consultar →</a>
      </div>
    </div>
  </section>

  <!-- ===================================================================
         CIERRE COMERCIAL: TU PRÓXIMA CAMPAÑA PUEDE EMPEZAR ACÁ
         =================================================================== -->
  <section id="contacto-comercial-home" aria-label="Contacto comercial"
    class="w-full px-6 lg:px-12 xl:px-16 py-14 bg-transparent text-white border-t border-white/10">
    <div
      class="mk-glass rounded-3xl p-8 sm:p-12 border-t-4 border-t-la97-blue shadow-2xl flex flex-col lg:flex-row lg:items-center justify-between gap-8">
      <div class="max-w-2xl space-y-3">
        <span class="bg-la97-blue text-white text-xs font-black px-3 py-1 rounded uppercase tracking-wider">
          CONTACTO COMERCIAL
        </span>
        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
          Tu próxima campaña puede empezar acá.
        </h2>
        <p class="text-sm sm:text-base text-la97-gray leading-relaxed">
          ¿Querés anunciar tu empresa en la radio de mayor audiencia de Mar del Plata? Nuestro equipo comercial puede
          asesorarte y desarrollar una propuesta publicitaria adaptada a los objetivos de tu marca.
        </p>
      </div>

      <div class="shrink-0">
        <a href="<?php echo esc_url(home_url('/publicita-ya/#formulario-publicidad')); ?>" data-la97-nav
          class="inline-flex items-center justify-center gap-2 bg-white hover:bg-sky-300 text-la97-navy text-xs font-black uppercase tracking-wider px-6 py-4 rounded-xl shadow-lg transition-colors w-full sm:w-auto">
          <span>Solicitar propuesta comercial</span> <i class="ph-bold ph-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Official Theme Player & Drawer Controller -->
<script>
  (function () {
    const audio = document.getElementById('la97Audio');
    const topPlayMirrorBtn = document.getElementById('topPlayMirrorBtn');
    const topPlayMirrorText = document.getElementById('topPlayMirrorText');

    if (topPlayMirrorBtn) {
      topPlayMirrorBtn.addEventListener('click', () => {
        const btn = document.getElementById('playToggleBtn');
        if (btn) {
          btn.click();
        } else if (typeof window.la97TogglePlay === 'function') {
          window.la97TogglePlay();
        }
      });
    }
    if (audio && topPlayMirrorText) {
      audio.addEventListener('play', () => { topPlayMirrorText.textContent = 'PAUSAR 97.3'; });
      audio.addEventListener('pause', () => { topPlayMirrorText.textContent = 'EN VIVO 97.3'; });
    }

    // Quantum Audio Tuner Canvas Visualizer (Brand Palette: #F4B70D, #E2051D, #0366A2, #E3E1E3)
    function initQuantumVisualizer() {
      const canvas = document.getElementById('quantumWaveform');
      if (!canvas || canvas._la97Bound) return;
      canvas._la97Bound = true;
      const ctx = canvas.getContext('2d');
      let time = 0;

      function resizeCanvas() {
        if (!canvas.parentElement) return;
        const dpr = window.devicePixelRatio || 1;
        canvas.width = canvas.parentElement.offsetWidth * dpr;
        canvas.height = canvas.parentElement.offsetHeight * dpr;
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      }
      window.addEventListener('resize', resizeCanvas);
      resizeCanvas();

      function renderVisualizer() {
        if (!document.body.contains(canvas)) return;
        const dpr = window.devicePixelRatio || 1;
        const w = canvas.width / dpr;
        const h = canvas.height / dpr;
        const isPlaying = audio ? (!audio.paused && !audio.ended) : false;

        ctx.clearRect(0, 0, w, h);

        const ringRadius = Math.min(h * 0.32, 36);
        const ringCenterX = Math.max(ringRadius + 20, w * 0.19);
        const cy = h * 0.54;
        time += isPlaying ? 0.05 : 0.015;

        ctx.beginPath();
        ctx.arc(ringCenterX, cy, ringRadius, time * 0.8, time * 0.8 + Math.PI * 1.4);
        ctx.strokeStyle = '#F4B70D';
        ctx.lineWidth = 2.8;
        ctx.shadowBlur = 14;
        ctx.shadowColor = '#F4B70D';
        ctx.stroke();

        ctx.beginPath();
        ctx.arc(ringCenterX, cy, ringRadius * 0.72, -time * 1.2, -time * 1.2 + Math.PI * 1.2);
        ctx.strokeStyle = '#E2051D';
        ctx.lineWidth = 2.2;
        ctx.shadowBlur = 11;
        ctx.shadowColor = '#E2051D';
        ctx.stroke();

        ctx.beginPath();
        ctx.arc(ringCenterX, cy, ringRadius * 0.45, time * 1.6, time * 1.6 + Math.PI * 1.5);
        ctx.strokeStyle = '#0366A2';
        ctx.lineWidth = 2.2;
        ctx.shadowBlur = 10;
        ctx.shadowColor = '#0366A2';
        ctx.stroke();

        const startX = ringCenterX + ringRadius + 16;
        const endX = w - 18;
        const bars = 48;
        const step = (endX - startX) / bars;

        if (step > 0) {
          for (let i = 0; i < bars; i++) {
            const x = startX + i * step;
            const progress = i / bars;

            const freq1 = Math.sin(time * 3 + progress * 8);
            const freq2 = Math.cos(time * 2 + progress * 14);
            const freq3 = Math.sin(time * 4 - progress * 4);
            const envelope = Math.sin(progress * Math.PI);

            const amp = (freq1 * 0.5 + freq2 * 0.3 + freq3 * 0.2) * (isPlaying ? 32 : 12) * envelope;
            const col = progress < 0.35 ? '#F4B70D' : (progress < 0.68 ? '#E2051D' : (progress < 0.9 ? '#0366A2' : '#E3E1E3'));

            ctx.beginPath();
            ctx.moveTo(x, cy - amp);
            ctx.lineTo(x, cy + amp);
            ctx.strokeStyle = col;
            ctx.lineWidth = 2;
            ctx.shadowBlur = isPlaying ? 10 : 4;
            ctx.shadowColor = col;
            ctx.stroke();

            if (isPlaying && Math.random() > 0.85) {
              ctx.fillStyle = col;
              ctx.fillRect(x, cy + (Math.random() - 0.5) * amp * 2.3, 2, 2);
            }
          }
        }

        ctx.shadowBlur = 0;
        requestAnimationFrame(renderVisualizer);
      }
      renderVisualizer();
    }

    initQuantumVisualizer();
    window.addEventListener('la97:page-swapped', initQuantumVisualizer);

    // H.T.H. Mar del Plata (Live Clock UTC-3 + Open-Meteo Temp & Humidity)
    let hthCache = null;
    function initHthWidget() {
      const timeEl = document.getElementById('hthTime');
      const tempEl = document.getElementById('hthTemp');
      const humEl = document.getElementById('hthHum');
      if (!timeEl) return;

      function updateClock() {
        const el = document.getElementById('hthTime');
        if (!el) return;
        try {
          const nowStr = new Intl.DateTimeFormat('es-AR', {
            timeZone: 'America/Argentina/Buenos_Aires',
            hour: '2-digit',
            minute: '2-digit',
            hour12: false
          }).format(new Date());
          el.textContent = nowStr + ' hs';
        } catch (e) {
          const d = new Date();
          el.textContent = String(d.getHours()).padStart(2, '0') + ':' + String(d.getMinutes()).padStart(2, '0') + ' hs';
        }
      }
      updateClock();
      if (!window._la97HthClockInterval) {
        window._la97HthClockInterval = setInterval(updateClock, 15000);
      }

      if (hthCache && tempEl && humEl) {
        tempEl.textContent = hthCache.temp + '°C';
        humEl.textContent = hthCache.hum + '% Hum';
        return;
      }

      fetch('https://api.open-meteo.com/v1/forecast?latitude=-38.0055&longitude=-57.5426&current=temperature_2m,relative_humidity_2m&timezone=America%2FArgentina%2FBuenos_Aires')
        .then((r) => r.json())
        .then((data) => {
          if (data && data.current) {
            const t = Math.round(data.current.temperature_2m);
            const h = Math.round(data.current.relative_humidity_2m);
            hthCache = { temp: t, hum: h };
            const tEl = document.getElementById('hthTemp');
            const hEl = document.getElementById('hthHum');
            if (tEl) tEl.textContent = t + '°C';
            if (hEl) hEl.textContent = h + '% Hum';
          }
        })
        .catch(() => {
          if (tempEl) tempEl.textContent = 'MDQ';
          if (humEl) humEl.textContent = 'En vivo';
        });
    }

    initHthWidget();
    window.addEventListener('la97:page-swapped', initHthWidget);
  })();
</script>

<?php get_footer(); ?>