@extends('layouts.app')

@section('title', 'Blog | eBook Publishing Agency')

@section('content')
    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Blog</p>
            <h1>Resources for authors</h1>
            <p>SEO-focused articles, publishing guidance, and practical content strategy are ready for the next phase.</p>
        </div>

        <div class="grid grid--two">
            @include('components.image-card', [
                'image' => asset('images/banner/banner 2.webp'),
                'alt' => 'Blog banner for author resources',
                'eyebrow' => 'Editorial teaser',
                'title' => 'Content ideas that can sit next to strong imagery.',
                'description' => 'The overlay keeps the copy readable while still feeling polished and premium.',
                'meta' => 'Good for blog hero use',
                'variant' => 'banner',
            ])

            <article class="surface-card reveal" data-reveal>
                <h2>Coming soon</h2>
                <p>This scaffold reserves the blog section for future articles, topic clusters, and lead-driving content.</p>
            </article>
        </div>
    </section>
@endsection