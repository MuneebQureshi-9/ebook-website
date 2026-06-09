@extends('layouts.app')

@section('title', 'Portfolio – Our Published Works | eBook Publishing Agency')
@section('description', 'Explore our portfolio of published ebooks, cover designs, audiobooks, and marketing campaigns. See real results from real authors.')
@section('keywords', 'ebook portfolio, published books, book cover design portfolio, author portfolio, book marketing results')

@section('content')

    {{-- ============================================================
    HERO SECTION
    ============================================================ --}}
    <section class="section-block"
        style="padding-top: 3rem; padding-bottom: 1rem; background: var(--color-bg); position: relative; overflow: hidden;">

        {{-- Decorative Background Orbs --}}
        <div
            style="position: absolute; top: -10%; left: -10%; width: 40rem; height: 40rem; background: rgba(37,99,235,0.08); border-radius: 9999px; filter: blur(100px); pointer-events: none;">
        </div>
        <div
            style="position: absolute; top: 30%; right: -5%; width: 30rem; height: 30rem; background: rgba(99,102,241,0.07); border-radius: 9999px; filter: blur(100px); pointer-events: none;">
        </div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="section-heading reveal" data-reveal style="max-width: 100%; text-align: center; margin-bottom: 0;">
                <p class="section-kicker" style="margin: 0 auto 1.25rem; display: inline-flex;">Our Portfolio</p>
                <h1
                    style="font-size: clamp(2.2rem, 5vw, 3.8rem); line-height: 1.08; margin-bottom: 1.25rem; max-width: 780px; margin-left: auto; margin-right: auto;">
                    Projects That Speak
                    <span style="color: var(--color-primary);">For Themselves</span>
                </h1>
                <p
                    style="font-size: 1.1rem; color: var(--color-muted); line-height: 1.75; max-width: 560px; margin: 0 auto;">
                    Browse through a collection of ebooks we've written, designed, published, and marketed for authors
                    worldwide.
                </p>
            </div>
        </div>
    </section>


    {{-- ============================================================
    PORTFOLIO GRID
    ============================================================ --}}
    <section class="section-block container" style="padding-top: 1.5rem;">

        <div class="portfolio-grid">
            @foreach ($ebook['portfolio'] as $index => $project)
                <article class="portfolio-card reveal" data-reveal style="--reveal-delay: {{ $index * 80 }}ms; cursor: pointer;"
                    onclick="openLightbox({{ $index }})" id="portfolio-card-{{ $index }}">
                    {{-- Thumbnail --}}
                    <div class="portfolio-card__media">
                        <img src="{{ asset($project['thumbnail']) }}" alt="{{ $project['title'] }} — project mockup"
                            loading="lazy" decoding="async"
                            onerror="this.style.display='none'; this.parentElement.classList.add('portfolio-card__media--placeholder');">
                        {{-- Hover overlay --}}
                        <div class="portfolio-card__overlay">
                            <div class="portfolio-card__overlay-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 3h6v6" />
                                    <path d="M10 14 21 3" />
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                </svg>
                                <span>View Project</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card body --}}
                    <div class="portfolio-card__body">
                        <span class="portfolio-card__category">{{ $project['category'] }}</span>
                        <h3 class="portfolio-card__title">{{ $project['title'] }}</h3>
                        <p class="portfolio-card__desc">{{ $project['description'] }}</p>
                    </div>
                </article>
            @endforeach
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
                <div style="position: absolute; top: -6rem; right: -6rem; width: 24rem; height: 24rem; border-radius: 9999px; background: rgba(96,165,250,0.12); filter: blur(60px); pointer-events: none;"
                    aria-hidden="true"></div>
                <div style="position: absolute; bottom: -6rem; left: -4rem; width: 20rem; height: 20rem; border-radius: 9999px; background: rgba(20,184,166,0.12); filter: blur(60px); pointer-events: none;"
                    aria-hidden="true"></div>

                <div style="position: relative; z-index: 1; max-width: 680px; margin: 0 auto; text-align: center;">

                    <p class="section-kicker-light" style="margin-bottom: 1.5rem;">✦ &nbsp;Want results like these?</p>

                    <h2
                        style="color: #ffffff; font-size: clamp(1.75rem, 4vw, 3rem); margin-bottom: 1.25rem; line-height: 1.1;">
                        Your book could be<br>our next success story.
                    </h2>

                    <p
                        style="color: rgba(255,255,255,0.65); font-size: 1.05rem; line-height: 1.7; max-width: 520px; margin: 0 auto 2.5rem;">
                        Book a free 30-minute strategy call. We'll map out a clear plan to write, publish, and grow your
                        book into a business asset.
                    </p>

                    <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                        <a href="{{ route('contact') }}" class="action-button" style="
                            background: #ffffff;
                            color: #1e3a8a;
                            box-shadow: 0 14px 30px rgba(15,23,42,0.25);
                            font-weight: 800;
                        " onmouseenter="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-2px)'"
                            onmouseleave="this.style.background='#ffffff'; this.style.transform='translateY(0)'">
                            Start Your Project
                        </a>

                        <a href="{{ route('services.index') }}" class="action-button" style="
                            background: rgba(255,255,255,0.08);
                            border: 1px solid rgba(255,255,255,0.22);
                            color: rgba(255,255,255,0.9);
                            font-weight: 700;
                        " onmouseenter="this.style.background='rgba(255,255,255,0.14)'; this.style.transform='translateY(-2px)'"
                            onmouseleave="this.style.background='rgba(255,255,255,0.08)'; this.style.transform='translateY(0)'">
                            Explore Services
                        </a>
                    </div>

                    {{-- Trust badges --}}
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center; margin-top: 2rem;">
                        @foreach (['No commitment required', 'Free 30-min call', 'Results-driven approach'] as $badge)
                            <span style="
                                display: inline-flex; align-items: center; gap: 0.4rem;
                                color: rgba(255,255,255,0.55); font-size: 0.8rem; font-weight: 500;
                            ">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <circle cx="7" cy="7" r="6.5" stroke="rgba(255,255,255,0.3)" stroke-width="1" />
                                    <path d="M4.5 7L6.5 9L9.5 5.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.25"
                                        stroke-linecap="round" stroke-linejoin="round" />
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
    LIGHTBOX MODAL
    ============================================================ --}}
    <div class="portfolio-lightbox" id="portfolioLightbox" style="display: none;" role="dialog" aria-modal="true"
        aria-label="Project gallery">

        {{-- Backdrop --}}
        <div class="portfolio-lightbox__backdrop" onclick="closeLightbox()"></div>

        {{-- Modal content --}}
        <div class="portfolio-lightbox__container">

            {{-- Header --}}
            <div class="portfolio-lightbox__header">
                <div>
                    <h2 class="portfolio-lightbox__title" id="lightboxTitle"></h2>
                    <p class="portfolio-lightbox__category" id="lightboxCategory"></p>
                </div>
                <button class="portfolio-lightbox__close" onclick="closeLightbox()" aria-label="Close gallery">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>

            {{-- Gallery --}}
            <div class="portfolio-lightbox__gallery" id="lightboxGallery">
                {{-- Images will be injected here by JS --}}
            </div>

            {{-- Navigation arrows --}}
            <button class="portfolio-lightbox__nav portfolio-lightbox__nav--prev" onclick="lightboxPrev()"
                aria-label="Previous image">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>
            <button class="portfolio-lightbox__nav portfolio-lightbox__nav--next" onclick="lightboxNext()"
                aria-label="Next image">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>

            {{-- Counter --}}
            <div class="portfolio-lightbox__counter" id="lightboxCounter"></div>
        </div>
    </div>


    {{-- ============================================================
    LIGHTBOX JAVASCRIPT
    ============================================================ --}}
    <script>
        const portfolioData = @json($ebook['portfolio']);
        let currentProjectIndex = 0;
        let currentImageIndex = 0;

        function openLightbox(projectIndex) {
            const project = portfolioData[projectIndex];
            if (!project) return;

            currentProjectIndex = projectIndex;
            currentImageIndex = 0;

            document.getElementById('lightboxTitle').textContent = project.title;
            document.getElementById('lightboxCategory').textContent = project.category;

            renderGalleryImage();

            const lightbox = document.getElementById('portfolioLightbox');
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            // Animate in
            requestAnimationFrame(() => {
                lightbox.classList.add('is-active');
            });
        }

        function closeLightbox() {
            const lightbox = document.getElementById('portfolioLightbox');
            lightbox.classList.remove('is-active');
            setTimeout(() => {
                lightbox.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }

        function renderGalleryImage() {
            const project = portfolioData[currentProjectIndex];
            const gallery = document.getElementById('lightboxGallery');
            const counter = document.getElementById('lightboxCounter');
            const images = project.images;

            gallery.innerHTML = `
                <div class="portfolio-lightbox__image-wrapper">
                    <img
                        src="/${images[currentImageIndex]}"
                        alt="${project.title} — image ${currentImageIndex + 1}"
                        onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\\'portfolio-lightbox__placeholder\\'>Image not available</div>';"
                    >
                </div>
            `;

            counter.textContent = `${currentImageIndex + 1} / ${images.length}`;

            // Show/hide nav buttons
            const prevBtn = document.querySelector('.portfolio-lightbox__nav--prev');
            const nextBtn = document.querySelector('.portfolio-lightbox__nav--next');
            if (prevBtn) prevBtn.style.display = currentImageIndex > 0 ? 'flex' : 'none';
            if (nextBtn) nextBtn.style.display = currentImageIndex < images.length - 1 ? 'flex' : 'none';
        }

        function lightboxPrev() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                renderGalleryImage();
            }
        }

        function lightboxNext() {
            const project = portfolioData[currentProjectIndex];
            if (currentImageIndex < project.images.length - 1) {
                currentImageIndex++;
                renderGalleryImage();
            }
        }

        // Keyboard support
        document.addEventListener('keydown', function (e) {
            const lightbox = document.getElementById('portfolioLightbox');
            if (lightbox.style.display === 'none') return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') lightboxPrev();
            if (e.key === 'ArrowRight') lightboxNext();
        });
    </script>


    {{-- ============================================================
    Page-specific responsive CSS
    ============================================================ --}}
    <style>
        @media (max-width: 1024px) {
            .portfolio-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (max-width: 767px) {
            .portfolio-grid {
                grid-template-columns: 1fr !important;
            }

            .portfolio-lightbox__container {
                padding: 1rem !important;
            }

            .portfolio-lightbox__header {
                padding: 0 0 0.75rem !important;
            }

            .portfolio-lightbox__nav {
                width: 2.5rem !important;
                height: 2.5rem !important;
            }
        }
    </style>

@endsection