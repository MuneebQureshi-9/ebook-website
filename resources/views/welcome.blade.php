<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Hero & Navigation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <!-- Tailwind config for CDN fallback if Vite fails in environment -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        purple: {
                            50: '#F9F5FF',
                            100: '#F4EBFF',
                            200: '#E9D7FE',
                            500: '#9E77ED',
                            600: '#7F56D9',
                            700: '#6941C6',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 overflow-x-hidden min-h-screen flex flex-col">

    <!-- Navigation Menu -->
    <header class="border-b border-gray-100 bg-white sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Left side (Logo & Links) -->
                <div class="flex items-center gap-10">
                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo/PNG 2.png') }}" alt="Pookybooks Logo" class="h-10 w-auto object-contain">
                    </a>

                    <!-- Desktop Nav Links -->
                    <nav class="hidden md:flex items-center gap-8">
                        <!-- Products -->
                        <a href="#" class="text-gray-600 hover:text-gray-900 font-medium py-2">Products</a>
                        
                        <!-- Services (Mega Menu) -->
                        <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button class="flex items-center gap-1.5 text-gray-600 hover:text-gray-900 font-medium py-2">
                                Services
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            
                            <!-- Mega Menu Dropdown -->
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 translate-y-2"
                                 class="absolute top-full -left-10 mt-1 w-[800px] bg-white rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 p-8 z-50" 
                                 style="display: none;">
                                <div class="grid grid-cols-2 gap-x-12 gap-y-6">
                                    <!-- Column 1 -->
                                    <div class="space-y-6">
                                        <!-- Item 1 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Book Writing</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Transform your ideas into a professionally written, published book.</p>
                                            </div>
                                        </a>
                                        <!-- Item 2 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">E-book Writing</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Engage digital readers with captivating e-books tailored to your audience.</p>
                                            </div>
                                        </a>
                                        <!-- Item 3 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Book Editing</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Refine your manuscript with our expert proofreading and editing.</p>
                                            </div>
                                        </a>
                                        <!-- Item 4 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Book Publishing</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Navigate the publishing world with our step-by-step guidance.</p>
                                            </div>
                                        </a>
                                        <!-- Item 5 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Book Formatting</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Ensure your book meets industry standards for print and digital.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Column 2 -->
                                    <div class="space-y-6">
                                        <!-- Item 6 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Book Marketing</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Boost your book's visibility with targeted marketing campaigns.</p>
                                            </div>
                                        </a>
                                        <!-- Item 7 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Audio Book</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Bring your story to life with professional voiceover narration.</p>
                                            </div>
                                        </a>
                                        <!-- Item 8 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Author Website</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Build your online presence with a stunning author portfolio.</p>
                                            </div>
                                        </a>
                                        <!-- Item 9 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Video Trailer</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Captivate potential readers with a cinematic book trailer.</p>
                                            </div>
                                        </a>
                                        <!-- Item 10 -->
                                        <a href="#" class="flex items-start gap-4 hover:bg-gray-50 p-3 -m-3 rounded-xl transition-colors group/item">
                                            <div class="flex-shrink-0 text-purple-600 mt-1">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900 group-hover/item:text-purple-600 transition-colors">Cover Design</h3>
                                                <p class="text-sm text-gray-500 mt-1 leading-relaxed">Get a visually striking cover that stands out on the shelves.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <a href="#" class="text-gray-600 hover:text-gray-900 font-medium py-2">Pricing</a>
                        
                        <!-- Resources -->
                        <a href="#" class="text-gray-600 hover:text-gray-900 font-medium py-2">Resources</a>

                        <!-- About -->
                        <a href="#" class="text-gray-600 hover:text-gray-900 font-medium py-2">About</a>
                    </nav>
                </div>

                <!-- Right side (Auth Buttons) -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="#" class="text-gray-700 font-semibold px-4 py-2.5 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors shadow-sm">
                        Log in
                    </a>
                    <a href="#" class="bg-purple-600 text-white font-semibold px-4 py-2.5 rounded-lg hover:bg-purple-700 transition-colors shadow-sm">
                        Sign up
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow flex flex-col lg:flex-row relative">
        <!-- Left Content -->
        <div class="w-full lg:w-[55%] flex flex-col justify-center px-4 sm:px-6 lg:pl-20 xl:pl-32 pt-16 lg:pt-0 pb-20 lg:pb-0 z-10">
            <div class="max-w-2xl">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 p-1 pr-3 rounded-full bg-purple-50 border border-purple-200/60 mb-8 hover:bg-purple-100/50 transition-colors cursor-pointer group">
                    <span class="px-2.5 py-0.5 rounded-full bg-white text-purple-700 text-xs font-semibold shadow-sm border border-purple-100">
                        We're hiring!
                    </span>
                    <span class="text-purple-700 text-sm font-medium flex items-center gap-1 group-hover:text-purple-800 transition-colors">
                        Join our remote team
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </span>
                </div>
                
                <!-- Heading -->
                <h1 class="text-5xl sm:text-6xl lg:text-[4.5rem] lg:leading-[1.1] font-bold text-gray-900 tracking-tight mb-6">
                    People who care about your growth
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg sm:text-xl text-gray-500 mb-10 max-w-lg leading-relaxed">
                    Powerful, self-serve product and growth analytics to help you convert, engage, and retain more.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <button class="inline-flex items-center justify-center gap-2 px-6 py-3.5 border border-gray-300 rounded-lg text-gray-700 font-semibold hover:bg-gray-50 bg-white transition-colors shadow-sm text-lg sm:text-base">
                        <svg class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Demo
                    </button>
                    <button class="inline-flex items-center justify-center px-6 py-3.5 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition-colors shadow-sm text-lg sm:text-base">
                        Sign up
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Image Column -->
        <div class="hidden lg:block absolute top-0 right-0 w-[50%] h-full">
            <div class="w-full h-full relative" style="clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);">
                <!-- Decorative background behind image, maybe unnecessary if using high-quality image, but provides the angle -->
                <div class="absolute inset-0 bg-gray-100"></div>
                <img 
                    src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=2400" 
                    alt="Professional woman in office" 
                    class="w-full h-full object-cover object-center"
                />
                <!-- Subtle gradient overlay to match aesthetic -->
                <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/10 to-transparent"></div>
            </div>
        </div>
        
        <!-- Mobile Image -->
        <div class="lg:hidden w-full h-[400px] mt-8 relative px-4 sm:px-6">
            <img 
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=1200" 
                alt="Professional woman in office" 
                class="w-full h-full object-cover rounded-2xl shadow-lg"
            />
        </div>
    </main>

</body>
</html>
