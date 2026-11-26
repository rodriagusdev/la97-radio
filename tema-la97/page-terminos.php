<?php
/**
 * Template Name: Términos y Condiciones
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-12 lg:py-16">
    <article class="mk-glass max-w-4xl mx-auto rounded-3xl p-8 sm:p-12 border-t-4 border-t-la97-blue space-y-6">
      <div>
        <span class="bg-la97-blue text-white text-xs font-black px-3 py-1 rounded uppercase tracking-wider">
          CONDICIONES DE USO
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-3">
          Términos y Condiciones
        </h1>
        <p class="text-xs text-la97-gray mt-2">Última actualización: Noviembre 2026 • La 97 FM (97.3 MHz - Mar del
          Plata)</p>
      </div>

      <div class="space-y-5 text-sm sm:text-base text-la97-gray leading-relaxed">
        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">1. Uso del Sitio y Transmisión en Vivo</h2>
          <p>
            El acceso al sitio web oficial de <strong>La 97 FM (97.3 MHz)</strong> y a su transmisión de audio en vivo
            es gratuito y está destinado exclusivamente al uso personal y no comercial de los oyentes y potenciales
            anunciantes.
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">2. Propiedad Intelectual</h2>
          <p>
            La marca <strong>La 97 Siempre!</strong>, sus logotipos, nombres de programas, piezas gráficas y contenidos
            propios publicados en este sitio pertenecen a la emisora. Queda prohibida su reproducción comercial sin
            autorización previa.
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">3. Participación en Sorteos y Concursos</h2>
          <p>
            La participación en sorteos realizados al aire o a través de WhatsApp (<code
              class="text-white">223 615-0000</code>) y redes sociales oficiales (<code
              class="text-white">@la97siempre</code>) implica la aceptación de las condiciones anunciadas en cada
            programa y la presentación del documento de identidad al momento de retirar premios en nuestros estudios de
            Moreno 2976, Mar del Plata.
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">4. Espacios Publicitarios</h2>
          <p>
            Las contrataciones de pauta radial, auspicios y banners web se formalizan directamente a través del
            departamento comercial en Mar del Plata (<a href="mailto:comercial@la97.com.ar"
              class="text-white underline">comercial@la97.com.ar</a>) o su representante oficial en Buenos Aires
            (Vocación).
          </p>
        </section>
      </div>
    </article>
  </main>

  <script>
      (function () {
        const audio = document.getElementById('la97Audio');
        const topPlayMirrorBtn = document.getElementById('topPlayMirrorBtn');
        const topPlayMirrorText = document.getElementById('topPlayMirrorText');
        if (topPlayMirrorBtn && audio) {
          topPlayMirrorBtn.addEventListener('click', () => {
            if (typeof window.la97TogglePlay === 'function') window.la97TogglePlay();
            else if (audio.paused) { const s = audio.src; audio.src = ''; audio.src = s; audio.play().catch(console.warn); }
            else audio.pause();
          });
        }
        if (audio && topPlayMirrorText) {
          audio.addEventListener('play', () => { topPlayMirrorText.textContent = 'PAUSAR 97.3'; });
          audio.addEventListener('pause', () => { topPlayMirrorText.textContent = 'EN VIVO 97.3'; });
        }
      })();
  </script>

<?php get_footer(); ?>
