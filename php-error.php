<?php
/**
 * WordPress Fatal Error Drop-in (wp-content/php-error.php)
 * Standalone branded fallback for La 97! FM 97.3 — zero WordPress dependencies.
 */
if (!headers_sent()) {
    http_response_code(500);
    header('Content-Type: text/html; charset=UTF-8');
    header('Retry-After: 300');
}
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>La 97! FM 97.3 | Seguí escuchando en vivo</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      min-height: 100vh;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
      color: #ffffff;
      background: radial-gradient(circle at 20% 20%, rgba(226, 5, 29, 0.22), transparent 45%),
                  radial-gradient(circle at 80% 80%, rgba(3, 102, 162, 0.35), transparent 50%),
                  linear-gradient(155deg, #0b1524 0%, #182332 55%, #0b2447 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
    }
    .card {
      width: 100%;
      max-width: 640px;
      background: rgba(24, 35, 50, 0.78);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.14);
      border-radius: 28px;
      padding: 36px 28px;
      text-align: center;
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
    }
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(226, 5, 29, 0.18);
      border: 1px solid rgba(226, 5, 29, 0.6);
      color: #ffffff;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 6px 14px;
      border-radius: 999px;
      margin-bottom: 18px;
    }
    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #E2051D;
      box-shadow: 0 0 10px #E2051D;
    }
    h1 {
      font-size: clamp(1.6rem, 4vw, 2.3rem);
      font-weight: 900;
      line-height: 1.15;
      margin-bottom: 12px;
    }
    h1 span { color: #F4B70D; }
    p.sub {
      color: #cbd5e1;
      font-size: 15px;
      line-height: 1.55;
      max-width: 480px;
      margin: 0 auto 26px;
    }
    .play-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: #E2051D;
      color: #ffffff;
      border: none;
      border-radius: 999px;
      padding: 15px 30px;
      font-size: 14px;
      font-weight: 900;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      cursor: pointer;
      box-shadow: 0 10px 28px rgba(226, 5, 29, 0.45);
      transition: transform 0.15s ease, background 0.15s ease;
    }
    .play-btn:hover { transform: translateY(-1px); background: #c50419; }
    .play-btn.playing { background: #16a34a; box-shadow: 0 10px 28px rgba(22, 163, 74, 0.45); }
    .links {
      margin-top: 28px;
      padding-top: 22px;
      border-top: 1px solid rgba(255, 255, 255, 0.12);
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
    }
    .link-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.14);
      color: #ffffff;
      text-decoration: none;
      font-size: 13px;
      font-weight: 700;
      padding: 10px 16px;
      border-radius: 12px;
    }
    .link-pill:hover { border-color: #F4B70D; color: #F4B70D; }
    .foot {
      margin-top: 20px;
      font-size: 12px;
      color: #94a3b8;
    }
  </style>
</head>
<body>
  <main class="card">
    <div class="badge"><span class="dot"></span> 97.3 MHz • Mar del Plata</div>
    <h1>Estamos realizando <span>tareas técnicas</span></h1>
    <p class="sub">
      Nuestro sitio web está siendo actualizado en este momento, pero la radio sigue sonando las 24 horas. Escuchanos en vivo acá:
    </p>

    <button type="button" id="la97ErrPlayBtn" class="play-btn">
      <span id="la97ErrIcon">&#9654;</span>
      <span id="la97ErrLabel">Escuchar en vivo</span>
    </button>
    <audio id="la97ErrAudio" src="https://streaming01.shockmedia.com.ar:10586/stream" preload="none"></audio>

    <div class="links">
      <a class="link-pill" href="https://wa.me/5492236150000" target="_blank" rel="noopener">WhatsApp Oyentes: 223 615-0000</a>
      <a class="link-pill" href="tel:02234916607">Comercial: 223 491-6607</a>
    </div>

    <div class="foot">La 97! FM 97.3 • Moreno 2976, Mar del Plata</div>
  </main>

  <script>
    (function () {
      var btn = document.getElementById('la97ErrPlayBtn');
      var audio = document.getElementById('la97ErrAudio');
      var icon = document.getElementById('la97ErrIcon');
      var label = document.getElementById('la97ErrLabel');
      if (!btn || !audio) return;
      btn.addEventListener('click', function () {
        if (audio.paused) {
          var s = audio.src;
          audio.src = '';
          audio.src = s;
          audio.play().then(function () {
            btn.classList.add('playing');
            icon.innerHTML = '&#10074;&#10074;';
            label.textContent = 'Pausar en vivo';
          }).catch(function () {});
        } else {
          audio.pause();
          btn.classList.remove('playing');
          icon.innerHTML = '&#9654;';
          label.textContent = 'Escuchar en vivo';
        }
      });
    })();
  </script>
</body>
</html>
