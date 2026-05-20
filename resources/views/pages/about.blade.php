@extends('layouts.app')

@section('title', 'About Us | eBook Publishing Agency')

@section('content')
    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">About</p>
            <h1>Built for authors who want clarity, not confusion</h1>
            <p>We help authors move from idea to income with done-for-you publishing, marketing, and launch support.</p>
        </div>

        <div class="grid grid--two">
            @include('components.image-card', [
                'image' => asset('images/author/portrait author.png'),
                'alt' => 'Professional author portrait',
                'eyebrow' => 'Author-facing support',
                'title' => 'Clear strategy. Strong positioning. Better launches.',
                'description' => 'A calm, editorial workflow built to keep the publishing journey understandable and premium.',
                'meta' => 'Designed to stay readable over imagery',
                'variant' => 'portrait',
            ])

            <div class="grid">
                <article class="surface-card reveal" data-reveal>
                    <h2>Our approach</h2>
                    <p>We keep the process structured, strategic, and focused on visibility. Every engagement starts with a clear plan and ends with a launch that can grow.</p>
                </article>
                <article class="surface-card reveal" data-reveal>
                    <h2>Why it matters</h2>
                    <p>Authors should not have to guess their way through publishing. The right support saves time, reduces waste, and improves long-term results.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section-block container">
        <div class="grid grid--two">
            @include('components.image-card', [
                'image' => asset('images/banner/banner 1.png'),
                'alt' => 'Editorial publishing banner',
                'eyebrow' => 'Brand atmosphere',
                'title' => 'Soft gradients, premium texture, and strong contrast.',
                'description' => 'This banner works well for spacious sections where copy needs clean visual support.',
                'meta' => 'Safe for text overlays',
                'variant' => 'banner',
            ])

            @include('components.image-card', [
                'image' => asset('images/banner/banner 2.png'),
                'alt' => 'Publishing workflow banner',
                'eyebrow' => 'Launch support',
                'title' => 'A visual system that still leaves room for the message.',
                'description' => 'Contrast remains strong because the overlay is dark enough to preserve readable text.',
                'meta' => 'Text-first layout',
                'variant' => 'banner',
            ])
        </div>
    </section>
@endsection