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
                'image' => asset('images/covers/the silent feather cover.webp'),
                'alt' => 'The Silent Feather cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Winding Path',
                'description' => 'Warm gradients and a strong typographic hierarchy that reads instantly.',
                'meta' => 'Built for launch pages and ads',
                'image' => asset('images/covers/the winding path cover.webp'),
                'alt' => 'The Winding Path cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'Threshold of Shadow',
                'description' => 'Moody, cinematic treatment with enough breathing room for copy overlays.',
                'meta' => 'Ideal for premium author positioning',
                'image' => asset('images/covers/threshold of shadow cover.webp'),
                'alt' => 'Threshold of Shadow cover artwork',
            ],
        ], [
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Silent Feather',
                'description' => 'Elegant contrast, quiet depth, and a premium editorial finish.',
                'meta' => 'Best for literary fiction branding',
                'image' => asset('images/covers/the silent feather cover.webp'),
                'alt' => 'The Silent Feather cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'The Winding Path',
                'description' => 'Warm gradients and a strong typographic hierarchy that reads instantly.',
                'meta' => 'Built for launch pages and ads',
                'image' => asset('images/covers/the winding path cover.webp'),
                'alt' => 'The Winding Path cover artwork',
            ],
            [
                'type' => 'cover',
                'eyebrow' => 'Featured cover',
                'title' => 'Threshold of Shadow',
                'description' => 'Moody, cinematic treatment with enough breathing room for copy overlays.',
                'meta' => 'Ideal for premium author positioning',
                'image' => asset('images/covers/threshold of shadow cover.webp'),
                'alt' => 'Threshold of Shadow cover artwork',
            ],
        ]);

        $featuredTestimonials = [
            [
                'type' => 'testimonial',
                'title' => 'James Carter',
                'description' => '"I felt totally lost since I had an amazing idea but didn\'t know how to publish it. They took me through every step of the process and within a couple of weeks my book went live on Amazon and being discovered by readers. I was unable to do this without them."',
                'meta' => '',
            ],
            [
                'type' => 'testimonial',
                'title' => 'Emma Richardson',
                'description' => '"This was not a service that helped me publish my book it was a plan to help my business. They showed me how to use my book to get customers and I have already gotten three big clients because of them. My book is really helping me get business."',
                'meta' => '',
            ],
            [
                'type' => 'testimonial',
                'title' => 'Daniel Brooks',
                'description' => '"For months, my book didn\'t sell at all. Then, experts at Pookybooks updated my Amazon listing, and a new marketing plan was put in place. After these changes, I sold 50 copies in just 30 days. It was a huge improvement, going from zero sales to 50 in such a short time. This made a big difference for my book."',
                'meta' => '',
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
            <p class="section-kicker">Turn Your Ideas into Reality</p>
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
        'title' => 'Premium E-Book Covers to Sell & Scale',
        'subtitle' => 'We create popular covers that perform on shelves and grab the attention of online audiences.',
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
        'kicker' => 'Social Proof',
        'title' => 'What Our Clients Are Saying',
        'subtitle' => 'We have helped hundreds of writers earn their first dollar from writing. Read what our customers are saying about our services:',
        'slides' => $featuredTestimonials,
    ])

    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Services</p>
            <h2>Our Diverse E-Book Writing Services Get You More Visibility</h2>
        </div>
        <div class="grid grid--three">
            @foreach ($ebook['services'] as $slug => $service)
                @include('components.service-card', ['service' => array_merge($service, ['slug' => $slug])])
            @endforeach
        </div>
    </section>

    <section id="faq" class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">FAQs</p>
            <h2>Frequently Asked Questions</h2>
        </div>
        @include('components.faq-accordion', ['faqs' => $ebook['faqs']])
        <div class="section-cta">
            @include('components.cta-button', ['href' => route('contact'), 'label' => 'Get a free consultation'])
        </div>
    </section>
@endsection