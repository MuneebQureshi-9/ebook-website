# Testimonial Card — Integration Notes

- Component file: `resources/views/components/testimonial-card.blade.php`
- CSS file: `resources/css/components/testimonial.css`

How to use:

1. Import the CSS into your main stylesheet (for example add this to `resources/css/app.css`):

```css
@import 'components/testimonial.css';
```

2. Use the Blade component anywhere in your views:

```blade
<x-testimonial-card
  image="/images/testimonials/portrait-800x800"
  alt="Sarah J. Peterson"
  quote="The entire process was seamless. They not only understood our vision but elevated it beyond who imagined possible."
  author="Sarah J. Peterson"
  role="Founder, Nova Solutions"
  />
```

Notes:
- Provide images in `public/images/testimonials/` as PNG/WebP. Use transparent/rounded avatars for better appearance.
- For a variant layout use `variant="alt"` to reverse image and text columns.
- The component accepts raw text; ensure you escape user-generated content before passing it in.
