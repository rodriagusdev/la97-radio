/**
 * La 97 FM (97.3 MHz - Mar del Plata)
 * Controlador Global:
 * 1. Streaming de Audio en Vivo + Control de Volumen (slider guide)
 * 2. Detector Automático de Programa al Aire ("Ahora Sonando" hora Argentina)
 * 3. Menú Móvil Deslizable Top-Layer (navigation-drawer guide)
 * 4. Navegación sin Cortes de Audio con View Transitions (same-document-transitions guide)
 */

(function () {
  'use strict';

  var audio = null;
  var isPlayingState = false;

  var SHOWS_BASE = window.LA97_SHOWS_BASE || './design_client_idea/';

  // Grilla Oficial de La 97 FM (Hora Argentina UTC-3)
  var SCHEDULE = {
    semana: [
      { start: 0,  end: 6,  title: 'La Trasnoche de La 97!', sub: '00 a 06 hs • La mejor música para acompañarte', img: SHOWS_BASE + 'latrasnoche.jpg' },
      { start: 6,  end: 9,  title: 'Bim Bam Bum',             sub: '06 a 09 hs • Marina Gorosito',                 img: SHOWS_BASE + 'bimbambum.jpg' },
      { start: 9,  end: 13, title: 'Ranking 40 x 40',         sub: '09 a 13 hs • Eugenia Martinez y Christian Carballo', img: SHOWS_BASE + '40x40.jpg' },
      { start: 13, end: 18, title: 'Música Express',          sub: '13 a 18 hs • Gerardo Reboredo',                img: SHOWS_BASE + 'musicaexpress.jpg' },
      { start: 18, end: 24, title: 'El Regreso - Top Ten - La Noche', sub: '18 a 24 hs • Pablo Larsen',            img: SHOWS_BASE + 'elregreso.jpg' }
    ],
    sabado: [
      { start: 0,  end: 7,  title: 'La Trasnoche de La 97!',          sub: '00 a 07 hs • La mejor música para acompañarte', img: SHOWS_BASE + 'latrasnoche.jpg' },
      { start: 7,  end: 10, title: 'Superclásicos',                   sub: '07 a 10 hs • Eugenia Martinez',                img: SHOWS_BASE + 'superclasicos.jpg' },
      { start: 10, end: 14, title: 'Ranking 40 x 40',                 sub: '10 a 14 hs • Eugenia Martinez',                img: SHOWS_BASE + '40x40.jpg' },
      { start: 14, end: 20, title: 'Música Express de Fin de Semana', sub: '14 a 20 hs • Silvana Debenedetti',             img: SHOWS_BASE + 'musicaexpress.jpg' },
      { start: 20, end: 24, title: 'Conexión Sábado',                 sub: '20 a 24 hs • La previa de la noche',           img: SHOWS_BASE + 'conexionsabado.jpg' }
    ],
    domingo: [
      { start: 0,  end: 8,  title: 'La Trasnoche de La 97!',            sub: '00 a 08 hs • La mejor música para acompañarte', img: SHOWS_BASE + 'latrasnoche.jpg' },
      { start: 8,  end: 15, title: 'Superclásicos',                     sub: '08 a 15 hs • Marina Gorosito',                 img: SHOWS_BASE + 'superclasicos.jpg' },
      { start: 15, end: 22, title: 'Top Latino - La Tarde del Domingo', sub: '15 a 22 hs • Música para disfrutar',           img: SHOWS_BASE + 'tardedomingo.jpg' },
      { start: 22, end: 24, title: 'La Noche del Domingo',              sub: '22 a 24 hs • Siempre con vos',                 img: SHOWS_BASE + 'lanochedomingo.jpg' }
    ]
  };

  /* =========================================================================
     1. AUDIO STREAM & VOLUME SLIDER
     ========================================================================= */
  function initAudioAndControls() {
    audio = document.getElementById('la97Audio');
    if (audio && !audio._la97Bound) {
      audio._la97Bound = true;
      audio.volume = 0.85;

      audio.addEventListener('loadstart', function () {
        var statusEl = document.getElementById('playerStatus');
        if (statusEl && !audio.paused) statusEl.textContent = 'Conectando stream...';
      });

      audio.addEventListener('playing', function () {
        isPlayingState = true;
        updatePlayerUI(true);
      });

      audio.addEventListener('pause', function () {
        isPlayingState = false;
        updatePlayerUI(false);
      });

      audio.addEventListener('error', function () {
        isPlayingState = false;
        updatePlayerUI(false);
        var statusEl = document.getElementById('playerStatus');
        if (statusEl) statusEl.textContent = 'No se pudo conectar al stream en vivo';
      });
    }

    // Bind Play Toggle & Mute buttons (supports both tema-la97 and concept-mediakit IDs)
    var playToggleBtn = document.getElementById('playToggleBtn');
    if (playToggleBtn && !playToggleBtn._la97Bound) {
      playToggleBtn._la97Bound = true;
      playToggleBtn.addEventListener('click', function () {
        window.la97TogglePlay();
      });
    }

    var muteBtn = document.getElementById('muteBtn');
    if (muteBtn && !muteBtn._la97Bound) {
      muteBtn._la97Bound = true;
      muteBtn.addEventListener('click', function () {
        window.la97Mute();
      });
    }

    // Sync Volume Slider (slider guide with attr() fallback)
    var slider = document.getElementById('la97VolumeSlider') || document.getElementById('volumeSlider');
    if (slider) {
      if (audio) {
        slider.value = Math.round((audio.muted ? 0 : audio.volume) * 100);
      }

      function syncSliderValue() {
        slider.style.setProperty('--attr-min', slider.min || 0);
        slider.style.setProperty('--attr-max', slider.max || 100);
        slider.style.setProperty('--control-value', slider.value);
        slider.setAttribute('aria-valuetext', slider.value + '%');
        if (audio) {
          var v = parseInt(slider.value, 10) / 100;
          audio.volume = v;
          audio.muted = (v === 0);
          var muteIcon = document.getElementById('la97MuteIcon');
          if (muteIcon) muteIcon.textContent = audio.muted ? '🔇' : '🔊';
        }
      }

      syncSliderValue();
      if (!slider._la97Bound) {
        slider._la97Bound = true;
        slider.addEventListener('input', syncSliderValue);
      }
    }

    updatePlayerUI(isPlayingState);
  }

  function updatePlayerUI(isPlaying) {
    var playIcon = document.getElementById('la97PlayIcon');
    var svgPlayIcon = document.getElementById('playIcon');
    var playBtnText = document.getElementById('playBtnText');
    var statusEl = document.getElementById('playerStatus');
    var topLiveBtn = document.getElementById('la97TopLiveBtn');
    var liveBtnText = document.getElementById('la97LiveBtnText');
    var waveform = document.getElementById('la97Waveform');

    if (playIcon) {
      playIcon.innerHTML = isPlaying ? '&#10074;&#10074;' : '&#9654;';
    }
    if (svgPlayIcon) {
      svgPlayIcon.innerHTML = isPlaying
        ? '<path d="M6 5h4v14H6zm8 0h4v14h-4z" />'
        : '<path d="M8 5v14l11-7z" />';
    }
    if (playBtnText) {
      playBtnText.textContent = isPlaying ? 'PAUSAR RADIO' : 'ESCUCHANOS EN VIVO';
    }
    if (statusEl) {
      statusEl.textContent = isPlaying ? 'Reproduciendo en vivo • 97.3 MHz' : 'Listo para reproducir';
    }
    if (liveBtnText) {
      liveBtnText.textContent = isPlaying ? 'PAUSAR' : 'EN VIVO';
    }
    if (waveform) {
      if (isPlaying) {
        waveform.classList.add('playing');
      } else {
        waveform.classList.remove('playing');
      }
    }
    if (topLiveBtn) {
      topLiveBtn.setAttribute('aria-pressed', isPlaying ? 'true' : 'false');
    }
  }

  window.la97TogglePlay = function () {
    if (!audio) initAudioAndControls();
    if (!audio) return;

    if (audio.paused) {
      var currentSrc = audio.src;
      audio.src = '';
      audio.src = currentSrc;
      var playPromise = audio.play();
      if (playPromise !== undefined) {
        playPromise.catch(function (error) {
          console.warn('Reproducción bloqueada por políticas del navegador:', error);
        });
      }
    } else {
      audio.pause();
    }
  };

  window.la97Mute = function () {
    if (!audio) initAudioAndControls();
    if (!audio) return;
    audio.muted = !audio.muted;
    var muteIcon = document.getElementById('la97MuteIcon');
    if (muteIcon) {
      muteIcon.textContent = audio.muted ? '🔇' : '🔊';
    }
    var muteBtn = document.getElementById('muteBtn');
    if (muteBtn) {
      muteBtn.textContent = audio.muted ? 'UNMUTE' : 'MUTE';
    }
    var slider = document.getElementById('la97VolumeSlider') || document.getElementById('volumeSlider');
    if (slider) {
      slider.value = audio.muted ? 0 : Math.round(audio.volume * 100);
      slider.style.setProperty('--control-value', slider.value);
      slider.setAttribute('aria-valuetext', slider.value + '%');
    }
  };

  /* =========================================================================
     2. REAL-TIME LIVE SHOW DETECTOR (Argentina Timezone UTC-3)
     ========================================================================= */
  function updateLiveProgramStatus() {
    var now = new Date();
    var dayKey = 'semana';
    var hour = now.getHours();

    try {
      var parts = new Intl.DateTimeFormat('en-US', {
        timeZone: 'America/Argentina/Buenos_Aires',
        weekday: 'short',
        hour: 'numeric',
        hour12: false
      }).formatToParts(now);

      var wk = '';
      for (var i = 0; i < parts.length; i++) {
        if (parts[i].type === 'weekday') wk = parts[i].value;
        if (parts[i].type === 'hour') hour = parseInt(parts[i].value, 10) % 24;
      }
      if (wk === 'Sat') dayKey = 'sabado';
      else if (wk === 'Sun') dayKey = 'domingo';
      else dayKey = 'semana';
    } catch (e) {
      var d = now.getDay();
      if (d === 6) dayKey = 'sabado';
      else if (d === 0) dayKey = 'domingo';
    }

    var list = SCHEDULE[dayKey] || SCHEDULE.semana;
    var activeShow = list[0];
    for (var j = 0; j < list.length; j++) {
      if (hour >= list[j].start && hour < list[j].end) {
        activeShow = list[j];
        break;
      }
    }

    // Update Floating Player Card & Header Show Pill
    var titleEl = document.getElementById('la97NowPlayingTitle');
    var subEl = document.getElementById('la97NowPlayingSub');
    var imgEl = document.getElementById('la97NowPlayingImg');
    var headerShowEl = document.getElementById('la97HeaderShow');

    if (titleEl && activeShow) titleEl.textContent = activeShow.title;
    if (subEl && activeShow) subEl.textContent = activeShow.sub;
    if (headerShowEl && activeShow) headerShowEl.textContent = activeShow.title;
    if (imgEl && activeShow) {
      imgEl.src = activeShow.img;
      imgEl.alt = activeShow.title;
    }

    // Register OS / Lock-Screen Media Session Controls
    if ('mediaSession' in navigator && activeShow && typeof MediaMetadata === 'function') {
      try {
        navigator.mediaSession.metadata = new MediaMetadata({
          title: activeShow.title,
          artist: 'La 97 FM • 97.3 MHz Mar del Plata',
          album: activeShow.sub,
          artwork: [
            { src: activeShow.img, sizes: '512x512', type: 'image/jpeg' }
          ]
        });
        navigator.mediaSession.setActionHandler('play', function () {
          if (audio && audio.paused) window.la97TogglePlay();
        });
        navigator.mediaSession.setActionHandler('pause', function () {
          if (audio && !audio.paused) window.la97TogglePlay();
        });
      } catch (e) {}
    }

    // Highlight Active Row in Programación Schedule (supports both data-day and data-days)
    var dayNumMap = { domingo: '0', sabado: '6', semana: '1,2,3,4,5' };
    var currentDayNum = dayKey === 'domingo' ? '0' : (dayKey === 'sabado' ? '6' : '1');
    var rows = document.querySelectorAll('.la97-prog-row');
    rows.forEach(function (row) {
      var rDay = row.getAttribute('data-day');
      var rDays = row.getAttribute('data-days');
      var rStart = parseInt(row.getAttribute('data-start'), 10);
      var rEnd = parseInt(row.getAttribute('data-end'), 10);
      var badge = row.querySelector('.la97-on-air-badge') || row.querySelector('.mk-live-pill');

      var matchesDay = false;
      if (rDay) {
        matchesDay = (rDay === dayKey);
      } else if (rDays) {
        var dayTokens = rDays.split(',');
        if (dayKey === 'semana') {
          matchesDay = dayTokens.indexOf('1') !== -1 || dayTokens.indexOf('2') !== -1;
        } else {
          matchesDay = dayTokens.indexOf(currentDayNum) !== -1;
        }
      }

      var isCurrent = (matchesDay && hour >= rStart && hour < rEnd);
      if (isCurrent) {
        row.classList.add('is-on-air');
        if (badge && badge.classList.contains('la97-on-air-badge')) badge.classList.remove('hidden');
      } else {
        row.classList.remove('is-on-air');
        if (badge && badge.classList.contains('la97-on-air-badge')) badge.classList.add('hidden');
      }
    });
  }

  /* =========================================================================
     3. MOBILE NAVIGATION DRAWER (navigation-drawer guide)
     ========================================================================= */
  function initMobileDrawer() {
    var drawer = document.getElementById('drawer');
    var openBtn = document.getElementById('drawer-open');
    var closeBtn = document.getElementById('drawer-close');
    if (!drawer || !openBtn || drawer._la97DrawerBound) return;
    drawer._la97DrawerBound = true;

    var scroller = drawer.querySelector('.Drawer-scroller');
    var sheet = drawer.querySelector('.Drawer-sheet');

    async function openDrawer() {
      if (typeof drawer.showPopover === 'function') {
        try { drawer.showPopover(); } catch (e) {}
      }
      if (!CSS.supports('scroll-initial-target', 'nearest')) {
        scroller.scrollTo({ left: scroller.offsetWidth, behavior: 'instant' });
        await new Promise(function (r) {
          requestAnimationFrame(function () { requestAnimationFrame(r); });
        });
      }
      scroller.scrollTo({ left: 0, behavior: 'auto' });
    }

    function closeDrawer() {
      scroller.scrollTo({ left: scroller.offsetWidth, behavior: 'auto' });
    }

    window.la97CloseDrawer = closeDrawer;

    function onDrawerOpened() {
      var main = document.querySelector('main');
      if (main) main.inert = true;
      openBtn.setAttribute('aria-expanded', 'true');
      sheet.focus();
    }

    function onDrawerClosed() {
      if (typeof drawer.hidePopover === 'function') {
        try { drawer.hidePopover(); } catch (e) {}
      }
      var main = document.querySelector('main');
      if (main) main.inert = false;
      openBtn.setAttribute('aria-expanded', 'false');
    }

    var visibleThreshold = 1 / Math.max(window.innerWidth, 320);
    var observer = new IntersectionObserver(
      function (entries) {
        var entry = entries[entries.length - 1];
        if (!entry) return;
        if (entry.intersectionRatio < visibleThreshold) onDrawerClosed();
        if (entry.intersectionRatio === 1) onDrawerOpened();
      },
      { root: drawer, threshold: [visibleThreshold, 1] }
    );
    observer.observe(sheet);

    if (!CSS.supports('animation-timeline: scroll()')) {
      scroller.addEventListener('scroll', function () {
        var ratio = 1 - scroller.scrollLeft / Math.max(sheet.offsetWidth, 1);
        drawer.style.setProperty('--drawer-backdrop', Math.max(0, Math.min(1, ratio)));
      });
    }

    openBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

    drawer.addEventListener('click', function (event) {
      if (!sheet.contains(event.target)) closeDrawer();
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') closeDrawer();
    });
  }

  /* =========================================================================
     4. UNINTERRUPTED AUDIO SPA ROUTER (same-document-transitions guide)
     ========================================================================= */
  function initSpaRouter() {
    if (window.location.protocol === 'file:') return; // Local preview-tema.html uses its own view switcher
    if (document._la97RouterBound) return;
    document._la97RouterBound = true;

    document.addEventListener('click', function (e) {
      var link = e.target.closest('a[data-la97-nav]');
      if (!link) return;
      if (link.target === '_blank' || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

      var url = new URL(link.href, window.location.origin);
      if (url.origin !== window.location.origin) return;

      // Same-page hash navigation
      if (url.pathname === window.location.pathname && url.hash) {
        if (typeof window.la97CloseDrawer === 'function') window.la97CloseDrawer();
        return;
      }

      e.preventDefault();
      if (typeof window.la97CloseDrawer === 'function') window.la97CloseDrawer();
      navigateWithoutStoppingAudio(url.href);
    });

    window.addEventListener('popstate', function () {
      navigateWithoutStoppingAudio(window.location.href, true);
    });
  }

  function navigateWithoutStoppingAudio(targetUrl, isPopState) {
    fetch(targetUrl)
      .then(function (res) { return res.text(); })
      .then(function (html) {
        var parser = new DOMParser();
        var doc = parser.parseFromString(html, 'text/html');
        var newMain = doc.querySelector('#main-content');
        var currentMain = document.querySelector('#main-content');

        if (!newMain || !currentMain) {
          window.location.href = targetUrl;
          return;
        }

        function applySwap() {
          document.title = doc.title || document.title;
          currentMain.replaceWith(newMain);
          if (!isPopState) {
            window.history.pushState({}, '', targetUrl);
          }
          initAudioAndControls();
          updateLiveProgramStatus();

          // Update active header nav state
          var navLinks = document.querySelectorAll('header nav a[data-la97-nav]');
          var currentPath = new URL(targetUrl, window.location.origin).pathname;
          navLinks.forEach(function (a) {
            var aPath = new URL(a.href, window.location.origin).pathname;
            if (aPath === currentPath && !a.hash) {
              a.classList.add('text-la97-red');
            } else {
              a.classList.remove('text-la97-red', 'text-la97-yellow');
            }
          });

          window.dispatchEvent(new CustomEvent('la97:page-swapped'));

          var targetHash = new URL(targetUrl, window.location.origin).hash;
          if (targetHash) {
            var hashEl = document.querySelector(targetHash);
            if (hashEl) hashEl.scrollIntoView({ behavior: 'smooth' });
          } else {
            window.scrollTo({ top: 0, behavior: 'instant' });
          }
        }

        function focusNewHeading() {
          var h1 = document.querySelector('#main-content h1');
          if (h1) {
            h1.setAttribute('tabindex', '-1');
            h1.focus({ preventScroll: true });
          }
        }

        if (!document.startViewTransition) {
          applySwap();
          focusNewHeading();
          return;
        }

        var transition = document.startViewTransition(function () {
          applySwap();
        });
        transition.finished.finally(function () {
          focusNewHeading();
        });
      })
      .catch(function () {
        window.location.href = targetUrl;
      });
  }

  function boot() {
    initAudioAndControls();
    updateLiveProgramStatus();
    initMobileDrawer();
    initSpaRouter();
    setInterval(updateLiveProgramStatus, 60000);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
