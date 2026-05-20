@extends('layouts.app')

@section('title', $service['title'] . ' | Professional Publishing Services')
@section('description', $service['subtitle'])

@section('content')
    <section class="section-block container">
        <div class="grid grid--two">
            <div class="section-heading reveal" data-reveal>
                <p class="section-kicker">{{ $service['name'] }}</p>
                <h1>{{ $service['title'] }}</h1>
                <p class="hero-section__text">{{ $service['headline'] }}</p>
                <p>{{ $service['subtitle'] }}</p>
            </div>

            @include('components.image-card', [
                'image' => asset('images/banner/banner 2.png'),
                'alt' => $service['name'] . ' visual banner',
                'eyebrow' => 'Service spotlight',
                'title' => $service['title'],
                'description' => 'This section keeps contrast high so the service headline stays legible over the image.',
                'meta' => $service['name'],
                'variant' => 'banner',
            ])
        </div>

        <article class="service-detail reveal" data-reveal>
            <h2>Service overview</h2>
            <p>{{ $service['description'] }}</p>
        </article>

        <div class="grid grid--two section-gap">
            <article class="surface-card reveal" data-reveal>
                <h2>What You Get</h2>
                <ul class="bullets-list">
                    @foreach (explode(',', $service['description']) as $item)
                        <li>{{ trim($item) }}</li>
                    @endforeach
                </ul>
            </article>

            <article class="surface-card reveal" data-reveal>
                <h2>Why Authors Choose Us</h2>
                <ul class="bullets-list">
                    @foreach ($service['benefits'] as $benefit)
                        <li>{{ $benefit }}</li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div class="section-cta">
            @include('components.cta-button', ['href' => route('contact', ['service' => $slug]), 'label' => $service['cta']])
        </div>
    </section>
@endsection