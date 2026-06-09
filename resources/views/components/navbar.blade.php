<header class="site-header">
    <div class="container">

        {{-- ─── Top Bar: always one single row ──────────────────────── --}}
        <div class="nav-bar">

            {{-- Logo --}}
            <a class="brand" href="{{ route('home') }}" style="display: flex; align-items: center; gap: 0.5rem; text-decoration: none;">
                <div style="background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 8px; padding: 6px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(59,130,246,0.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
                    </svg>
                </div>
                <span style="font-family: 'Poppins', sans-serif; font-size: 1.5rem; font-weight: 800; letter-spacing: -0.03em;">
                    <span style="color: inherit;">Pooky</span><span style="color: #3b82f6;">books</span>
                </span>
            </a>

            {{-- Desktop + Tablet nav (visible ≥ 768px) --}}
            <nav class="desktop-nav" aria-label="Primary">
                <a href="{{ route('home') }}">Home</a>

                {{-- Services with hover mega-menu --}}
                <div class="services-item group">
                    <span class="services-item__label">
                        Services
                        <svg class="services-item__arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                    <div class="mega-menu-dropdown">
                        <div class="mega-menu-dropdown__grid">
                            <div class="mega-menu-dropdown__col">
                                <a href="{{ route('services.show', 'book-writing') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Writing</strong><small>Transform your ideas into a professionally written book.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-formatting') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Formatting</strong><small>Industry-standard formatting for print &amp; digital.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-editing') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Editing</strong><small>Expert proofreading and manuscript editing.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-publishing') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Publishing</strong><small>Step-by-step publishing guidance.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-marketing') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Marketing</strong><small>Targeted campaigns to boost your visibility.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-printing') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></span>
                                    <span class="mega-item__text"><strong>E-book Printing</strong><small>Put your ebook in the readers’ hands.</small></span>
                                </a>
                            </div>
                            <div class="mega-menu-dropdown__col">
                                <a href="{{ route('services.show', 'audiobook-services') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg></span>
                                    <span class="mega-item__text"><strong>Audio Book</strong><small>Professional voiceover narration services.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'author-website-development') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg></span>
                                    <span class="mega-item__text"><strong>Author Website</strong><small>Stunning author portfolio websites.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'podcast-services') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg></span>
                                    <span class="mega-item__text"><strong>Podcast Services</strong><small>Scale your voice across multi-channels.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'book-illustration-design') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></span>
                                    <span class="mega-item__text"><strong>Book Illustration &amp; Design</strong><small>Visualize your voice to stand out.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'cover-design') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></span>
                                    <span class="mega-item__text"><strong>Cover Design</strong><small>Visually striking covers that stand out.</small></span>
                                </a>
                                <a href="{{ route('services.show', 'video-trailer') }}" class="mega-item">
                                    <span class="mega-item__icon"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></span>
                                    <span class="mega-item__text"><strong>Video Trailer</strong><small>Cinematic book trailers that captivate readers.</small></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('portfolio') }}">Portfolio</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>

            {{-- CTA Button (desktop + tablet) --}}
            <div class="nav-cta">
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Free Consultation', 'variant' => 'primary'])
            </div>

            {{-- Hamburger (mobile only, < 768px) --}}
            <button class="hamburger" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu" data-nav-toggle>
                <span class="hamburger__bar"></span>
                <span class="hamburger__bar"></span>
                <span class="hamburger__bar"></span>
            </button>

        </div>{{-- /.nav-bar --}}

        {{-- ─── Mobile Menu Panel (< 768px, toggled by JS) ─────────── --}}
        <nav class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation" data-nav-panel>
            <a href="{{ route('home') }}" class="mobile-menu__link">Home</a>

            {{-- Services: tap-to-expand accordion on mobile --}}
            <details class="mobile-menu__accordion">
                <summary class="mobile-menu__link mobile-menu__summary">
                    Services
                    <svg class="mobile-menu__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <div class="mobile-menu__sub">
                    <a href="{{ route('services.show', 'book-writing') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                        E-book Writing
                    </a>
                    <a href="{{ route('services.show', 'book-formatting') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        E-book Formatting
                    </a>
                    <a href="{{ route('services.show', 'book-editing') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                        E-book Editing
                    </a>
                    <a href="{{ route('services.show', 'book-publishing') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        E-book Publishing
                    </a>
                    <a href="{{ route('services.show', 'book-marketing') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                        E-book Marketing
                    </a>
                    <a href="{{ route('services.show', 'book-printing') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        E-book Printing
                    </a>
                    <a href="{{ route('services.show', 'audiobook-services') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                        Audio Book
                    </a>
                    <a href="{{ route('services.show', 'author-website-development') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        Author Website
                    </a>
                    <a href="{{ route('services.show', 'podcast-services') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                        Podcast Services
                    </a>
                    <a href="{{ route('services.show', 'book-illustration-design') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Book Illustration &amp; Design
                    </a>
                    <a href="{{ route('services.show', 'cover-design') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Cover Design
                    </a>
                    <a href="{{ route('services.show', 'video-trailer') }}" class="mobile-menu__sub-link">
                        <svg class="mobile-menu__sub-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        Video Trailer
                    </a>
                    <a href="{{ route('services.index') }}" class="mobile-menu__sub-link mobile-menu__sub-link--all">
                        View All Services →
                    </a>
                </div>
            </details>

            <a href="{{ route('about') }}" class="mobile-menu__link">About</a>
            <a href="{{ route('portfolio') }}" class="mobile-menu__link">Portfolio</a>
            <a href="{{ route('blog') }}" class="mobile-menu__link">Blog</a>
            <a href="{{ route('faq') }}" class="mobile-menu__link">FAQ</a>
            <a href="{{ route('contact') }}" class="mobile-menu__link">Contact</a>
            <div class="mobile-menu__cta">
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Free Consultation', 'variant' => 'primary'])
            </div>
        </nav>

    </div>{{-- /.container --}}
</header>