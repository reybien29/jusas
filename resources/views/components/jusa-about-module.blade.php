@props([
    'about' => [],
])

@php
    $eyebrow = $about['eyebrow'] ?? 'About Us';
    $titleLine1 = $about['title_line1'] ?? '';
    $titleAccent = $about['title_accent'] ?? '';
    $lead = $about['lead'] ?? '';
    $paragraphs = $about['paragraphs'] ?? [];
    $pillars = $about['pillars'] ?? [];
    $stats = $about['stats'] ?? [];
    $imageMain = $about['image_main'] ?? ['url' => '', 'alt' => ''];

    $iconPath = static function (string $icon): string {
        return match ($icon) {
            'leaf' => 'M17 8C8 10 5.9 16.17 3.82 21H5.71C6.66 19 7.88 17.09 10 15.61V21H12V14.56C13.07 14.25 14.19 14.07 15.5 14.07C17.26 14.07 18.95 14.55 20.4 15.41L21.41 13.7C19.63 12.64 17.59 12 15.5 12C13.85 12 12.3 12.38 10.88 13.05C11.24 11.36 12.09 9.69 14 8.35C15.93 7 18.38 6.43 21 7C20.11 5.35 18.22 4 16 4C14.27 4 12.73 4.68 11.56 5.78C12.06 4.38 12.89 3.14 14 2.29C12.26 2.1 10.5 2.67 9.14 3.86C7.78 5.05 7 6.81 7 8.71C7 10.27 7.54 11.74 8.5 12.93C11.12 10.72 14.4 9.47 17.9 9.3L17 8Z',
            'sparkles' => 'M12 3L9.1 9.1 3 12l6.1 2.9L12 21l2.9-6.1L21 12l-6.1-2.9L12 3zm0 3.5l1.9 4.1 4.1 1.9-4.1 1.9L12 18.5l-1.9-4.1L6 12.5l4.1-1.9L12 6.5z',
            'users' => 'M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z',
            default => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
        };
    };
@endphp

<section
    id="about"
    class="relative overflow-hidden bg-jusa-cream py-16 sm:py-20 lg:py-24"
    aria-labelledby="about-module-heading"
>
    {{-- Atmosphere --}}
    <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(180deg,rgba(255,248,238,0)_0%,rgba(255,224,216,0.35)_55%,rgba(255,248,238,0)_100%)]"></div>
    <div class="pointer-events-none absolute -right-32 top-0 h-[420px] w-[420px] rounded-full bg-jusa-red-container/25 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-24 bottom-0 h-[360px] w-[360px] rounded-full bg-jusa-orange-container/20 blur-3xl"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Tier 1: Section identity (clear hierarchy) --}}
        <div
            class="mx-auto mb-12 max-w-3xl text-center lg:mb-16 lg:max-w-4xl"
            data-scroll-reveal="fade-up"
        >
            <span class="section-label">{{ $eyebrow }}</span>
            <h2
                id="about-module-heading"
                class="font-display text-4xl font-black tracking-tight text-jusa-text sm:text-5xl lg:text-[3.25rem] lg:leading-[1.05]"
            >
                <span class="block">{{ $titleLine1 }}</span>
                @if ($titleAccent !== '')
                    <span class="mt-1 block bg-gradient-to-r from-jusa-green via-jusa-green-light to-jusa-green bg-clip-text text-transparent sm:mt-2">
                        {{ $titleAccent }}
                    </span>
                @endif
            </h2>
            @if ($lead !== '')
                <p class="mx-auto mt-5 max-w-2xl text-pretty text-base leading-relaxed text-jusa-text-muted sm:text-lg">
                    {{ $lead }}
                </p>
            @endif
        </div>

        {{-- Tier 2: Split story + media --}}
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-10 xl:gap-14">
            {{-- Media column --}}
            <div
                class="relative lg:col-span-5 xl:col-span-5"
                data-scroll-reveal="fade-left"
                data-scroll-reveal-delay="60"
            >
                <div class="relative mx-auto w-full max-w-2xl sm:max-w-none lg:mx-0">
                    <div
                        class="absolute -inset-3 -z-10 rounded-2xl bg-gradient-to-br from-jusa-red/10 via-transparent to-jusa-orange/15 blur-sm sm:rounded-3xl"
                        aria-hidden="true"
                    ></div>
                    <div class="relative overflow-hidden rounded-2xl shadow-jusa-lg ring-1 ring-jusa-text/[0.06] sm:rounded-3xl">
                        <img
                            src="{{ $imageMain['url'] }}"
                            alt="{{ $imageMain['alt'] }}"
                            width="960"
                            height="540"
                            class="aspect-[4/3] w-full object-cover object-center sm:aspect-[16/9] sm:object-[center_40%]"
                            loading="lazy"
                            decoding="async"
                        >
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-jusa-text/25 via-transparent to-transparent"
                            aria-hidden="true"
                        ></div>
                    </div>
                </div>
            </div>

            {{-- Content column --}}
            <div
                class="lg:col-span-7 xl:col-span-7"
                data-scroll-reveal="fade-up"
                data-scroll-reveal-delay="80"
            >
                <div class="space-y-6 border-l-4 border-jusa-red/85 pl-5 sm:pl-6 lg:border-l-[5px] lg:pl-8">
                    @foreach ($paragraphs as $p)
                        <p class="text-base leading-relaxed text-jusa-text sm:text-[17px]">{{ $p }}</p>
                    @endforeach
                </div>

                @if (count($pillars) > 0)
                    <ul class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-3 lg:mt-12 lg:gap-4" role="list">
                        @foreach ($pillars as $pillar)
                            <li
                                class="group flex flex-col rounded-2xl border border-jusa-surface-dim/70 bg-white/90 p-5 shadow-card transition duration-300 hover:-translate-y-0.5 hover:border-jusa-green/30 hover:shadow-card-hover"
                                data-scroll-reveal="fade-up"
                                data-scroll-reveal-delay="{{ 40 + $loop->index * 70 }}"
                            >
                                <span
                                    class="mb-3 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-jusa-green-container/60 text-jusa-green transition group-hover:bg-jusa-green group-hover:text-white"
                                    aria-hidden="true"
                                >
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="{{ $iconPath($pillar['icon'] ?? 'leaf') }}"/>
                                    </svg>
                                </span>
                                <span class="font-display text-sm font-bold text-jusa-text sm:text-base">{{ $pillar['title'] }}</span>
                                <span class="mt-2 text-sm leading-relaxed text-jusa-text-muted">{{ $pillar['text'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (count($stats) > 0)
                    <div
                        class="mt-10 grid grid-cols-1 gap-3 rounded-3xl border border-jusa-surface-dim/80 bg-white p-5 shadow-card sm:grid-cols-3 sm:gap-0 sm:divide-x sm:divide-jusa-surface-dim/60 sm:p-6 lg:mt-12"
                        role="list"
                        data-scroll-reveal="zoom"
                        data-scroll-reveal-delay="100"
                    >
                        @foreach ($stats as $stat)
                            @php
                                $accent = $stat['accent'] ?? 'green';
                                $valueClass = match ($accent) {
                                    'red' => 'text-jusa-red',
                                    'orange' => 'text-jusa-orange-dark',
                                    'coral' => 'text-jusa-coral',
                                    default => 'text-jusa-green',
                                };
                            @endphp
                            <div class="flex flex-col items-center justify-center px-2 py-3 text-center sm:py-2" role="listitem">
                                <span class="font-display text-3xl font-black tabular-nums {{ $valueClass }} sm:text-4xl">{{ $stat['value'] }}</span>
                                <span class="mt-1 max-w-[11rem] text-xs font-semibold uppercase tracking-wide text-jusa-text-muted">{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div
                    class="mt-10 flex flex-col gap-3 sm:mt-12 sm:flex-row sm:flex-wrap sm:items-center sm:gap-4"
                    data-scroll-reveal="fade-up"
                    data-scroll-reveal-delay="120"
                >
                    <a href="{{ route('about') }}" class="btn-primary inline-flex items-center justify-center gap-2 px-8 py-3.5 text-base">
                        Our full story
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a
                        href="{{ route('menu') }}"
                        class="inline-flex items-center justify-center rounded-full border-2 border-jusa-text/15 bg-white px-7 py-3.5 text-base font-semibold text-jusa-text shadow-sm transition hover:border-jusa-green/40 hover:text-jusa-green"
                    >
                        Explore the menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
