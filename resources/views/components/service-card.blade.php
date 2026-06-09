@php($serviceLink = $slug ?? $service['slug'] ?? null)

<article class="surface-card reveal" data-reveal style="display: flex; flex-direction: column; gap: 1.25rem; transition: transform 220ms ease, box-shadow 220ms ease;">
    {{-- Icon Container --}}
    <div style="
        width: 3.25rem; height: 3.25rem;
        display: flex; align-items: center; justify-content: center;
        border-radius: 1rem;
        background: linear-gradient(135deg, rgba(37,99,235,0.12) 0%, rgba(37,99,235,0.06) 100%);
        border: 1px solid rgba(37,99,235,0.14);
        flex-shrink: 0;
        color: var(--color-primary);
    ">
        <div style="width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;">
            <style> .service-icon-wrapper svg { width: 100%; height: 100%; display: block; } </style>
            <div class="service-icon-wrapper" style="width: 100%; height: 100%;">
                @include('components.service-icon', ['slug' => $serviceLink ?? 'book-writing'])
            </div>
        </div>
    </div>
    
    <div style="display: flex; flex-direction: column; flex-grow: 1;">
        <p class="service-card__eyebrow" style="margin: 0 0 0.5rem; font-size: 0.72rem; color: var(--color-primary-strong); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em;">
            {{ $service['name'] }}
        </p>
        <h3 style="font-size: 1.25rem; margin: 0 0 0.6rem;">{{ $service['title'] }}</h3>
        <p style="line-height: 1.75; margin: 0; color: var(--color-muted); flex-grow: 1;">
            {{ $service['subtitle'] }}
        </p>
    </div>

    @if ($serviceLink)
        <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid rgba(15,23,42,0.06);">
            <a href="{{ route('services.show', $serviceLink) }}" style="display: inline-flex; align-items: center; gap: 0.4rem; color: var(--color-primary); font-weight: 600; font-size: 0.9rem; text-decoration: none; transition: color 150ms ease;"
               onmouseenter="this.style.color='var(--color-primary-strong)'"
               onmouseleave="this.style.color='var(--color-primary)'">
                Explore service 
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
    @endif
</article>
