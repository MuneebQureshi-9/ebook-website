@props([
    'image' => '',
    'alt' => '',
    'eyebrow' => null,
    'title' => null,
    'description' => null,
    'meta' => null,
    'variant' => 'default',
])

@php
    $imageSrc = str_starts_with($image, 'http://') || str_starts_with($image, 'https://') || str_starts_with($image, '/')
        ? $image
        : asset($image);
    $classes = trim('image-card image-card--' . $variant);
@endphp

<figure {{ $attributes->merge(['class' => $classes]) }}>
    <div class="image-card__media">
        <img src="{{ $imageSrc }}" alt="{{ $alt }}" loading="lazy" decoding="async">
    </div>

    @if ($eyebrow || $title || $description || $meta)
        <figcaption class="image-card__overlay">
            @if ($eyebrow)
                <span class="image-card__eyebrow">{{ $eyebrow }}</span>
            @endif

            @if ($title)
                <h3>{{ $title }}</h3>
            @endif

            @if ($description)
                <p>{{ $description }}</p>
            @endif

            @if ($meta)
                <span class="image-card__meta">{{ $meta }}</span>
            @endif
        </figcaption>
    @endif
</figure>