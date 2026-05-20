@php($serviceLink = $service['slug'] ?? null)

<article class="service-card reveal" data-reveal>
    <p class="service-card__eyebrow">{{ $service['name'] }}</p>
    <h3>{{ $service['title'] }}</h3>
    <p>{{ $service['subtitle'] }}</p>
    @if ($serviceLink)
        <a href="{{ route('services.show', $serviceLink) }}">Explore service</a>
    @endif
</article>