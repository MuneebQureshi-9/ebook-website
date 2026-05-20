@extends('layouts.app')

@section('title', $ebook['default_title'])
@section('description', $ebook['default_description'])
@section('keywords', $ebook['default_keywords'])

@section('content')
    @php
        $featuredCovers = array_merge([
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Silent Feather',
                'description' => 'Elegant contrast, quiet depth, and a premium editorial finish.',
                'meta' => 'Best for literary fiction branding',
                'image' => asset('images/covers/the silent feather cover.png'),
                'alt' => 'The Silent Feather cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Winding Path',
                'description' => 'Warm gradients and a strong typographic hierarchy that reads instantly.',
                'meta' => 'Built for launch pages and ads',
                'image' => asset('images/covers/the winding path cover.png'),
                'alt' => 'The Winding Path cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'Threshold of Shadow',
                'description' => 'Moody, cinematic treatment with enough breathing room for copy overlays.',
                'meta' => 'Ideal for premium author positioning',
                'image' => asset('images/covers/threshold of shadow cover.png'),
                'alt' => 'Threshold of Shadow cover artwork',
            ],
        ], [
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Silent Feather',
                'description' => 'Elegant contrast, quiet depth, and a premium editorial finish.',
                'meta' => 'Best for literary fiction branding',
                'image' => asset('images/covers/the silent feather cover.png'),
                'alt' => 'The Silent Feather cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Winding Path',
                'description' => 'Warm gradients and a strong typographic hierarchy that reads instantly.',
                'meta' => 'Built for launch pages and ads',
                'image' => asset('images/covers/the winding path cover.png'),
                'alt' => 'The Winding Path cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'Threshold of Shadow',
                'description' => 'Moody, cinematic treatment with enough breathing room for copy overlays.',
                'meta' => 'Ideal for premium author positioning',
                'image' => asset('images/covers/threshold of shadow cover.png'),
                'alt' => 'Threshold of Shadow cover artwork',
            ],
        ]);

        $featuredTestimonials = [
            [
                'type' => 'testimonial',
                'title' => 'Sarah Jenkins',
                'description' => '"I was completely overwhelmed by the publishing process until I found this team. They handled everything from formatting to distribution, and my book hit the top 100 in its category within a week. Highly recommended!"',
                'meta' => 'Author of "The Midnight Garden"',
            ],
            [
                'type' => 'testimonial',
                'title' => 'David Chen',
                'description' => '"The cover design alone was worth the investment. It perfectly captured the mood of my sci-fi thriller. The marketing push they organized generated more sales in a month than I had in a year of self-promotion."',
                'meta' => 'Indie Sci-Fi Author',
            ],
            [
                'type' => 'testimonial',
                'title' => 'Elena Rodriguez',
                'description' => '"As a first-time author, I needed someone to hold my hand through the editing and publishing maze. Their editorial team was tough but fair, and the final manuscript is infinitely better for it."',
                'meta' => 'Debut Novelist',
            ],
            [
                'type' => 'testimonial',
                'title' => 'Marcus Thorne',
                'description' => '"What impressed me most was their strategic approach to the launch. They didn\'t just upload the book; they built a campaign. The ROI has been fantastic, and I\'m already writing my next book with them."',
                'meta' => 'Business & Finance Author',
            ],
            [
                'type' => 'testimonial',
                'title' => 'Rachel Adams',
                'description' => '"I had previously self-published with mediocre results. They completely rebranded my series, updated the covers, and optimized my Amazon listings. My daily sales have tripled since we started working together."',
                'meta' => 'Romance Author',
            ],
        ];
    @endphp

    @include('components.hero-section', [
        'headline' => $ebook['hero']['headline'],
        'subheading' => $ebook['hero']['subheading'],
        'primaryCta' => $ebook['hero']['primary_cta'],
        'secondaryCta' => $ebook['hero']['secondary_cta'],
        'image_only' => true,
    ])

    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Value proposition</p>
            <h2>{{ $ebook['value_props']['title'] }}</h2>
            <p>{{ $ebook['value_props']['intro'] }}</p>
        </div>
        <div class="grid grid--three">
            @foreach ($ebook['value_props']['items'] as $item)
                <article class="surface-card reveal" data-reveal>
                    <p>{{ $item }}</p>
                </article>
            @endforeach
        </div>
    </section>

    @include('components.slide-scale', [
        'title' => 'Premium covers made to hold attention',
        'subtitle' => 'A curated set of cover treatments that can be reused across launch pages, ads, and author branding.',
        'slides' => $featuredCovers,
    ])

    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Process</p>
            <h2>{{ $ebook['journey']['title'] }}</h2>
        </div>
        <div class="grid grid--five">
            @foreach ($ebook['journey']['steps'] as $step)
                <article class="surface-card reveal" data-reveal>
                    <span class="step-number">0{{ $loop->iteration }}</span>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['description'] }}</p>
                </article>
            @endforeach
        </div>
        <div class="section-cta">
            @include('components.cta-button', ['href' => route('contact'), 'label' => $ebook['journey']['cta']])
        </div>
    </section>

    @include('components.slide-scale', [
        'kicker' => 'Social proof',
        'title' => 'What clients say after launch',
        'subtitle' => 'Real results from authors who trusted us with their books.',
        'slides' => $featuredTestimonials,
    ])

    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Services</p>
            <h2>Publishing and author services built for visibility</h2>
        </div>
        <div class="grid grid--three">
            @foreach ($ebook['services'] as $slug => $service)
                @include('components.service-card', ['service' => array_merge($service, ['slug' => $slug])])
            @endforeach
        </div>
    </section>

    <section id="faq" class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">FAQ</p>
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        @include('components.faq-accordion', ['faqs' => $ebook['faqs']])
        <div class="section-cta">
            @include('components.cta-button', ['href' => route('contact'), 'label' => 'Get a free consultation'])
        </div>
    </section>
@endsection