# Pre-Deploy Security & Hardening Checklist (Before WordPress Launch)

> [!CAUTION]
> **Do not deploy to production WordPress or make this repository public without completing item #1 below.**  
> Also note that GitHub Pages serves every file on `gh-pages` publicly by URL (even when the repository itself is private).

---

## 1. CRITICAL — Exposed WordPress Application Password

- **Location:** `scripts/deploy-wp.ps1` (lines 4–5)
- **Issue:** Hardcoded WordPress username (`la97siempre`) and WordPress Application Password (`$pass`) for `https://la97.com.ar/wp-json/wp/v2/...` are committed on both `main` and `gh-pages`.
- **Action required at WordPress handoff:**
  1. **Revoke** the existing Application Password immediately in WordPress Admin on `la97.com.ar` (**Users → Profile → Application Passwords** for `la97siempre`).
  2. Replace the hardcoded credentials in `scripts/deploy-wp.ps1` with environment variables (e.g. `$env:LA97_WP_USER` and `$env:LA97_WP_APP_PASS`), or delete `scripts/deploy-wp.ps1` if REST deployment is no longer used.
  3. Ensure `scripts/` is never packaged into `tema-la97.zip` or uploaded to `wp-content/themes/`.
  4. Delete/nuke this preview Git repository once WordPress migration is complete (as planned).

---

## 2. HIGH — Commercial Contact Form (`#la97AdForm`) Backend Security

- **Location:** `contacto.html` (line 312) — currently static client-side only; needs a WordPress handler (`PROJECT_BRIEF.md`).
- **Action required when wiring to WordPress (`admin-post.php` or WP REST API):**
  1. **CSRF protection:** Require and verify a WordPress nonce (`wp_nonce_field()` + `check_admin_referer()` or `wp_verify_nonce()`).
  2. **Input sanitization & validation:** Sanitize every field (`sanitize_text_field()`, `sanitize_email()`, `sanitize_textarea_field()`), validate `is_email()`, and whitelist the destination selector (`mdp` / `bsas`) on the server so attackers cannot inject arbitrary recipients or headers into `wp_mail()`.
  3. **Anti-spam / abuse protection:** Add a hidden honeypot field and rate-limiting (or Turnstile/reCAPTCHA) to protect `comercial@la97.com.ar`, `elizabeth@vocacion.net`, and `claudia@vocacion.net`.

---

## 3. MEDIUM — Third-Party Runtime CDN Scripts

- **Location:** `concept-mediakit.html` (lines 53–54) and static HTML pages (`cdn.tailwindcss.com`, `unpkg.com/@phosphor-icons/web`).
- **Issue:** Loading Tailwind's runtime JIT compiler and unpinned icon scripts from external CDNs without Subresource Integrity (`integrity`) introduces supply-chain risk and runtime overhead in production.
- **Action required for WordPress theme (`tema-la97`):**
  1. Build a compiled static CSS bundle (`tema-la97/assets/css/`) instead of shipping `cdn.tailwindcss.com` in production.
  2. Self-host Phosphor Icons (or inline used SVGs) inside `tema-la97/assets/`.

---

## 4. LOW — WordPress PHP Escaping & Packaging Hygiene

- **Current status:** Audited `tema-la97/*.php` and `tema-la97/assets/js/player.js`:
  - No direct `$_GET`, `$_POST`, `$_REQUEST`, or `$_SERVER` superglobal usage found in `tema-la97/*.php`.
  - `player.js` only assigns static entity/SVG literals to `innerHTML` (lines 130, 133).
- **Action required when porting HTML updates into `tema-la97/*.php`:**
  1. Escape all dynamic PHP output with `esc_html()`, `esc_attr()`, and `esc_url()`.
  2. Rebuild `tema-la97.zip` strictly from `tema-la97/` (excluding `.git/`, `scripts/`, and `design_client_idea/` working drafts).
