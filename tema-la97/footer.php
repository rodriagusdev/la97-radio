<?php
/**
 * Pie de página del Tema La 97 FM (TailwindCSS)
 *
 * @package tema-la97
 */
?>
<footer class="bg-la97-navy text-la97-gray px-6 lg:px-12 xl:px-16 py-10 text-sm border-t border-white/10 mt-auto w-full">
  <div class="w-full flex flex-col md:flex-row justify-between items-center gap-6">
    <div class="flex items-center gap-3.5">
      <div class="bg-white rounded-lg p-1 w-9 h-9 flex items-center justify-center shrink-0">
        <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM" class="w-full h-full object-contain">
      </div>
      <div>
        <strong class="text-white font-black tracking-wide block leading-tight">La 97 FM (97.3 MHz)</strong>
        <span class="text-xs text-la97-gray/80">Estudios y Planta Transmisora: Moreno 2976, Mar del Plata, Argentina.</span>
      </div>
    </div>

    <div class="flex flex-wrap items-center gap-4 text-xs font-bold text-white">
      <a href="https://wa.me/5492236150000" target="_blank" rel="noopener" class="hover:text-la97-yellow transition-colors">WhatsApp: 223 615-0000</a>
      <span class="text-la97-yellow">&bull;</span>
      <a href="tel:02234932502" class="hover:text-la97-yellow transition-colors">Oyentes: 0223 493-2502</a>
      <span class="text-la97-yellow">&bull;</span>
      <a href="https://wa.me/5492235211023" target="_blank" rel="noopener" class="hover:text-la97-yellow transition-colors">Comercial: 223 521-1023</a>
    </div>

    <div class="text-xs text-la97-gray/70">
      &copy; <?php echo date('Y'); ?> La 97 FM. Todos los derechos reservados.
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
