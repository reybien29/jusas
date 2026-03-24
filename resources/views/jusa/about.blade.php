<x-jusa-layout>
    <x-slot:title>Our Story — JUSA Tropical Smoothie Café</x-slot:title>
    <x-slot:description>Learn about JUSA's founding story, mission, values, and the team behind every perfect blend.</x-slot:description>

    {{-- ==================== HERO / BRAND HISTORY ==================== --}}
    <section class="relative py-24 overflow-hidden tropical-gradient">
        <div class="absolute inset-0 opacity-15 mix-blend-luminosity">
            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80" alt="" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-jusa-red-dark/80 to-jusa-red/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <span class="inline-block text-xs font-bold tracking-[0.15em] uppercase text-jusa-orange mb-4">Naval, Biliran</span>
                <h1 class="font-display font-black text-5xl sm:text-6xl lg:text-7xl text-white leading-[0.92] tracking-tight mb-8">
                    Born from the<br>
                    <span class="text-gradient-green">island.</span>
                </h1>
                <p class="text-lg text-white/80 leading-relaxed max-w-xl">
                    Jusa's Tropical Smoothie Café is rooted in Naval — bold fruit blends, comfort food, and an unshakeable belief that what you sip and eat should feel as good as it tastes.
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== FOUNDING STORY ==================== --}}
    <section class="py-24 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                {{-- Image block --}}
                <div class="relative">
                    <img
                        src="{{ asset('images/about-founding-storefront.png') }}"
                        alt="Jusa's Tropical Smoothie Café storefront in Naval, Biliran"
                        class="w-full h-80 sm:h-96 object-cover rounded-5xl"
                    >
                    {{-- Second image --}}
                    <div class="absolute -bottom-8 -right-4 w-44 h-44 sm:w-56 sm:h-56 hidden sm:block">
                        <img
                            src="https://images.unsplash.com/photo-1612516547822-1a51eac13534?w=400&q=80"
                            alt="Fresh smoothie ingredients"
                            class="w-full h-full object-cover rounded-3xl border-4 border-jusa-cream shadow-jusa"
                        >
                    </div>
                </div>

                {{-- Story Text --}}
                <div class="lg:pr-8">
                    <span class="section-label">Our Founding Story</span>
                    <h2 class="section-title mb-8">From a market<br>stall to a movement.</h2>

                    <div class="prose prose-base text-jusa-text-muted leading-relaxed space-y-5">
                        <p>
                            Our team grew up around tropical fruit, busy markets, and the kind of hospitality that turns first-time guests into regulars. We wanted a place in Naval where honest ingredients and friendly service come standard — not an upgrade.
                        </p>
                        <p>
                            We started small: a focused menu of smoothies, meals, and snacks made for real cravings. Word spread, the line grew, and our little corner on P. Inocentes Street became a go-to stop for students, families, and anyone who needed a bright pick-me-up.
                        </p>
                        <p>
                            Today, Jusa's is still that same idea — fresh blends, comforting plates, and a crew that shows up early to prep so your order tastes exactly like it should. If you&apos;re in Biliran, we&apos;d love to see you.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-8">
                        <div>
                            <div class="font-display font-black text-4xl text-jusa-green">1</div>
                            <div class="text-sm text-jusa-text-muted mt-1">Naval location</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-4xl text-jusa-orange">50+</div>
                            <div class="text-sm text-jusa-text-muted mt-1">Menu Items</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-4xl text-jusa-coral">10K+</div>
                            <div class="text-sm text-jusa-text-muted mt-1">Happy Regulars</div>
                        </div>
                        <div>
                            <div class="font-display font-black text-4xl text-jusa-green">100%</div>
                            <div class="text-sm text-jusa-text-muted mt-1">Organic Ingredients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== MISSION & VALUES ==================== --}}
    <section class="py-24 bg-jusa-surface-low relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-jusa-red-container/15 rounded-full blur-3xl translate-x-1/2 -translate-y-1/3"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-14">
                <span class="section-label">Why We Exist</span>
                <h2 class="section-title">Mission & Values</h2>
                <p class="section-subtitle mt-5 mx-auto">
                    Everything we do is rooted in six non-negotiable commitments.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($values as $value)
                    @php
                        $iconPath = match($value['icon']) {
                            'leaf' => 'M17 8C8 10 5.9 16.17 3.82 21H5.71C6.66 19 7.88 17.09 10 15.61V21H12V14.56C13.07 14.25 14.19 14.07 15.5 14.07C17.26 14.07 18.95 14.55 20.4 15.41L21.41 13.7C19.63 12.64 17.59 12 15.5 12C13.85 12 12.3 12.38 10.88 13.05C11.24 11.36 12.09 9.69 14 8.35C15.93 7 18.38 6.43 21 7C20.11 5.35 18.22 4 16 4C14.27 4 12.73 4.68 11.56 5.78C12.06 4.38 12.89 3.14 14 2.29C12.26 2.1 10.5 2.67 9.14 3.86C7.78 5.05 7 6.81 7 8.71C7 10.27 7.54 11.74 8.5 12.93C11.12 10.72 14.4 9.47 17.9 9.3L17 8Z',
                            'heart' => 'M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z',
                            'globe' => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z',
                            'sun' => 'M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zM2 13h2c.55 0 1-.45 1-1s-.45-1-1-1H2c-.55 0-1 .45-1 1s.45 1 1 1zm18 0h2c.55 0 1-.45 1-1s-.45-1-1-1h-2c-.55 0-1 .45-1 1s.45 1 1 1zM11 2v2c0 .55.45 1 1 1s1-.45 1-1V2c0-.55-.45-1-1-1s-1 .45-1 1zm0 18v2c0 .55.45 1 1 1s1-.45 1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1zM5.99 4.58c-.39-.39-1.03-.39-1.41 0-.39.39-.39 1.03 0 1.41l1.06 1.06c.39.39 1.03.39 1.41 0s.39-1.03 0-1.41L5.99 4.58zm12.37 12.37c-.39-.39-1.03-.39-1.41 0-.39.39-.39 1.03 0 1.41l1.06 1.06c.39.39 1.03.39 1.41 0 .39-.39.39-1.03 0-1.41l-1.06-1.06zm1.06-12.37l-1.06 1.06c-.39.39-.39 1.03 0 1.41s1.03.39 1.41 0l1.06-1.06c.39-.39.39-1.03 0-1.41s-1.03-.39-1.41 0zM7.05 18.36l-1.06 1.06c-.39.39-.39 1.03 0 1.41s1.03.39 1.41 0l1.06-1.06c.39-.39.39-1.03 0-1.41s-1.03-.39-1.41 0z',
                            'recycle' => 'M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 9h7V2l-2.35 4.35z',
                            'sparkles' => 'M12 3L9.1 9.1 3 12l6.1 2.9L12 21l2.9-6.1L21 12l-6.1-2.9L12 3zm0 3.5l1.9 4.1 4.1 1.9-4.1 1.9L12 18.5l-1.9-4.1L6 12.5l4.1-1.9L12 6.5z',
                            default => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        };
                    @endphp
                    <div class="bg-white rounded-3xl p-7 shadow-card hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-12 h-12 bg-jusa-green-container/50 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-jusa-green group-hover:scale-110 transition-all duration-300">
                            <svg class="w-6 h-6 text-jusa-green group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                <path d="{{ $iconPath }}"/>
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-lg text-jusa-text mb-3">{{ $value['title'] }}</h3>
                        <p class="text-sm text-jusa-text-muted leading-relaxed">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== TEAM SPOTLIGHT ==================== --}}
    <section class="py-24 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="section-label">The Humans Behind JUSA</span>
                <h2 class="section-title">Meet the Team</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                @foreach ($team as $member)
                    <div class="group text-center">
                        <div class="relative inline-block mb-6">
                            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden ring-4 ring-jusa-green-container/60 group-hover:ring-jusa-green transition-all duration-300">
                                <img
                                    src="{{ $member['image'] }}"
                                    alt="{{ $member['name'] }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                >
                            </div>
                        </div>
                        <h3 class="font-display font-bold text-xl text-jusa-text mb-1">{{ $member['name'] }}</h3>
                        <p class="text-sm font-semibold text-jusa-green mb-4">{{ $member['role'] }}</p>
                        <p class="text-sm text-jusa-text-muted leading-relaxed max-w-xs mx-auto">{{ $member['bio'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CAFÉ GALLERY ==================== --}}
    <section class="py-24 bg-jusa-surface-low">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="section-label">Inside JUSA</span>
                <h2 class="section-title">The Space</h2>
            </div>

            {{-- Masonry-style grid --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                @foreach ($gallery as $index => $imageUrl)
                    <div class="group overflow-hidden rounded-2xl {{ $index === 0 ? 'row-span-2 sm:col-span-1' : '' }} {{ $index === 3 ? 'sm:col-span-2' : '' }}">
                        <img
                            src="{{ $imageUrl }}"
                            alt="JUSA café"
                            class="w-full {{ $index === 0 ? 'h-64 sm:h-[28rem]' : ($index === 3 ? 'h-48' : 'h-48') }} object-cover transition-transform duration-700 group-hover:scale-105"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-20 tropical-gradient text-center overflow-hidden relative">
        <div class="absolute inset-0 bg-pattern-leaf opacity-30"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-4">
            <h2 class="font-display font-bold text-3xl sm:text-4xl text-white mb-5">Come experience the <span class="text-gradient-green">JUSA glow</span> yourself.</h2>
            <p class="text-white/70 mb-10">One home in Naval. One mission: your best self, one sip at a time.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('locations') }}" class="btn-white">Find a Location</a>
                <a href="{{ route('menu') }}" class="btn-outline border-white/50 text-white hover:bg-white hover:text-jusa-red">View Menu</a>
            </div>
        </div>
    </section>
</x-jusa-layout>
