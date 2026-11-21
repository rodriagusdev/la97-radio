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
              <div class="mt-4 space-y-1.5 text-sm text-la97-gray">
                <div class="flex items-center gap-2"><i class="ph-bold ph-phone text-la97-yellow"></i> Teléfono
                  Comercial: <a href="tel:02234916607" class="text-white font-black hover:underline">2234 91-6607</a>
                </div>
                <div class="flex items-center gap-2"><i class="ph-bold ph-envelope-simple text-la97-yellow"></i> Email:
                  <a href="mailto:comercial@la97.com.ar"
                    class="text-la97-yellow font-black hover:underline">comercial@la97.com.ar</a></div>
              </div>
            </div>

            <div class="mt-6 pt-5 border-t border-white/15 flex flex-wrap items-center justify-between gap-3">
              <div>
                <div class="text-xs font-black uppercase tracking-wider text-la97-yellow">Atención Comercial Directa
                </div>
                <div class="text-base font-extrabold text-white mt-0.5">Laura Spampinato</div>
                <a href="https://wa.me/5492235760131" target="_blank" rel="noopener"
                  class="inline-flex items-center gap-2 mt-2 bg-la97-blue hover:bg-la97-red text-white text-xs font-black px-4 py-2 rounded-xl transition-colors">
                  <i class="ph-bold ph-whatsapp-logo text-base"></i><span>WhatsApp 2235 76-0131</span>
                </a>
              </div>
              <a href="#formulario-publicidad" onclick="window.selectRegion && window.selectRegion('mdp')"
                class="text-xs font-black text-la97-yellow hover:underline">
                Consultar por formulario →
              </a>
            </div>
          </div>

          <!-- Buenos Aires Representative Card (VOCACION) -->
          <div
            class="mk-glass text-white rounded-3xl p-8 border-b-8 border-b-la97-blue shadow-xl flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between gap-3 mb-6">
                <span class="bg-la97-blue text-white text-xs font-black px-3 py-1 rounded uppercase">VOCACION</span>
                <span class="text-xs font-black text-la97-gray uppercase">REPRESENTANTE OFICIAL</span>
              </div>
              <h2 class="text-2xl font-black text-sky-300 uppercase">Representante en BUENOS AIRES</h2>

              <div class="mt-6 space-y-4 text-sm">
                <div
                  class="bg-white/5 p-4 rounded-2xl border border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <div>
                    <div class="font-black text-base text-white">Elizabeth Helueni</div>
                    <a href="mailto:elizabeth@vocacion.net"
                      class="inline-flex items-center gap-1.5 text-xs font-black text-la97-yellow hover:underline mt-0.5"><i
                        class="ph-bold ph-envelope-simple"></i> elizabeth@vocacion.net</a>
                  </div>
                  <a href="https://wa.me/5491144222641" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-1.5 bg-la97-blue hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black px-3.5 py-2 rounded-xl transition-colors shrink-0">
                    <i class="ph-bold ph-whatsapp-logo text-base"></i><span>(011) 15-4422-2641</span>
                  </a>
                </div>

                <div
                  class="bg-white/5 p-4 rounded-2xl border border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <div>
                    <div class="font-black text-base text-white">Claudia González</div>
                    <a href="mailto:claudia@vocacion.net"
                      class="inline-flex items-center gap-1.5 text-xs font-black text-la97-yellow hover:underline mt-0.5"><i
                        class="ph-bold ph-envelope-simple"></i> claudia@vocacion.net</a>
                  </div>
                  <a href="https://wa.me/5491144222787" target="_blank" rel="noopener"
                    class="inline-flex items-center gap-1.5 bg-la97-blue hover:bg-la97-yellow hover:text-la97-navy text-white text-xs font-black px-3.5 py-2 rounded-xl transition-colors shrink-0">
                    <i class="ph-bold ph-whatsapp-logo text-base"></i><span>(011) 15-4422-2787</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="mt-5 pt-4 border-t border-white/10 text-right">
              <a href="#formulario-publicidad" onclick="window.selectRegion && window.selectRegion('bsas')"
                class="text-xs font-black text-sky-300 hover:underline">
                Consultar por formulario Buenos Aires →
              </a>
            </div>
          </div>
        </div>

        <!-- Advertising Inquiry Form ("Publicitá con nosotros") -->
        <div id="formulario-publicidad"
          class="mt-10 mk-glass rounded-3xl p-8 sm:p-10 border-t-4 border-t-la97-yellow shadow-2xl scroll-mt-24">
          <div
            class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 pb-6 border-b border-white/10">
            <div>
              <span
                class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
                PUBLICITÁ CON NOSOTROS
              </span>
              <h2 class="text-2xl sm:text-3xl font-black text-white mt-3">
                Formulario de Consulta Comercial
              </h2>
              <p class="text-xs sm:text-sm text-la97-gray mt-1">
                Completá tus datos y tu consulta llegará directamente al mail del equipo comercial correspondiente.
              </p>
            </div>
            <div class="text-xs font-mono text-la97-yellow bg-black/30 px-4 py-2.5 rounded-xl border border-white/10">
              Destino: <span id="formTargetEmail">comercial@la97.com.ar</span>
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
                  class="w-full bg-black/30 border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
              <div>
                <label for="adBrand"
                  class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Empresa / Marca
                  *</label>
                <input id="adBrand" type="text" required placeholder="Ej: Mi Empresa SRL"
                  class="w-full bg-black/30 border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="adEmail" class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Email
                  *</label>
                <input id="adEmail" name="adEmail" type="email" required placeholder="nombre@empresa.com"
                  class="w-full bg-black/30 border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
              <div>
                <label for="adPhone"
                  class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Teléfono / WhatsApp
                  *</label>
                <input id="adPhone" name="adPhone" type="tel" required placeholder="Ej: 223 555-0000"
                  class="w-full bg-black/30 border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="adRegion" class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Vía
                  de Contacto *</label>
                <select id="adRegion" name="adRegion"
                  class="w-full bg-la97-navy border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white outline-none transition-colors">
                  <option value="mdp">Mar del Plata — Comercial Directo (comercial@la97.com.ar)</option>
                  <option value="bsas">Buenos Aires — Vocación (elizabeth@vocacion.net / claudia@vocacion.net)</option>
                </select>
              </div>
              <div>
                <label for="adProduct"
                  class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Espacio / Producto de
                  interés</label>
                <select id="adProduct" name="adProduct"
                  class="w-full bg-la97-navy border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white outline-none transition-colors">
                  <option value="tanda">Tanda / Apertura de Tanda / PNT</option>
                  <option value="banner">Banner Publicitario Web</option>
                  <option value="auspicio">Auspicio de Programa / Ranking 40x40</option>
                  <option value="movil">Móviles / Eventos / Redes Sociales</option>
                  <option value="integral">Propuesta Comercial Integral</option>
                </select>
              </div>
            </div>

            <div>
              <label for="adMessage"
                class="block text-xs font-black uppercase tracking-wider text-la97-gray mb-2">Mensaje / Consulta
                *</label>
              <textarea id="adMessage" name="adMessage" rows="4" required
                placeholder="Contanos qué querés comunicar y te asesoramos con la mejor propuesta..."
                class="w-full bg-black/30 border border-white/15 focus:border-la97-yellow rounded-xl px-4 py-3 text-sm text-white placeholder-white/40 outline-none transition-colors"></textarea>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
              <div id="adFormSuccess"
                class="hidden text-xs font-bold text-la97-yellow bg-la97-yellow/10 border border-la97-yellow/40 px-4 py-2.5 rounded-xl">
                ✅ ¡Consulta lista! En WordPress este formulario enviará directamente al mail seleccionado.
              </div>
              <button type="submit"
                class="sm:ml-auto bg-la97-yellow hover:bg-white text-la97-navy font-black text-xs uppercase tracking-wider px-7 py-3.5 rounded-xl shadow-lg transition-colors cursor-pointer">
                Enviar Consulta Comercial →
              </button>
            </div>
          </form>
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
              <span>💬 WhatsApp 223 615-0000</span>
            </a>
            <a href="tel:02234932502"
              class="inline-flex items-center gap-2 bg-white/10 hover:bg-la97-blue text-white font-black text-xs uppercase tracking-wider px-5 py-3 rounded-xl border border-white/15 transition-colors">
              <span>📞 0223 493-2502</span>
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

        function initAdForm() {
          const adRegion = document.getElementById('adRegion');
          const formTargetEmail = document.getElementById('formTargetEmail');
          const adForm = document.getElementById('la97AdForm');
          const adFormSuccess = document.getElementById('adFormSuccess');

          function updateTargetEmail() {
            if (!adRegion || !formTargetEmail) return;
            formTargetEmail.textContent = adRegion.value === 'bsas'
              ? 'elizabeth@vocacion.net / claudia@vocacion.net'
              : 'comercial@la97.com.ar';
          }

          window.selectRegion = function (val) {
            if (adRegion) {
              adRegion.value = val;
              updateTargetEmail();
            }
          };

          if (adRegion && !adRegion._la97Bound) {
            adRegion._la97Bound = true;
            adRegion.addEventListener('change', updateTargetEmail);
          }

          const sentParams = new URLSearchParams(window.location.search);
          if (adFormSuccess && sentParams.get('enviado') === '1') {
            adFormSuccess.classList.remove('hidden');
          }

          // Pre-fill from ?programa= query parameter (e.g. from Programación "Auspiciar" button)
          const params = new URLSearchParams(window.location.search);
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
