# DESIGN.md — La 97 FM Visual Identity & TailwindCSS Design System

This document defines the visual identity, official brand color palette, layout architecture, and **TailwindCSS** implementation standards for **La 97 FM (97.3 MHz - Mar del Plata)**, aligned with the final approved glassmorphic studio design ([concept-mediakit.html](file:///C:/dev/Personal/radio/concept-mediakit.html), [programacion.html](file:///C:/dev/Personal/radio/programacion.html), [contacto.html](file:///C:/dev/Personal/radio/contacto.html)).

---

## 1. Official Brand Color System

We strictly use **5 official brand colors** (plus white `#FFFFFF`). Do not introduce arbitrary grays (`slate-*`) or off-brand blues into theme templates.

| Tailwind Token | CSS Variable | Hex Code | Role & Visual Usage |
| :--- | :--- | :--- | :--- |
| **`la97-navy`** | `--la97-navy` | `#273547` | **Predominant Blue & Primary Color Overall.** Used for the base backdrop tint, frosted `.mk-glass` panels, sticky header, global footer, and dark studio surfaces. |
| **`la97-blue`** | `--la97-blue` | `#0366A2` | **Secondary Accent Blue.** Used for glass panel borders (`rgba(3, 102, 162, 0.55)`), active highlights, commercial buttons, and inner ring of the Quantum Audio Tuner. |
| **`la97-yellow`** | `--la97-yellow` | `#F4B70D` | **Brand Yellow.** Used for headlines/KPI accents (`20,1%`), active show timestamps, WhatsApp CTAs, outer Quantum Tuner arc, and the Productos Destacados header banner. |
| **`la97-red`** | `--la97-red` | `#E2051D` | **Brand Red.** Used for `"EN VIVO"` buttons, audio play/pause circle, `"● AHORA AL AIRE"` live indicators, middle Quantum Tuner ring, and stacked hero highlight ribbon. |
| **`la97-gray`** | `--la97-gray` | `#E3E1E3` | **Brand Gray.** Used for secondary copy on dark glass surfaces, subtle hairline highlights, and outer waveform accents. |

### Tailwind Theme Configuration

```javascript
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
```

---

## 2. Backdrop, Surfaces & Layout System

All pages use a **fluid full-width (`w-full`) layout** floating over a fixed studio microphone backdrop:

- **Fixed Studio Backdrop (`.studio-bg` on `<body>`):** Uses `./design_client_idea/concept-cyber.jpg` with `background-attachment: fixed`, `background-size: cover`, `background-position: center`, and soft radial gradients in `#0366A2`, `#E2051D`, and `#273547`. Never apply extra CSS `filter: blur()` on top of the image.
- **Frosted Glass Surfaces (`.mk-glass`):**
  ```css
  background: linear-gradient(135deg, rgba(39, 53, 71, 0.80) 0%, rgba(22, 32, 46, 0.90) 100%);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(3, 102, 162, 0.55);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.45), inset 0 1px 0 rgba(227, 225, 227, 0.14);
  ```
- **Global Section Padding:** `w-full px-6 lg:px-12 xl:px-16`
- **Hero Grid:** 12-column responsive layout (`grid grid-cols-1 lg:grid-cols-12 gap-10 items-center`) with editorial messaging/KPI (`lg:col-span-7`) and the Broadcast Console (`lg:col-span-5`).
- **Social / Card Grids:** 2-to-4 column Tailwind Grid (`grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6`).

---

## 3. Typography & Visual Cleanliness Rules

- **Headings (`h1`–`h4`):** Bold/Black display typography (`font-black tracking-tight text-white`) with `text-wrap: balance` in [style.css](file:///C:/dev/Personal/radio/tema-la97/style.css). Always use standard letters (`PROGRAMACIÓN`, `Somos la radio`, `Productos Destacados`) — **do not** replace `"O"`s with solid circle dots.
  - Hero Headline (`h1`): `text-4xl sm:text-6xl xl:text-[4.1rem] font-black leading-[1.02] tracking-tight`
  - Section Headings (`h2`): `text-3xl sm:text-5xl font-black tracking-tight`
- **Body Copy (`p`, `li`):** Crisp legibility on dark glass (`text-la97-gray` / `text-la97-gray/90 leading-relaxed`) with `text-wrap: pretty`.
- **Section Transitions:** Sections alternate subtle translucent dark washes (`bg-black/30`, `bg-la97-navy/55`) without heavy solid yellow horizontal borders between bands.

---

## 4. Signature Visual Components

### A. Sticky Glass Header & Mobile Drawer
- **Header:** `bg-la97-navy/80 backdrop-blur-xl sticky top-0 z-40 border-b-2 border-la97-blue/60`. Includes circular station logo, primary links (`Inicio`, `Programación`, `Publicidad`, `Contacto`), live `"EN VIVO 97.3"` play mirror button (`#topPlayMirrorBtn`), and `"¡SUMATE!"` commercial CTA.
- **Mobile Drawer (`#drawer`):** Top-layer `popover="manual"` with horizontal CSS Scroll Snap (`scroll-snap-type: x mandatory`) and direct WhatsApp/Comercial quick links.

### B. Broadcast Audio Console & Quantum Audio Tuner
Located in the hero (`lg:col-span-5`) of [concept-mediakit.html](file:///C:/dev/Personal/radio/concept-mediakit.html) as a single clean `.mk-glass` panel (no nested container boxes or corner slashes):
1. **Top Status Strip:** Pulsing red `"TRANSMISIÓN HD EN VIVO"` pill + `97.3 MHz • MDQ`.
2. **Now Playing Row:** Show cover (`#la97NowPlayingImg`, `object-cover` rounded-2xl), `"AHORA AL AIRE EN LA 97"`, current show title (`#la97NowPlayingTitle`), host/schedule (`#la97NowPlayingSub`), and stream state (`#playerStatus`).
3. **Quantum Audio Tuner (`#quantumWaveform`):** `<canvas>` visualizer inside `bg-[#101824]/90 border border-la97-blue/50 rounded-2xl h-32` rendering three concentric rotating brand arcs (`#F4B70D`, `#E2051D`, `#0366A2`) and audio-synced waveform bars + particle sparks.
4. **Unified Transport & Volume Dock:** Single `bg-black/30 border border-white/10 rounded-2xl p-4` bar holding `#playToggleBtn`, `"ESCUCHAR AHORA"`, `.la97-volume-slider`, and `#muteBtn`.
5. **Listener CTA Footer:** Station tagline + yellow `WHATSAPP 223 615-0000` button.

### C. Monetizable Commercial Banner Spaces
Dashed-border `.mk-glass` containers clearly signaling ad inventory:
- **Leaderboard (`970 × 120 px`):** Placed below the hero on Home and below the schedule on [programacion.html](file:///C:/dev/Personal/radio/programacion.html).
- **Dual Lateral Banners (`480 × 120 px`):** Two-column grid beneath `#redes-instagram` on Home.

### D. Programming Schedule & Host Slots ([programacion.html](file:///C:/dev/Personal/radio/programacion.html))
- Sticky left day header cards (`.mk-glass` with `border-t-4` in yellow/red/blue) paired with `.mk-sched-row.la97-prog-row` show rows.
- Each row combines: `Horario` (`text-la97-yellow`) + `Show Logo` (`w-14 h-14 rounded-xl`) + `Title / Hosts / Description` + circular `Host Photo Avatar` (`w-11 h-11 rounded-full border-2 border-la97-yellow/70`).
- Active slot uses `.is-on-air` (`rgba(3, 102, 162, 0.42)` gradient + `6px solid #E2051D` left accent) and reveals the red live badge.

### E. Commercial Cards & Inquiry Form ([contacto.html](file:///C:/dev/Personal/radio/contacto.html))
- Dual `.mk-glass` regional cards (**Mar del Plata — Sede Central** with `border-b-la97-yellow` and **Buenos Aires — Vocación** with `border-b-la97-blue`), both equipped with direct email and clickable `wa.me` links plus pre-selection triggers (`selectRegion('mdp' | 'bsas')`).
- `#formulario-publicidad` (`#la97AdForm`) routes inquiries dynamically by region and product interest.

---

## 5. Accessibility, Motion & Interaction Rules

1. **Keyboard Focus Indicators:** Interactive elements use visible focus outlines (`focus-visible:outline-2 focus-visible:outline-la97-red focus-visible:outline-offset-4`).
2. **Reduced Motion Respect:** Continuous animations and smooth scroll behaviors respect `@media (prefers-reduced-motion: no-preference)`.
3. **Top-Layer Drawer Isolation:** Opening `#drawer` marks `<main>` as `inert` and moves focus inside the navigation sheet until dismissed.
4. **Uninterrupted Audio Transitions:** Internal navigation updates `#main-content` inside `document.startViewTransition()` while keeping `<audio id="la97Audio">` persistent in the header, re-binding page-specific scripts (Quantum Tuner canvas and Ad Form) on swap.
