<?php
/**
 * Página 404
 * @package tema-la97
 */
get_header(); ?>

  <main id="main-content" class="flex-1 w-full flex items-center justify-center px-6 lg:px-12 xl:px-16 py-16">
    <section
      class="mk-glass max-w-2xl w-full rounded-3xl p-8 sm:p-12 text-center border-t-4 border-t-la97-red shadow-2xl">
      <span
        class="inline-block bg-la97-red text-white text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">
        ERROR 404 • FUERA DE SINTONÍA
      </span>
      <div class="text-7xl sm:text-8xl font-black text-la97-yellow tracking-tighter leading-none mt-4">
        404
      </div>
      <h1 class="text-2xl sm:text-4xl font-black text-white tracking-tight mt-3">
        Esta frecuencia no tiene señal
      </h1>
      <p class="text-sm sm:text-base text-la97-gray mt-3 leading-relaxed">
        La página que buscás se movió o no existe. Podés volver a la portada, revisar la programación en vivo o
        comunicarte con nosotros.
      </p>

      <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" data-la97-nav
          class="bg-la97-yellow hover:bg-white text-la97-navy font-black text-xs uppercase tracking-wider px-6 py-3 rounded-xl shadow-lg transition-colors">
          ← Volver al Inicio
        </a>
        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav
          class="bg-la97-blue hover:bg-white hover:text-la97-navy text-white font-black text-xs uppercase tracking-wider px-6 py-3 rounded-xl transition-colors">
          Ver Programación
        </a>
        <a href="<?php echo esc_url(home_url('/contacto/')); ?>" data-la97-nav
          class="bg-white/10 hover:bg-la97-red text-white font-black text-xs uppercase tracking-wider px-6 py-3 rounded-xl border border-white/15 transition-colors">
          Ir a Contacto
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
            if (typeof window.la97TogglePlay === 'function') {
              window.la97TogglePlay();
            } else if (audio.paused) {
              const s = audio.src; audio.src = ''; audio.src = s; audio.play().catch(console.warn);
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
