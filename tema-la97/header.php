<?php
/**
 * Cabecera del Tema La 97 FM
 * @package tema-la97
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La 97! FM 97.3 | Radio de Mar del Plata y publicidad radial</title>
  <meta name="description"
    content="Escuchá La 97! FM 97.3, radio de Mar del Plata. Música, entretenimiento, programación en vivo y soluciones de publicidad para empresas y marcas.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_AR">
  <meta property="og:site_name" content="La 97 FM — 97.3 MHz">
  <meta property="og:title" content="La 97 FM — 97.3 MHz Mar del Plata | Tu Radio, Tu Música!">
  <meta property="og:description"
    content="Escuchá La 97 FM en vivo las 24 hs. Conectamos generaciones en el 97.3 MHz de Mar del Plata.">
  <meta property="og:image" content="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" type="image/png" href="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png">
  <link rel="apple-touch-icon" href="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://la97.com.ar/">
  <script type="application/ld+json">
    [
      {
        "@context": "https://schema.org",
        "@type": "RadioStation",
        "name": "La 97! FM",
        "alternateName": "La 97 Siempre!",
        "url": "https://la97.com.ar/",
        "logo": "https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png",
        "broadcastFrequency": "97.3 MHz",
        "description": "La radio de mayor audiencia de Mar del Plata (20,1% share Kantar Ibope 2024). Programación local en vivo las 24 hs y soluciones de publicidad radial.",
        "telephone": "+54-223-491-6607",
        "email": "comercial@la97.com.ar",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Moreno 2976",
          "addressLocality": "Mar del Plata",
          "addressRegion": "Buenos Aires",
          "addressCountry": "AR"
        },
        "sameAs": [
          "https://www.instagram.com/la97siempre/"
        ]
      },
      {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "La 97! FM 97.3",
        "url": "https://la97.com.ar/"
      }
    ]
  </script>
  <!-- TailwindCSS Play CDN (Exact 5-color system from DESIGN.md) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
  <style>
    /* =====================================================================
       MEDIA KIT LA 97 — OFFICIAL VISUAL LANGUAGE ADAPTATION
       Strictly using #273547, #0366A2, #F4B70D, #E2051D, #E3E1E3
       ===================================================================== */

    /* Default Page Gradient Background (below the hero) */
    .page-default-bg {
      background: linear-gradient(180deg, #1b2636 0%, #273547 50%, #1a2433 100%);
    }

    /* Hero Studio Backdrop — background.webp ONLY in the first part, fading smoothly into #1b2636 */
    .mk-hero-surface {
      background-color: #1b2636;
      background-image:
        linear-gradient(to bottom, rgba(27, 38, 54, 0.12) 0%, rgba(27, 38, 54, 0) 58%, #1b2636 100%),
        radial-gradient(ellipse at 70% 30%, rgba(3, 102, 162, 0.48) 0%, transparent 60%),
        radial-gradient(ellipse at 20% 70%, rgba(226, 5, 29, 0.28) 0%, transparent 50%),
        radial-gradient(circle at 50% 50%, rgba(39, 53, 71, 0.42) 0%, rgba(27, 38, 54, 0.86) 100%),
        url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/background.webp');
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
    }

    .mk-hero-surface::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(125deg, transparent 42%, rgba(39, 53, 71, 0.22) 42.2%, rgba(39, 53, 71, 0.22) 72%, transparent 72.2%),
        linear-gradient(215deg, transparent 58%, rgba(244, 183, 13, 0.1) 58.2%);
      pointer-events: none;
      z-index: 1;
    }

    /* Page 9 Top-Right Diagonal Yellow Stripes (//////) */
    .mk-yellow-slashes {
      background: repeating-linear-gradient(-62deg,
          #F4B70D,
          #F4B70D 10px,
          transparent 10px,
          transparent 20px);
    }

    /* Page 4 & 12 Subtle Diagonal Silver/Gray Stripes */
    .mk-gray-slashes {
      background: repeating-linear-gradient(-62deg,
          rgba(39, 53, 71, 0.06),
          rgba(39, 53, 71, 0.06) 18px,
          transparent 18px,
          transparent 36px);
    }

    /* Media Kit Signature Filled-Circle Dot Accent ("PÚBLIC●", "n°1") */
    .mk-dot-circle {
      display: inline-block;
      width: 0.72em;
      height: 0.72em;
      border-radius: 9999px;
      background-color: currentColor;
      vertical-align: baseline;
      margin-inline: 0.03em;
    }

    /* Page 5 & 7 Highlighted Ribbon Text */
    .mk-ribbon-yellow {
      background-color: #F4B70D;
      color: #273547;
      padding: 0.15em 0.55em;
      display: inline-block;
      box-decoration-break: clone;
      -webkit-box-decoration-break: clone;
    }

    .mk-ribbon-red {
      background-color: #E2051D;
      color: #FFFFFF;
      padding: 0.15em 0.55em;
      display: inline-block;
      box-decoration-break: clone;
      -webkit-box-decoration-break: clone;
    }

    /* Radar Concentric Rings (Page 3 100km Coverage) */
    @keyframes radar-ping {
      0% {
        transform: scale(0.85);
        opacity: 0.75;
      }

      100% {
        transform: scale(1.35);
        opacity: 0;
      }
    }

    .mk-radar-pulse {
      animation: radar-ping 3.2s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    /* Glassmorphism Panels matching Concept HUD Brand */
    .mk-glass {
      background: linear-gradient(135deg, rgba(39, 53, 71, 0.80) 0%, rgba(22, 32, 46, 0.90) 100%);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(3, 102, 162, 0.55);
      box-shadow:
        0 20px 50px rgba(0, 0, 0, 0.45),
        inset 0 1px 0 rgba(227, 225, 227, 0.14);
    }

    /* Active Schedule Row Highlight (Dark Glass Edition) */
    .mk-sched-row.is-on-air {
      background: linear-gradient(135deg, rgba(3, 102, 162, 0.42) 0%, rgba(39, 53, 71, 0.92) 100%) !important;
      border-color: rgba(244, 183, 13, 0.55) !important;
      border-left: 6px solid #E2051D !important;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.35);
    }

    .mk-sched-row .mk-live-pill {
      display: none;
    }

    .mk-sched-row.is-on-air .mk-live-pill {
      display: inline-flex;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body
  class="page-default-bg text-white antialiased selection:bg-[#E2051D] selection:text-white min-h-screen flex flex-col overflow-x-hidden">

  <!-- Persistent Live Audio Stream (ShockMedia) -->
  <audio id="la97Audio" src="https://streaming01.shockmedia.com.ar:10586/stream" preload="none"></audio>

  <!-- =====================================================================
       MOBILE SWIPEABLE NAVIGATION DRAWER
       ===================================================================== -->
  <div class="Drawer" id="drawer" popover="manual">
    <div class="Drawer-scroller">
      <nav class="Drawer-sheet p-6" tabindex="-1" aria-label="Menú móvil">
        <div>
          <div class="flex items-center justify-between pb-6 mb-6 border-b border-white/10">
            <div class="flex items-center gap-3">
              <div class="bg-white rounded-lg p-1 w-10 h-10 flex items-center justify-center shrink-0">
                <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM"
                  class="w-full h-full object-contain">
              </div>
              <div>
                <div class="text-white text-base font-black tracking-wide leading-tight">LA 97 FM</div>
                <div class="text-la97-yellow text-[10px] font-bold tracking-wider uppercase">97.3 MHz • RADIO N°1</div>
              </div>
            </div>
            <button type="button" id="drawer-close"
              class="w-9 h-9 rounded-lg bg-white/10 text-white flex items-center justify-center hover:bg-la97-red transition-colors"
              aria-label="Cerrar menú">
              ✕
            </button>
          </div>

          <ul class="space-y-2 text-sm font-extrabold tracking-wide">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" onclick="window.la97CloseDrawer && window.la97CloseDrawer();"
                class="block px-4 py-3 rounded-xl bg-la97-red text-white hover:bg-la97-red/90 transition-colors">INICIO</a>
            </li>
            <li><a href="<?php echo esc_url(home_url('/programacion/')); ?>" onclick="window.la97CloseDrawer && window.la97CloseDrawer();"
                class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">PROGRAMACIÓN
                OFICIAL</a></li>
            <li><a href="<?php echo esc_url(home_url('/publicita-ya/')); ?>" onclick="window.la97CloseDrawer && window.la97CloseDrawer();"
                class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">PUBLICITÁ YA!</a></li>
            <li><a href="<?php echo esc_url(home_url('/contacto/')); ?>" onclick="window.la97CloseDrawer && window.la97CloseDrawer();"
                class="block px-4 py-3 rounded-xl text-la97-gray hover:bg-white/10 hover:text-white transition-colors">CONTACTO
                COMERCIAL</a></li>
          </ul>
        </div>

        <div class="pt-6 border-t border-white/10 space-y-3">
          <div class="text-[11px] font-bold text-la97-gray/80 uppercase tracking-wider">Estudios Moreno 2976</div>
          <a href="https://wa.me/5492236150000" target="_blank" rel="noopener"
            class="flex items-center justify-between bg-la97-yellow text-la97-navy px-4 py-2.5 rounded-xl text-xs font-black">
            <span>WhatsApp Oyentes</span>
            <span>223 615-0000</span>
          </a>
          <a href="tel:02234916607"
            class="flex items-center justify-between bg-white/10 text-white px-4 py-2.5 rounded-xl text-xs font-bold">
            <span>Comercial MDP</span>
            <span class="text-la97-yellow">223 491-6607</span>
          </a>
        </div>
      </nav>
    </div>
  </div>

  <!-- =====================================================================
       TOP INSTITUTIONAL HEADER (Inspired by Page 1 Top Band + Floating Circle Logo)
       ===================================================================== -->
  <header class="bg-la97-navy/80 backdrop-blur-xl sticky top-0 z-40 border-b-2 border-la97-blue/60 shadow-xl w-full">
    <div class="w-full px-6 lg:px-12 xl:px-16 py-3.5 flex items-center justify-between gap-4">
      <!-- Left Mobile Trigger + Brand -->
      <div class="flex items-center gap-3.5">
        <button type="button" id="drawer-open" aria-label="Abrir menú de navegación" aria-expanded="false"
          aria-controls="drawer"
          class="lg:hidden w-10 h-10 rounded-xl bg-white/10 hover:bg-la97-red text-white flex items-center justify-center transition-colors cursor-pointer">
          <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.3"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <a href="#top" class="flex items-center gap-3.5 group">
          <div
            class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white p-1.5 border-2 border-la97-yellow shadow-lg flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
            <img src="https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png" alt="La 97 FM 97.3 MHz"
              class="w-full h-full object-contain">
          </div>
          <div>
            <div class="flex items-center gap-2">
              <span class="text-white text-lg sm:text-xl font-black tracking-tight uppercase leading-none">LA 97
                SIEMPRE!</span>
              <span class="bg-la97-yellow text-la97-navy text-[10px] font-black px-2 py-0.5 rounded uppercase">RADIO
                N°1</span>
            </div>
            <div class="text-la97-gray text-[11px] font-bold tracking-wider uppercase mt-1">
              97.3 MHz • MORENO 2976 • MAR DEL PLATA
            </div>
          </div>
        </a>
      </div>

      <!-- Center Navigation Links -->
      <nav aria-label="Navegación principal"
        class="hidden lg:flex items-center gap-6 text-xs font-black uppercase tracking-wider text-la97-gray">
        <a href="<?php echo esc_url(home_url('/')); ?>" data-la97-nav class="<?php echo is_front_page() ? 'text-la97-red' : 'hover:text-la97-yellow'; ?> transition-colors">Inicio</a>
        <a href="<?php echo esc_url(home_url('/programacion/')); ?>" data-la97-nav class="<?php echo is_page('programacion') ? 'text-la97-red' : 'hover:text-la97-yellow'; ?> transition-colors">Programación</a>
        <a href="<?php echo esc_url(home_url('/publicita-ya/')); ?>" data-la97-nav class="<?php echo is_page('publicita-ya') ? 'text-la97-red' : 'hover:text-la97-yellow'; ?> transition-colors">Publicitá Ya!</a>
        <a href="<?php echo esc_url(home_url('/contacto/')); ?>" data-la97-nav class="<?php echo is_page('contacto') ? 'text-la97-red' : 'hover:text-la97-yellow'; ?> transition-colors">Contacto</a>
      </nav>

      <!-- Right Live Show Pill & Commercial CTA -->
      <div class="flex items-center gap-2.5">
        <div
          class="hidden xl:inline-flex items-center gap-2 text-[11px] font-bold text-la97-gray bg-white/5 px-3 py-1.5 rounded-full border border-white/10">
          <span class="w-1.5 h-1.5 rounded-full bg-la97-yellow"></span>
          <span>Al aire: <strong id="la97HeaderShow" class="text-white font-black">La 97 FM</strong></span>
        </div>
        <a href="<?php echo esc_url(home_url('/contacto/')); ?>" data-la97-nav
          class="hidden sm:inline-flex items-center bg-la97-blue hover:bg-white hover:text-la97-navy text-white font-black text-xs uppercase tracking-wider px-4 py-2.5 rounded-full transition-colors">
          ¡SUMATE!
        </a>
      </div>
    </div>
  </header>
