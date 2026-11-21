<?php
/**
 * Template Name: Política de Privacidad
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full px-6 lg:px-12 xl:px-16 py-12 lg:py-16">
    <article class="mk-glass max-w-4xl mx-auto rounded-3xl p-8 sm:p-12 border-t-4 border-t-la97-yellow space-y-6">
      <div>
        <span class="bg-la97-yellow text-la97-navy text-[11px] font-black px-3 py-1 rounded uppercase tracking-wider">
          INFORMACIÓN LEGAL • LEY 25.326
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight mt-3">
          Política de Privacidad
        </h1>
        <p class="text-xs text-la97-gray mt-2">Última actualización: Noviembre 2026 • La 97 FM (97.3 MHz - Mar del Plata)</p>
      </div>

      <div class="space-y-5 text-sm sm:text-base text-la97-gray leading-relaxed">
        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">1. Responsable del Tratamiento</h2>
          <p>
            <strong>La 97 FM (97.3 MHz)</strong>, con estudios y planta transmisora en <strong>Moreno 2976, Mar del Plata, Provincia de Buenos Aires, Argentina</strong>, garantiza la confidencialidad y protección de los datos personales suministrados a través de este sitio web conforme a la <strong>Ley N° 25.326 de Protección de Datos Personales</strong>.
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">2. Datos que Recopilamos y Finalidad</h2>
          <p>
            Únicamente recopilamos los datos que el usuario ingresa voluntariamente en nuestro <strong>Formulario de Consulta Comercial</strong> (nombre, marca/empresa, correo electrónico, teléfono y mensaje), con el único fin de responder solicitudes de pauta publicitaria a través de nuestro equipo comercial en Mar del Plata (<a href="mailto:comercial@la97.com.ar" class="text-white underline">comercial@la97.com.ar</a>) o nuestro representante oficial en Buenos Aires (Vocación).
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">3. Servicios de Terceros y Redes Sociales</h2>
          <p>
            Este sitio integra la transmisión de audio en vivo provista por ShockMedia, enlaces externos hacia <strong>WhatsApp</strong> (<code class="text-white">223 615-0000</code>) y contenido embebido de nuestra cuenta oficial de <strong>Instagram (@la97siempre)</strong>. Cada plataforma externa se rige por sus propias políticas de privacidad.
          </p>
        </section>

        <section>
          <h2 class="text-lg font-black text-la97-yellow mb-2">4. Derechos de Acceso, Rectificación y Supresión</h2>
          <p>
            El titular de los datos personales tiene la facultad de ejercer el derecho de acceso, rectificación, actualización o supresión de sus datos enviando un correo a <a href="mailto:comercial@la97.com.ar" class="text-la97-yellow font-bold hover:underline">comercial@la97.com.ar</a>.
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
