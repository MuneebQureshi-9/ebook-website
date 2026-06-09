@extends('layouts.app')

@section('title', 'Publishing & Author Services | Book Publishing Agency')
@section('description', 'Professional book publishing, marketing, writing, audiobook production, editing, and author website development.')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="section-block" style="padding-top: 3rem; padding-bottom: 2rem; background: var(--color-bg); position: relative; overflow: hidden;">

    {{-- Decorative Background Orbs --}}
    <div style="position: absolute; top: -10%; left: -10%; width: 40rem; height: 40rem; background: rgba(37,99,235,0.08); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>
    <div style="position: absolute; top: 30%; right: -5%; width: 30rem; height: 30rem; background: rgba(99,102,241,0.07); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-heading reveal" data-reveal style="max-width: 100%; text-align: center; margin-bottom: 0;">
            <p class="section-kicker" style="margin: 0 auto 1.25rem; display: inline-flex;">Our Services</p>
            <h1 style="font-size: clamp(2.2rem, 5vw, 4rem); line-height: 1.08; margin-bottom: 1.25rem; max-width: 860px; margin-left: auto; margin-right: auto;">
                One agency, every
                <span style="color: var(--color-primary);">publishing need</span>
            </h1>
            <p style="font-size: 1.1rem; color: var(--color-muted); line-height: 1.75; max-width: 650px; margin: 0 auto 2.5rem;">
                From first draft to bestseller lists — writing, editing, design, marketing, audiobooks, and author branding. Pick what you need, stack what you want.
            </p>
            
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-bottom: 2.5rem;">
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Get a free strategy call'])
            </div>

            {{-- Hero Stats --}}
            <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; padding-top: 1.5rem; border-top: 1px solid rgba(15,23,42,0.06); max-width: 800px; margin: 0 auto;">
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-ink); font-family: Poppins, sans-serif;">12+</div>
                    <div style="font-size: 0.85rem; color: var(--color-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Premium Services</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-ink); font-family: Poppins, sans-serif;">500+</div>
                    <div style="font-size: 0.85rem; color: var(--color-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Books Published</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-ink); font-family: Poppins, sans-serif;">98%</div>
                    <div style="font-size: 0.85rem; color: var(--color-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Client Retention</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SERVICES GRID
     ============================================================ --}}
<section class="section-block container" style="padding-top: 1rem;">
    <div class="grid grid--three" style="gap: 1.5rem;">
        @foreach ($ebook['services'] as $slug => $service)
            @include('components.service-card', ['service' => array_merge($service, ['slug' => $slug])])
        @endforeach
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
            padding: clamp(3rem, 6vw, 5rem) clamp(2rem, 5vw, 4.5rem);
            position: relative; overflow: hidden;
            box-shadow: 0 40px 80px rgba(15,23,42,0.22);
        ">
            {{-- Background orbs --}}
            <div style="position: absolute; top: -6rem; right: -6rem; width: 24rem; height: 24rem; border-radius: 9999px; background: rgba(96,165,250,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>
            <div style="position: absolute; bottom: -6rem; left: -4rem; width: 20rem; height: 20rem; border-radius: 9999px; background: rgba(20,184,166,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>

            <div style="position: relative; z-index: 1; max-width: 680px; margin: 0 auto; text-align: center;">

                <p class="section-kicker-light" style="margin-bottom: 1.5rem;">✦ &nbsp;Ready to begin?</p>

                <h2 style="color: #ffffff; font-size: clamp(1.75rem, 4vw, 3rem); margin-bottom: 1.25rem; line-height: 1.1;">
                    Your book is waiting to be written.<br>Let's make it happen.
                </h2>

                <p style="color: rgba(255,255,255,0.65); font-size: 1.05rem; line-height: 1.7; max-width: 520px; margin: 0 auto 2.5rem;">
                    Book a free 30-minute strategy call and we'll map out exactly how to take your idea from concept to bestseller.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="{{ route('contact') }}" class="action-button" style="
                        background: #ffffff;
                        color: #1e3a8a;
                        box-shadow: 0 14px 30px rgba(15,23,42,0.25);
                        font-weight: 800;
                    "
                    onmouseenter="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-2px)'"
                    onmouseleave="this.style.background='#ffffff'; this.style.transform='translateY(0)'"
                    >
                        Book a Free Strategy Call
                    </a>
                </div>

                {{-- Trust badges --}}
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem;">
                    @foreach (['No commitment required', 'Free 30-min call', 'Results-driven approach'] as $badge)
                    <span style="
                        display: inline-flex; align-items: center; gap: 0.4rem;
                        color: rgba(255,255,255,0.55); font-size: 0.8rem; font-weight: 500;
                    ">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="7" cy="7" r="6.5" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
                            <path d="M4.5 7L6.5 9L9.5 5.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ $badge }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
