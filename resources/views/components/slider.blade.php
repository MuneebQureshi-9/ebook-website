@props([
    'title' => null,
    'subtitle' => null,
    'slides' => [],
    'id' => 'premium-slider',
])

<section class="slider-shell section-block container reveal overflow-hidden" data-reveal>
    @if ($title || $subtitle)
        <div class="slider-shell__header text-center mb-8">
            @if ($title)
                <p class="section-kicker">Featured</p>
                <h2 class="text-3xl font-bold">{{ $title }}</h2>
            @endif
            @if ($subtitle)
                <p class="text-gray-500 mt-2">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    <div class="embla mx-auto max-w-5xl" data-embla>
        <div class="embla__viewport overflow-hidden" data-embla-viewport>
            <div class="embla__container flex touch-pan-y" style="backface-visibility: hidden;">
                @foreach ($slides as $slide)
                    <div class="embla__slide flex-none w-[60%] md:w-[33.333%] min-w-0" style="transform: translate3d(0, 0, 0);">
                        <div class="embla__slide__inner p-4 h-full flex flex-col justify-center items-center">
                            <img src="{{ $slide['image'] }}" 
                                 class="w-full h-auto object-cover rounded-xl shadow-lg transition-transform duration-500 ease-out" 
                                 data-embla-img
                                 alt="{{ $slide['alt'] ?? '' }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="flex justify-center gap-4 mt-6">
            <button class="embla__prev size-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors" data-embla-prev>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button class="embla__next size-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors" data-embla-next>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
        </div>
    </div>
</section>