@extends('layouts.app')

@section('title', 'About Us | eBook Writing & Publishing Services')
@section('description', 'Learn the story, mission, and team behind our done-for-you book publishing agency. We help authors turn ideas into bestselling books.')
@section('keywords', 'about us, book publishing agency, ebook writing services, publishing team, author support')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="about-hero section-block" style="padding-top: 3rem; background: var(--color-bg);">
    <div class="container">
        {{-- Badge --}}
        <div class="section-heading reveal" data-reveal style="max-width: 100%; text-align: center; margin-bottom: 0;">
            <p class="section-kicker" style="margin: 0 auto 1.25rem; display: inline-flex;">About Our Company</p>
            <h1 style="font-size: clamp(2.4rem, 5.5vw, 4rem); line-height: 1.05; margin-bottom: 1.25rem; max-width: 820px; margin-left: auto; margin-right: auto;">
                The genius minds that<br>
                <span style="color: var(--color-primary);">make your ebooks visible</span> among noise.
            </h1>
            <p style="font-size: 1.125rem; color: var(--color-muted); line-height: 1.75; max-width: 580px; margin: 0 auto 2.5rem;">
                At Pookybooks, we have only one reason: to ensure that your voice has enough visibility. This means you will get more sales, more clients, or more reach.
            </p>

            {{-- Hero CTA Pair --}}
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-bottom: 3.5rem;">
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Get a free strategy call'])
                @include('components.cta-button', ['href' => '#', 'label' => 'Request a quote', 'variant' => 'secondary'])
            </div>
        </div>


    </div>
</section>


{{-- ============================================================
     OUR STORY (two-column editorial split)
     ============================================================ --}}
<section class="section-block container">
    <div class="grid grid--two" style="align-items: center; gap: 3.5rem;">

        {{-- Left: text --}}
        <div class="reveal" data-reveal>
            <p class="section-kicker" style="margin-bottom: 1rem;">Our Story</p>
            <h2 style="margin-bottom: 1.25rem;">Most agencies publish your ebook and wait for luck. We rely on data and research.</h2>
            <p style="margin-bottom: 1rem;">
                We built this agency because we want you to have a publishing process that is as serious as the knowledge you are sharing. Most agencies publish your ebook and then wait for luck to bring results — but we rely on data and research-driven work to bring actual results for you.
            </p>
            <p style="margin-bottom: 1rem;">
                We get that you aren't just here to put a book into the world. You actually want to present it in front of the people who need it most and give them every reason to trust the author behind it.
            </p>
            <p>
                That is what we have been doing for hundreds of authors across every niche. And that is the only thing we do. Here is why many others trust us:
            </p>

            {{-- Divider with trust marks --}}
            <div style="display: flex; flex-wrap: wrap; gap: 1.25rem; margin-top: 2rem;">
                @foreach (['100% IP and rights ownership', 'Voice-matched ghostwriting', 'End-to-end execution', 'Distribution across every major platform'] as $trust)
                <div class="premium-capsule">
                    <svg width="14" height="14" viewBox="0 0 12 12" fill="currentColor" aria-hidden="true" style="color: #7F56D9;"><path d="M10.28 2.28 4.5 8.06 1.72 5.28a1 1 0 0 0-1.44 1.44l3.5 3.5a1 1 0 0 0 1.44 0l6.5-6.5a1 1 0 0 0-1.44-1.44Z"/></svg>
                    {{ $trust }}
                </div>
                @endforeach
            </div>
        </div>

        {{-- Right: portrait image --}}
        <div class="reveal" data-reveal style="--reveal-delay: 100ms;">
            <div style="
                border-radius: 1.5rem;
                overflow: hidden;
                box-shadow: 0 28px 64px rgba(15,23,42,0.14);
                aspect-ratio: 1 / 1;
                position: relative;
                border: 1px solid rgba(255,255,255,0.7);
            ">
                <img
                    src="{{ asset('images/author/portrait author.webp') }}"
                    alt="Author receiving professional publishing support"
                    loading="lazy"
                    decoding="async"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: top; display: block;"
                >
                {{-- Caption badge --}}
                <div style="
                    position: absolute; bottom: 1.25rem; left: 1.25rem;
                    padding: 0.65rem 1rem;
                    border-radius: 1rem;
                    background: rgba(15,23,42,0.82);
                    backdrop-filter: blur(8px);
                    border: 1px solid rgba(255,255,255,0.1);
                    color: rgba(255,255,255,0.95);
                    font-size: 0.875rem;
                    font-weight: 600;
                ">
                    ✦ &nbsp;7+ Years of Author-First Publishing
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================
     STATS SECTION
     ============================================================ --}}
<section class="section-block" style="background: #0f172a; position: relative; overflow: hidden; margin-top: -2px; padding-top: calc(4.5rem + 2px);">

    {{-- Background glow orbs --}}
    <div style="position: absolute; top: -8rem; left: -8rem; width: 30rem; height: 30rem; border-radius: 9999px; background: rgba(37,99,235,0.14); filter: blur(80px); pointer-events: none;"></div>
    <div style="position: absolute; bottom: -8rem; right: -6rem; width: 26rem; height: 26rem; border-radius: 9999px; background: rgba(20,184,166,0.12); filter: blur(80px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-heading reveal" data-reveal style="text-align: center; max-width: 100%;">
            <p class="section-kicker-light" style="margin: 0 auto 1rem;">By The Numbers</p>
            <h2 style="color: #fff; margin-bottom: 0.5rem;">Hundreds of authors are now more visible,<br>more credible, and more in demand.</h2>
            <p style="color: rgba(255,255,255,0.55); max-width: 520px; margin: 0 auto;">
                Each number below represents a real author whose book is actively being worked on for them.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 1.5rem; margin-top: 3rem;" class="stats-grid">
            @foreach ([
                ['500+',  'Books Published',       'Across every niche and format.'],
                ['1M+',   'Words Written',          'Delivered on time, in your authentic voice.'],
                ['100+',  'Bestselling Titles',     'Ranking on Amazon and beyond.'],
                ['98%',   'Client Satisfaction',   'Authors who send peers our way.'],
            ] as $stat)
            <article class="reveal" data-reveal style="
                padding: 1.75rem;
                border-radius: 1.25rem;
                background: rgba(255,255,255,0.04);
                border: 1px solid rgba(255,255,255,0.08);
                backdrop-filter: blur(12px);
                transition: transform 220ms ease, background 220ms ease, border-color 220ms ease;
                cursor: default;
            "
            onmouseenter="this.style.transform='translateY(-4px)'; this.style.background='rgba(37,99,235,0.1)'; this.style.borderColor='rgba(96,165,250,0.25)'"
            onmouseleave="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.04)'; this.style.borderColor='rgba(255,255,255,0.08)'"
            >
                <div style="font-size: 3rem; font-weight: 800; font-family: Poppins, sans-serif; color: #60a5fa; line-height: 1; margin-bottom: 0.4rem;">{{ $stat[0] }}</div>
                <div style="font-size: 1rem; font-weight: 700; color: #fff; margin-bottom: 0.5rem; font-family: Poppins, sans-serif;">{{ $stat[1] }}</div>
                <div style="font-size: 0.875rem; color: rgba(255,255,255,0.5); line-height: 1.6;">{{ $stat[2] }}</div>
            </article>
            @endforeach
        </div>
    </div>
</section>


{{-- ============================================================
     MISSION & VALUES
     ============================================================ --}}
<section class="section-block container">
    <div class="section-heading reveal" data-reveal>
        <p class="section-kicker">Our Values</p>
        <h2>What makes us a highly sought-after<br>option for an author.</h2>
        <p>Not that we are very good at what we do. But authors reach out to us because our services help bring them real leads. Some of our values that we are actually proud of:</p>
    </div>

    <div class="grid grid--three">

        {{-- Excellence --}}
        <article class="surface-card reveal" data-reveal style="display: flex; flex-direction: column; gap: 1.25rem; padding: 2rem; transition: transform 220ms ease, box-shadow 220ms ease;">
            <div style="
                width: 3.25rem; height: 3.25rem;
                display: flex; align-items: center; justify-content: center;
                border-radius: 1rem;
                background: linear-gradient(135deg, rgba(37,99,235,0.12) 0%, rgba(37,99,235,0.06) 100%);
                border: 1px solid rgba(37,99,235,0.14);
                flex-shrink: 0;
            ">
                {{-- Trophy / Award icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/>
                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/>
                    <path d="M4 22h16"/>
                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/>
                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/>
                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/>
                </svg>
            </div>
            <div>
                <h3 style="font-size: 1.25rem; margin: 0 0 0.6rem;">Commercial Quality</h3>
                <p style="line-height: 1.75; margin: 0; color: var(--color-muted);">We prepare each part of the ebook to get results, not just to exist.</p>
            </div>
        </article>

        {{-- Creativity --}}
        <article class="surface-card reveal" data-reveal style="display: flex; flex-direction: column; gap: 1.25rem; padding: 2rem; transition: transform 220ms ease, box-shadow 220ms ease;">
            <div style="
                width: 3.25rem; height: 3.25rem;
                display: flex; align-items: center; justify-content: center;
                border-radius: 1rem;
                background: linear-gradient(135deg, rgba(37,99,235,0.12) 0%, rgba(37,99,235,0.06) 100%);
                border: 1px solid rgba(37,99,235,0.14);
                flex-shrink: 0;
            ">
                {{-- Pen / Nib icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                    <path d="m15 5 4 4"/>
                </svg>
            </div>
            <div>
                <h3 style="font-size: 1.25rem; margin: 0 0 0.6rem;">Your Voice, Intact</h3>
                <p style="line-height: 1.75; margin: 0; color: var(--color-muted);">Your readers trust you. So we maintain your voice in the ebook.</p>
            </div>
        </article>

        {{-- Partnership --}}
        <article class="surface-card reveal" data-reveal style="display: flex; flex-direction: column; gap: 1.25rem; padding: 2rem; transition: transform 220ms ease, box-shadow 220ms ease;">
            <div style="
                width: 3.25rem; height: 3.25rem;
                display: flex; align-items: center; justify-content: center;
                border-radius: 1rem;
                background: linear-gradient(135deg, rgba(37,99,235,0.12) 0%, rgba(37,99,235,0.06) 100%);
                border: 1px solid rgba(37,99,235,0.14);
                flex-shrink: 0;
            ">
                {{-- Handshake icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="m11 17 2 2a1 1 0 1 0 3-3"/>
                    <path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/>
                    <path d="m21 3 1 11h-2"/>
                    <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/>
                    <path d="M3 4h8"/>
                </svg>
            </div>
            <div>
                <h3 style="font-size: 1.25rem; margin: 0 0 0.6rem;">Results Beyond Launch</h3>
                <p style="line-height: 1.75; margin: 0; color: var(--color-muted);">We don't stop at publishing. We help your ebook reach the audience.</p>
            </div>
        </article>

    </div>
</section>


{{-- ============================================================
     PROCESS TIMELINE (horizontal steps)
     ============================================================ --}}
<section class="section-block" style="background: linear-gradient(135deg, rgba(248,250,252,1) 0%, rgba(239,246,255,0.6) 100%);">
    <div class="container">
        <div class="section-heading reveal" data-reveal style="text-align: center; max-width: 100%;">
            <p class="section-kicker" style="margin: 0 auto 1rem; display: inline-flex;">How We Work</p>
            <h2 style="margin-bottom: 0.75rem;">Show your ebook to real people,<br>in just 5 simple steps.</h2>
            <p style="max-width: 500px; margin: 0 auto;">A clear and structured workflow designed to make your publishing journey effortless.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 1rem; margin-top: 3rem; position: relative;" class="process-grid">

            {{-- Connector line (desktop) --}}
            <div style="
                position: absolute; top: 1.75rem; left: 3rem; right: 3rem; height: 2px;
                background: linear-gradient(90deg, rgba(37,99,235,0.15), rgba(37,99,235,0.4), rgba(37,99,235,0.15));
                pointer-events: none; z-index: 0;
            " class="process-connector" aria-hidden="true"></div>

            @foreach ([
                ['01', 'Book a Free Strategy Call',    'Talk with us to share your ideas, objectives, and target markets.'],
                ['02', 'Custom Execution Plan',  'We provide you with a complete roadmap to incentivize your ebook.'],
                ['03', 'Content Creation & Production',    'We produce an ebook as per your personality and tone.'],
                ['04', 'Publishing',   'Your book goes live on multiple major platforms.'],
                ['05', 'Marketing',      'Our experts get your visibility and sales from your ebook.'],
            ] as $step)
            <article class="surface-card reveal" data-reveal style="
                position: relative; z-index: 1;
                padding: 1.5rem 1.25rem;
                display: flex; flex-direction: column; gap: 0.75rem;
                text-align: center; align-items: center;
                transition: transform 220ms ease, box-shadow 220ms ease;
            ">
                <span class="step-number" style="font-size: 0.875rem;">{{ $step[0] }}</span>
                <h3 style="font-size: 1rem; margin: 0;">{{ $step[1] }}</h3>
                <p style="font-size: 0.875rem; line-height: 1.65; margin: 0;">{{ $step[2] }}</p>
            </article>
            @endforeach
        </div>

        <div class="section-cta" style="justify-content: center;">
            @include('components.cta-button', ['href' => route('contact'), 'label' => 'Talk to Our Experts for free'])
        </div>
    </div>
</section>


{{-- ============================================================
     TEAM SECTION
     ============================================================ --}}
<section class="section-block container">
    <div class="section-heading reveal" data-reveal>
        <p class="section-kicker">The People Behind The Work</p>
        <h2>Our dedicated yet<br>proven experts.</h2>
        <p>Every author at Pookybooks gets a publishing strategist, a senior editor, and a creative lead to deliver quality work.</p>
    </div>

    <div class="grid grid--three">
        @foreach ([
            [
                'image' => 'images/author/team-lead.webp',
                'name'  => 'Sarah Mitchell',
                'role'  => 'Head of Publishing Strategy',
                'bio'   => 'Over a decade of placing titles on bestseller charts. Sarah builds the visibility and positioning strategy that makes sure your book reaches people who matter.',
                'twitter' => '#',
                'linkedin'=> '#',
            ],
            [
                'image' => 'images/author/team-editor.webp',
                'name'  => 'Joshua Harlow',
                'role'  => 'Senior Editor & Writing Lead',
                'bio'   => 'Lead editor across 500+ published manuscripts. Joshua ensures your knowledge reads with the clarity and authority that makes readers trust the author immediately.',
                'twitter' => '#',
                'linkedin'=> '#',
            ],
            [
                'image' => 'images/author/team-designer.webp',
                'name'  => 'Amanda Cruz',
                'role'  => 'Creative Director',
                'bio'   => 'Designer behind 80+ chart-ranking covers. Amanda creates the visual identity that makes your book impossible to scroll past and impossible to forget.',
                'twitter' => '#',
                'linkedin'=> '#',
            ],
        ] as $member)
        <article class="surface-card reveal" data-reveal style="
            display: flex; flex-direction: column; gap: 0;
            padding: 0; overflow: hidden;
            transition: transform 220ms ease, box-shadow 220ms ease;
        ">
            {{-- Photo --}}
            <div style="aspect-ratio: 1 / 1; overflow: hidden; border-radius: 1rem 1rem 0 0;">
                <img
                    src="{{ asset($member['image']) }}"
                    alt="{{ $member['name'] }}, {{ $member['role'] }}"
                    loading="lazy"
                    decoding="async"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; transition: transform 400ms ease;"
                    onmouseenter="this.style.transform='scale(1.04)'"
                    onmouseleave="this.style.transform='scale(1)'"
                >
            </div>

            {{-- Info --}}
            <div style="padding: 1.5rem; display: flex; flex-direction: column; gap: 0.6rem; flex: 1;">
                <div>
                    <h3 style="font-size: 1.1rem; margin: 0 0 0.2rem;">{{ $member['name'] }}</h3>
                    <p class="service-card__eyebrow" style="margin: 0; font-size: 0.72rem;">{{ $member['role'] }}</p>
                </div>
                <p style="font-size: 0.875rem; line-height: 1.7; margin: 0; color: var(--color-muted);">{{ $member['bio'] }}</p>

                {{-- Social links --}}
                <div style="display: flex; gap: 0.6rem; margin-top: 0.5rem;">
                    {{-- Twitter/X --}}
                    <a href="{{ $member['twitter'] }}" aria-label="Follow {{ $member['name'] }} on X" style="
                        display: inline-flex; align-items: center; justify-content: center;
                        width: 2.25rem; height: 2.25rem; border-radius: 0.625rem;
                        background: rgba(15,23,42,0.05); border: 1px solid rgba(15,23,42,0.08);
                        color: var(--color-muted);
                        transition: background 180ms ease, color 180ms ease, border-color 180ms ease;
                    "
                    onmouseenter="this.style.background='rgba(37,99,235,0.08)'; this.style.color='var(--color-primary)'; this.style.borderColor='rgba(37,99,235,0.2)'"
                    onmouseleave="this.style.background='rgba(15,23,42,0.05)'; this.style.color='var(--color-muted)'; this.style.borderColor='rgba(15,23,42,0.08)'"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.91-5.622Zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="{{ $member['linkedin'] }}" aria-label="Connect with {{ $member['name'] }} on LinkedIn" style="
                        display: inline-flex; align-items: center; justify-content: center;
                        width: 2.25rem; height: 2.25rem; border-radius: 0.625rem;
                        background: rgba(15,23,42,0.05); border: 1px solid rgba(15,23,42,0.08);
                        color: var(--color-muted);
                        transition: background 180ms ease, color 180ms ease, border-color 180ms ease;
                    "
                    onmouseenter="this.style.background='rgba(37,99,235,0.08)'; this.style.color='var(--color-primary)'; this.style.borderColor='rgba(37,99,235,0.2)'"
                    onmouseleave="this.style.background='rgba(15,23,42,0.05)'; this.style.color='var(--color-muted)'; this.style.borderColor='rgba(15,23,42,0.08)'"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</section>


{{-- ============================================================
     TESTIMONIAL PULL QUOTE
     ============================================================ --}}
<section class="section-block" style="background: rgba(239,246,255,0.5);">
    <div class="container">
        <div class="reveal" data-reveal style="max-width: 860px; margin: 0 auto; text-align: center;">

            {{-- Large decorative quote mark --}}
            <div style="font-size: 6rem; line-height: 0.7; color: rgba(37,99,235,0.12); font-family: Poppins, sans-serif; font-weight: 900; margin-bottom: 1.5rem;" aria-hidden="true">"</div>

            <blockquote style="
                font-size: clamp(1.2rem, 2.5vw, 1.6rem);
                font-family: Poppins, sans-serif;
                font-weight: 600;
                color: var(--color-ink);
                line-height: 1.5;
                letter-spacing: -0.02em;
                margin: 0 0 2rem;
            ">
                I had the knowledge. I just had no idea how to get it in front of the right people. Tried a few times but failed miserably. But working with Pookybooks got my ebook 200+ leads in just the first week. Amazing work.
            </blockquote>

            <div style="display: flex; align-items: center; gap: 1rem; justify-content: center;">
                <img
                    src="{{ asset('images/author/portrait author.webp') }}"
                    alt="Marcus Elliot — author"
                    loading="lazy"
                    decoding="async"
                    style="width: 3rem; height: 3rem; border-radius: 9999px; object-fit: cover; border: 2px solid rgba(37,99,235,0.25);"
                >
                <div style="text-align: left;">
                    <div style="font-weight: 700; color: var(--color-ink); font-size: 0.95rem;">Marcus Elliot</div>
                    <div style="color: var(--color-muted); font-size: 0.85rem;">Independent Consultant &amp; Published Author</div>
                </div>
                {{-- Stars --}}
                <div style="display: flex; gap: 0.2rem; margin-left: 0.5rem;">
                    @for ($s = 0; $s < 5; $s++)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#f59e0b" aria-hidden="true"><path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/></svg>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================
     CTA BOTTOM SECTION
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
                    Your knowledge deserves an audience.<br>Let's make sure it gets one.
                </h2>

                <p style="color: rgba(255,255,255,0.65); font-size: 1.05rem; line-height: 1.7; max-width: 520px; margin: 0 auto 2.5rem;">
                    Book a free 30-minute strategy call. We will show you exactly how your expertise becomes a published book that builds your visibility, grows your audience, and brings the right people to you.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    {{-- Primary: white on dark bg --}}
                    <a href="{{ route('contact') }}" class="action-button" style="
                        background: #ffffff;
                        color: #1e3a8a;
                        box-shadow: 0 14px 30px rgba(15,23,42,0.25);
                        font-weight: 800;
                    "
                    onmouseenter="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-2px)'"
                    onmouseleave="this.style.background='#ffffff'; this.style.transform='translateY(0)'"
                    >
                        Book a Free Call
                    </a>

                    {{-- Secondary: ghost on dark --}}
                    <a href="{{ route('services.index') }}" class="action-button" style="
                        background: rgba(255,255,255,0.08);
                        border: 1px solid rgba(255,255,255,0.22);
                        color: rgba(255,255,255,0.9);
                        font-weight: 700;
                    "
                    onmouseenter="this.style.background='rgba(255,255,255,0.14)'; this.style.transform='translateY(-2px)'"
                    onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'"
                    >
                        Explore Our Services
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

{{-- ============================================================
     Page-specific responsive CSS
     ============================================================ --}}
<style>
    @media (max-width: 1024px) {
        .stats-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
        .process-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
        .process-connector {
            display: none !important;
        }
    }
    @media (max-width: 767px) {
        .stats-grid,
        .process-grid {
            grid-template-columns: 1fr !important;
        }
        .process-connector {
            display: none !important;
        }
    }
</style>

@endsection