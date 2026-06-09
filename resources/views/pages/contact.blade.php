@extends('layouts.app')

@section('title', 'Contact Us – Free Book Publishing Consultation')
@section('description', 'Book a free consultation with our publishing experts. Let\'s turn your book idea into reality.')
@section('keywords', 'contact us, book publishing consultation, free strategy call, ebook agency')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="section-block" style="padding-top: 3rem; padding-bottom: 1rem; background: var(--color-bg); position: relative; overflow: hidden;">

    {{-- Decorative Background Orbs --}}
    <div style="position: absolute; top: -10%; left: -10%; width: 40rem; height: 40rem; background: rgba(37,99,235,0.08); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>
    <div style="position: absolute; top: 30%; right: -5%; width: 30rem; height: 30rem; background: rgba(99,102,241,0.07); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-heading reveal" data-reveal style="max-width: 100%; text-align: center; margin-bottom: 0;">
            <p class="section-kicker" style="margin: 0 auto 1.25rem; display: inline-flex;">Get In Touch</p>
            <h1 style="font-size: clamp(2.2rem, 5vw, 3.8rem); line-height: 1.08; margin-bottom: 1.25rem; max-width: 780px; margin-left: auto; margin-right: auto;">
                Let's Bring Your
                <span style="color: var(--color-primary);">Book to Life</span>
            </h1>
            <p style="font-size: 1.1rem; color: var(--color-muted); line-height: 1.75; max-width: 560px; margin: 0 auto;">
                Tell us about your project and we'll give you a clear, actionable plan to write, publish, and grow your book.
            </p>
        </div>
    </div>
</section>


{{-- ============================================================
     CONTACT FORM + INFO CARDS (two-column)
     ============================================================ --}}
<section class="section-block container" style="padding-top: 1.5rem;">
    <div class="grid grid--two" style="align-items: start; gap: 3rem;">

        {{-- LEFT: The Form --}}
        <div class="reveal" data-reveal>

            @if (session('success'))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonColor: 'var(--color-primary, #2563eb)',
                            confirmButtonText: 'Back to Home'
                        });
                    });
                </script>
            @endif

            <form class="contact-form" method="POST" action="{{ route('contact.store') }}" style="padding: 2rem 2.25rem;">
                @csrf

                <div style="margin-bottom: 0.5rem;">
                    <h2 style="font-size: 1.4rem; margin: 0 0 0.35rem;">Send Us a Message</h2>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0; line-height: 1.6;">Fill in your details below and we'll get back to you within 24 hours.</p>
                </div>

                <div class="form-grid" style="gap: 1.15rem;">
                    <label>
                        Full Name
                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required>
                        @error('full_name')<span>{{ $message }}</span>@enderror
                    </label>
                    <label>
                        Email Address
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                        @error('email')<span>{{ $message }}</span>@enderror
                    </label>
                    <label>
                        Phone Number
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+1 (555) 000-0000" required>
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
                        Tell Us About Your Project
                        <textarea name="message" rows="5" placeholder="Share your book idea, goals, or any questions you have..." required>{{ old('message') }}</textarea>
                        @error('message')<span>{{ $message }}</span>@enderror
                    </label>
                </div>

                <div style="margin-top: 1.5rem;">
                    <button type="submit" id="submitBtn" class="action-button action-button--primary btn-animate" style="width: 100%; justify-content: center; align-items: center; font-size: 1rem; position: relative; overflow: hidden; transition: all 0.2s ease; color: #ffffff; padding-top: 0.875rem; padding-bottom: 0.875rem; font-weight: 600;">
                        <span id="btnText">Book a Free Consultation</span>
                        <div id="btnSpinner" style="display: none; position: absolute; inset: 0; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="animation: spin 1s linear infinite; transform-origin: center;"><path d="M21 12a9 9 0 1 1-6.219-8.56"/></svg>
                        </div>
                    </button>
                </div>

                <style>
                    .btn-animate:active {
                        transform: scale(0.96);
                    }
                    .btn-loading {
                        opacity: 0.8;
                        pointer-events: none;
                    }
                    .btn-loading #btnText {
                        opacity: 0;
                    }
                    .btn-loading #btnSpinner {
                        display: flex !important;
                    }
                    @keyframes spin {
                        100% { transform: rotate(360deg); }
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.querySelector('.contact-form');
                        if (form) {
                            form.addEventListener('submit', function() {
                                document.getElementById('submitBtn').classList.add('btn-loading');
                            });
                        }
                    });
                </script>

                {{-- Trust row --}}
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-top: 1.25rem;">
                    @foreach (['No commitment', 'Free 30-min call', '100% confidential'] as $trust)
                    <span style="display: inline-flex; align-items: center; gap: 0.35rem; color: var(--color-muted); font-size: 0.78rem; font-weight: 500;">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="7" cy="7" r="6.5" stroke="rgba(37,99,235,0.3)" stroke-width="1"/>
                            <path d="M4.5 7L6.5 9L9.5 5.5" stroke="var(--color-primary)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ $trust }}
                    </span>
                    @endforeach
                </div>
            </form>
        </div>

        {{-- RIGHT: Contact Info Cards --}}
        <div class="reveal" data-reveal style="--reveal-delay: 100ms; display: flex; flex-direction: column; gap: 1.25rem;">

            {{-- Card: Email --}}
            <div class="surface-card" style="padding: 1.75rem; display: flex; align-items: flex-start; gap: 1rem; transition: transform 220ms ease, box-shadow 220ms ease;">
                <div style="
                    width: 3rem; height: 3rem;
                    display: flex; align-items: center; justify-content: center;
                    border-radius: 0.875rem;
                    background: linear-gradient(135deg, rgba(37,99,235,0.12) 0%, rgba(37,99,235,0.05) 100%);
                    border: 1px solid rgba(37,99,235,0.14);
                    flex-shrink: 0;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin: 0 0 0.3rem; font-weight: 700;">Email Us</h3>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0 0 0.5rem; line-height: 1.6;">We respond within 24 hours on business days.</p>
                    <a href="mailto:{{ config('ebook.contact_email') }}" style="color: var(--color-primary-strong); font-weight: 600; font-size: 0.9rem; text-decoration: none;">
                        {{ config('ebook.contact_email') }}
                    </a>
                </div>
            </div>

            {{-- Card: Phone --}}
            <div class="surface-card" style="padding: 1.75rem; display: flex; align-items: flex-start; gap: 1rem; transition: transform 220ms ease, box-shadow 220ms ease;">
                <div style="
                    width: 3rem; height: 3rem;
                    display: flex; align-items: center; justify-content: center;
                    border-radius: 0.875rem;
                    background: linear-gradient(135deg, rgba(20,184,166,0.12) 0%, rgba(20,184,166,0.05) 100%);
                    border: 1px solid rgba(20,184,166,0.14);
                    flex-shrink: 0;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin: 0 0 0.3rem; font-weight: 700;">Call Us</h3>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0 0 0.5rem; line-height: 1.6;">Talk directly with our publishing strategists.</p>
                    <a href="tel:{{ config('ebook.contact_phone') }}" style="color: var(--color-primary-strong); font-weight: 600; font-size: 0.9rem; text-decoration: none;">
                        {{ config('ebook.contact_phone') }}
                    </a>
                </div>
            </div>

            {{-- Card: Location --}}
            <div class="surface-card" style="padding: 1.75rem; display: flex; align-items: flex-start; gap: 1rem; transition: transform 220ms ease, box-shadow 220ms ease;">
                <div style="
                    width: 3rem; height: 3rem;
                    display: flex; align-items: center; justify-content: center;
                    border-radius: 0.875rem;
                    background: linear-gradient(135deg, rgba(245,158,11,0.12) 0%, rgba(245,158,11,0.05) 100%);
                    border: 1px solid rgba(245,158,11,0.14);
                    flex-shrink: 0;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-warm)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin: 0 0 0.3rem; font-weight: 700;">Our Offices</h3>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0 0 0.5rem; line-height: 1.6;">Serving authors worldwide from two locations.</p>
                    <span style="color: var(--color-ink); font-weight: 600; font-size: 0.9rem;">
                        {{ config('ebook.locations') }}
                    </span>
                </div>
            </div>

            {{-- Card: Response Time --}}
            <div class="surface-card" style="padding: 1.75rem; display: flex; align-items: flex-start; gap: 1rem; transition: transform 220ms ease, box-shadow 220ms ease;">
                <div style="
                    width: 3rem; height: 3rem;
                    display: flex; align-items: center; justify-content: center;
                    border-radius: 0.875rem;
                    background: linear-gradient(135deg, rgba(99,102,241,0.12) 0%, rgba(99,102,241,0.05) 100%);
                    border: 1px solid rgba(99,102,241,0.14);
                    flex-shrink: 0;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin: 0 0 0.3rem; font-weight: 700;">Quick Response</h3>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0 0 0.5rem; line-height: 1.6;">Average response time for all inquiries.</p>
                    <span style="color: var(--color-ink); font-weight: 600; font-size: 0.9rem;">
                        Under 24 hours
                    </span>
                </div>
            </div>

            {{-- Compact FAQ teaser --}}
            <div style="
                border-radius: var(--radius-lg);
                background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
                padding: 1.75rem;
                position: relative;
                overflow: hidden;
            ">
                {{-- Glow orb --}}
                <div style="position: absolute; top: -3rem; right: -3rem; width: 10rem; height: 10rem; border-radius: 9999px; background: rgba(96,165,250,0.15); filter: blur(40px); pointer-events: none;" aria-hidden="true"></div>

                <div style="position: relative; z-index: 1;">
                    <h3 style="color: #fff; font-size: 1.1rem; margin: 0 0 0.5rem; font-weight: 700;">Have Questions?</h3>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.88rem; line-height: 1.65; margin: 0 0 1.25rem;">
                        Browse our frequently asked questions to find quick answers about our services, pricing, and process.
                    </p>
                    <a href="{{ route('home') }}#faq" class="action-button" style="
                        background: rgba(255,255,255,0.1);
                        border: 1px solid rgba(255,255,255,0.2);
                        color: rgba(255,255,255,0.9);
                        font-weight: 700;
                        font-size: 0.875rem;
                        padding: 0.65rem 1.25rem;
                    ">
                        View FAQs →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================
     BOTTOM CTA BANNER
     ============================================================ --}}
<section class="section-block container">
    <div class="reveal" data-reveal>
        <div style="
            border-radius: 1.75rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, rgba(29,78,216,0.85) 100%);
            padding: clamp(2.5rem, 5vw, 4rem) clamp(2rem, 5vw, 4.5rem);
            position: relative; overflow: hidden;
            box-shadow: 0 40px 80px rgba(15,23,42,0.22);
        ">
            {{-- Background orbs --}}
            <div style="position: absolute; top: -6rem; right: -6rem; width: 24rem; height: 24rem; border-radius: 9999px; background: rgba(96,165,250,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>
            <div style="position: absolute; bottom: -6rem; left: -4rem; width: 20rem; height: 20rem; border-radius: 9999px; background: rgba(20,184,166,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>

            <div style="position: relative; z-index: 1; max-width: 600px; margin: 0 auto; text-align: center;">
                <p class="section-kicker-light" style="margin-bottom: 1.25rem;">✦ &nbsp;Prefer a quick call?</p>

                <h2 style="color: #ffffff; font-size: clamp(1.6rem, 3.5vw, 2.6rem); margin-bottom: 1rem; line-height: 1.12;">
                    Book a free 30-minute<br>strategy session today.
                </h2>

                <p style="color: rgba(255,255,255,0.6); font-size: 1rem; line-height: 1.7; max-width: 460px; margin: 0 auto 2rem;">
                    We'll map out exactly how your expertise becomes a published book that builds your brand and drives real results.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="tel:{{ config('ebook.contact_phone') }}" class="action-button" style="
                        background: #ffffff;
                        color: #1e3a8a;
                        box-shadow: 0 14px 30px rgba(15,23,42,0.25);
                        font-weight: 800;
                    ">
                        Call Us Now
                    </a>
                    <a href="{{ route('services.index') }}" class="action-button" style="
                        background: rgba(255,255,255,0.08);
                        border: 1px solid rgba(255,255,255,0.22);
                        color: rgba(255,255,255,0.9);
                        font-weight: 700;
                    ">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection