---
name: testing-laravel-vite-ui
description: Prepare and end-to-end test a Laravel Blade/Vite public site with responsive navigation, persisted themes, and server-validated forms.
---

# Testing Laravel Blade/Vite public sites

## Devin Secrets Needed

None for public, unauthenticated page and form flows.

## Runtime setup

1. Work from the Laravel application directory, not the repository root.
2. If `php` or `composer` is absent from the shell `PATH`, check common managed-runtime locations before installing duplicates. On Devin Ubuntu images, Herd Lite may provide:
   - `/home/ubuntu/.config/herd-lite/bin/php`
   - `/home/ubuntu/.config/herd-lite/bin/composer`
3. Ensure `.env`, `APP_KEY`, SQLite, and database-backed session/cache tables exist:

   ```sh
   cp .env.example .env
   touch database/database.sqlite
   php artisan key:generate
   php artisan migrate --force
   ```

4. Run `npm install && npm run build` whenever Blade uses `@vite`; a server-rendered route may return HTTP 200 while still failing visually if `public/build/manifest.json` is absent.
5. Start with `php artisan serve --host=127.0.0.1 --port=8000` and confirm both the document and hashed CSS/JS return HTTP 200 before recording.

## UI test strategy

- Test responsive behavior at both a desktop width at or above the Tailwind `lg` breakpoint and a narrow phone width below it.
- For grouped desktop menus, separately prove switching groups, outside-click closure, Escape closure, and anchor landing.
- For nested mobile menus, assert both submenu `aria-expanded` states, whether sibling panels intentionally remain open, and that selecting a link closes the main menu.
- Prove a theme toggle changes once per click, then navigate and reload to verify `localStorage` persistence and flash-free initial rendering.
- To exercise server-side validation on HTML forms, account for native browser validation. An invalid `type="email"` may never reach Laravel. Use another server-only boundary (for example an overlong name and too-short message with a syntactically valid email), then correct the values and prove the redirect status.
- Read page source first and copy exact headings, validation messages, anchor fragments, and success text into the test plan rather than paraphrasing them.
- Keep a browser console check until the end so it covers route transitions, theme initialization, and responsive menu scripts.

## Evidence

- Capture the desktop open menu, dark theme, server validation errors, and successful status.
- Capture the mobile nested submenu, both anchor destinations, stacked form, and footer.
- Record one annotated flow after all runtime setup is complete.
