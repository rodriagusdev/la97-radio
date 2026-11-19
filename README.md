# La 97 FM (97.3 MHz - Mar del Plata) — WordPress Redesign & TailwindCSS Theme

This repository contains the custom **TailwindCSS** WordPress theme (`tema-la97`), local interactive preview environment (`preview-tema.html`), standalone WordPress page modules (`pages/`), and automated REST API deployment scripts (`scripts/`) for **La 97 FM** (`https://la97.com.ar`).

> 🎨 **Visual Identity & UI Standards:** See **[DESIGN.md](file:///C:/dev/Personal/radio/DESIGN.md)** for the official 5-color brand palette (`#273547`, `#0366A2`, `#F4B70D`, `#E2051D`, `#E3E1E3`), TailwindCSS tokens, full-width layout specifications, and component guidelines.

---

## 📻 Station & Technical Reference

* **Production Domain:** `https://la97.com.ar`
* **Live Audio Stream (ShockMedia):** `https://streaming01.shockmedia.com.ar:10586/stream`
* **Official Logo URL:** `https://la97.com.ar/wp-content/uploads/2025/01/logo97-ws2.png`
* **Contact Details:**
  * **WhatsApp Oyentes:** `223 615-0000` (`https://wa.me/5492236150000`)
  * **Línea de Oyentes:** `0223 493-2502`
  * **WhatsApp Comercial:** `223 521-1023` (`https://wa.me/5492235211023`)
  * **Teléfono Comercial:** `0223 491-6607`
  * **Estudios y Planta Transmisora:** Moreno 2976, Mar del Plata, Argentina

---

## 📁 Repository Structure

```text
C:\dev\Personal\radio\
├── design_client_idea/            # Client mockups (image.jpg), Media Kit & PDF proposals
├── tema-la97/                     # Custom WordPress Theme (TailwindCSS + Custom CSS variables)
│   ├── assets/
│   │   ├── img/logo-la97.jpg      # Brand logo asset
│   │   └── js/player.js           # Stream player, live show detector, drawer & SPA router
│   ├── style.css                  # Theme metadata, polygon clip-paths, range slider & drawer rules
│   ├── functions.php              # Theme setup, menus & asset enqueuing
│   ├── header.php                 # Tailwind config, persistent <audio>, mobile drawer & top navbar
│   ├── front-page.php             # Full-width hero, floating live player, news grid & contact banner
│   ├── page-programacion.php      # Native template for /programacion/ with live show highlighting
│   ├── page.php                   # Generic template for static WordPress pages
│   ├── single.php                 # Individual news article template
│   ├── index.php                  # Fallback news archive grid template
│   └── footer.php                 # Global full-width site footer
├── pages/                         # Standalone WordPress Page Modules (for REST API injection)
│   ├── modo-renovacion.html       # Active "Modo Renovación" full-screen home (Page ID: 2337)
│   ├── grilla-programacion.html   # Standalone programming schedule (Page ID: 2)
│   ├── grilla-programacion-extendida.html
│   └── banner-renovacion.html     # Standalone announcement bar component
├── scripts/                       # WordPress REST API Automation
│   └── deploy-wp.ps1              # Deploys pages & front-page settings directly to WordPress
├── preview-tema.html              # Zero-install local browser preview of all tema-la97 PHP views
├── tema-la97.zip                  # Packaged WordPress theme ready for upload in Apariencia > Temas
├── DESIGN.md                      # Brand color palette, Tailwind tokens & UI/UX design system
└── README.md                      # Technical documentation & workflows
```

---

## 💻 Local Development & Preview Workflow

1. **Previewing PHP Views Locally ([preview-tema.html](file:///C:/dev/Personal/radio/preview-tema.html)):**
   - Open `C:\dev\Personal\radio\preview-tema.html` directly in your browser (or via VS Code *Live Server*).
   - Use the top black preview switcher bar to inspect **1. Portada (`front-page.php`)**, **2. Programación (`page-programacion.php`)**, **3. Noticia (`single.php`)**, and **4. Archivo (`index.php`)**.
   - It links directly to `./tema-la97/style.css` and `./tema-la97/assets/js/player.js`, allowing you to test the live ShockMedia stream, volume slider, real-time Argentina schedule detection, and View Transitions locally.

2. **Packaging the WordPress Theme (`tema-la97.zip`):**
   Whenever changes are made inside `tema-la97/`, re-package the installable `.zip` archive from PowerShell:
   ```powershell
   Compress-Archive -Path "C:\dev\Personal\radio\tema-la97" -DestinationPath "C:\dev\Personal\radio\tema-la97.zip" -Force
   ```

3. **Deploying Standalone Pages via WordPress REST API ([deploy-wp.ps1](file:///C:/dev/Personal/radio/scripts/deploy-wp.ps1)):**
   While the new theme is being finalized, `https://la97.com.ar/` displays `pages/modo-renovacion.html` on Front Page ID `2337`. To push updates to WordPress via REST API:
   ```powershell
   powershell -ExecutionPolicy Bypass -File "C:\dev\Personal\radio\scripts\deploy-wp.ps1"
   ```
