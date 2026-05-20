@extends('layouts.app')

@section('title', 'Thank You | eBook Publishing Agency')

@section('content')
    <section class="section-block container">
        <div class="surface-card thank-you-card reveal" data-reveal>
            <p class="section-kicker">Success</p>
            <h1>Thanks for reaching out.</h1>
            <p>We will contact you within 24 hours.</p>
            <div class="section-cta">
                @include('components.cta-button', ['href' => route('home'), 'label' => 'Back to home'])
            </div>
        </div>
    </section>
@endsection