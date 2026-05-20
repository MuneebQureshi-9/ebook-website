@extends('layouts.app')

@section('title', 'Contact Us - Free Book Publishing Consultation')
@section('description', 'Book a free consultation with our publishing experts. Let\'s turn your book idea into reality.')

@section('content')
    <section class="section-block container">
        <div class="grid grid--two">
            <div class="section-heading reveal" data-reveal>
                <p class="section-kicker">Contact Page</p>
                <h1>Let\'s Bring Your Book to Life</h1>
                <p>Tell us about your project, and we\'ll give you a clear, actionable plan to write, publish, and grow your book.</p>
            </div>

            @include('components.image-card', [
                'image' => asset('images/banner/banner 1.png'),
                'alt' => 'Publishing consultation visual',
                'eyebrow' => 'Free consultation',
                'title' => 'A calm first touchpoint with strong contrast and a premium feel.',
                'description' => 'Good contact-page imagery should guide attention without competing with the form.',
                'meta' => 'Built for lead capture',
                'variant' => 'banner',
            ])
        </div>

        @if (session('success'))
            <div class="success-message surface-card reveal" data-reveal>{{ session('success') }}</div>
        @endif

        <form class="contact-form reveal" data-reveal method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-grid">
                <label>
                    Full Name
                    <input type="text" name="full_name" value="{{ old('full_name') }}" required>
                    @error('full_name')<span>{{ $message }}</span>@enderror
                </label>
                <label>
                    Email Address
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')<span>{{ $message }}</span>@enderror
                </label>
                <label>
                    Phone Number
                    <input type="text" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')<span>{{ $message }}</span>@enderror
                </label>
                <label>
                    Service
                    <select name="service">
                        <option value="">Select a service</option>
                        @foreach ($ebook['service_links'] as $slug => $label)
                            <option value="{{ $slug }}" @selected(old('service', $selectedServiceSlug ?? '') === $slug)>{{ $label }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="form-grid__full">
                    Message or share your Idea
                    <textarea name="message" rows="6" required>{{ old('message') }}</textarea>
                    @error('message')<span>{{ $message }}</span>@enderror
                </label>
            </div>

            <div class="section-cta">
                <button type="submit" class="action-button action-button--primary">Book a Free Consultation</button>
            </div>
        </form>
    </section>
@endsection