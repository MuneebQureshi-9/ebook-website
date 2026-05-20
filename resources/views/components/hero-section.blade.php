@props([
    'kicker' => 'Publishing made clear',
    'desktopImage' => '/images/hero/Desktop Hero.png',
    'mobileImage' => '/images/hero/Mobile Hero.png',
    'supportImage' => '/images/author/portrait author.png',
    'image_only' => false,
])

<section class="hero-section relative overflow-hidden bg-slate-50/50 {{ $image_only ? 'hero-section--image-only' : '' }}">
    <!-- Decorative Glowing Background Orbs -->
    <div class="absolute top-[-10%] left-[-10%] w-[40rem] h-[40rem] bg-blue-400/20 rounded-full mix-blend-multiply filter blur-[100px] opacity-70 pointer-events-none"></div>
    <div class="absolute top-[20%] right-[-10%] w-[35rem] h-[35rem] bg-indigo-400/20 rounded-full mix-blend-multiply filter blur-[100px] opacity-70 pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[20%] w-[35rem] h-[35rem] bg-purple-300/20 rounded-full mix-blend-multiply filter blur-[100px] opacity-70 pointer-events-none"></div>

    <div class="container hero-section__grid relative z-10">
        <div class="hero-section__copy reveal" data-reveal>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800 text-slate-100 text-sm font-semibold tracking-wide uppercase mb-6 border border-slate-700 shadow-sm backdrop-blur-sm w-fit">
                {{ $kicker }}
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 drop-shadow-sm mb-6 leading-[1.1]">{{ $headline }}</h1>
            <p class="hero-section__text text-lg md:text-xl text-slate-600 leading-relaxed max-w-2xl">{{ $subheading }}</p>
            <div class="hero-section__actions mt-8 flex flex-wrap gap-4">
                @include('components.cta-button', ['href' => route('contact'), 'label' => $primaryCta])
                @include('components.cta-button', ['href' => route('services.index'), 'label' => $secondaryCta, 'variant' => 'secondary'])
            </div>
        </div>

        <div class="hero-section__panel reveal" data-reveal>
            <picture class="hero-section__visual">
                <source media="(max-width: 767px)" srcset="{{ asset($mobileImage) }}">
                <img src="{{ asset($desktopImage) }}" alt="Publishing studio showcase" loading="eager" fetchpriority="high" decoding="async">
            </picture>

            <div class="hero-section__panel-inner">
                <div class="hero-section__badge-row">
                    <span class="hero-soft-badge">Premium publishing systems</span>
                    <span class="hero-soft-badge">Text-safe image overlays</span>
                </div>

                <div class="panel-kpi">
                    <article>
                        <strong>01</strong>
                        <span>Clear roadmap</span>
                    </article>
                    <article>
                        <strong>02</strong>
                        <span>Editorial quality</span>
                    </article>
                    <article>
                        <strong>03</strong>
                        <span>Launch visibility</span>
                    </article>
                    <article>
                        <strong>04</strong>
                        <span>Growth systems</span>
                    </article>
                </div>

                <div class="hero-section__support">
                    <img src="{{ asset($supportImage) }}" alt="Author portrait" loading="lazy" decoding="async">
                    <div>
                        <strong>Personal guidance</strong>
                        <span>High-trust support from first call to final launch.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>