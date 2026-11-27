<?php
/**
 * Pie de página del Tema La 97 FM
 * @package tema-la97
 */
?>
  <footer
    class="bg-la97-navy/90 backdrop-blur-md border-t-2 border-la97-blue/60 text-white w-full px-6 lg:px-12 xl:px-16 py-8">
    <div class="w-full flex flex-col md:flex-row items-center justify-between gap-4 text-xs">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-white p-1 flex items-center justify-center shrink-0">
          <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM"
            class="w-full h-full object-contain">
        </div>
        <span class="font-black uppercase tracking-wider">LA 97 SIEMPRE! • 97.3 MHz • MORENO 2976, MAR DEL PLATA</span>
      </div>
      <div class="flex flex-wrap items-center gap-3">
        <a href="https://www.instagram.com/la97siempre/" target="_blank" rel="noopener"
          class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-la97-red px-3 py-1.5 rounded-lg font-bold transition-colors"><i
            class="ph-bold ph-instagram-logo"></i> Instagram</a>
        <a href="https://www.facebook.com/la97siempre" target="_blank" rel="noopener"
          class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-la97-blue px-3 py-1.5 rounded-lg font-bold transition-colors"><i
            class="ph-bold ph-facebook-logo"></i> Facebook</a>
        <a href="https://x.com/La97Siempremdp" target="_blank" rel="noopener"
          class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-white hover:text-la97-navy px-3 py-1.5 rounded-lg font-bold transition-colors"><i
            class="ph-bold ph-x-logo"></i> X</a>
        <a href="https://wa.me/5492236150000" target="_blank" rel="noopener"
          class="inline-flex items-center gap-1.5 bg-white text-la97-navy px-3 py-1.5 rounded-lg font-black hover:bg-la97-red hover:text-white transition-colors"><i
            class="ph-bold ph-whatsapp-logo"></i> WhatsApp</a>
      </div>
      <div class="text-la97-gray font-bold flex flex-wrap items-center gap-3">
        <a href="<?php echo esc_url(home_url('/privacidad/')); ?>" data-la97-nav class="hover:text-white transition-colors">Privacidad</a>
        <span>•</span>
        <a href="<?php echo esc_url(home_url('/terminos/')); ?>" data-la97-nav class="hover:text-white transition-colors">Términos</a>
        <span>•</span>
        <span>© 2026 La 97 FM</span>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
