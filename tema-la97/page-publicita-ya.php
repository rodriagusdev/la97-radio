<?php
/**
 * Template Name: Publicitá Ya!
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full">
    <!-- ===================================================================
         SECTION 5: PRODUCTOS PUBLICITARIOS — SOLUCIONES COMERCIALES
         =================================================================== -->
    <section id="productos-comerciales" class="w-full px-6 lg:px-12 xl:px-16 pt-12 pb-6 bg-transparent text-white">

      <!-- Clean Centered Hero (Apple-style Editorial Intro) -->
      <div class="max-w-3xl mx-auto text-center space-y-4 pt-2 pb-10">
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-[1.04]">
          Tu marca en todo el ecosistema de <span class="text-sky-300">La 97!</span>
        </h1>
        <p class="text-sm sm:text-lg text-la97-gray leading-relaxed">
          Producción propia y programas en vivo los 365 días del año.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
          <a href="#formulario-publicidad"
            class="bg-la97-blue hover:bg-white text-white hover:text-la97-navy text-sm font-black uppercase tracking-wider px-7 py-3 rounded-full shadow-lg transition-colors">
            Solicitar propuesta
          </a>
        </div>
      </div>

      <!-- Section Title before 2x2 Showcase (Integrating Servicio Integral) -->
      <div id="que-incluye" class="max-w-3xl mx-auto text-center pt-4 pb-8 space-y-3 scroll-mt-24">
        <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
          ¿Qué te ofrecemos con nuestra <span class="text-sky-300">campaña integral?</span>
        </h2>
        <p class="text-base sm:text-lg text-la97-gray leading-relaxed">
          Tanda, productos en vivo y redes sociales funcionando juntos en una misma estrategia omnicanal.
        </p>
      </div>

      <!-- Apple-style 2x2 Full-Bleed Editorial Showcase Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Tile 1: Tanda Publicitaria (Full-bleed mic AIRE photo + centered bottom copy) -->
        <div class="relative rounded-3xl overflow-hidden border border-white/10 min-h-[460px] sm:min-h-[500px] flex flex-col justify-end text-center group bg-[#101824]">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/radio01.jpg" alt="Micrófono y cartel AIRE en La 97!"
            class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-[#0d1520]/85 to-[#0d1520]/15"></div>
          <div class="relative z-10 p-8 sm:p-10 max-w-lg mx-auto space-y-3.5">
            <h3 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
              Tanda Publicitaria.
            </h3>
            <p class="text-sm sm:text-base text-white/90 leading-relaxed">
              Espacio publicitario de anuncios comerciales que se emiten de manera rotativa a lo largo de toda la programación donde la radio conecta las marcas con los oyentes.
            </p>
          </div>
        </div>

        <!-- Tile 2: Productos en vivo (Full-bleed photo + centered bottom copy) -->
        <div class="relative rounded-3xl overflow-hidden border border-white/10 min-h-[460px] sm:min-h-[500px] flex flex-col justify-end text-center group bg-[#101824]">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ig/post-5.jpg" alt="Locutores en vivo en La 97!"
            class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-[#0d1520]/85 to-[#0d1520]/15"></div>
          <div class="relative z-10 p-8 sm:p-10 max-w-lg mx-auto space-y-3.5">
            <h3 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
              Productos en vivo.
            </h3>
            <p class="text-sm sm:text-base text-white/90 leading-relaxed">
              Líneas de juego, PNTs, Notas Comerciales, Auspicios (HTH, noticias, Puesto N°1 del Ranking, programas, Apertura de Tanda) y Acciones Mensuales.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-2.5 pt-1">
              <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
                class="border border-white/30 hover:border-white bg-black/25 text-white text-sm font-black uppercase tracking-wider px-6 py-2.5 rounded-full transition-colors">
                Ver programas
              </a>
            </div>
          </div>
        </div>

        <!-- Tile 3: Experiencias y Acciones Especiales (Full-bleed photo + centered bottom copy) -->
        <div class="relative rounded-3xl overflow-hidden border border-white/10 min-h-[460px] sm:min-h-[500px] flex flex-col justify-end text-center group bg-[#101824]">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/radio03.webp" alt="Experiencias y móviles en vivo de La 97! FM 97.3"
            class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-[#0d1520]/85 to-[#0d1520]/15"></div>
          <div class="relative z-10 p-8 sm:p-10 max-w-lg mx-auto space-y-3.5">
            <h3 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
              Experiencias y Acciones Especiales.
            </h3>
            <p class="text-sm sm:text-base text-white/90 leading-relaxed">
              Móviles en vivo en playas, paradores, teatros y eventos, junto a activaciones presenciales que potencian el alcance y la presencia de nuestros anunciantes.
            </p>
          </div>
        </div>

        <!-- Tile 4: Redes Sociales (Full-bleed photo + centered bottom copy) -->
        <div class="relative rounded-3xl overflow-hidden border border-white/10 min-h-[460px] sm:min-h-[500px] flex flex-col justify-end text-center group bg-[#101824]">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/radio02.jpg" alt="Estudio central y redes sociales de La 97! FM"
            class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-[#0d1520]/85 to-[#0d1520]/15"></div>
          <div class="relative z-10 p-8 sm:p-10 max-w-lg mx-auto space-y-3.5">
            <h3 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
              Instagram y Facebook.
            </h3>
            <p class="text-sm sm:text-base text-white/90 leading-relaxed">
              Historias semanales, feed, reels, sorteos para sumar seguidores en Instagram (@la97siempre) y publicaciones diarias con líneas de juego en Facebook (+150K seguidores).
            </p>
            <div class="flex flex-wrap items-center justify-center gap-2.5 pt-1">
              <a href="https://www.instagram.com/la97siempre/" target="_blank" rel="noopener"
                class="bg-la97-blue hover:bg-white text-white hover:text-la97-navy text-sm font-black uppercase tracking-wider px-6 py-2.5 rounded-full transition-colors">
                @la97siempre
              </a>
              <a href="https://www.facebook.com/la97siempre" target="_blank" rel="noopener"
                class="border border-white/30 hover:border-white bg-black/25 text-white text-sm font-black uppercase tracking-wider px-6 py-2.5 rounded-full transition-colors">
                Facebook
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="w-full px-6 lg:px-12 xl:px-16 pb-16 pt-6 text-white">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        <!-- Left 5 Cols: Real Team & Multiplatform Collage -->
        <div class="lg:col-span-5 mk-glass rounded-3xl overflow-hidden border border-white/15 bg-[#101824] shadow-2xl flex items-center justify-center">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/people.png" alt="Equipo, conductores y publicidad multiplataforma en La 97! FM 97.3"
            class="w-full h-full object-cover object-center">
        </div>

        <!-- Right 7 Cols: Advertising Inquiry Form ("Publicitá con nosotros") -->
        <div id="formulario-publicidad"
          class="lg:col-span-7 mk-glass rounded-3xl p-8 sm:p-10 border-t-4 border-t-la97-blue shadow-2xl scroll-mt-24">
          <div
            class="mb-8 pb-6 border-b border-white/10">
            <div>
              <span
                class="bg-white/15 text-white border border-white/20 text-xs font-black px-3 py-1 rounded uppercase tracking-wider">
                PUBLICITÁ CON NOSOTROS
              </span>
              <h2 class="text-2xl sm:text-3xl font-black text-white mt-3">
                Formulario de Consulta Comercial
              </h2>
              <p class="text-xs sm:text-sm text-la97-gray mt-1">
                Completá tus datos y tu consulta llegará directamente al mail del equipo comercial correspondiente.
              </p>
            </div>
          </div>

          <form id="la97AdForm" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="space-y-5">
            <input type="hidden" name="action" value="la97_contact">
            <?php wp_nonce_field('la97_contact_nonce', 'la97_nonce'); ?>
            <input type="text" name="la97_website" class="hidden" tabindex="-1" autocomplete="off">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="adName" class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Nombre
                  y Apellido *</label>
                <input id="adName" name="adName" type="text" required placeholder="Ej: Juan Pérez"
                  class="w-full bg-black/30 border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
              <div>
                <label for="adBrand"
                  class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Empresa / Marca
                  *</label>
                <input id="adBrand" name="adBrand" type="text" required placeholder="Ej: Mi Empresa"
                  class="w-full bg-black/30 border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="adEmail" class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Email
                  *</label>
                <input id="adEmail" name="adEmail" type="email" required placeholder="nombre@empresa.com"
                  class="w-full bg-black/30 border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
              <div>
                <label for="adPhone"
                  class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Teléfono / WhatsApp
                  *</label>
                <input id="adPhone" name="adPhone" type="tel" required placeholder="Ej: 223 555-0000"
                  class="w-full bg-black/30 border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
            </div>

            <div>
              <label for="adRegion" class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Vía
                de Contacto *</label>
              <select id="adRegion" name="adRegion"
                class="w-full bg-la97-navy border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white outline-none transition-colors">
                <option value="mdp">Mar del Plata — Comercial Directo (comercial@la97.com.ar)</option>
                <option value="bsas_elizabeth">Buenos Aires — Vocación: Elizabeth (elizabeth@vocacion.net)</option>
                <option value="bsas_claudia">Buenos Aires — Vocación: Claudia (claudia@vocacion.net)</option>
              </select>
            </div>

            <div>
              <label for="adMessage"
                class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Mensaje / Consulta
                *</label>
              <textarea id="adMessage" name="adMessage" rows="4" required
                placeholder="Contanos qué querés comunicar y te asesoramos con la mejor propuesta..."
                class="w-full bg-black/30 border border-white/15 focus:border-sky-300 rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors"></textarea>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
              <div id="adFormSuccess"
                class="hidden text-xs font-bold text-la97-yellow bg-la97-yellow/10 border border-white/20 px-4 py-2.5 rounded-xl">
                ✅ ¡Consulta lista! En WordPress este formulario enviará directamente al mail seleccionado.
              </div>
              <button type="submit"
                class="sm:ml-auto bg-white hover:bg-la97-red text-la97-navy hover:text-white font-black text-xs uppercase tracking-wider px-7 py-3.5 rounded-xl shadow-lg transition-colors cursor-pointer">
                Enviar Consulta Comercial →
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <script>
      (function () {
        const audio = document.getElementById('la97Audio');
        const topPlayMirrorBtn = document.getElementById('topPlayMirrorBtn');
        const topPlayMirrorText = document.getElementById('topPlayMirrorText');

        if (topPlayMirrorBtn && audio) {
          topPlayMirrorBtn.addEventListener('click', () => {
            if (audio.paused) {
              const s = audio.src;
              audio.src = '';
              audio.src = s;
              audio.play().catch(console.warn);
            } else {
              audio.pause();
            }
          });
        }
        if (audio && topPlayMirrorText) {
          audio.addEventListener('play', () => { topPlayMirrorText.textContent = 'PAUSAR 97.3'; });
          audio.addEventListener('pause', () => { topPlayMirrorText.textContent = 'EN VIVO 97.3'; });
        }

        function initAdForm() {
          const adRegion = document.getElementById('adRegion');
          const adFormSuccess = document.getElementById('adFormSuccess');
          const params = new URLSearchParams(window.location.search);

          window.selectRegion = function (val) {
            if (adRegion) {
              adRegion.value = val;
            }
          };

          if (adFormSuccess && params.get('enviado') === '1') {
            adFormSuccess.classList.remove('hidden');
          }

          // Pre-fill from ?programa= query parameter (e.g. from Programación "Auspiciar" button)
          const regionParam = params.get('region');
          if (regionParam && (regionParam === 'mdp' || regionParam === 'bsas')) {
            window.selectRegion(regionParam);
          }
          const prog = params.get('programa');
          if (prog) {
            const adProduct = document.getElementById('adProduct');
            const adMessage = document.getElementById('adMessage');
            if (adProduct) adProduct.value = 'auspicio';
            if (adMessage && !adMessage.value) {
              adMessage.value = 'Hola! Quisiera consultar por auspicio y pauta publicitaria en el programa "' + prog + '".';
            }
          }
        }

        initAdForm();
        window.addEventListener('la97:page-swapped', initAdForm);
      })();
  </script>

<?php get_footer(); ?>
