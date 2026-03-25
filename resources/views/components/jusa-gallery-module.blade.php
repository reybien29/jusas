@props([
    'gallery' => [],
])

@php
    $eyebrow = $gallery['eyebrow'] ?? 'Gallery';
    $title = $gallery['title'] ?? 'Life at Jusa\'s';
    $lead = $gallery['lead'] ?? '';
    $items = $gallery['items'] ?? [];
@endphp

<section
    id="gallery"
    class="relative overflow-hidden bg-jusa-cream py-16 sm:py-20 lg:py-24"
    aria-labelledby="gallery-heading"
>
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_50%_0%,rgba(245,200,0,0.08),transparent_55%)]"></div>
    <div class="pointer-events-none absolute bottom-0 right-0 h-72 w-72 translate-x-1/4 translate-y-1/4 rounded-full bg-jusa-red-container/15 blur-3xl"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mb-10 max-w-3xl text-center lg:mb-12" data-scroll-reveal="fade-up">
            <span class="section-label">{{ $eyebrow }}</span>
            <h2
                id="gallery-heading"
                class="font-display text-3xl font-black tracking-tight text-jusa-text sm:text-4xl lg:text-5xl lg:leading-[1.08]"
            >
                {{ $title }}
            </h2>
            @if ($lead !== '')
                <p class="mx-auto mt-5 max-w-2xl text-pretty text-base leading-relaxed text-jusa-text-muted sm:text-lg">
                    {{ $lead }}
                </p>
            @endif
        </div>

        <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 sm:gap-3 md:gap-4 lg:grid-cols-4">
            @foreach ($items as $item)
                <figure
                    class="group relative aspect-square overflow-hidden rounded-xl bg-jusa-surface-dim/40 shadow-card ring-1 ring-jusa-text/[0.06] transition duration-500 hover:shadow-card-hover hover:ring-jusa-red/20 sm:rounded-2xl"
                    data-scroll-reveal="zoom"
                    data-scroll-reveal-delay="{{ min(40 + $loop->index * 45, 320) }}"
                >
                    <img
                        src="{{ $item['src'] }}"
                        alt="{{ $item['alt'] }}"
                        width="800"
                        height="800"
                        class="h-full w-full object-cover object-center transition duration-700 ease-out group-hover:scale-[1.04] motion-reduce:transition-none motion-reduce:group-hover:scale-100"
                        loading="lazy"
                        decoding="async"
                        sizes="(min-width: 1024px) 25vw, (min-width: 640px) 33vw, 50vw"
                    >
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-jusa-text/30 via-transparent to-transparent opacity-80 transition duration-300 group-hover:opacity-100"
                        aria-hidden="true"
                    ></div>
                </figure>
            @endforeach
        </div>

        <div class="mt-10 text-center sm:mt-12" data-scroll-reveal="fade-up" data-scroll-reveal-delay="60">
            <a
                href="{{ route('about') }}"
                class="inline-flex items-center gap-2 rounded-full border-2 border-jusa-text/10 bg-white px-6 py-3 text-sm font-semibold text-jusa-red shadow-sm transition hover:border-jusa-red/30 hover:bg-jusa-red-container/30"
            >
                More on our story
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
