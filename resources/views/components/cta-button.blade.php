@php
    $variant = $variant ?? 'primary';
    $classes = $variant === 'secondary' ? 'action-button action-button--secondary' : 'action-button action-button--primary';
@endphp

<a href="{{ $href }}" class="{{ $classes }}">{{ $label }}</a>