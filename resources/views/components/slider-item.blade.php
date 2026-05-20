@props(['slide' => []])

@php
    $type = $slide['type'] ?? 'cover';
    $title = $slide['title'] ?? '';
    $description = $slide['description'] ?? '';
    $eyebrow = $slide['eyebrow'] ?? null;
    $image = $slide['image'] ?? '';
    $alt = $slide['alt'] ?? $title;
    $meta = $slide['meta'] ?? null;
    $imageSrc = str_starts_with($image, 'http://') || str_starts_with($image, 'https://') || str_starts_with($image, '/')
        ? $image
        : asset($image);
@endphp

@if ($type === 'testimonial')
    <article class="slider-slide slider-slide--testimonial">
        <div class="slider-slide__portrait">
            <img src="{{ $imageSrc }}" alt="{{ $alt }}" loading="lazy" decoding="async">
        </div>

        <div class="slider-slide__body">
            @if ($eyebrow)
                <p class="section-kicker">{{ $eyebrow }}</p>
            @endif

            <blockquote>{{ $description }}</blockquote>

            <div class="slider-slide__meta">
                <strong>{{ $title }}</strong>
                @if ($meta)
                    <span>{{ $meta }}</span>
                @endif
            </div>
        </div>
    </article>
@else
    <article class="slider-slide slider-slide--cover">
        <div class="slider-slide__media">
            <img src="{{ $imageSrc }}" alt="{{ $alt }}" loading="lazy" decoding="async">
        </div>

        <div class="slider-slide__overlay">
            @if ($eyebrow)
                <p class="slider-slide__eyebrow">{{ $eyebrow }}</p>
            @endif

            <h3>{{ $title }}</h3>
            <p>{{ $description }}</p>

            @if ($meta)
                <span class="slider-slide__meta">{{ $meta }}</span>
            @endif
        </div>
    </article>
@endif