<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="{{ route('home') }}">
            <span>eBook Publishing Agency</span>
        </a>

        <button class="mobile-nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" data-nav-toggle>
            <span class="mobile-nav-toggle__icon" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <span>Menu</span>
        </button>

        <nav class="site-nav" aria-label="Primary">
            <div class="site-nav__panel" id="primary-navigation" data-nav-panel>
                <a href="{{ route('home') }}">Home</a>
                <div class="relative group cursor-pointer py-2">
                    <div class="flex items-center gap-1.5 font-medium transition-colors">
                        Services
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-slate-900 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    
                    <!-- Mega Menu Dropdown -->
                    <div class="mega-menu-dropdown absolute top-full left-1/2 -translate-x-1/2 mt-1 w-[800px] bg-white rounded-xl shadow-2xl border border-slate-100 p-8 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="grid grid-cols-2 gap-x-12 gap-y-6 text-left">
                            <!-- Column 1 -->
                            <div class="space-y-6">
                                <!-- Item 1 -->
                                <a href="{{ route('services.show', 'book-writing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Book Writing</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Transform your ideas into a professionally written, published book.</p>
                                    </div>
                                </a>
                                <!-- Item 2 -->
                                <a href="{{ route('services.show', 'book-writing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">E-book Writing</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Engage digital readers with captivating e-books tailored to your audience.</p>
                                    </div>
                                </a>
                                <!-- Item 3 -->
                                <a href="{{ route('services.show', 'book-editing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Book Editing</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Refine your manuscript with our expert proofreading and editing.</p>
                                    </div>
                                </a>
                                <!-- Item 4 -->
                                <a href="{{ route('services.show', 'book-publishing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Book Publishing</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Navigate the publishing world with our step-by-step guidance.</p>
                                    </div>
                                </a>
                                <!-- Item 5 -->
                                <a href="{{ route('services.show', 'book-printing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Book Formatting</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Ensure your book meets industry standards for print and digital.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- Column 2 -->
                            <div class="space-y-6">
                                <!-- Item 6 -->
                                <a href="{{ route('services.show', 'book-marketing') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Book Marketing</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Boost your book's visibility with targeted marketing campaigns.</p>
                                    </div>
                                </a>
                                <!-- Item 7 -->
                                <a href="{{ route('services.show', 'audiobook-services') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Audio Book</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Bring your story to life with professional voiceover narration.</p>
                                    </div>
                                </a>
                                <!-- Item 8 -->
                                <a href="{{ route('services.show', 'author-website-development') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Author Website</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Build your online presence with a stunning author portfolio.</p>
                                    </div>
                                </a>
                                <!-- Item 9 -->
                                <a href="{{ route('services.show', 'podcast-services') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Video Trailer</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Captivate potential readers with a cinematic book trailer.</p>
                                    </div>
                                </a>
                                <!-- Item 10 -->
                                <a href="{{ route('services.show', 'book-illustration-design') }}" class="flex items-start gap-4 hover:bg-slate-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                    <div class="flex-shrink-0 mt-1 text-indigo-600">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-slate-900 group-hover/item:text-indigo-600 transition-colors m-0 text-base">Cover Design</h3>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed font-normal m-0">Get a visually striking cover that stands out on the shelves.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Free Consultation', 'variant' => 'primary'])
            </div>
        </nav>
    </div>
</header>