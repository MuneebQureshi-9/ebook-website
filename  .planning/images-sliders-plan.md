# Images & Premium Sliders Implementation Plan

Short summary (Hindi):
- Pehle repo ka audit karenge jahan images dikhte hain (home, hero, features, authors, blog, cards).
- Phir image style system design karenge (masks, duotone, depth, subtle motion) + responsive assets and optimization.
- Premium slider implement karenge (Swiper recommended) with accessible controls, parallax and smooth transitions.
- Color system define karenge using CSS variables + palette options.

Objective:
- Make images feel premium, lively, and cohesive across the site.
- Add premium sliders where they add perceived value (hero, featured books, testimonials).
- Ensure performance, accessibility, and easy authoring workflow (generated & optimized assets).

High-level steps:
1) Audit & placement
  - Files to inspect: `resources/views/pages/*`, `resources/views/layouts/*`, `resources/views/components/*`.
  - Identify candidate placements: Home hero, home featured section, author cards, blog header, CTA banners, product/ebook cards, testimonial section.

2) Image style system (assets + CSS)
  - Styles to provide: layered hero photos (photo + gradient + SVG mask), duotone / color-graded cover images, soft shadows + perspective card mockups, subtle film grain or vignette, inset glow for CTAs.
  - Implementation files: `resources/css/app.css` (or Tailwind config `tailwind.config.js`), `resources/js/app.js` (for minor JS-driven parallax), `resources/views/components/ImageCard.blade.php` (new reusable component).
  - Deliverables: set of responsive sizes (AVIF/WebP/JPEG fallback), `public/images/processed/` versions, `resources/views/components/image-*` blade components.

3) Image generation prompts (for your advanced model)
  - I will prepare concise prompts for: hero background (cinematic), author portrait (stylized but realistic), ebook cover set (premium mockups), decorative textures/overlays (subtle patterns).
  - If you want, I will produce 6 ready-to-run prompts (Hero, Cover, Author, Testimonial, CTA Banner, Texture).

4) Optimization & Workflow
  - Tools: imagemin or `spatie/image-optimizer` + `sharp` locally for resizing; integrate into `package.json` scripts or a small Node script `scripts/optimize-images.js`.
  - Lazy-loading + `loading="lazy"`, `decoding="async"`, `fetchpriority` for hero preload.
  - Use `<picture>` element with AVIF/WebP fallbacks.

5) Premium slider (recommendation + implementation)
  - Library: `Swiper` (modern, accessible, modular) or `Glide.js` if lighter is desired. I recommend `Swiper` for parallax, fade, and thumbnails.
  - Files: `resources/js/sliders.js`, `resources/css/sliders.css`, blade partials `resources/views/components/slider.blade.php` and `resources/views/components/slider-item.blade.php`.
  - Features: responsive breakpoints, parallax effect on hero slider, autoplay with sensible default, accessible previous/next buttons and pagination, progressive image loading, pause-on-hover, swipe gestures.
  - Verification: test keyboard navigation, reduced-motion preference respects user setting, Lighthouse performance and accessibility checks.

6) Color system & palette selection
  - Implement CSS variables in `resources/css/_variables.css` or in Tailwind theme (`tailwind.config.js`): `--color-primary`, `--color-accent`, `--neutral-1..6`, `--glass-overlay`.
  - Provide 3 curated premium palettes (e.g., Warm Slate, Deep Ocean, Elegant Neutral) with hex values and usage guidance (hero overlay, CTA accent, subtle borders, text emphasis).
  - Ensure contrast accessibility (WCAG AA) for text and CTA buttons.

7) Integration + Testing
  - Update Blade components to accept `imageVariant` props (hero, cover, thumbnail) and include `alt` + `loading` attributes.
  - Add unit / feature tests if applicable (basic rendering smoke test), and run Lighthouse audit for home page.

Files to create/modify (examples):
- `resources/views/components/ImageCard.blade.php` (new)
- `resources/views/components/Hero.blade.php` (modify)
- `resources/views/components/Slider.blade.php` (new)
- `resources/js/sliders.js` (new)
- `resources/css/sliders.css` (new)
- `resources/css/_image-styles.css` or Tailwind config updates
- `scripts/optimize-images.js` (new Node helper)
- `public/images/processed/` (folder for generated/optimized assets)

Verification steps (automated where possible):
- Visual check: Home page hero and featured sections show styled images and slider.
- Lighthouse: Performance >= 85, Accessibility >= 90 (target values, depends on baseline).
- Responsive: Check on 375px, 768px, 1024px viewports.
- Keyboard: Slider operable via Tab + Arrow keys.
- Image formats: `public/images/processed/` contains AVIF/WebP/PNG/JPEG variants.

Suggested execution plan (3-phase, developer-friendly):
Phase A — Audit + Foundation (Wave 1)
- Task A1: Audit views and mark placement points. Files: see above.
- Task A2: Create `ImageCard` and base CSS variables. Files: `ImageCard.blade.php`, `_image-styles.css`.

Phase B — Assets + Generation (Parallel Wave 1/2)
- Task B1: Produce image generation prompts (I will prepare) and run your model to get source assets.
- Task B2: Create Node optimizer and generate responsive variants into `public/images/processed/`.

Phase C — Sliders + Polishing (Wave 2)
- Task C1: Add `Swiper` and implement `Slider` component with accessible controls.
- Task C2: Apply palettes, tune colors, run Lighthouse & fix accessibility issues.

Optional: If you want, I can generate the 6 image prompts now and implement the Blade components and slider scaffolding automatically. Tell me which to do next.

---

If you'd like the ready-to-run image prompts, say "Generate prompts" and I'll produce six precise prompts for your advanced generator.