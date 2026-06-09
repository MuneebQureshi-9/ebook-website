@extends('layouts.app')

@section('title', $service['name'] . ' | Pookybooks')
@section('description', $service['subtitle'])

@section('content')
    @if(View::exists("pages.services.partials.{$slug}"))
        @include("pages.services.partials.{$slug}")
    @else
        <section class="section-block container hero-section">
            <div class="section-heading reveal" data-reveal>
                <p class="section-kicker">{{ $service['name'] }}</p>
                <h1>{{ $service['title'] }}</h1>
                <p class="hero-section__text">{{ $service['subtitle'] }}</p>
                <div class="hero-section__actions">
                    @include('components.cta-button', ['href' => route('contact', ['service' => $slug]), 'label' => 'Request a Quote'])
                </div>
            </div>
        </section>
    @endif
@endsection