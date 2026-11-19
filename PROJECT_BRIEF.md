# PROJECT_BRIEF.md — La 97 FM (97.3 MHz - Mar del Plata)

Master project blueprint, approved design decisions, client requirements, and improvement/WordPress-porting roadmap for **La 97 FM**.

---

## 1. Executive Summary & Client Objective

Based on the client brief from **Laura Spampinato (Lau Spampi — 14/11/2026)**:

> *"El objetivo es: una página web sencilla, profesional, institucional y con invitación a consultar por publicidad. No es un portal periodístico complejo. Queremos que identifiquen la radio, la reconozcan y puedan escucharla e interactuar fácilmente."*

### Core Goals
1. **Immediate Brand Recognition:** Present La 97 FM (97.3 MHz) as Mar del Plata's #1 station (**20,1% Kantar Ibope share**) with official colors and studio identity.
2. **Uninterrupted Live Audio:** Prominent **"EN VIVO 97.3"** and **"ESCUCHAR AHORA"** controls backed by the ShockMedia stream (`https://streaming01.shockmedia.com.ar:10586/stream`), playing inline without leaving the page.
3. **Real-Time Show Detection:** Automatically display the current live program, schedule/hosts, and show artwork according to Argentina time (`America/Argentina/Buenos_Aires`, UTC-3).
4. **Direct Listener Interaction:** Prominent WhatsApp button (`https://wa.me/5492236150000` — `223 615-0000`) plus live listener phone line (`0223 493-2502`).
5. **Commercial Conversion & Monetization:** Dedicated ad banner slots, commercial products showcase, dual contact routing (**Mar del Plata** & **Buenos Aires — Vocación**), and a **"Publicitá con nosotros"** inquiry form.
6. **Social Media Integration:** Direct links and live **Instagram (`@la97siempre` — `https://www.instagram.com/la97siempre/`)** feed section powering station news/updates.

---

## 2. Approved Visual & UX Decisions (Do's & Don'ts)

### ✅ Approved Standards
* **Selected Base Concept:** [concept-mediakit.html](file:///C:/dev/Personal/radio/concept-mediakit.html) combined with the fixed studio microphone backdrop from the HUD brand concept.
* **Fixed Background (`.studio-bg`):** `./design_client_idea/concept-cyber.jpg` with `background-attachment: fixed`, `background-size: cover`, and La 97 brand radial overlays (navy `#273547`, blue `#0366A2`, red `#E2051D`).
* **Surface System (`.mk-glass`):** Frosted dark navy glassmorphism (`backdrop-filter: blur(16px)`, `rgba(39, 53, 71, 0.80)` to `rgba(22, 32, 46, 0.90)`, border `rgba(3, 102, 162, 0.55)`).
* **Strict 5-Color Brand Palette:** `#273547` (`la97-navy`), `#0366A2` (`la97-blue`), `#F4B70D` (`la97-yellow`), `#E2051D` (`la97-red`), `#E3E1E3` (`la97-gray`), plus `#FFFFFF`. See [DESIGN.md](file:///C:/dev/Personal/radio/DESIGN.md).
* **Broadcast Console Layout:** Non-nested 5-tier player console in the hero (`Status Strip` → `Now Playing` → `Quantum Audio Tuner` canvas `#quantumWaveform` → `Unified Play + Volume/Mute Dock` → `WhatsApp CTA`).

### ❌ Explicitly Rejected / Removed Elements (Never Re-introduce)
* **No dev/concept switcher bars or cross-links** to archived experiments in `_archive/` (`concept-art.html`, `concept-hud.html`, `concept-hud-brand.html`, `concept-split.html`, `preview-tema.html`).
* **No red 3-pillars strip** (`100% / 24 hs. / HD`) directly below the hero.
* **No horizontal yellow section dividers** (`border-b-8 border-la97-yellow` / `border-y border-la97-yellow/40`).
* **No filled-circle dot "O"s (`.mk-dot-circle`)** inside headings — use standard display letters.
* **No nested boxes or floating corner yellow slashes** inside the audio player card.
* **No `Cobertura 100km` (`#cobertura-audiencia`) or `Público & Share` (`#público-ibope`) sections** on the main site.

---

## 3. 3-Page Site Architecture & Component Inventory

| Page | Local Prototype | Target WordPress Template | Primary Role |
| :--- | :--- | :--- | :--- |
| **Inicio** | [concept-mediakit.html](file:///C:/dev/Personal/radio/concept-mediakit.html) | [front-page.php](file:///C:/dev/Personal/radio/tema-la97/front-page.php) | Brand positioning (`20,1%`), live player + visualizer, banner spaces, commercial products, reviews, Instagram feed |
| **Programación** | [programacion.html](file:///C:/dev/Personal/radio/programacion.html) | [page-programacion.php](file:///C:/dev/Personal/radio/tema-la97/page-programacion.php) | Full weekday/weekend schedule, show logos, host photo slots, live `AHORA AL AIRE` indicator, banner slot |
| **Contacto** | [contacto.html](file:///C:/dev/Personal/radio/contacto.html) | `tema-la97/page-contacto.php` | Mar del Plata & Buenos Aires (Vocación) contact cards, `"Publicitá con nosotros"` form (`#formulario-publicidad`), Oyentes line |

### Page 1: Inicio ([concept-mediakit.html](file:///C:/dev/Personal/radio/concept-mediakit.html))
* **Sticky Glass Header:** Logo, `LA 97 SIEMPRE!`, nav links (`Inicio`, `Programación`, `Publicidad`, `Contacto`), `#topPlayMirrorBtn` (`EN VIVO 97.3`), and `¡SUMATE!` button.
* **Hero (`#liderazgo`):** Headline `Somos la radio con mayor audiencia de la ciudad.`, stacked yellow/red ribbons, `20,1%` Kantar Ibope block, and right-hand Broadcast Console (`#la97NowPlayingImg`, `#la97NowPlayingTitle`, `#la97NowPlayingSub`, `#quantumWaveform`, `#playToggleBtn`, `#volumeSlider`, `#muteBtn`, `WHATSAPP 223 615-0000`).
* **Commercial Banner 1:** Leaderboard slot (`970 × 120 px`) linking to `./contacto.html#formulario-publicidad`.
* **Novedades & Noticias desde Instagram (`#novedades-instagram`):** Placed directly **before** `Productos Destacados` — `@la97siempre`, Facebook, YouTube buttons + 4-card Instagram news preview grid (ready for `[instagram-feed]` shortcode).
* **Productos Destacados (`#productos-comerciales`):** Yellow header banner, Auspicios Exclusivos bar (`Programas`, `Noticias`, `Top Ten`, `Puesto N°1`, `Ranking 40x40`), and 3×3 dark-glass checkerboard matrix.
* **Testimonios Reales:** Word cloud + 3 real listener/advertiser reviews (Google, Instagram, Facebook).
* **Espacios de Banners Laterales:** Dual Lateral Banners (`480 × 120 px`) below Testimonios.

### Page 2: Programación Oficial ([programacion.html](file:///C:/dev/Personal/radio/programacion.html))
* **Schedule Blocks:** `Lunes a Viernes`, `Sábado`, and `Domingo` with sticky left day cards and `.mk-sched-row.la97-prog-row` show cards.
* **Current Show Artwork Coverage:**
  * Active local files in `design_client_idea/` and `tema-la97/assets/img/shows/`: `latrasnoche.jpg`, `bimbambum.jpg`, `40x40.jpg`, `superclasicos.jpg`, `top10.jpg`, `noche97.jpg`, `conexionsabado.jpg`, `lanochedomingo.jpg`.
  * Styled fallback badges currently used for: `Música Express`, `El Regreso`, `La Tarde del Domingo`.
* **Host Photo Slots:** Circular avatar slots (`MP`, `MG`, `CC / EM`, `GR`, `PL`) prepared on every row for drop-in replacement.
* **Commercial Banner:** Full-width `ESPACIO PUBLICITARIO` (`970 × 120 px`) at the bottom of the schedule.

### Page 3: Contacto Comercial y Oyentes ([contacto.html](file:///C:/dev/Personal/radio/contacto.html))
* **Mar del Plata (Sede Central):** Moreno 2976, `2234 91-6607`, `comercial@la97.com.ar`, Laura Spampinato (`https://wa.me/5492235760131`), `"Consultar por formulario →"` pre-selecting `mdp`.
* **Buenos Aires (Representante Vocación):** Elizabeth Helueni (`https://wa.me/5491144222641`, `elizabeth@vocacion.net`) & Claudia González (`https://wa.me/5491144222787`, `claudia@vocacion.net`), `"Consultar por formulario Buenos Aires →"` pre-selecting `bsas`.
* **Formulario de Consulta Comercial (`#formulario-publicidad` / `#la97AdForm`):** Fields for Name, Brand, Email, Phone/WhatsApp, Region (`#adRegion`), Product (`#adProduct`), Message (`#adMessage`), and dynamic target email preview (`#formTargetEmail`).
* **Línea de Oyentes en Vivo:** Direct WhatsApp (`223 615-0000`) and phone (`0223 493-2502`) banner.

---

## 4. High-Impact Next Improvements & Technical Debt

### 1. Fix Schedule Row Live Highlighting Sync (`programacion.html` ↔ `player.js`)
* **Current Gap:** [player.js](file:///C:/dev/Personal/radio/tema-la97/assets/js/player.js) checks `data-day="semana|sabado|domingo"` and `.la97-on-air-badge` (lines 213–225), whereas [programacion.html](file:///C:/dev/Personal/radio/programacion.html) rows currently use `data-days="1,2,3,4,5"` and `.mk-live-pill`.
* **Fix:** Standardize `programacion.html` rows to match `player.js` (`data-day` + `.la97-on-air-badge`) or support both in `updateLiveProgramStatus()`, and align the `Lunes a Viernes` evening slots (`El Regreso` 18–21, `Top Ten` 21–22, `La Noche` 22–00) and `Sábado` (`Conexión Sábado` 20–02) / `Domingo` (`Top Latino` 15–17) if the client confirms the extended grid from `player.js`.

### 2. Enable Uninterrupted Audio Navigation Across the 3 Pages
* **Current Gap:** `initSpaRouter()` in [player.js](file:///C:/dev/Personal/radio/tema-la97/assets/js/player.js) listens for `a[data-la97-nav]`, which is not yet attached to navigation links in `concept-mediakit.html`, `programacion.html`, and `contacto.html`. Navigating between pages currently reloads the document and stops audio playback.
* **Fix:**
  1. Add `data-la97-nav` to internal navigation links (`Inicio`, `Programación`, `Publicidad`, `Contacto`, `¡SUMATE!`).
  2. Re-run `initQuantumVisualizer()` and `initAdForm()` after `navigateWithoutStoppingAudio()` swaps `#main-content`.
  3. Update active nav link highlight (`text-la97-yellow`) on route change.

### 3. Host Photos & Remaining Show Logos Drop-In Table
Once Lau Spampi sends the host portraits and remaining show logos, drop files into `design_client_idea/` and `tema-la97/assets/img/shows/` (or `hosts/`) and replace the placeholders:

| Host / Show | Current Placeholder | Target File Path |
| :--- | :--- | :--- |
| Marisa Pappalardo | `MP` circle (`programacion.html`) | `./design_client_idea/hosts/marisa-pappalardo.jpg` |
| Marina Gorosito | `MG` circle (`programacion.html`) | `./design_client_idea/hosts/marina-gorosito.jpg` |
| Christian Carballo | `CC` circle (`programacion.html`) | `./design_client_idea/hosts/christian-carballo.jpg` |
| Eugenia Martinez | `EM` circle (`programacion.html`) | `./design_client_idea/hosts/eugenia-martinez.jpg` |
| Gerardo Reboredo | `GR` circle (`programacion.html`) | `./design_client_idea/hosts/gerardo-reboredo.jpg` |
| Pablo Larsen | `PL` circle (`programacion.html`) | `./design_client_idea/hosts/pablo-larsen.jpg` |
| Música Express | Styled text tile + 2023 URL in `player.js` | `./design_client_idea/musicaexpress.jpg` |
| El Regreso | Styled text tile + 2023 URL in `player.js` | `./design_client_idea/elregreso.jpg` |
| La Tarde del Domingo | Styled text tile + 2023 URL in `player.js` | `./design_client_idea/tardedomingo.jpg` |

### 4. WordPress Theme (`tema-la97`) Porting Checklist
1. **Asset Consolidation:** Copy `design_client_idea/concept-cyber.jpg` into `tema-la97/assets/img/concept-cyber.jpg` and set `window.LA97_THEME_URI = '<?php echo esc_url(get_template_directory_uri()); ?>'` in [header.php](file:///C:/dev/Personal/radio/tema-la97/header.php) so [player.js](file:///C:/dev/Personal/radio/tema-la97/assets/js/player.js) resolves show images dynamically in WordPress while falling back to `./design_client_idea/` locally.
2. **Template Porting:**
   * [header.php](file:///C:/dev/Personal/radio/tema-la97/header.php) & [footer.php](file:///C:/dev/Personal/radio/tema-la97/footer.php) → Sticky glass header, mobile drawer, persistent `<audio id="la97Audio">`, and social footer.
   * [front-page.php](file:///C:/dev/Personal/radio/tema-la97/front-page.php) → Hero + `20,1%` block + Broadcast Console + Banner slots + Productos Destacados + Testimonios + Instagram section.
   * [page-programacion.php](file:///C:/dev/Personal/radio/tema-la97/page-programacion.php) → Port the dark glass schedule layout from [programacion.html](file:///C:/dev/Personal/radio/programacion.html).
   * `tema-la97/page-contacto.php` → Create native template from [contacto.html](file:///C:/dev/Personal/radio/contacto.html).
3. **Instagram Plugin Integration:** Inside `#redes-instagram` on `front-page.php`, output `do_shortcode('[instagram-feed]')` (Smash Balloon Social Photo Feed) when installed, with the 4-card glass grid as fallback.
4. **Commercial Email Form Handler:** Wire `#la97AdForm` to a WordPress REST/AJAX endpoint (or `admin-post.php` with nonce + `sanitize_text_field` / `wp_mail`) that sends `mdp` inquiries to `comercial@la97.com.ar` and `bsas` inquiries to `elizabeth@vocacion.net` and `claudia@vocacion.net`.
5. **Ad Banner Management:** Expose the 3 banner slots (`Leaderboard 970×120`, `Lateral A 480×120`, `Lateral B 480×120`, plus Programación banner) via WordPress Customizer (`theme_mod`) or ACF options so the client can upload/swap sponsor banners and destination links without editing code.
6. **Package Theme:** Re-run `Compress-Archive -Path "C:\dev\Personal\radio\tema-la97" -DestinationPath "C:\dev\Personal\radio\tema-la97.zip" -Force`.
