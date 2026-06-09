<section class="section-block container hero-section">
    <div class="section-heading reveal" data-reveal>
        <p class="section-kicker">Audiobook Services</p>
        <h1>Audiobook Services</h1>
        <h2 style="font-size: clamp(1.8rem, 3.5vw, 2.6rem); margin-top: 0.5rem;">Reach the Audience That Prefers to Listen</h2>
        <p class="hero-section__text" style="max-width: 800px;">Millions of readers never open an ebook because they listen. In fact, the audiobook market is one of the fastest-growing formats in publishing, and your book belongs in it. We produce distribution-ready audiobooks for Spotify, Audible, and Apple Books that sound as authoritative as your content is.</p>
        <div class="hero-section__actions">
            @include('components.cta-button', ['href' => route('contact', ['service' => 'audiobook-services']), 'label' => 'Create My Audiobook'])
            @include('components.cta-button', ['href' => route('contact', ['service' => 'audiobook-services']), 'label' => 'Expand My Audience', 'variant' => 'secondary'])
        </div>
    </div>
</section>

<section class="section-block container">
    <div class="section-heading reveal" data-reveal style="margin-bottom: 3rem;">
        <h2>WHAT WE OFFER:</h2>
    </div>
    <div class="grid grid--two">
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">01</span>
            <p>Professional and native voice narration.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">02</span>
            <p>Full audio editing and mixing for best production standards.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">03</span>
            <p>ACX-standard formatting for Audible compliance.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">04</span>
            <p>Distribution setup on Audible, Apple Books, and Spotify for more reach.</p>
        </article>
    </div>
</section>

{{-- CTA BOTTOM --}}
<section class="section-block container">
    <div class="reveal" data-reveal>
        <div style="
            border-radius: 1.75rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, rgba(29,78,216,0.85) 100%);
            padding: clamp(3rem, 6vw, 5rem) clamp(2rem, 5vw, 4.5rem);
            position: relative; overflow: hidden;
            box-shadow: 0 40px 80px rgba(15,23,42,0.22);
        ">
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
                    <a href="{{ route('contact') }}" class="action-button" style="background: #ffffff; color: #1e3a8a; box-shadow: 0 14px 30px rgba(15,23,42,0.25); font-weight: 800;"
                    onmouseenter="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-2px)'"
                    onmouseleave="this.style.background='#ffffff'; this.style.transform='translateY(0)'">
                        Book a Free Strategy Call
                    </a>
                    <a href="{{ route('services.index') }}" class="action-button" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.22); color: rgba(255,255,255,0.9); font-weight: 700;"
                    onmouseenter="this.style.background='rgba(255,255,255,0.14)'; this.style.transform='translateY(-2px)'"
                    onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                        Explore Our Services
                    </a>
                </div>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem;">
                    @foreach (['No commitment required', 'Free 30-min call', 'Results-driven approach'] as $badge)
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: rgba(255,255,255,0.55); font-size: 0.8rem; font-weight: 500;">
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
