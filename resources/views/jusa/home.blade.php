<x-jusa-layout>
    <x-slot:title>JUSA Tropical Smoothie Café — Taste the Island Energy</x-slot:title>

    {{-- ==================== HERO (cream + peach gradient, two-column) ==================== --}}
    <section class="relative overflow-hidden bg-jusa-cream">
        {{-- Warm cream → soft peach / pink (top-right) --}}
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_90%_70%_at_100%_0%,rgba(255,210,205,0.55)_0%,rgba(255,245,240,0.35)_42%,transparent_72%)]"></div>
        <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-jusa-cream via-[#FFF7F3] to-[#FFEAE5]"></div>

        <div class="relative z-10 mx-auto flex max-w-7xl items-center px-4 py-16 sm:px-6 sm:py-20 lg:min-h-[min(90vh,880px)] lg:px-8 lg:py-24">
            <div class="grid w-full grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-16 xl:gap-20">
                {{-- Left: copy & CTAs --}}
                <div class="order-2 max-w-xl lg:order-1">
                    <div
                        class="mb-6 inline-flex items-center rounded-full bg-jusa-red px-4 py-2 text-[11px] font-bold uppercase tracking-[0.2em] text-white shadow-sm sm:mb-8 sm:text-xs"
                        data-scroll-reveal="fade-up"
                        data-scroll-reveal-delay="40"
                    >
                         Refreshment
                    </div>

                    <h1 class="hero-brand-title text-balance">
                        <span class="hero-brand-line hero-brand-line-one"><span class="hero-jusa-word">Jusa's</span> Tropical</span>
                        <span class="hero-brand-line hero-brand-line-two text-gradient-green">Smoothie</span>
                        <span class="hero-brand-line hero-brand-line-three">Café</span>
                    </h1>

                    <p
                        class="mb-10 max-w-xl font-manrope text-base leading-relaxed text-jusa-text sm:text-lg"
                        data-scroll-reveal="fade-up"
                        data-scroll-reveal-delay="120"
                    >
                        Step into Naval's freshest flavor stop for bold fruit blends, vibrant comfort food, and feel-good favorites that make you want to visit now, not later. 
                    </p>

                    <div
                        class="flex flex-wrap items-center gap-5 sm:gap-8"
                        data-scroll-reveal="fade-up"
                        data-scroll-reveal-delay="200"
                    >
                        <a
                            href="{{ route('menu') }}"
                            class="inline-flex items-center justify-center rounded-full bg-jusa-red px-8 py-4 text-base font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 hover:bg-jusa-red-dark hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-jusa-red focus:ring-offset-2"
                        >
                            View Menu
                        </a>
                        <a
                            href="{{ route('about') }}"
                            class="group inline-flex items-center gap-3 font-semibold text-jusa-text transition-colors hover:text-jusa-red"
                        >
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-jusa-text/15 bg-white shadow-sm ring-1 ring-black/5 transition-transform duration-300 group-hover:scale-105">
                                <svg class="ml-0.5 h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </span>
                            Our Process
                        </a>
                    </div>
                </div>

                {{-- Right: layered image + seasonal card --}}
                <div
                    class="order-1 w-full lg:order-2 lg:justify-self-end"
                    data-scroll-reveal="fade-right"
                    data-scroll-reveal-delay="100"
                >
                    <div class="relative mx-auto w-full max-w-[min(100%,420px)] lg:max-w-[480px] xl:max-w-[520px]">
                        {{-- Offset “stacked card” wash --}}
                        <div
                            class="absolute -left-5 -top-5 z-0 h-[88%] w-[88%] rounded-[2rem] bg-rose-200/55 sm:-left-6 sm:-top-6 sm:rounded-[2.25rem]"
                            aria-hidden="true"
                        ></div>

                        <div
                            x-data="{
                                slides: {{ json_encode($heroSlides) }},
                                current: 0,
                                timer: null,
                                intervalMs: 4000,
                                init() {
                                    if (! window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                                        this.startAutoplay()
                                    }
                                },
                                startAutoplay() {
                                    if (this.timer) {
                                        clearInterval(this.timer)
                                    }
                                    this.timer = setInterval(() => {
                                        this.next()
                                    }, this.intervalMs)
                                },
                                pauseAutoplay() {
                                    if (this.timer) {
                                        clearInterval(this.timer)
                                        this.timer = null
                                    }
                                },
                                go(i) {
                                    this.current = i
                                },
                                next() {
                                    this.current = (this.current + 1) % this.slides.length
                                },
                                prev() {
                                    this.current = (this.current - 1 + this.slides.length) % this.slides.length
                                },
                                restartAutoplay() {
                                    this.pauseAutoplay()
                                    if (! window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                                        this.startAutoplay()
                                    }
                                }
                            }"
                            @mouseenter="pauseAutoplay()"
                            @mouseleave="restartAutoplay()"
                            @keydown.left.prevent="prev(); restartAutoplay()"
                            @keydown.right.prevent="next(); restartAutoplay()"
                            tabindex="0"
                            data-hero-slider
                            class="relative z-10 rounded-[2rem] outline-none focus-visible:ring-2 focus-visible:ring-jusa-red focus-visible:ring-offset-2 focus-visible:ring-offset-jusa-cream sm:rounded-[2.25rem]"
                            role="region"
                            aria-roledescription="carousel"
                            aria-label="Featured dishes and drinks"
                        >
                            <div class="relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-jusa-surface-high/40 shadow-2xl shadow-jusa-text/[0.08] ring-1 ring-black/[0.06] sm:rounded-[2.25rem]">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <img
                                        :src="slide.src"
                                        :alt="slide.alt"
                                        width="520"
                                        height="650"
                                        class="absolute inset-0 h-full w-full object-cover object-center transition-opacity duration-[700ms] ease-in-out motion-reduce:transition-none"
                                        :class="current === index ? 'z-[1] opacity-100' : 'z-0 opacity-0'"
                                        decoding="async"
                                        :loading="index === 0 ? 'eager' : 'lazy'"
                                        :fetchpriority="index === 0 ? 'high' : 'low'"
                                    >
                                </template>

                                {{-- Prev / Next --}}
                                <div class="pointer-events-none absolute inset-0 z-[2] flex items-center justify-between px-1.5 sm:px-2">
                                    <button
                                        type="button"
                                        class="pointer-events-auto flex h-9 w-9 items-center justify-center rounded-full border border-white/60 bg-white/90 text-jusa-text shadow-md backdrop-blur-sm transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-jusa-red focus:ring-offset-2 sm:h-10 sm:w-10"
                                        aria-label="Previous slide"
                                        @click.prevent="prev(); restartAutoplay()"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>
                                    </button>
                                    <button
                                        type="button"
                                        class="pointer-events-auto flex h-9 w-9 items-center justify-center rounded-full border border-white/60 bg-white/90 text-jusa-text shadow-md backdrop-blur-sm transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-jusa-red focus:ring-offset-2 sm:h-10 sm:w-10"
                                        aria-label="Next slide"
                                        @click.prevent="next(); restartAutoplay()"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>

                                {{-- Dots --}}
                                <div class="absolute bottom-3 left-0 right-0 z-[2] flex justify-center gap-2 sm:bottom-4">
                                    <template x-for="(slide, index) in slides" :key="'dot-' + index">
                                        <button
                                            type="button"
                                            class="h-2 rounded-full transition-all duration-300 ease-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-jusa-text/20"
                                            :class="current === index ? 'w-7 bg-white' : 'w-2 bg-white/50 hover:bg-white/80'"
                                            :aria-label="'Go to slide ' + (index + 1)"
                                            :aria-current="current === index ? 'true' : 'false'"
                                            @click.prevent="go(index); restartAutoplay()"
                                        ></button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== ABOUT US (structured module) ==================== --}}
    <x-jusa-about-module :about="$about" />

    {{-- ==================== AMENITIES ==================== --}}
    <x-jusa-amenities-module :amenities="$amenities" />

    {{-- ==================== GALLERY ==================== --}}
    <x-jusa-gallery-module :gallery="$gallery" />

    {{-- ==================== TESTIMONIALS ==================== --}}
    <section class="py-24 bg-jusa-text overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-14" data-scroll-reveal="fade-up">
                <span class="inline-block text-xs font-bold tracking-[0.15em] uppercase text-jusa-orange mb-3">Community</span>
                <h2 class="font-display font-bold text-3xl sm:text-4xl text-white">The JUSA Community</h2>
                <p class="text-white/60 mt-3">Voices from our polished paradise.</p>
            </div>

            {{-- Testimonial Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($testimonials as $testimonial)
                    <div
                        class="bg-white/8 backdrop-blur-sm border border-white/10 rounded-3xl p-6 hover:bg-white/12 hover:-translate-y-1 transition-all duration-300"
                        data-scroll-reveal="fade-up"
                        data-scroll-reveal-delay="{{ 60 + $loop->index * 70 }}"
                    >
                        {{-- Stars --}}
                        <div class="flex gap-1 mb-4">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-4 h-4 text-jusa-orange" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>

                        {{-- Quote --}}
                        <p class="text-sm text-white/80 leading-relaxed mb-6 italic">
                            "{{ $testimonial['text'] }}"
                        </p>

                        {{-- Reviewer --}}
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-jusa-red rounded-full flex items-center justify-center text-xs font-bold text-white flex-shrink-0">
                                {{ $testimonial['initials'] }}
                            </div>
                            <div>
                                <div class="text-sm font-bold text-white">{{ $testimonial['name'] }}</div>
                                <div class="text-xs text-white/50">{{ $testimonial['role'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA STRIP ==================== --}}
    <section class="py-20 bg-jusa-surface-base relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern-leaf"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center" data-scroll-reveal="fade-up">
            <h2 class="section-title mb-5">Ready to find your<br><span class="text-jusa-green">perfect blend?</span></h2>
            <p class="section-subtitle mx-auto mb-10">
                Visit us in Naval or explore our full menu of tropical creations online.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('menu') }}" class="btn-primary text-base px-8 py-4">
                    View Menu
                </a>
                <a href="{{ route('rewards') }}" class="btn-secondary text-base px-8 py-4">
                    Join Oasis Rewards
                </a>
            </div>
        </div>
    </section>
</x-jusa-layout>
