@props([
    'amenities' => [],
])

@php
    $eyebrow = $amenities['eyebrow'] ?? 'Amenities';
    $title = $amenities['title'] ?? '';
    $titleAccent = $amenities['title_accent'] ?? '';
    $lead = $amenities['lead'] ?? '';
    $items = $amenities['items'] ?? [];
    $image = $amenities['image'] ?? null;
    $badge = $amenities['badge'] ?? null;

    $iconSvg = static function (string $name): string {
        $common = 'class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true"';

        return match ($name) {
            'wifi' => '<svg '.$common.'><path d="M8.111 16.404a5.5 5.5 0 0 1 7.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>',
            'bolt' => '<svg '.$common.'><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
            'snowflake' => '<svg '.$common.'><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>',
            'users' => '<svg '.$common.'><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
            'map-pin' => '<svg '.$common.'><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
            'utensils' => '<svg '.$common.'><path d="M3 2v7c0 1.1 1 2 2 2h4"/><path d="M3 2v13"/><path d="M10 2v20"/><path d="M14 2v20"/><path d="M17 2v7l3 3v7"/></svg>',
            default => '<svg '.$common.'><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>',
        };
    };
@endphp

<section
    id="amenities"
    class="relative overflow-hidden bg-jusa-surface-low py-16 sm:py-20 lg:py-24"
    aria-labelledby="amenities-heading"
>
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_50%_-10%,rgba(216,28,28,0.08),transparent)]"></div>
    <div class="pointer-events-none absolute right-0 top-1/2 h-[min(70vh,520px)] w-[min(70vw,420px)] -translate-y-1/2 translate-x-1/3 rounded-full bg-jusa-orange-container/25 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-0 left-0 h-64 w-64 -translate-x-1/3 translate-y-1/4 rounded-full bg-jusa-red-container/15 blur-3xl"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Tier 1: Section identity --}}
        <div class="mx-auto mb-12 max-w-3xl text-center lg:mb-14">
            <span class="section-label">{{ $eyebrow }}</span>
            <h2
                id="amenities-heading"
                class="font-display text-3xl font-black tracking-tight text-jusa-text sm:text-4xl lg:text-5xl lg:leading-[1.08]"
            >
                @if ($title !== '')
                    <span class="block">{{ $title }}</span>
                @endif
                @if ($titleAccent !== '')
                    <span class="mt-1 block text-jusa-red sm:mt-2">{{ $titleAccent }}</span>
                @endif
            </h2>
            @if ($lead !== '')
                <p class="mx-auto mt-5 max-w-2xl text-pretty text-base leading-relaxed text-jusa-text-muted sm:text-lg">
                    {{ $lead }}
                </p>
            @endif
        </div>

        {{-- Tier 2: Grid + visual anchor --}}
        <div class="grid grid-cols-1 items-stretch gap-10 lg:grid-cols-12 lg:gap-12 xl:gap-14">
            <div class="order-2 lg:order-1 lg:col-span-7">
                <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5" role="list">
                    @foreach ($items as $item)
                        <li
                            class="group flex gap-4 rounded-2xl border border-jusa-surface-dim/80 bg-white/90 p-5 shadow-card transition duration-300 hover:-translate-y-0.5 hover:border-jusa-red/25 hover:shadow-card-hover sm:p-6"
                        >
                            <span
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-jusa-red-container/50 text-jusa-red transition group-hover:bg-jusa-red group-hover:text-white"
                            >
                                {!! $iconSvg($item['icon'] ?? 'wifi') !!}
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="font-display text-base font-bold text-jusa-text sm:text-lg">
                                    {{ $item['title'] ?? '' }}
                                </h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-jusa-text-muted sm:text-[15px]">
                                    {{ $item['text'] ?? '' }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:items-center sm:gap-4">
                    <a href="{{ route('locations') }}" class="btn-primary inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base">
                        Hours & directions
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center rounded-full border-2 border-jusa-text/12 bg-jusa-cream/80 px-6 py-3.5 text-base font-semibold text-jusa-text transition hover:border-jusa-red/35 hover:text-jusa-red"
                    >
                        Ask a question
                    </a>
                </div>
            </div>

            {{-- Visual column --}}
            <div class="order-1 lg:order-2 lg:col-span-5">
                @if ($image)
                    <div @class([
                        'relative mx-auto max-w-md lg:mx-0 lg:max-w-none',
                        'pb-28 sm:pb-32' => $badge,
                        'pb-4' => ! $badge,
                    ])>
                        <div
                            class="absolute -inset-2 -z-10 rounded-[1.75rem] bg-gradient-to-br from-jusa-red/12 via-transparent to-jusa-green/10 sm:rounded-[2rem]"
                            aria-hidden="true"
                        ></div>
                        <div class="relative overflow-hidden rounded-[1.75rem] shadow-jusa-lg ring-1 ring-jusa-text/[0.07] sm:rounded-[2rem]">
                            <img
                                src="{{ $image['url'] }}"
                                alt="{{ $image['alt'] }}"
                                width="640"
                                height="800"
                                class="aspect-[4/5] w-full object-cover object-center sm:aspect-[5/6]"
                                loading="lazy"
                                decoding="async"
                            >
                            <div
                                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-jusa-text/35 via-transparent to-transparent sm:from-jusa-text/25"
                                aria-hidden="true"
                            ></div>
                        </div>
                        @if ($badge)
                            <div
                                class="absolute -bottom-4 left-4 right-4 rounded-2xl border border-white/20 bg-white/95 p-5 shadow-card backdrop-blur-sm sm:left-auto sm:right-6 sm:max-w-[280px]"
                            >
                                @if (! empty($badge['title']))
                                    <p class="font-display text-lg font-bold text-jusa-text">{{ $badge['title'] }}</p>
                                @endif
                                @if (! empty($badge['text']))
                                    <p class="mt-2 text-sm leading-relaxed text-jusa-text-muted">{{ $badge['text'] }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
