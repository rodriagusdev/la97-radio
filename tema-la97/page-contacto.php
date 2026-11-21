<?php
/**
 * Template Name: Contacto Comercial
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full">
    <section id="sumate-contacto" class="w-full px-6 lg:px-12 xl:px-16 py-12 lg:py-16 text-white">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
          <span class="text-xs font-black uppercase tracking-widest text-la97-yellow">UNIMOS MARCAS CON LA MAYOR
            AUDIENCIA DE MAR DEL PLATA</span>
          <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-2">
            La radio más efectiva para hacer publicidad.
          </h1>
          <p class="text-sm sm:text-base font-bold text-la97-gray mt-2">
            Trayectoria, posicionamiento, calidad de audio y creatividad. <strong
              class="text-la97-yellow font-black">¡Sumate!</strong>
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Mar del Plata Card -->
          <div
            class="mk-glass text-white rounded-3xl p-8 border-b-8 border-b-la97-yellow shadow-xl flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between gap-3 mb-6">
                <span class="bg-la97-yellow text-la97-navy text-xs font-black px-3 py-1 rounded uppercase">SEDE
                  CENTRAL</span>
                <span class="text-xs font-mono text-la97-gray">97.3 MHz</span>
              </div>
              <h2 class="text-2xl font-black text-la97-yellow uppercase">MAR DEL PLATA</h2>
              <p class="text-lg font-extrabold mt-1">Moreno 2976 . Centro</p>

              <div class="mt-4 space-y-2 text-sm text-la97-gray">
                <div class="flex items-center gap-2"><i class="ph-bold ph-phone text-la97-yellow"></i> Comercial fijo:
                  <a href="tel:02234916607" class="text-white font-black hover:underline">223 491-6607</a>
                </div>
                <div class="flex items-center gap-2"><i class="ph-bold ph-whatsapp-logo text-la97-yellow"></i> WhatsApp Comercial:
                  <a href="https://wa.me/5492235211023" target="_blank" rel="noopener" class="text-white font-black hover:underline">+54 9 223 521-1023</a>
                </div>
              </div>

              <div class="mt-5 pt-4 border-t border-white/10 grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs">
                <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                  <div class="text-[10px] font-mono uppercase text-la97-gray">Comercial</div>
                  <a href="mailto:comercial@la97.com.ar" class="text-la97-yellow font-black hover:underline break-all">comercial@la97.com.ar</a>
                </div>
                <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                  <div class="text-[10px] font-mono uppercase text-la97-gray">Producción Comercial</div>
                  <a href="mailto:produccioncomercial@la97.com.ar" class="text-la97-yellow font-black hover:underline break-all">produccioncomercial@la97.com.ar</a>
                </div>
                <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                  <div class="text-[10px] font-mono uppercase text-la97-gray">Administración</div>
                  <a href="mailto:administracion@la97.com.ar" class="text-white font-black hover:underline break-all">administracion@la97.com.ar</a>
                </div>
                <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                  <div class="text-[10px] font-mono uppercase text-la97-gray">Red / Digital</div>
                  <a href="mailto:red@la97.com.ar" class="text-sky-300 font-black hover:underline break-all">red@la97.com.ar</a>
                </div>
              </div>
            </div>

            <div class="mt-6 pt-4 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
              <a href="https://wa.me/5492235211023" target="_blank" rel="noopener"
                class="inline-flex items-center gap-2 bg-la97-blue hover:bg-la97-red text-white text-xs font-black px-4 py-2.5 rounded-xl transition-colors">
                <i class="ph-bold ph-whatsapp-logo text-base"></i><span>Escribir por WhatsApp Comercial</span>
              </a>
              <a href="<?php echo esc_url(home_url('/publicita-ya/?region=mdp#formulario-publicidad')); ?>" data-la97-nav
                class="text-xs font-black text-la97-yellow hover:underline">
                Consultar por formulario →
              </a>
            </div>
          </div>

          <!-- Buenos Aires Representative Card (VOCACION S.R.L.) -->
          <div
            class="mk-glass text-white rounded-3xl p-8 border-b-8 border-b-la97-blue shadow-xl flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between gap-3 mb-6">
                <span class="bg-la97-blue text-white text-xs font-black px-3 py-1 rounded uppercase">VOCACIÓN S.R.L.</span>
                <span class="text-xs font-black text-la97-gray uppercase">REPRESENTANTES EN CABA</span>
              </div>
              <h2 class="text-2xl font-black text-sky-300 uppercase">Representantes en CABA</h2>

              <div class="mt-6 space-y-4 text-sm">
                <div
                  class="bg-white/5 p-4 rounded-2xl border border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <div>
                    <div class="font-black text-base text-white">Elizabeth</div>
                    <a href="mailto:elizabeth@vocacion.net"
                      class="inline-flex items-center gap-1.5 text-xs font-black text-la97-yellow hover:underline mt-0.5"><i
                        class="ph-bold ph-envelope-simple"></i> elizabeth@vocacion.net</a>
                  </div>
                  <a href="https://wa.me/5491144222641" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-1.5 bg-la97-blue hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black px-3.5 py-2 rounded-xl transition-colors shrink-0">
                    <i class="ph-bold ph-whatsapp-logo text-base"></i><span>+54 9 11 4422-2641</span>
                  </a>
                </div>

                <div
                  class="bg-white/5 p-4 rounded-2xl border border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <div>
                    <div class="font-black text-base text-white">Claudia</div>
                    <a href="mailto:claudia@vocacion.net"
                      class="inline-flex items-center gap-1.5 text-xs font-black text-la97-yellow hover:underline mt-0.5"><i
                        class="ph-bold ph-envelope-simple"></i> claudia@vocacion.net</a>
                  </div>
                  <a href="https://wa.me/5491144222787" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-1.5 bg-la97-blue hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black px-3.5 py-2 rounded-xl transition-colors shrink-0">
                    <i class="ph-bold ph-whatsapp-logo text-base"></i><span>+54 9 11 4422-2787</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="mt-5 pt-4 border-t border-white/10 text-right">
              <a href="<?php echo esc_url(home_url('/publicita-ya/?region=bsas#formulario-publicidad')); ?>" data-la97-nav
                class="text-xs font-black text-sky-300 hover:underline">
                Consultar por formulario CABA →
              </a>
            </div>
          </div>
        </div>

        <!-- Direct Listener & Studio Line Banner -->
        <div
          class="mt-8 mk-glass rounded-3xl p-8 border-b-8 border-b-la97-red flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
          <div>
            <span class="bg-la97-red text-white text-xs font-black px-3 py-1 rounded uppercase">LÍNEA DE OYENTES EN
              VIVO</span>
            <h2 class="text-2xl font-black text-white mt-3">¿Querés comunicarte con el estudio?</h2>
            <p class="text-sm text-la97-gray mt-1">Mandanos tu mensaje, pedí tu tema o participá en los sorteos diarios.
            </p>
          </div>
          <div class="flex flex-wrap gap-3">
            <a href="https://wa.me/5492236150000" target="_blank" rel="noopener"
              class="inline-flex items-center gap-2 bg-la97-yellow text-la97-navy hover:bg-white font-black text-xs uppercase tracking-wider px-5 py-3 rounded-xl transition-colors">
              <span>💬 Aire Oyentes: 223 615-0000</span>
            </a>
            <a href="https://wa.me/5492235221079" target="_blank" rel="noopener"
              class="inline-flex items-center gap-2 bg-white/10 hover:bg-la97-blue text-white font-black text-xs uppercase tracking-wider px-5 py-3 rounded-xl border border-white/15 transition-colors">
              <span>📲 Radio Digital: +54 9 223 522-1079</span>
            </a>
          </div>
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
      })();
  </script>

<?php get_footer(); ?>
