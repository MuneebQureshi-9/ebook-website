@props([
  'image' => '/images/author/testimonial author crop.webp',
  'alt' => 'Author portrait',
  'quote' => '',
  'author' => '',
  'role' => '',
  'variant' => 'default',
  'testimonial' => [],
])

@php
  $image = $testimonial['image'] ?? $image;
  $alt = $testimonial['alt'] ?? $alt;
  $quote = $testimonial['quote'] ?? $quote;
  $author = $testimonial['client_name'] ?? $testimonial['author'] ?? $author;
  $role = $testimonial['service'] ?? $testimonial['role'] ?? $role;
  $imageSrc = str_starts_with($image, 'http://') || str_starts_with($image, 'https://') || str_starts_with($image, '/')
    ? $image
    : asset($image);
@endphp

<figure class="testimonial-card {{ $variant === 'alt' ? 'testimonial-card--alt' : '' }}">
  <div class="testimonial-card__image" aria-hidden="false">
    <img src="{{ $imageSrc }}" alt="{{ $alt }}" loading="lazy" decoding="async">
  </div>

  <figcaption class="testimonial-card__content">
    <blockquote class="testimonial-card__quote">“{{ $quote }}”</blockquote>

    <div class="testimonial-card__meta">
      <div class="testimonial-card__author">{{ $author }}</div>
      @if($role)
        <div class="testimonial-card__role">{{ $role }}</div>
      @endif
    </div>

    <div class="testimonial-card__underline" aria-hidden="true">
      <svg width="120" height="12" viewBox="0 0 120 12" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
        <path d="M6 6c20 8 60 8 108 0" stroke="#d4af37" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </div>
  </figcaption>
</figure>