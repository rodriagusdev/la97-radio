<?php
/**
 * Template Name: Programación Oficial
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full">
    <section id="programacion-oficial" class="w-full px-6 lg:px-12 xl:px-16 py-12 lg:py-16 text-white">

      <!-- Open Editorial Header (matching other pages) -->
      <div class="mb-10 flex flex-col sm:flex-row sm:items-center justify-between gap-6">
        <div class="max-w-3xl">
          <span class="text-xs font-black uppercase tracking-widest text-sky-300">CONTENIDO Y REALIZACIÓN 100% LOCAL</span>
          <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight uppercase mt-1.5">
            PROGRAMACIÓN
          </h1>
          <p class="text-sm sm:text-base text-la97-gray mt-2 leading-relaxed">
            Una programación con identidad local, producida desde nuestros estudios en Mar del Plata y presente durante las 24 horas.
          </p>
        </div>

        <div class="hidden sm:flex items-center justify-center bg-white rounded-2xl p-3 w-24 h-24 shrink-0 shadow-xl ring-4 ring-white/10">
          <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97! FM 97.3" class="w-full h-full object-contain">
        </div>
      </div>

      <!-- Day Filter Tabs -->
      <div class="flex flex-wrap items-center gap-2 mb-8" role="tablist" aria-label="Filtrar programación por día">
        <button type="button" data-sched-tab="all" class="sched-tab-btn bg-white/15 text-white border border-white/20 text-xs font-black uppercase tracking-wider px-4 py-2.5 rounded-xl transition-colors cursor-pointer">
          Toda la Semana
        </button>
        <button type="button" data-sched-tab="semana" class="sched-tab-btn bg-white/10 hover:bg-white/20 text-white text-xs font-black uppercase tracking-wider px-4 py-2.5 rounded-xl transition-colors cursor-pointer">
          Lunes a Viernes
        </button>
        <button type="button" data-sched-tab="sabado" class="sched-tab-btn bg-white/10 hover:bg-white/20 text-white text-xs font-black uppercase tracking-wider px-4 py-2.5 rounded-xl transition-colors cursor-pointer">
          Sábado
        </button>
        <button type="button" data-sched-tab="domingo" class="sched-tab-btn bg-white/10 hover:bg-white/20 text-white text-xs font-black uppercase tracking-wider px-4 py-2.5 rounded-xl transition-colors cursor-pointer">
          Domingo
        </button>
      </div>

      <!-- Schedule Table Grid -->
      <div class="space-y-10">

        <!-- LUNES A VIERNES -->
        <div data-sched-block="semana" class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
          <div class="lg:col-span-3 mk-glass text-white rounded-2xl p-6 border-t-4 border-t-la97-blue lg:sticky lg:top-28">
            <h2 class="text-2xl sm:text-3xl font-black uppercase leading-tight">Lunes a Viernes</h2>
            <p class="text-xs font-bold text-sky-300 uppercase tracking-wider mt-1">24 HS EN VIVO • 97.3 MHz</p>
          </div>
          <div class="lg:col-span-9 space-y-3">
            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="1,2,3,4,5" data-start="6" data-end="9">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">06 A 09HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/bimbambum.jpg" alt="Bim Bam Bum" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Bim Bam Bum</h3>
                    <span class="text-xs font-bold text-sky-300">/ Marina Gorosito</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">Todo lo que necesitás saber para estar bien informado, acompañado de clásicos cargados de energía.</p>
                </div>
              </div>
              <div class="flex items-center gap-2.5 shrink-0" title="Espacio para foto de Marina Gorosito">
                <div class="w-11 h-11 rounded-full bg-la97-blue/30 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300">MG</div>
                <span class="text-xs font-bold uppercase tracking-wider text-la97-gray/70 sm:hidden">Marina Gorosito</span>
              </div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="1,2,3,4,5" data-start="9" data-end="13">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">09 A 13HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg" alt="Ranking 40 x 40" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Ranking 40 x 40</h3>
                    <span class="text-xs font-bold text-sky-300">/ Eugenia Martinez y Christian Carballo</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">El listado de los 40 éxitos más votados, ¡arriba la energía! A jugar y divertirnos.</p>
                </div>
              </div>
              <div class="flex items-center -space-x-2 shrink-0" title="Espacio para fotos de Eugenia Martinez y Christian Carballo">
                <div class="w-11 h-11 rounded-full bg-la97-red/40 border-2 border-white/20 flex items-center justify-center text-xs font-black text-white">EM</div>
                <div class="w-11 h-11 rounded-full bg-la97-blue/40 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300">CC</div>
              </div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="1,2,3,4,5" data-start="13" data-end="18">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">13 A 18HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/musicaexpress.jpg" alt="Música Express" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Música Express</h3>
                    <span class="text-xs font-bold text-sky-300">/ Gerardo Reboredo</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">La tarde es más entretenida cuando escuchamos música juntos y participamos por premios increíbles.</p>
                </div>
              </div>
              <div class="flex items-center gap-2.5 shrink-0" title="Espacio para foto de Gerardo Reboredo">
                <div class="w-11 h-11 rounded-full bg-la97-blue/30 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300">GR</div>
                <span class="text-xs font-bold uppercase tracking-wider text-la97-gray/70 sm:hidden">Gerardo Reboredo</span>
              </div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="1,2,3,4,5" data-start="18" data-end="24">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">18 A 24HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/elregreso.jpg" alt="El Regreso - Top Ten - La Noche" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">El Regreso - Top Ten - La Noche</h3>
                    <span class="text-xs font-bold text-sky-300">/ Pablo Larsen</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">La compañía ideal para finalizar la jornada con El Regreso, las 10 más votadas del Top Ten y la selección de La Noche.</p>
                </div>
              </div>
              <div class="flex items-center gap-2.5 shrink-0" title="Espacio para foto de Pablo Larsen">
                <div class="w-11 h-11 rounded-full bg-la97-blue/30 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300">PL</div>
                <span class="text-xs font-bold uppercase tracking-wider text-la97-gray/70 sm:hidden">Pablo Larsen</span>
              </div>
            </div>
          </div>
        </div>

        <!-- SÁBADO -->
        <div data-sched-block="sabado" class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start pt-6 border-t border-white/15">
          <div class="lg:col-span-3 mk-glass text-white rounded-2xl p-6 border-t-4 border-t-la97-red lg:sticky lg:top-28">
            <h2 class="text-2xl sm:text-3xl font-black uppercase leading-tight">Sábado</h2>
            <p class="text-xs font-bold text-sky-300 uppercase tracking-wider mt-1">FIN DE SEMANA • 97.3 MHz</p>
          </div>
          <div class="lg:col-span-9 space-y-3">
            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="6" data-start="0" data-end="7">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">00 A 07HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/latrasnoche.jpg" alt="La Trasnoche de La 97" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">La Trasnoche de La 97!</h3>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">La mejor música para acompañarte.</p>
                </div>
              </div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="6" data-start="7" data-end="10">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">07 A 10HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/superclasicos.jpg" alt="Superclásicos" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Superclásicos</h3>
                    <span class="text-xs font-bold text-sky-300">/ Eugenia Martinez</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">Éxitos indiscutibles que jamás nos cansamos de escuchar. Un repaso de la mejor música desde los 80' en adelante.</p>
                </div>
              </div>
              <div class="w-11 h-11 rounded-full bg-la97-red/40 border-2 border-white/20 flex items-center justify-center text-xs font-black text-white shrink-0" title="Espacio para foto de Eugenia Martinez">EM</div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="6" data-start="10" data-end="14">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">10 A 14HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/40x40.jpg" alt="Ranking 40 x 40" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Ranking 40 x 40</h3>
                    <span class="text-xs font-bold text-sky-300">/ Eugenia Martinez</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">El listado de los 40 éxitos más votados. ¡Arriba la energía! ¡Llegó el fin de semana! ¡A distendernos, jugando y bailando!</p>
                </div>
              </div>
              <div class="w-11 h-11 rounded-full bg-la97-red/40 border-2 border-white/20 flex items-center justify-center text-xs font-black text-white shrink-0" title="Espacio para foto de Eugenia Martinez">EM</div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="6" data-start="14" data-end="20">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">14 A 20HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/musicaexpress.jpg" alt="Música Express de Fin de Semana" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Música Express de Fin de Semana</h3>
                    <span class="text-xs font-bold text-sky-300">/ Silvana Debenedetti</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">La tarde es más entretenida cuando escuchamos música juntos y participamos por premios increíbles.</p>
                </div>
              </div>
              <div class="w-11 h-11 rounded-full bg-la97-blue/30 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300 shrink-0" title="Espacio para foto de Silvana Debenedetti">SD</div>
            </div>
          </div>
        </div>

        <!-- DOMINGO -->
        <div data-sched-block="domingo" class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start pt-6 border-t border-white/15">
          <div class="lg:col-span-3 mk-glass text-white rounded-2xl p-6 border-t-4 border-t-la97-blue lg:sticky lg:top-28">
            <h2 class="text-2xl sm:text-3xl font-black uppercase leading-tight">Domingo</h2>
            <p class="text-xs font-bold text-sky-300 uppercase tracking-wider mt-1">CLÁSICOS & COMPAÑÍA</p>
          </div>
          <div class="lg:col-span-9 space-y-3">
            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="0" data-start="8" data-end="15">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">08 A 15HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/superclasicos.jpg" alt="Superclásicos" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Superclásicos</h3>
                    <span class="text-xs font-bold text-sky-300">/ Marina Gorosito</span>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">Disfrutemos juntos de nuestros recuerdos, te proponemos un recorrido por los éxitos desde los 80' en adelante.</p>
                </div>
              </div>
              <div class="w-11 h-11 rounded-full bg-la97-blue/30 border-2 border-white/20 flex items-center justify-center text-xs font-black text-sky-300 shrink-0" title="Espacio para foto de Marina Gorosito">MG</div>
            </div>

            <div class="mk-sched-row la97-prog-row mk-glass rounded-2xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition-all" data-days="0" data-start="15" data-end="22">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 flex-1">
                <div class="w-28 shrink-0 font-black text-lg text-sky-300 leading-tight">15 A 22HS.</div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shows/tardedomingo.jpg" alt="Top Latino - La Tarde del Domingo" class="w-14 h-14 rounded-xl object-cover border border-white/15 shrink-0 hidden sm:block">
                <div>
                  <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-black text-white">Top Latino - La Tarde del Domingo</h3>
                    <span class="mk-live-pill items-center gap-1 bg-la97-red text-white text-xs font-black px-2.5 py-0.5 rounded-full uppercase">● AHORA AL AIRE</span>
                  </div>
                  <p class="text-xs sm:text-sm text-la97-gray/90 mt-1">Las mejores canciones en español y la compañía ideal para disfrutar la tarde del domingo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Commercial Banner Slot in Programación (Oculto por defecto hasta que se contrate el espacio) -->
      <div class="hidden mt-12 mk-glass rounded-2xl p-5 sm:px-8 sm:py-6 border border-dashed border-white/20 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4 text-center md:text-left">
          <span class="bg-white/15 text-white border border-white/20 text-xs font-black px-2.5 py-1 rounded uppercase tracking-wider shrink-0">
            ESPACIO PUBLICITARIO
          </span>
          <div>
            <div class="text-sm sm:text-base font-black text-white">Auspiciá la Programación Oficial de La 97 FM</div>
            <div class="text-xs text-la97-gray">Banner comercial disponible (970 × 120 px) o auspicio exclusivo de programa.</div>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contacto/#formulario-publicidad')); ?>"
          class="bg-la97-blue hover:bg-white hover:text-la97-navy text-white text-xs font-black uppercase tracking-wider px-5 py-2.5 rounded-xl transition-colors shrink-0">
          Publicitá con nosotros →
        </a>
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

      function initScheduleTabs() {
        const tabs = document.querySelectorAll('.sched-tab-btn');
        const blocks = document.querySelectorAll('[data-sched-block]');
        if (!tabs.length || !blocks.length) return;

        tabs.forEach((btn) => {
          if (btn._la97Bound) return;
          btn._la97Bound = true;
          btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-sched-tab');
            tabs.forEach((b) => {
              b.classList.remove('bg-la97-red', 'text-white');
              b.classList.add('bg-white/10', 'text-white');
            });
            btn.classList.remove('bg-white/10', 'text-white');
            btn.classList.add('bg-la97-red', 'text-white');

            blocks.forEach((blk) => {
              const bKey = blk.getAttribute('data-sched-block');
              if (target === 'all' || bKey === target) {
                blk.classList.remove('hidden');
              } else {
                blk.classList.add('hidden');
              }
            });
          });
        });
      }

      function initShowActions() {
        const rows = document.querySelectorAll('.la97-prog-row');
        rows.forEach((row) => {
          if (row._la97ActionsAdded) return;
          row._la97ActionsAdded = true;
          const titleEl = row.querySelector('h3');
          if (!titleEl) return;
          const showName = titleEl.textContent.trim();

          const actionsWrap = document.createElement('div');
          actionsWrap.className = 'flex items-center gap-2 shrink-0';

          const msgBtn = document.createElement('a');
          msgBtn.href = 'https://wa.me/5492236150000?text=' + encodeURIComponent('Hola La 97! Les escribo por ' + showName + ': ');
          msgBtn.target = '_blank';
          msgBtn.rel = 'noopener';
          msgBtn.className = 'inline-flex items-center gap-1.5 bg-white hover:bg-la97-red text-la97-navy hover:text-white text-xs font-black uppercase tracking-wider px-3 py-2 rounded-xl transition-colors';
          msgBtn.innerHTML = '<i class="ph-bold ph-whatsapp-logo text-sm"></i><span>Mensaje</span>';

          const sponsorBtn = document.createElement('a');
          sponsorBtn.href = './contacto.html?programa=' + encodeURIComponent(showName) + '#formulario-publicidad';
          sponsorBtn.setAttribute('data-la97-nav', '');
          sponsorBtn.className = 'inline-flex items-center gap-1.5 bg-white/10 hover:bg-la97-blue text-white text-xs font-black uppercase tracking-wider px-3 py-2 rounded-xl border border-white/15 transition-colors';
          sponsorBtn.innerHTML = '<i class="ph-bold ph-megaphone text-sm"></i><span>Auspiciar</span>';

          actionsWrap.appendChild(msgBtn);
          actionsWrap.appendChild(sponsorBtn);
          row.appendChild(actionsWrap);
        });
      }

      initScheduleTabs();
      initShowActions();
      window.addEventListener('la97:page-swapped', () => {
        initScheduleTabs();
        initShowActions();
      });
    })();
  </script>

<?php get_footer(); ?>
