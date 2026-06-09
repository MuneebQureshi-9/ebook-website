<section class="section-block container hero-section">
    <div class="section-heading reveal" data-reveal>
        <p class="section-kicker">Book Marketing</p>
        <h1>We Get Your Brilliant Ebooks in Front of the Right People</h1>
        <p class="hero-section__text" style="max-width: 800px; margin-bottom: 2rem;">If you self-publish an ebook, it probably won't sell, even if it has brilliant and innovative ideas, inspiration, and is well-written. You aren't a bad author lacking the potential to make it big. It's just that the net is saturated with so many ebooks on similar topics and sharing similar concepts that your potential readers are overwhelmed with choices.</p>
        <div class="hero-section__actions">
            @include('components.cta-button', ['href' => route('contact', ['service' => 'book-marketing']), 'label' => 'Increase My Book Sales'])
            @include('components.cta-button', ['href' => route('contact', ['service' => 'book-marketing']), 'label' => 'Get a Marketing Strategy', 'variant' => 'secondary'])
        </div>
    </div>
</section>

<section class="section-block container">
    <div class="grid grid--two">
        <article class="surface-card reveal" data-reveal>
            <p>We specify the genre/topic to appeal to specific and interested target audiences, discuss issues that are important for them, and present real solutions on their favorite platforms and sites.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <p>But we don't stop there since no one controls social media followings. So, there is no guarantee that they will ever convert and become loyal customers. Instead, we follow a special and ingenious strategy–we build a loyal and growing following for you through smart email marketing.</p>
        </article>
    </div>
</section>

<section class="section-block container">
    <div class="section-heading reveal" data-reveal style="margin-bottom: 3rem;">
        <h2>OUR MARKETING SERVICES INCLUDE:</h2>
    </div>
    <div class="grid grid--three">
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">01</span>
            <p>Amazon SEO Optimization</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">02</span>
            <p>Book Listing Enhancement</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">03</span>
            <p>Social Media Promotion</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">04</span>
            <p>Paid Advertising Campaigns</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">05</span>
            <p>Audience Targeting Strategy</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">06</span>
            <p>Author Branding support</p>
        </article>
    </div>
</section>

<section class="section-block container">
    <div class="section-heading reveal" data-reveal style="margin-bottom: 3rem;">
        <h2>WHAT YOU GET:</h2>
    </div>
    <div class="grid grid--two">
        <article class="surface-card reveal" data-reveal>
            <p>Real visibility on Amazon and across the web.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <p>Higher click-through rates. More conversions. Measurable results.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <p>A growing audience that actually engages and buys.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <p>An author brand that attracts real, long-term opportunities.</p>
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
