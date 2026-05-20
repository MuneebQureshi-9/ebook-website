@extends('layouts.app')

@section('title', 'Publishing & Author Services | Book Publishing Agency')
@section('description', 'Professional book publishing, marketing, writing, audiobook production, editing, and author website development.')

@section('content')
    <section class="section-block container">
        <div class="section-heading reveal" data-reveal>
            <p class="section-kicker">Services</p>
            <h1>Publishing & Author Services</h1>
            <p>Everything authors need to publish, promote, and scale with clarity.</p>
        </div>

        <div class="grid grid--two">
            @include('components.image-card', [
                'image' => asset('images/covers/the silent feather cover.png'),
                'alt' => 'Premium book cover showcase',
                'eyebrow' => 'Service depth',
                'title' => 'Covers, strategy, and launch systems that feel premium.',
                'description' => 'The visual language here stays calm so the service message remains the focus.',
                'meta' => 'Works well above the fold',
                'variant' => 'cover',
            ])

            <article class="surface-card reveal" data-reveal>
                <h2>What the service stack includes</h2>
                <p>Clear publishing support, marketing execution, editorial help, and author-brand systems that stay easy to navigate.</p>
            </article>
        </div>

        <div class="grid grid--three">
            @foreach ($ebook['services'] as $slug => $service)
                @include('components.service-card', ['service' => array_merge($service, ['slug' => $slug])])
            @endforeach
        </div>
    </section>
@endsection