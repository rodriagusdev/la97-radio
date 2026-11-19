<?php
/**
 * Cabecera del Tema La 97 FM (TailwindCSS)
 * Incluye navegación desktop, drawer móvil accesible y audio persistente.
 *
 * @package tema-la97
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TailwindCSS Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            la97: {
              navy: '#273547',   // Predominant primary blue
              blue: '#0366A2',   // Secondary accent blue
              yellow: '#F4B70D', // Brand yellow
              red: '#E2051D',    // Brand red
              gray: '#E3E1E3',   // Brand gray
            }
          }
        }
      }
    }
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#E3E1E3]/35 text-[#273547] antialiased selection:bg-[#E2051D] selection:text-white min-h-screen flex flex-col'); ?>>
<?php wp_body_open(); ?>

<!-- Persistent Global Audio Stream (Never interrupted across View-Transition navigations) -->
<audio id="la97Audio" src="https://streaming01.shockmedia.com.ar:10586/stream" preload="none"></audio>

<!-- Mobile Swipeable Navigation Drawer (popover="manual" top-layer) -->
<div class="Drawer" id="drawer" popover="manual">
  <div class="Drawer-scroller">
    <nav class="Drawer-sheet p-6" tabindex="-1" aria-label="Menú móvil">
      <div>
        <div class="flex items-center justify-between pb-6 mb-6 border-b border-white/10">
          <div class="flex items-center gap-3">
            <div class="bg-white rounded-lg p-1 w-10 h-10 flex items-center justify-center shrink-0">
              <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM" class="w-full h-full object-contain">
            </div>
            <div>
              <div class="text-white text-base font-black tracking-wide leading-tight">LA 97 FM</div>
              <div class="text-la97-yellow text-[10px] font-bold tracking-wider uppercase">97.3 MHz • MDP</div>
            </div>
          </div>
          <button type="button" id="drawer-close" class="w-9 h-9 rounded-lg bg-white/10 text-white flex items-center justify-center hover:bg-la97-red transition-colors" aria-label="Cerrar menú">
            ✕
          </button>
        </div>

        <ul class="space-y-2 text-sm font-extrabold tracking-wide">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>" data-la97-nav class="block px-4 py-3 rounded-xl bg-white/10 text-white hover:bg-la97-blue transition-colors">INICIO</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">PROGRAMACIÓN</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/programacion/#semana')); ?>" data-la97-nav class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">RANKING 40X40</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/#lo-ultimo')); ?>" data-la97-nav class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">NOTICIAS</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/#contacto')); ?>" data-la97-nav class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">CONTACTO</a>
          </li>
        </ul>
      </div>

      <div class="pt-6 border-t border-white/10 space-y-3">
        <div class="text-[11px] font-bold text-la97-gray/80 uppercase tracking-wider">Contacto Directo</div>
        <a href="https://wa.me/5492236150000" target="_blank" rel="noopener" class="flex items-center justify-between bg-la97-blue/40 border border-la97-blue px-4 py-2.5 rounded-xl text-xs font-extrabold text-white">
          <span>WhatsApp Oyentes</span>
          <span class="text-la97-yellow">223 615-0000</span>
        </a>
        <a href="tel:02234932502" class="flex items-center justify-between bg-white/5 border border-white/10 px-4 py-2.5 rounded-xl text-xs font-extrabold text-white">
          <span>Línea Oyentes</span>
          <span class="text-la97-gray">0223 493-2502</span>
        </a>
      </div>
    </nav>
  </div>
</div>

<!-- Sticky Institutional Top Header (#273547 Predominant - Full Width) -->
<header class="bg-la97-navy sticky top-0 z-50 px-6 lg:px-12 xl:px-16 py-4 shadow-lg border-b border-white/10 w-full">
  <div class="w-full flex items-center justify-between gap-4">
    
    <div class="flex items-center gap-3">
      <!-- Mobile Hamburger Trigger -->
      <button type="button" id="drawer-open" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="drawer" class="md:hidden w-10 h-10 rounded-lg bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors cursor-pointer">
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

      <!-- Brand / Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" data-la97-nav class="flex items-center gap-3 group" aria-label="Ir al inicio de La 97 FM">
        <div class="bg-white rounded-lg p-1 w-11 h-11 flex items-center justify-center shrink-0 shadow">
          <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM" class="w-full h-full object-contain">
        </div>
        <div>
          <div class="text-white text-lg font-black tracking-wide leading-tight group-hover:text-la97-yellow transition-colors">LA 97 FM</div>
          <div class="text-la97-gray text-[10px] font-bold tracking-wider uppercase hidden sm:block">LA RADIO DE SIEMPRE, SIEMPRE CONTIGO</div>
        </div>
      </a>
    </div>
    
    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center gap-7 text-xs lg:text-sm font-extrabold tracking-wider text-white" aria-label="Navegación principal">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'flex items-center gap-7',
              'fallback_cb'    => false,
          ));
      } else {
          $is_prog = is_page('programacion');
          $home_cls = !$is_prog ? 'text-la97-red border-b-2 border-la97-red pb-1' : 'hover:text-la97-yellow transition-colors pb-1';
          $prog_cls = $is_prog ? 'text-la97-red border-b-2 border-la97-red pb-1' : 'hover:text-la97-yellow transition-colors pb-1';
          echo '<a href="' . esc_url(home_url('/')) . '" data-la97-nav class="' . $home_cls . '">INICIO</a>';
          echo '<a href="' . esc_url(home_url('/programacion/')) . '" data-la97-nav class="' . $prog_cls . '">PROGRAMACIÓN</a>';
          echo '<a href="' . esc_url(home_url('/programacion/#semana')) . '" data-la97-nav class="hover:text-la97-yellow transition-colors pb-1">RANKING 40X40</a>';
          echo '<a href="' . esc_url(home_url('/#lo-ultimo')) . '" data-la97-nav class="hover:text-la97-yellow transition-colors pb-1">NOTICIAS</a>';
          echo '<a href="' . esc_url(home_url('/#contacto')) . '" data-la97-nav class="hover:text-la97-yellow transition-colors pb-1">CONTACTO</a>';
      }
      ?>
    </nav>

    <!-- Live Stream Button (With Signal Waves Icon matching mockup) -->
    <button type="button" id="la97TopLiveBtn" onclick="la97TogglePlay();" class="bg-la97-red hover:opacity-95 text-white text-xs font-black tracking-wider uppercase px-4 sm:px-5 py-2.5 rounded-lg inline-flex items-center gap-2 shadow-md hover:scale-105 transition-all cursor-pointer shrink-0">
      <svg aria-hidden="true" class="w-4 h-4 animate-pulse" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
        <circle cx="12" cy="12" r="2.2" fill="currentColor" stroke="none"/>
        <path d="M8.5 8.5a5 5 0 0 0 0 7M15.5 8.5a5 5 0 0 1 0 7M5.5 5.5a9 9 0 0 0 0 13M18.5 5.5a9 9 0 0 1 0 13"/>
      </svg>
      <span id="la97LiveBtnText">EN VIVO</span>
    </button>
  </div>
</header>
