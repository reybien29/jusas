<x-jusa-layout>
    <x-slot:title>Menu — JUSA Tropical Smoothie Café</x-slot:title>
    <x-slot:description>
        Full menu boards for breakfast, combos, sizzling plates, snacks, salads, and tropical smoothies — visit us in Naval.
    </x-slot:description>

    {{-- Page Hero --}}
    <section class="relative overflow-hidden bg-jusa-surface-low py-14 sm:py-16">
        <div class="absolute top-0 right-0 h-96 w-96 translate-x-1/2 -translate-y-1/2 rounded-full bg-jusa-green-container/20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 h-64 w-64 -translate-x-1/4 translate-y-1/4 rounded-full bg-jusa-orange-container/20 blur-3xl"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8" data-scroll-reveal="fade-up">
            <span class="section-label">Our menu</span>
            <h1 class="section-title mt-2 mb-4">The full menu</h1>
            <p class="section-subtitle mx-auto max-w-2xl">
                Browse our official boards below. Prices and items are shown on each graphic — ask our team in store if you have questions.
            </p>
        </div>
    </section>

    {{-- Sticky section jump nav (visual menu context, no interactive filters) --}}
    <nav
        class="sticky top-0 z-40 border-b border-jusa-surface-dim/60 bg-jusa-cream/95 shadow-sm backdrop-blur-md supports-[backdrop-filter]:bg-jusa-cream/90"
        aria-label="Menu sections"
    >
        <div class="mx-auto max-w-7xl px-3 sm:px-6 lg:px-8">
            <p class="sr-only">Jump to a menu board section</p>
            <div class="flex gap-1 overflow-x-auto scrollbar-hide py-3 sm:py-3.5">
                @foreach ($menuBoards as $board)
                    <a
                        href="#{{ $board['id'] }}"
                        class="flex shrink-0 items-center rounded-full border border-jusa-text/10 bg-white px-3 py-2 text-xs font-semibold text-jusa-text shadow-sm transition hover:border-jusa-red/35 hover:bg-jusa-red-container/30 hover:text-jusa-red sm:px-4 sm:text-sm"
                    >
                        <span class="sm:hidden">{{ $board['short'] }}</span>
                        <span class="hidden sm:inline">{{ $board['title'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    {{-- Static menu boards --}}
    <div class="bg-jusa-cream pb-20 pt-8 sm:pb-24 sm:pt-10">
        <div class="mx-auto max-w-6xl space-y-12 px-4 sm:space-y-14 sm:px-6 lg:px-8">
            @foreach ($menuBoards as $board)
                <section
                    id="{{ $board['id'] }}"
                    class="scroll-mt-[5.5rem] sm:scroll-mt-24"
                    aria-labelledby="heading-{{ $board['id'] }}"
                    data-scroll-reveal="fade-up"
                    data-scroll-reveal-delay="{{ min(30 + $loop->index * 40, 200) }}"
                >
                    <h2 id="heading-{{ $board['id'] }}" class="sr-only">{{ $board['title'] }}</h2>
                    <figure
                        class="overflow-hidden rounded-2xl bg-white shadow-jusa-lg ring-1 ring-jusa-text/[0.07] sm:rounded-3xl"
                    >
                        <img
                            src="{{ $board['src'] }}"
                            alt="{{ $board['alt'] }}"
                            width="1200"
                            height="1600"
                            class="h-auto w-full object-contain object-top"
                            loading="lazy"
                            decoding="async"
                            sizes="(min-width: 1024px) 72rem, 100vw"
                        >
                    </figure>
                    <p class="mt-3 text-center text-xs text-jusa-text-muted sm:text-sm" aria-hidden="true">
                        {{ $board['title'] }}
                    </p>
                </section>
            @endforeach
        </div>
    </div>

    {{-- Bottom CTA --}}
    <section class="bg-jusa-surface-base py-16 text-center">
        <div class="mx-auto max-w-xl px-4">
            <h2 class="mb-4 font-display text-2xl font-bold text-jusa-text sm:text-3xl">Found your order?</h2>
            <p class="mb-8 text-jusa-text-muted">Visit us in Naval or get in touch — we&apos;d love to serve you.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('locations') }}" class="btn-primary">Find a location</a>
                <a href="{{ route('contact') }}" class="btn-secondary">Contact us</a>
            </div>
        </div>
    </section>
</x-jusa-layout>
