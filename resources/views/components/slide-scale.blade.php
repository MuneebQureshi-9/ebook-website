@props([
    'kicker' => null,
    'title' => 'Abstract Gallery',
    'subtitle' => 'Auto-scrolling scale slider',
    'slides' => []
])

<section class="section-block container reveal" data-reveal>
    <div class="text-center mb-10">
        @if($kicker)
            <p class="section-kicker mb-3">{{ $kicker }}</p>
        @endif
        <h2 class="text-3xl md:text-4xl font-bold">{{ $title }}</h2>
        <p class="text-gray-500 mt-4 max-w-2xl mx-auto">{{ $subtitle }}</p>
    </div>

    <div class="max-w-6xl mx-auto">
        <div class="scale-slider" data-scale-slider>
            <div class="scale-slider__track flex gap-6 overflow-x-auto snap-x snap-mandatory pb-8 pt-4 items-center" data-scale-track style="scrollbar-width: none; -ms-overflow-style: none;">
                <style>
                    [data-scale-track]::-webkit-scrollbar { display: none; }
                </style>
                @foreach($slides as $index => $slide)
                    <div class="scale-slider__slide flex-none w-[85%] md:w-[60%] lg:w-[45%] snap-center" data-scale-slide>
                        <div class="scale-slider__content flex flex-col gap-5 transform transition-all duration-700 ease-in-out scale-[0.75] opacity-40 origin-center h-full" data-scale-content>
                            @if(($slide['type'] ?? 'cover') === 'testimonial')
                                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl transition-shadow duration-700 h-full flex flex-col justify-center border border-gray-100 min-h-[300px]">
                                    <div class="flex gap-1 mb-6 text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        @endfor
                                    </div>
                                    <div class="transition-all duration-700 translate-y-4 opacity-0 flex flex-col flex-grow" data-scale-text>
                                        <p class="text-gray-700 text-lg md:text-xl italic leading-relaxed mb-6 flex-grow">
                                            {{ $slide['description'] ?? '' }}
                                        </p>
                                        <div class="mt-auto">
                                            <h4 class="text-lg font-bold text-gray-900">{{ $slide['title'] ?? '' }}</h4>
                                            <span class="text-sm text-gray-500 font-medium">{{ $slide['meta'] ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="relative w-full aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl transition-shadow duration-700">
                                    <img src="{{ $slide['image'] ?? '' }}" class="absolute inset-0 w-full h-full object-cover" alt="{{ $slide['alt'] ?? 'Cover' }}">
                                </div>
                                <div class="text-center px-4 transition-all duration-700 translate-y-4 opacity-0" data-scale-text>
                                    @if(!empty($slide['eyebrow']))
                                        <span class="text-xs font-bold tracking-widest uppercase text-blue-600 block mb-2">{{ $slide['eyebrow'] }}</span>
                                    @endif
                                    <h3 class="text-2xl font-bold text-gray-900 leading-tight">{{ $slide['title'] ?? '' }}</h3>
                                    <p class="text-gray-600 mt-3 text-sm leading-relaxed">{{ $slide['description'] ?? '' }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
