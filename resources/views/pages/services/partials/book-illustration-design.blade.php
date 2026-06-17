<section class="section-block" style="padding-top: 3.5rem; padding-bottom: 2.5rem; background: var(--color-bg); position: relative; overflow: hidden; margin-top: -76px; padding-top: calc(76px + 3.5rem) !important;">
    <!-- Decorative Background Orbs -->
    <div style="position: absolute; top: -10%; left: -10%; width: 40rem; height: 40rem; background: rgba(37,99,235,0.08); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>
    <div style="position: absolute; top: 30%; right: -5%; width: 30rem; height: 30rem; background: rgba(99,102,241,0.07); border-radius: 9999px; filter: blur(100px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-heading reveal" data-reveal style="max-width: 100%; text-align: center; margin-bottom: 0;">
            <!-- Kicker Badge -->
            <p class="section-kicker" style="margin: 0 auto 1.25rem; display: inline-flex;">Book Illustration & Design</p>
            
            <!-- Title -->
            <h1 style="font-size: clamp(2.2rem, 5vw, 4rem); line-height: 1.08; margin-bottom: 1.25rem; max-width: 860px; margin-left: auto; margin-right: auto;">
                Book Illustration & Design
            </h1>
            
            <!-- Subtitle -->
            <p style="font-size: 1.25rem; color: var(--color-primary); font-weight: 600; line-height: 1.4; max-width: 700px; margin: 0 auto 1rem;">
                Engage Your Readers with Flawless Visuals
            </p>
            
            <!-- Description -->
            <p style="font-size: 1.1rem; color: var(--color-muted); line-height: 1.75; max-width: 720px; margin: 0 auto 2.5rem;">
                Readers have opinions about your book before they see its title or description. Weak visuals communicate low quality. However, strong ones build immediate trust and drive sales before a single word is read. Our designs and illustrations bring in more conversions and leads
            </p>
            
            <!-- CTA Buttons -->
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-bottom: 2.5rem;">
                @include('components.cta-button', ['href' => route('contact', ['service' => 'book-illustration-design']), 'label' => 'Request a Quote'])
                @include('components.cta-button', ['href' => route('contact', ['service' => 'book-illustration-design']), 'label' => 'See Our Work', 'variant' => 'secondary'])
            </div>

            <!-- Trust Highlights -->
            @if(isset($service['benefits']) && count($service['benefits']) > 0)
            <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; padding-top: 1.5rem; border-top: 1px solid rgba(15,23,42,0.06); max-width: 680px; margin: 0 auto;">
                @foreach ($service['benefits'] as $highlight)
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--color-muted); font-size: 0.875rem; font-weight: 600;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="color: var(--color-primary); flex-shrink: 0;">
                        <circle cx="8" cy="8" r="7.25" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M5 8L7 10L11 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    {{ $highlight }}
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

<section class="section-block container">
    <div class="section-heading reveal" data-reveal style="margin-bottom: 3rem;">
        <h2>What We Design:</h2>
    </div>
    <div class="grid grid--three">
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">01</span>
            <p>Front, back, and spine cover design for both print and digital formats.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">02</span>
            <p>Interior illustrations for children's books and comics.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">03</span>
            <p>Chapter headers, icons, and branded visual elements.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">04</span>
            <p>eBook cover formatting sized for all major platforms.</p>
        </article>
        <article class="surface-card reveal" data-reveal>
            <span class="step-number">05</span>
            <p>Custom typography and brand-aligned layouts.</p>
        </article>
    </div>
</section>

{{-- CTA BOTTOM --}}
<section class="section-block container">
    <div class="reveal" data-reveal>
        <div style="border-radius: 1.75rem; background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, rgba(29,78,216,0.85) 100%); padding: clamp(3rem, 6vw, 5rem) clamp(2rem, 5vw, 4.5rem); position: relative; overflow: hidden; box-shadow: 0 40px 80px rgba(15,23,42,0.22);">
            <div style="position: absolute; top: -6rem; right: -6rem; width: 24rem; height: 24rem; border-radius: 9999px; background: rgba(96,165,250,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>
            <div style="position: absolute; bottom: -6rem; left: -4rem; width: 20rem; height: 20rem; border-radius: 9999px; background: rgba(20,184,166,0.12); filter: blur(60px); pointer-events: none;" aria-hidden="true"></div>
            <div style="position: relative; z-index: 1; max-width: 680px; margin: 0 auto; text-align: center;">
                <p class="section-kicker-light" style="margin-bottom: 1.5rem;">✦ &nbsp;Ready to begin?</p>
                <h2 style="color: #ffffff; font-size: clamp(1.75rem, 4vw, 3rem); margin-bottom: 1.25rem; line-height: 1.1;">Your book is waiting to be written.<br>Let's make it happen.</h2>
                <p style="color: rgba(255,255,255,0.65); font-size: 1.05rem; line-height: 1.7; max-width: 520px; margin: 0 auto 2.5rem;">Book a free 30-minute strategy call and we'll map out exactly how to take your idea from concept to bestseller.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="{{ route('contact') }}" class="action-button" style="background: #ffffff; color: #1e3a8a; box-shadow: 0 14px 30px rgba(15,23,42,0.25); font-weight: 800;" onmouseenter="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-2px)'" onmouseleave="this.style.background='#ffffff'; this.style.transform='translateY(0)'">Book a Free Strategy Call</a>
                    <a href="{{ route('services.index') }}" class="action-button" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.22); color: rgba(255,255,255,0.9); font-weight: 700;" onmouseenter="this.style.background='rgba(255,255,255,0.14)'; this.style.transform='translateY(-2px)'" onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">Explore Our Services</a>
                </div>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem;">
                    @foreach (['No commitment required', 'Free 30-min call', 'Results-driven approach'] as $badge)
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: rgba(255,255,255,0.55); font-size: 0.8rem; font-weight: 500;">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="7" cy="7" r="6.5" stroke="rgba(255,255,255,0.3)" stroke-width="1"/><path d="M4.5 7L6.5 9L9.5 5.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        {{ $badge }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
