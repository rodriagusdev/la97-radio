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

        <!-- Left 7 Cols: Page 1 + Page 2 Typography & 20,1% Kantar Ibope Stat -->
        <div class="lg:col-span-7 space-y-6">
          <div class="inline-flex flex-wrap items-center gap-2">
            <span class="bg-la97-yellow text-la97-navy text-xs font-black px-3 py-1 rounded uppercase tracking-wider">
              LA 97! FM · 97.3
            </span>
          </div>

          <h1 class="text-4xl sm:text-6xl xl:text-[4.1rem] font-black leading-[1.02] tracking-tight">
            La radio que conecta a Mar del Plata<span class="text-la97-yellow">.</span>
          </h1>

          <p class="text-base sm:text-xl font-bold text-la97-gray leading-relaxed max-w-2xl">
            Música, entretenimiento y compañía. <strong class="text-white font-black">Somos la radio de mayor audiencia
              de Mar del Plata</strong>, con una comunidad que nos elige todos los días, en todas sus plataformas.
          </p>

          <!-- Two Main Areas Entry: ESCUCHANOS EN VIVO / PUBLICITÁ CON NOSOTROS -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1 max-w-2xl">
            <a href="#escuchanos-en-vivo"
              class="mk-glass rounded-2xl p-4 border-l-4 border-l-la97-red hover:border-la97-red transition-all flex items-center justify-between gap-3 group">
              <div>
                <div class="text-[10px] font-black uppercase tracking-widest text-la97-red">PARA OYENTES</div>
                <div class="text-sm font-black text-white uppercase mt-0.5">ESCUCHANOS EN VIVO</div>
              </div>
              <i class="ph-bold ph-headphones text-xl text-la97-yellow group-hover:scale-110 transition-transform"></i>
            </a>
            <a href="#oportunidad-comercial" data-la97-nav
              class="mk-glass rounded-2xl p-4 border-l-4 border-l-la97-yellow hover:border-la97-yellow transition-all flex items-center justify-between gap-3 group">
              <div>
                <div class="text-[10px] font-black uppercase tracking-widest text-la97-yellow">PARA MARCAS</div>
                <div class="text-sm font-black text-white uppercase mt-0.5">PUBLICITÁ CON NOSOTROS</div>
              </div>
              <i class="ph-bold ph-megaphone text-xl text-sky-300 group-hover:scale-110 transition-transform"></i>
            </a>
          </div>

          <!-- Giant 20,1% Block from Page 2 -->
          <div
            class="bg-la97-navy/80 backdrop-blur-md border-2 border-white/20 rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-2xl mt-2">
            <div class="shrink-0">
              <div class="text-6xl sm:text-7xl font-black text-la97-yellow tracking-tighter leading-none">
                20,1<span class="text-4xl sm:text-5xl">%</span>
              </div>
              <div
                class="text-[11px] font-black uppercase tracking-widest text-white mt-2 bg-la97-blue px-2.5 py-1 rounded inline-block">
                SHARE DE AUDIENCIA
              </div>
            </div>
            <div class="border-l-0 sm:border-l-2 border-white/20 sm:pl-6 space-y-2">
              <p class="text-sm sm:text-base font-bold text-white leading-snug">
                de quienes escuchan <span class="text-la97-yellow font-black">RADIO</span> nos eligen en Mar del Plata.
                El resto se
                divide en más de 70 emisoras.
              </p>
              <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
                La cercanía es nuestra fortaleza y celebramos la pasión por la música y los buenos contenidos.
              </p>
              <div class="text-[10px] font-bold uppercase tracking-wider text-la97-gray/80 pt-1">
                Fuente: Kantar Ibope Media — Medición 2024 (consultora líder en Latinoamérica)
              </div>
            </div>
          </div>
        </div>

        <!-- Right 5 Cols: Área 1 — ESCUCHANOS EN VIVO -->
        <div id="escuchanos-en-vivo" class="lg:col-span-5 scroll-mt-24">
          <div class="mk-glass text-white rounded-3xl p-6 sm:p-7 shadow-2xl relative overflow-hidden space-y-5">
            <!-- 1. Top Status Strip -->
            <div class="flex items-center justify-between gap-2 pb-4 border-b border-white/10">
              <span
                class="inline-flex items-center gap-2 bg-la97-red text-white text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow">
                <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                ESCUCHANOS EN VIVO • HD
              </span>
              <span id="mkLiveClock" class="text-xs font-mono font-black text-la97-yellow">97.3 MHz • MDQ</span>
            </div>

            <!-- 2. Now Playing Show Info -->
            <div class="flex items-center gap-4">
              <img id="la97NowPlayingImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg" alt="Ranking 40 x 40"
                class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl object-cover border-2 border-la97-yellow shadow-lg shrink-0">
              <div class="min-w-0 flex-1">
                <div class="text-[11px] font-black uppercase tracking-widest text-la97-yellow">AHORA AL AIRE EN LA 97
                </div>
                <div id="la97NowPlayingTitle"
                  class="text-xl sm:text-2xl font-black text-white leading-tight mt-0.5 truncate">
                  Ranking 40 x 40
                </div>
                <div id="la97NowPlayingSub" class="text-xs font-bold text-la97-gray mt-0.5">
                  Christian Carballo y Eugenia Martinez
                </div>
                <div id="playerStatus" class="text-[11px] font-extrabold text-la97-yellow mt-1">
                  Listo para reproducir
                </div>
              </div>
            </div>

            <!-- 3. Quantum Audio Tuner / On-Air Visualizer -->
            <div
              class="relative w-full h-32 flex items-center justify-center overflow-hidden rounded-2xl bg-[#101824]/90 border border-la97-blue/50 shadow-inner">
              <span
                class="absolute top-2.5 left-3.5 text-[10px] font-mono font-bold tracking-[0.18em] uppercase text-la97-yellow/85 pointer-events-none z-10">
                AUDIO TUNER / ON-AIR • 97.3 MHz
              </span>
              <canvas id="quantumWaveform" class="w-full h-full block"></canvas>
            </div>

            <!-- 4. Unified Transport & Volume Control Dock -->
            <div
              class="bg-black/30 border border-white/10 rounded-2xl p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
              <div class="flex items-center gap-3.5">
                <button type="button" id="playToggleBtn" aria-label="Reproducir o pausar radio en vivo"
                  class="w-12 h-12 rounded-full bg-la97-red hover:bg-la97-yellow hover:text-la97-navy text-white flex items-center justify-center shadow-xl transition-all cursor-pointer shrink-0">
                  <svg id="playIcon" class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
                <div>
                  <div id="playBtnText" class="text-xs font-black uppercase tracking-wider text-white">ESCUCHANOS EN
                    VIVO</div>
                  <div class="text-[11px] text-la97-gray">Sonido Digital HD • 24 hs</div>
                </div>
              </div>

              <div class="flex items-center gap-2.5 sm:w-48 bg-white/5 rounded-xl px-3 py-2 border border-white/10">
                <span class="text-[10px] font-black uppercase tracking-wider text-la97-gray">VOL</span>
                <input id="volumeSlider" type="range" min="0" max="100" value="85" aria-label="Control de volumen"
                  class="la97-volume-slider flex-1 min-w-0">
                <button type="button" id="muteBtn" aria-label="Silenciar audio"
                  class="px-2 py-1 rounded bg-white/10 hover:bg-la97-red text-white text-[10px] font-black uppercase transition-colors cursor-pointer shrink-0">
                  MUTE
                </button>
              </div>
              <div class="hidden" id="waveform" aria-hidden="true"></div>
            </div>

            <!-- 4b. Tiempo Ahora en Mar del Plata (Hora, Temperatura y Humedad) -->
            <div
              class="bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 flex flex-wrap items-center justify-between gap-2 text-[11px]">
              <div class="flex flex-wrap items-center gap-3 font-bold text-white">
                <span
                  class="bg-la97-blue/40 text-sky-300 font-black px-2 py-0.5 rounded uppercase tracking-wider text-[10px]">TIEMPO
                  AHORA</span>
                <span class="inline-flex items-center gap-1 font-mono text-la97-yellow"><i class="ph-bold ph-clock"></i>
                  <span id="hthTime">--:-- hs</span></span>
                <span class="inline-flex items-center gap-1"><i class="ph-bold ph-thermometer-simple text-la97-red"></i>
                  <span id="hthTemp">--°C</span></span>
                <span class="inline-flex items-center gap-1 text-la97-gray"><i class="ph-bold ph-drop text-sky-300"></i>
                  <span id="hthHum">--% Hum</span></span>
              </div>
              <span class="text-[10px] font-bold uppercase tracking-wider text-la97-gray/80">
                Mar del Plata
              </span>
            </div>

            <!-- 5. Listener Message CTA (Strictly Oyentes) -->
            <div class="pt-1 flex flex-wrap items-center justify-between gap-3 text-xs font-black text-white">
              <span class="text-la97-gray">¿Querés salir al aire o pedir tu tema?</span>
              <a href="https://wa.me/5492236150000" target="_blank" rel="noopener"
                class="inline-flex items-center gap-1.5 bg-la97-yellow text-la97-navy px-3.5 py-2 rounded-xl hover:bg-white transition-colors shrink-0">
                <i class="ph-bold ph-whatsapp-logo text-base"></i><span>MENSAJES 223 615-0000</span>
              </a>
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
        class="mk-glass rounded-2xl p-5 sm:px-8 sm:py-6 border border-dashed border-la97-yellow/50 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4 text-center md:text-left">
          <span
            class="bg-la97-yellow text-la97-navy text-[10px] font-black px-2.5 py-1 rounded uppercase tracking-wider shrink-0">
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
        <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>"
          class="bg-la97-blue hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black uppercase tracking-wider px-5 py-2.5 rounded-xl transition-colors shrink-0">
          Publicitar aquí →
        </a>
      </div>
    </section>

    <!-- ===================================================================
         COMUNIDAD INSTAGRAM (@la97siempre) — LA 97! SIEMPRE ESTÁ PASANDO ALGO
         =================================================================== -->
    <section id="novedades-instagram"
      class="w-full px-6 lg:px-12 xl:px-16 py-14 bg-la97-navy/55 backdrop-blur-sm text-white">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div>
          <span
            class="inline-flex items-center gap-2 bg-la97-red text-white text-[11px] font-black px-3 py-1 rounded-full uppercase tracking-wider">
            COMUNIDAD EN INSTAGRAM • @LA97SIEMPRE
          </span>
          <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mt-3">
            La 97! <span class="text-la97-yellow">Siempre está pasando algo.</span>
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
          <a href="https://x.com/" target="_blank" rel="noopener"
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
            class="lg:col-span-7 group relative mk-glass rounded-3xl p-5 sm:p-6 border border-white/15 hover:border-la97-yellow/80 transition-all flex flex-col sm:flex-row items-center gap-6 overflow-hidden">
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
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-1.jpg" alt="Publicación de @la97siempre"
                class="w-full h-full object-cover sepia-[.12] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            </div>

            <div class="relative z-10 flex flex-col justify-between py-1 pr-2 sm:pr-12 h-full">
              <div class="space-y-2.5">
                <div
                  class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider text-la97-yellow">
                  <i class="ph-fill ph-vinyl-record text-base"></i>
                  <span>97.3 MHz • EN EL AIRE</span>
                </div>
                <h3
                  class="text-xl sm:text-2xl font-black text-white leading-tight group-hover:text-la97-yellow transition-colors">
                  Todo lo que suena y pasa en La 97!
                </h3>
                <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
                  La radio más escuchada de Mar del Plata. Clásicos, lanzamientos, entrevistas y la compañía de siempre
                  en el dial y en redes.
                </p>
              </div>
              <div class="pt-4 mt-4 border-t border-white/10 flex items-center justify-between text-xs font-black">
                <span class="text-sky-300">@la97siempre</span>
                <span class="inline-flex items-center gap-1.5 text-la97-yellow">Ver publicación <i
                    class="ph-bold ph-arrow-up-right"></i></span>
              </div>
            </div>
          </a>

          <!-- 2. Studio Reel Card (Full-bleed visual with warm retro framing) -->
          <a href="https://www.instagram.com/la97siempre/reel/Df5SUTypLp6/?hl=en" target="_blank" rel="noopener"
            class="lg:col-span-5 group relative rounded-3xl overflow-hidden mk-glass border border-white/15 hover:border-la97-yellow/80 transition-all min-h-[260px] flex flex-col justify-end">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-5.jpg"
              alt="Detrás del Aire en La 97! con Eugenia Martinez y Christian Carballo"
              class="absolute inset-0 w-full h-full object-cover sepia-[.12] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-la97-navy via-la97-navy/55 to-black/15"></div>
            <div class="absolute top-4 right-4 flex items-center justify-end">
              <span
                class="w-9 h-9 rounded-full bg-la97-yellow text-la97-navy flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                <i class="ph-fill ph-play text-xs"></i>
              </span>
            </div>
            <div class="relative z-10 p-6 space-y-1.5">
              <div class="text-[11px] font-black uppercase tracking-wider text-la97-yellow">Detrás del Aire • La 97!
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
            class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-la97-yellow/80 hover:-rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
            <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-2.jpg" alt="Mención histórica a La 97! en Alfajores Marplatenses"
                class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
              <span
                class="absolute top-2.5 right-2.5 w-7 h-7 rounded-full bg-black/70 backdrop-blur-md text-la97-yellow flex items-center justify-center border border-white/15">
                <i class="ph-fill ph-play text-xs"></i>
              </span>
            </div>
            <div class="px-1 space-y-1">
              <div
                class="flex items-center justify-between text-[10px] font-black uppercase tracking-wider text-la97-yellow">
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
            class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-la97-yellow/80 hover:rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
            <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-3.jpg" alt="Publicación de @la97siempre con @tutedelacroix"
                class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="px-1 space-y-1">
              <div
                class="flex items-center justify-between text-[10px] font-black uppercase tracking-wider text-sky-300">
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
            class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-la97-yellow/80 hover:-rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
            <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-4.jpg" alt="La 97! en Mar del Plata"
                class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="px-1 space-y-1">
              <div
                class="flex items-center justify-between text-[10px] font-black uppercase tracking-wider text-sky-300">
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
            class="group relative bg-white/[0.04] backdrop-blur-md rounded-2xl p-3 pb-4 border border-white/15 hover:border-la97-yellow/80 hover:rotate-1 transition-all duration-300 flex flex-col justify-between gap-3 shadow-lg">
            <div class="relative aspect-[4/5] rounded-xl overflow-hidden border border-white/10">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-6.jpg" alt="Taylor Swift en los CMA Awards - La 97!"
                class="w-full h-full object-cover sepia-[.15] group-hover:sepia-0 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="px-1 space-y-1">
              <div
                class="flex items-center justify-between text-[10px] font-black uppercase tracking-wider text-la97-yellow">
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
         PROGRAMACIÓN DESTACADA (Acceso directo a la grilla semanal)
         =================================================================== -->
    <section id="programacion-destacada" aria-label="Programación diaria destacada"
      class="w-full px-6 lg:px-12 xl:px-16 py-12 bg-transparent text-white">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
        <div>
          <span class="bg-la97-red text-white text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
            PROGRAMACIÓN DIARIA • LUNES A VIERNES
          </span>
          <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mt-3">
            Nuestros programas <span class="text-la97-yellow">al aire</span>
          </h2>
          <p class="text-sm text-la97-gray mt-1">
            Contenido y realización 100% local las 24 hs desde Mar del Plata.
          </p>
        </div>
        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="inline-flex items-center gap-2 bg-la97-yellow hover:bg-white text-la97-navy text-xs font-black uppercase tracking-wider px-5 py-3 rounded-xl shadow-lg transition-colors shrink-0">
          <span>Ver grilla completa (Lunes a Domingo)</span> <i class="ph-bold ph-arrow-right"></i>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-la97-yellow/70 transition-all">
          <div class="flex items-center gap-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/bimbambum.jpg" alt="Bim Bam Bum"
              class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
            <div>
              <div class="text-[11px] font-black text-la97-yellow">06 A 09 HS</div>
              <h3 class="text-sm font-black text-white group-hover:text-la97-yellow transition-colors">Bim Bam Bum</h3>
              <div class="text-[11px] text-sky-300 font-bold">Marina Gorosito</div>
            </div>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-la97-yellow/70 transition-all">
          <div class="flex items-center gap-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg" alt="Ranking 40 x 40"
              class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
            <div>
              <div class="text-[11px] font-black text-la97-yellow">09 A 13 HS</div>
              <h3 class="text-sm font-black text-white group-hover:text-la97-yellow transition-colors">Ranking 40 x 40
              </h3>
              <div class="text-[11px] text-sky-300 font-bold">Martinez / Carballo</div>
            </div>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-la97-yellow/70 transition-all">
          <div class="flex items-center gap-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/musicaexpress.jpg" alt="Música Express"
              class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
            <div>
              <div class="text-[11px] font-black text-la97-yellow">13 A 18 HS</div>
              <h3 class="text-sm font-black text-white group-hover:text-la97-yellow transition-colors">Música Express
              </h3>
              <div class="text-[11px] text-sky-300 font-bold">Gerardo Reboredo</div>
            </div>
          </div>
        </a>

        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="group mk-glass rounded-2xl p-4 flex flex-col gap-3 hover:border-la97-yellow/70 transition-all">
          <div class="flex items-center gap-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/elregreso.jpg" alt="El Regreso - Top Ten - La Noche"
              class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0">
            <div>
              <div class="text-[11px] font-black text-la97-yellow">18 A 24 HS</div>
              <h3 class="text-sm font-black text-white group-hover:text-la97-yellow transition-colors">El Regreso • Top
                Ten • La Noche</h3>
              <div class="text-[11px] text-sky-300 font-bold">Pablo Larsen</div>
            </div>
          </div>
        </a>
      </div>
    </section>

    <!-- ===================================================================
         SECCIÓN COMERCIAL: AUDIENCIA DE VALOR & ESTRATEGIA OMNICANAL
         =================================================================== -->
    <section id="oportunidad-comercial" aria-label="Propuesta comercial para anunciantes"
      class="w-full px-6 lg:px-12 xl:px-16 py-12 bg-transparent text-white">
      <div class="mk-glass rounded-3xl p-8 sm:p-10 border-t-4 border-t-la97-yellow shadow-2xl space-y-8">
        <!-- Header + 4 Official Stats -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
          <div class="max-w-2xl">
            <span
              class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
              PUBLICITÁ CON NOSOTROS
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mt-3">
              Una audiencia que importa. <span class="text-la97-yellow">Conectá tu marca.</span>
            </h2>
            <p class="text-sm text-la97-gray mt-2 leading-relaxed">
              La audiencia no es solamente un número: es la posibilidad de conectar tu empresa con miles de personas
              todos los días en Mar del Plata.
            </p>
          </div>
          <div class="flex flex-wrap items-center gap-3 shrink-0">
            <a href="https://wa.me/5492235211023" target="_blank" rel="noopener"
              class="inline-flex items-center gap-2 bg-la97-blue hover:bg-white hover:text-la97-navy text-white text-xs font-black uppercase tracking-wider px-4 py-3 rounded-xl transition-colors">
              <i class="ph-bold ph-whatsapp-logo text-base"></i><span>Comercial 223 521-1023</span>
            </a>
            <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
              class="inline-flex items-center gap-2 bg-la97-yellow hover:bg-white text-la97-navy text-xs font-black uppercase tracking-wider px-5 py-3 rounded-xl shadow-lg transition-colors">
              <span>Anunciá en La 97! →</span>
            </a>
          </div>
        </div>

        <!-- 5 Key Official Indicators -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
          <div class="bg-black/30 border border-white/10 rounded-2xl p-5">
            <div class="text-3xl sm:text-4xl font-black text-la97-yellow leading-none">20,1%</div>
            <div class="text-xs font-black uppercase text-white mt-2">Share de audiencia</div>
            <div class="text-[11px] text-la97-gray mt-0.5">Kantar Ibope Media (2024)</div>
          </div>
          <div class="bg-black/30 border border-white/10 rounded-2xl p-5">
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">24 hs.</div>
            <div class="text-xs font-black uppercase text-la97-yellow mt-2">Programación propia</div>
            <div class="text-[11px] text-la97-gray mt-0.5">Aire FM 97.3 HD & Streaming</div>
          </div>
          <div class="bg-black/30 border border-white/10 rounded-2xl p-5">
            <div class="text-3xl sm:text-4xl font-black text-white leading-none">36 años</div>
            <div class="text-xs font-black uppercase text-sky-300 mt-2">De trayectoria</div>
            <div class="text-[11px] text-la97-gray mt-0.5">Acompañando a MDQ en 2026</div>
          </div>
          <div class="bg-black/30 border border-white/10 rounded-2xl p-5">
            <div class="text-3xl sm:text-4xl font-black text-la97-yellow leading-none">+80.000</div>
            <div class="text-xs font-black uppercase text-white mt-2">Seguidores en Instagram</div>
            <div class="text-[11px] text-la97-gray mt-0.5">@la97siempre</div>
          </div>
          <div class="bg-black/30 border border-white/10 rounded-2xl p-5 col-span-2 md:col-span-1">
            <div class="text-3xl sm:text-4xl font-black text-sky-300 leading-none">+70.000</div>
            <div class="text-xs font-black uppercase text-white mt-2">Seguidores en Facebook</div>
            <div class="text-[11px] text-la97-gray mt-0.5">Comunidad oficial</div>
          </div>
        </div>

        <!-- Ficha Técnica Oficial (Respaldo Metodológico Unificado) -->
        <details class="bg-black/25 border border-white/10 rounded-2xl px-5 py-3.5 text-xs text-la97-gray">
          <summary
            class="cursor-pointer font-black uppercase tracking-wider text-la97-yellow flex items-center justify-between">
            <span>Ficha técnica y respaldo metodológico de datos</span>
            <i class="ph-bold ph-caret-down"></i>
          </summary>
          <div class="mt-3 pt-3 border-t border-white/10 grid grid-cols-1 md:grid-cols-3 gap-4 leading-relaxed">
            <div>
              <strong class="text-white block">Share de audiencia (20,1%)</strong>
              Participación sobre el total de audiencia radial medida en Mar del Plata. Fuente: <em>Kantar Ibope Media —
                Medición 2024</em>.
            </div>
            <div>
              <strong class="text-white block">Comunidad digital (+80.000 IG / +70.000 FB)</strong>
              Más de 80.000 seguidores en Instagram (<em>@la97siempre</em>) y más de 70.000 seguidores en Facebook.
            </div>
            <div>
              <strong class="text-white block">Perfil de público (35 años / AB C1 C2)</strong>
              Estudio de consumo y hábitos de escucha realizado por el <em>Observatorio de la Universidad FASTA y Kantar
                Ibope Media</em>.
            </div>
          </div>
        </details>

      </div>
    </section>

    <!-- ===================================================================
         COBERTURA REGIONAL, PILARES & PRIME TIME (Page 3 of Media Kit — Glass Bento)
         =================================================================== -->
    <section id="cobertura-alcance" aria-label="Cobertura regional y liderazgo en prime time"
      class="w-full px-6 lg:px-12 xl:px-16 py-10 bg-transparent text-white">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

        <!-- Left 6 Cols: Unified Cobertura Regional -->
        <div
          class="lg:col-span-6 mk-glass rounded-3xl p-7 sm:p-8 flex flex-col justify-between gap-6 border border-white/15 bg-gradient-to-br from-la97-navy/95 via-la97-navy/85 to-la97-blue/20">
          <div>
            <span class="text-xs font-black uppercase tracking-widest text-la97-yellow">DE MAR DEL PLATA A TODA LA REGIÓN</span>
            <h2 class="text-3xl sm:text-4xl font-black tracking-tight mt-2 leading-tight">
              Una radio de Mar del Plata con <span class="text-la97-yellow">alcance regional.</span>
            </h2>
            <p class="text-xs sm:text-sm text-la97-gray leading-relaxed mt-3">
              Desde nuestros estudios en Mar del Plata, llevamos música, información y entretenimiento a distintos puntos de la costa y el sudeste bonaerense.
            </p>
          </div>

          <!-- Clean Simple City List -->
          <div class="pt-4 border-t border-white/10 space-y-2.5">
            <div class="text-[11px] font-mono font-bold uppercase tracking-wider text-sky-300">Llegamos a comunidades de:</div>
            <p class="text-xs sm:text-sm font-bold text-white leading-relaxed">
              Mar del Plata · Batán · Chapadmalal · Miramar · Balcarce · Santa Clara del Mar · Mar Chiquita · Coronel Vidal · Lobería.
            </p>
          </div>
        </div>

        <!-- Right 6 Cols: 3 Glass Pillars + Prime Time Card -->
        <div class="lg:col-span-6 flex flex-col justify-between gap-5">
          <!-- 3 Sleek Glass Pillars (100% / 24 hs. / HD) -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="mk-glass rounded-2xl p-6 text-center border-t-4 border-t-la97-red flex flex-col justify-center">
              <div class="text-3xl sm:text-4xl font-black text-white tracking-tight">100%</div>
              <div class="text-xs text-la97-gray mt-1">programación <strong
                  class="font-black uppercase block text-la97-yellow mt-0.5">PROPIA</strong></div>
            </div>
            <div
              class="mk-glass rounded-2xl p-6 text-center border-t-4 border-t-la97-yellow flex flex-col justify-center">
              <div class="text-3xl sm:text-4xl font-black text-white tracking-tight">24 hs.</div>
              <div class="text-xs text-la97-gray mt-1">en <strong
                  class="font-black uppercase block text-la97-yellow mt-0.5">VIVO</strong></div>
            </div>
            <div
              class="mk-glass rounded-2xl p-6 text-center border-t-4 border-t-la97-blue flex flex-col justify-center">
              <div class="text-3xl sm:text-4xl font-black text-white tracking-tight">HD</div>
              <div class="text-xs text-la97-gray mt-1">transmisión de <strong
                  class="font-black uppercase block text-la97-yellow mt-0.5">SONIDO DIGITAL</strong></div>
            </div>
          </div>

          <!-- 1ros. en Prime Time Card -->
          <div
            class="mk-glass rounded-3xl p-7 sm:p-8 flex-1 bg-gradient-to-r from-la97-red/35 via-la97-navy/85 to-la97-blue/40 border border-la97-red/40 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
              <span
                class="inline-block bg-la97-yellow text-la97-navy text-[10px] font-black uppercase px-2.5 py-1 rounded mb-3">
                LIDERAZGO EN FRANJA CENTRAL
              </span>
              <h3 class="text-2xl sm:text-4xl font-black text-white leading-none">
                1ros. en prime time.
              </h3>
              <p class="text-sm sm:text-base font-bold text-la97-gray mt-2.5">
                Con la franja de mayor audiencia de <span
                  class="bg-la97-red text-white font-black px-2.5 py-0.5 rounded ml-1">6 a 17 hs.</span>
              </p>
            </div>
            <div class="shrink-0 text-right hidden sm:block">
              <div class="text-4xl sm:text-5xl font-black text-la97-yellow leading-none">06–17</div>
              <div class="text-[10px] font-mono uppercase tracking-widest text-la97-gray mt-1.5">HORAS PICO</div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ===================================================================
         PERFIL DE PÚBLICO (Page 4 of Media Kit — Glass Bento)
         =================================================================== -->
    <section id="publico-perfil" aria-label="Perfil de audiencia"
      class="w-full px-6 lg:px-12 xl:px-16 pb-12 pt-2 bg-transparent text-white">
      <div class="mk-glass rounded-3xl overflow-hidden shadow-2xl grid grid-cols-1 lg:grid-cols-12">

        <!-- Left 4 Cols: Público Summary + Gender Split -->
        <div
          class="lg:col-span-4 p-7 sm:p-8 bg-white/5 border-b lg:border-b-0 lg:border-r border-white/10 flex flex-col justify-between">
          <div>
            <span class="text-xs font-black uppercase tracking-widest text-la97-red">AUDIENCIA COMPROBADA</span>
            <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight uppercase mt-1">
              PÚBLICO
            </h2>

            <div class="grid grid-cols-2 gap-4 mt-6">
              <div class="bg-black/25 rounded-2xl p-4 border border-white/10">
                <div class="text-[10px] font-black uppercase text-la97-gray leading-tight">PROMEDIO<br>DE EDAD</div>
                <div class="text-4xl font-black text-white leading-none mt-2">
                  35 <span class="text-sm font-bold text-la97-gray">años</span>
                </div>
              </div>
              <div class="bg-black/25 rounded-2xl p-4 border border-white/10">
                <div class="text-[10px] font-black uppercase text-la97-gray leading-tight">SEGMENTO<br>SOCIOECON.</div>
                <div class="text-xl sm:text-2xl font-black text-white tracking-tight mt-2.5">
                  AB C1 C2
                </div>
              </div>
            </div>

            <!-- Gender Split Bar -->
            <div class="mt-6">
              <div class="flex items-center justify-between text-xs font-black uppercase tracking-wider mb-2">
                <span class="text-white">Mujeres 51%</span>
                <span class="text-sky-300">Hombres 49%</span>
              </div>
              <div class="w-full h-3 rounded-full overflow-hidden flex bg-white/10">
                <div class="bg-la97-red h-full" style="width: 51%"></div>
                <div class="bg-sky-400 h-full" style="width: 49%"></div>
              </div>
            </div>
          </div>

          <p class="text-[11px] text-la97-gray/80 mt-6 pt-4 border-t border-white/10 leading-relaxed">
            Datos obtenidos por el Observatorio de la Universidad FASTA y KANTAR IBOPE MEDIA. <span class="text-white/90">Los porcentajes de hábitos de escucha corresponden a preguntas de respuesta múltiple (por eso superan el 100%).</span>
          </p>
        </div>

        <!-- Middle 4 Cols: donde... -->
        <div class="lg:col-span-4 p-7 sm:p-8 border-b lg:border-b-0 lg:border-r border-white/10">
          <div class="flex flex-wrap items-center justify-between gap-2 mb-5">
            <h3 class="text-xl sm:text-2xl font-black text-white">¿Dónde nos escuchan?</h3>
            <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-la97-gray bg-white/5 border border-white/10 px-2.5 py-1 rounded-full">Respuesta múltiple</span>
          </div>
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

        <!-- Right 4 Cols: en... -->
        <div class="lg:col-span-4 p-7 sm:p-8">
          <div class="flex flex-wrap items-center justify-between gap-2 mb-5">
            <h3 class="text-xl sm:text-2xl font-black text-sky-300">¿En qué dispositivos?</h3>
            <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-la97-gray bg-white/5 border border-white/10 px-2.5 py-1 rounded-full">Respuesta múltiple</span>
          </div>
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
    </section>

    <!-- ===================================================================
         SECTION 5: PRODUCTOS PUBLICITARIOS — SOLUCIONES COMERCIALES
         =================================================================== -->
    <section id="productos-comerciales" class="w-full px-6 lg:px-12 xl:px-16 py-16 bg-transparent text-white">

      <!-- Clean Modern Header -->
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-8">
        <div class="max-w-3xl">
          <span class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
            PRODUCTOS PUBLICITARIOS
          </span>
          <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-3">
            Hacé que tu marca sea parte de <span class="text-la97-yellow">La 97!</span>
          </h2>
          <p class="text-sm sm:text-base text-la97-gray mt-2 leading-relaxed">
            Llegá a nuestra audiencia con propuestas publicitarias pensadas para conectar marcas con personas.
            Traducimos cada formato en resultados concretos para tu empresa.
          </p>
        </div>

        <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
          class="inline-flex items-center justify-center gap-2 bg-la97-yellow hover:bg-white text-la97-navy text-xs font-black uppercase tracking-wider px-6 py-4 rounded-xl shadow-lg transition-colors shrink-0">
          <span>SOLICITÁ UNA PROPUESTA COMERCIAL</span> <i class="ph-bold ph-arrow-right"></i>
        </a>
      </div>

      <!-- Featured Product: Campañas Integrales (360°) -->
      <div
        class="mb-5 mk-glass rounded-3xl p-7 sm:p-8 bg-gradient-to-r from-la97-red/25 via-la97-navy/90 to-la97-blue/30 border-2 border-la97-yellow/60 shadow-2xl flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        <div class="space-y-2.5 max-w-3xl">
          <span
            class="inline-block bg-la97-yellow text-la97-navy text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider">
            SOLUCIÓN INTEGRAL • MAYOR IMPACTO
          </span>
          <h3 class="text-2xl sm:text-3xl font-black text-white">
            Campañas Integrales a medida
          </h3>
          <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
            Combinamos aire FM, contenido en redes sociales, acciones presenciales con móviles y auspicios exclusivos en
            una misma estrategia. Pensado para empresas que buscan posicionamiento sostenido y alto retorno, más allá de
            segundos sueltos de tanda.
          </p>
        </div>
        <div class="shrink-0">
          <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
            class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black uppercase tracking-wider px-5 py-3.5 rounded-xl border border-white/20 transition-colors w-full lg:w-auto">
            <span>Armar campaña 360°</span> <i class="ph-bold ph-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- 5 Core Commercial Solutions (2 Wide + 3 Medium) -->
      <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-4">

        <!-- 1. Publicidad en radio -->
        <div
          class="md:col-span-3 lg:col-span-6 mk-glass rounded-3xl p-7 bg-gradient-to-br from-la97-blue/30 via-la97-navy/85 to-la97-navy/95 border border-la97-blue/50 hover:border-la97-yellow/70 transition-all group flex flex-col justify-between gap-5">
          <div class="flex items-center justify-between">
            <span
              class="bg-la97-blue text-white text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">ALTA
              FRECUENCIA • AIRE FM</span>
            <div class="w-11 h-11 rounded-xl bg-white/10 text-sky-300 flex items-center justify-center"><i
                class="ph-bold ph-broadcast text-xl"></i></div>
          </div>
          <div>
            <h3 class="text-2xl font-black text-white group-hover:text-la97-yellow transition-colors">Publicidad en radio</h3>
            <p class="text-xs sm:text-sm font-bold text-sky-300 mt-1.5">
              Tu marca presente en la vida cotidiana de miles de personas.
            </p>
            <p class="text-xs sm:text-sm text-la97-gray mt-2 leading-relaxed">
              Desarrollamos campañas de publicidad radial mediante spots comerciales, menciones, aperturas de tanda y presencia en diferentes programas y franjas horarias.
            </p>
            <p class="text-xs sm:text-sm text-la97-gray mt-2 leading-relaxed">
              Adaptamos cada propuesta a los objetivos de comunicación, el público y la frecuencia que necesita tu empresa.
            </p>
          </div>
          <div class="flex flex-wrap gap-1.5 pt-2 border-t border-white/10 text-[11px] font-bold text-la97-gray">
            <span class="bg-white/5 px-2.5 py-1 rounded-md">Tanda</span>
            <span class="bg-white/5 px-2.5 py-1 rounded-md">Apertura de tanda</span>
            <span class="bg-white/5 px-2.5 py-1 rounded-md">Spots rotativos</span>
          </div>
        </div>

        <!-- 2. PNT y contenidos de marca -->
        <div
          class="md:col-span-3 lg:col-span-6 mk-glass rounded-3xl p-7 bg-gradient-to-br from-la97-red/25 via-la97-navy/85 to-la97-navy/95 border border-la97-red/40 hover:border-la97-yellow/70 transition-all group flex flex-col justify-between gap-5">
          <div class="flex items-center justify-between">
            <span
              class="bg-la97-red text-white text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider">CONFIANZA
              • EN VIVO</span>
            <div class="w-11 h-11 rounded-xl bg-white/10 text-la97-yellow flex items-center justify-center"><i
                class="ph-bold ph-microphone-stage text-xl"></i></div>
          </div>
          <div>
            <h3 class="text-2xl font-black text-white group-hover:text-la97-yellow transition-colors">PNT y contenidos
              de marca</h3>
            <p class="text-xs sm:text-sm text-la97-gray mt-2 leading-relaxed">
              Integración orgánica de tu marca en la voz de nuestros conductores (Publicidad No Tradicional), notas
              comerciales, entrevistas y propuestas especiales para generar cercanía y credibilidad real.
            </p>
          </div>
          <div class="flex flex-wrap gap-1.5 pt-2 border-t border-white/10 text-[11px] font-bold text-la97-gray">
            <span class="bg-white/5 px-2.5 py-1 rounded-md">PNT en vivo</span>
            <span class="bg-white/5 px-2.5 py-1 rounded-md">Notas comerciales</span>
            <span class="bg-white/5 px-2.5 py-1 rounded-md">Entrevistas</span>
          </div>
        </div>

        <!-- 3. Auspicios exclusivos -->
        <div
          class="md:col-span-2 lg:col-span-4 mk-glass rounded-2xl p-6 hover:border-la97-yellow/60 transition-all group flex flex-col justify-between gap-4">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-la97-blue/25 text-sky-300 flex items-center justify-center"><i
                class="ph-bold ph-crown text-lg"></i></div>
            <span class="text-[10px] font-mono font-bold uppercase text-sky-300">POSICIONAMIENTO</span>
          </div>
          <div>
            <h3 class="text-lg font-black text-white group-hover:text-la97-yellow transition-colors">Auspicios
              exclusivos</h3>
            <p class="text-xs text-la97-gray mt-1.5 leading-relaxed">
              Tu empresa acompaña programas, rankings (<strong class="text-white">Top Ten</strong>, <strong
                class="text-white">Ranking 40x40</strong>, <strong class="text-white">Puesto N°1</strong>) y noticias dentro de la programación.
            </p>
          </div>
        </div>

        <!-- 4. Redes sociales y digital -->
        <div
          class="md:col-span-2 lg:col-span-4 mk-glass rounded-2xl p-6 hover:border-la97-yellow/60 transition-all group flex flex-col justify-between gap-4">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-la97-yellow/20 text-la97-yellow flex items-center justify-center"><i
                class="ph-bold ph-instagram-logo text-lg"></i></div>
            <span class="text-[10px] font-mono font-bold uppercase text-la97-yellow">IG +80K • FB +70K</span>
          </div>
          <div>
            <h3 class="text-lg font-black text-white group-hover:text-la97-yellow transition-colors">Redes sociales</h3>
            <p class="text-xs text-la97-gray mt-1.5 leading-relaxed">
              Publicaciones, reels, historias, sorteos y acciones de comunicación en Instagram (<code
                class="text-white">@la97siempre</code>), Facebook y Streaming HD 24 hs.
            </p>
          </div>
        </div>

        <!-- 5. Experiencias y acciones especiales -->
        <div
          class="md:col-span-2 lg:col-span-4 mk-glass rounded-2xl p-6 hover:border-la97-yellow/60 transition-all group flex flex-col justify-between gap-4">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-la97-red/20 text-white flex items-center justify-center"><i
                class="ph-bold ph-van text-lg"></i></div>
            <span class="text-[10px] font-mono font-bold uppercase text-la97-gray/75">TERRITORIAL</span>
          </div>
          <div>
            <h3 class="text-lg font-black text-white group-hover:text-la97-yellow transition-colors">Experiencias y
              acciones especiales</h3>
            <p class="text-xs text-la97-gray mt-1.5 leading-relaxed">
              Móviles en vivo en playas, paradores, teatros y eventos de Mar del Plata, activaciones presenciales,
              líneas de juego y sorteos con participación directa de oyentes.
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- ===================================================================
         SECTION 6: TESTIMONIOS REALES & NUBE CONCEPTUAL (Page 11 of Media Kit)
         =================================================================== -->
    <section
      class="w-full px-6 lg:px-12 xl:px-16 py-16 bg-black/35 backdrop-blur-sm text-white border-t border-white/10">
      <div class="max-w-4xl mx-auto text-center space-y-3">
        <span class="text-xs font-black uppercase tracking-widest text-la97-yellow">
          TESTIMONIOS REALES
        </span>
        <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
          Las marcas nos eligen. <span class="text-la97-yellow">La audiencia nos acompaña.</span>
        </h2>
        <!-- Listener Quote Pills (Modern Editorial Strip) -->
        <div class="py-5 flex flex-wrap items-center justify-center gap-2.5">
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-la97-yellow">“compañía”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-white">“la mejor”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-sky-300">“excelentes”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-la97-yellow">“buena onda”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-white">“expertos”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-sky-300">“genios”</span>
          <span class="bg-white/10 border border-white/15 px-4 py-2 rounded-full text-xs sm:text-sm font-black text-la97-yellow">“12 horas diarias”</span>
        </div>
        <p class="text-sm font-extrabold text-white">Sus palabras nos representan. Sus mensajes son los que nos
          impulsan.</p>
      </div>

      <!-- 1. ANUNCIANTES (Mayor visibilidad comercial) -->
      <div class="mt-10 space-y-4">
        <div class="flex items-center justify-between gap-3">
          <div class="inline-flex items-center gap-2">
            <span
              class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">ANUNCIANTES</span>
            <span class="text-xs font-bold text-la97-gray uppercase tracking-wider hidden sm:inline">Experiencia
              comercial comprobada</span>
          </div>
          <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
            class="text-xs font-black text-la97-yellow hover:underline">
            Publicitá con nosotros →
          </a>
        </div>

        <div
          class="mk-glass border-2 border-la97-yellow/60 rounded-3xl p-7 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 shadow-2xl">
          <div class="space-y-3 max-w-3xl">
            <div class="flex flex-wrap items-center gap-2.5">
              <span class="font-black text-white text-base sm:text-lg">Adrian Vecchio</span>
              <span class="bg-la97-yellow text-la97-navy text-[10px] font-black px-2.5 py-0.5 rounded">GOOGLE
                ★★★★★</span>
              <span class="text-[11px] text-la97-gray">• Enero 2026</span>
            </div>
            <p class="text-base sm:text-xl font-bold text-la97-yellow leading-relaxed">
              "Gente de radio. Mucho trabajo y profesionalismo en lo que hacen. Excelente para publicitar. Es muy
              escuchada."
            </p>
          </div>
          <div class="shrink-0 flex flex-col sm:items-end gap-2">
            <span class="text-[11px] font-black uppercase tracking-widest text-sky-300">RESPALDO COMERCIAL</span>
            <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
              class="inline-flex items-center gap-2 bg-la97-yellow hover:bg-white text-la97-navy text-xs font-black uppercase tracking-wider px-4 py-2.5 rounded-xl transition-colors">
              Consultar pauta →
            </a>
          </div>
        </div>
      </div>

      <!-- 2. OYENTES (Comunidad y cercanía) -->
      <div class="mt-8 space-y-4">
        <div class="inline-flex items-center gap-2">
          <span
            class="bg-la97-blue text-white text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">OYENTES</span>
          <span class="text-xs font-bold text-la97-gray uppercase tracking-wider">Comunidad y compañía diaria</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="mk-glass border border-white/15 rounded-2xl p-6 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-3">
                <span class="font-black text-white text-sm">@collectorcarshop</span>
                <span class="bg-la97-red text-white text-[10px] font-black px-2 py-0.5 rounded">INSTAGRAM</span>
              </div>
              <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
                "Yo los escucho desde hace 20 años desde Buenos Aires por internet y ahora por App. Me encanta, son lo
                massss, 24hs con la 97."
              </p>
            </div>
            <div class="text-[11px] text-la97-gray/75 mt-4 pt-3 border-t border-white/10">Instagram. Agosto 2025.</div>
          </div>

          <div class="mk-glass border border-white/15 rounded-2xl p-6 flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-3">
                <span class="font-black text-white text-sm">Roxii Zarate</span>
                <span class="bg-la97-blue text-white text-[10px] font-black px-2 py-0.5 rounded">FACEBOOK</span>
              </div>
              <p class="text-xs sm:text-sm text-la97-gray leading-relaxed">
                "La mejor compañía siempre. 💛 Sigan alegrando siempre mis días."
              </p>
            </div>
            <div class="text-[11px] text-la97-gray/75 mt-4 pt-3 border-t border-white/10">Facebook. Marzo 2026.</div>
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
            <span class="bg-white/10 text-la97-yellow text-[10px] font-black px-2 py-0.5 rounded uppercase">BANNER
              LATERAL A (480 × 120)</span>
            <div class="text-sm font-black text-white mt-1.5">Espacio Comercial Disponible</div>
          </div>
          <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>"
            class="text-xs font-black text-la97-yellow hover:underline shrink-0">Consultar →</a>
        </div>
        <div
          class="mk-glass rounded-2xl p-5 border border-dashed border-white/25 flex items-center justify-between gap-4">
          <div>
            <span class="bg-white/10 text-la97-yellow text-[10px] font-black px-2 py-0.5 rounded uppercase">BANNER
              LATERAL B (480 × 120)</span>
            <div class="text-sm font-black text-white mt-1.5">Espacio Comercial Disponible</div>
          </div>
          <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>"
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
        class="mk-glass rounded-3xl p-8 sm:p-12 border-t-4 border-t-la97-yellow shadow-2xl flex flex-col lg:flex-row lg:items-center justify-between gap-8">
        <div class="max-w-2xl space-y-3">
          <span class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
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

        <div class="shrink-0 flex flex-col sm:items-end gap-3">
          <div class="flex flex-wrap items-center gap-3">
            <a href="tel:02234916607"
              class="inline-flex items-center gap-2 bg-white/10 hover:bg-la97-blue text-white text-sm font-black px-5 py-3.5 rounded-xl border border-white/15 transition-colors">
              <i class="ph-bold ph-phone text-la97-yellow text-base"></i><span>223 491-6607</span>
            </a>
            <a href="https://wa.me/5492235211023" target="_blank" rel="noopener"
              class="inline-flex items-center gap-2 bg-la97-blue hover:bg-white hover:text-la97-navy text-white text-sm font-black px-5 py-3.5 rounded-xl transition-colors">
              <i class="ph-bold ph-whatsapp-logo text-base"></i><span>223 521-1023</span>
            </a>
          </div>
          <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>" data-la97-nav
            class="inline-flex items-center justify-center gap-2 bg-la97-yellow hover:bg-white text-la97-navy text-xs font-black uppercase tracking-wider px-6 py-3.5 rounded-xl shadow-lg transition-colors w-full sm:w-auto">
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
