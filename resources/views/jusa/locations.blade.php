<x-jusa-layout>
    <x-slot:title>Locations & Hours — JUSA Tropical Smoothie Café</x-slot:title>
    <x-slot:description>Visit Jusa's Tropical Smoothie Café in Naval, Biliran — hours, full address, and Google Maps.</x-slot:description>

    {{-- Page Hero --}}
    <section class="py-16 bg-jusa-surface-low relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-jusa-red-container/15 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                <div>
                    <span class="section-label">Find Us</span>
                    <h1 class="section-title mt-1">Our Location</h1>
                    <p class="text-jusa-text-muted mt-3">Find us on P. Inocentes Street in Naval — tropical blends, comfort food, and a warm welcome.</p>
                </div>
                {{-- Brand mark (circular crop, responsive) --}}
                <div class="hidden sm:flex items-center justify-center flex-shrink-0">
                    <span class="relative flex overflow-hidden rounded-full bg-white shadow-md ring-1 ring-jusa-surface-dim/40 aspect-square w-[4.5rem] h-[4.5rem] sm:w-20 sm:h-20 md:w-24 md:h-24">
                        <img
                            src="{{ asset('images/jusa-logo.png') }}"
                            alt=""
                            width="96"
                            height="96"
                            decoding="async"
                            class="h-full w-full min-h-0 min-w-0 object-cover object-center"
                        />
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== LOCATION CARDS ==================== --}}
    <section class="py-16 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            @foreach ($locations as $location)
                <div class="bg-white rounded-5xl shadow-card overflow-hidden {{ $location['is_flagship'] ? 'ring-2 ring-jusa-red/20' : '' }}">
                    {{-- Flagship badge --}}
                    @if ($location['is_flagship'])
                        <div class="bg-jusa-red px-6 py-2 flex items-center gap-2">
                            <svg class="w-4 h-4 text-jusa-orange" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <span class="text-white text-xs font-bold tracking-widest uppercase">Flagship Location</span>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        {{-- Left: Info --}}
                        <div class="p-8 sm:p-10">
                            <h2 class="font-display font-bold text-2xl sm:text-3xl text-jusa-text mb-6">{{ $location['name'] }}</h2>

                            {{-- Address & Contact --}}
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-jusa-green-container/50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-jusa-green" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-jusa-text">Address</p>
                                        <p class="text-sm text-jusa-text-muted">{{ $location['address'] }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-jusa-green-container/50 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-jusa-text">Phone</p>
                                        <a href="tel:{{ $location['phone_tel'] }}" class="text-sm text-jusa-green hover:underline">{{ $location['phone'] }}</a>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-jusa-green-container/50 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-jusa-text">Email</p>
                                        <a href="mailto:{{ $location['email'] }}" class="text-sm text-jusa-green hover:underline">{{ $location['email'] }}</a>
                                    </div>
                                </div>
                            </div>

                            {{-- Hours --}}
                            <div>
                                <h3 class="font-display font-bold text-base text-jusa-text mb-4 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Hours
                                </h3>
                                <div class="bg-jusa-surface-low rounded-2xl p-4 space-y-2.5">
                                    @foreach ($location['hours'] as $day => $time)
                                        <div class="flex justify-between items-center gap-4">
                                            <span class="text-sm text-jusa-text-muted">{{ $day }}</span>
                                            <span class="text-sm font-semibold text-jusa-text whitespace-nowrap">{{ $time }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mt-7 flex flex-wrap gap-3">
                                <a href="{{ route('contact') }}" class="btn-primary text-sm py-2.5">Contact Us</a>
                                <a href="{{ $location['maps_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-ghost text-sm py-2.5">
                                    Get Directions
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Right: Map + Photo --}}
                        <div class="relative min-h-72 lg:min-h-0">
                            {{-- Café photo --}}
                            <img
                                src="{{ $location['image'] }}"
                                alt="{{ $location['name'] }}"
                                class="w-full h-56 sm:h-72 lg:h-full object-cover"
                            >
                            {{-- Map overlay button --}}
                            <a
                                href="{{ $location['maps_url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm text-jusa-green text-xs font-bold px-4 py-2.5 rounded-full shadow-card hover:bg-white hover:shadow-card-hover transition-all duration-200 flex items-center gap-1.5"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                                Open in Maps
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ==================== GENERAL CONTACT ==================== --}}
    <section class="py-16 bg-jusa-surface-low">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display font-bold text-2xl sm:text-3xl text-jusa-text mb-5">
                General Inquiries
            </h2>
            <p class="text-jusa-text-muted mb-8">
                For catering, wholesale, press, or partnerships, reach our HQ team directly.
            </p>
            <div class="flex flex-wrap justify-center gap-5">
                <a href="mailto:hello@jusacafe.com" class="flex items-center gap-2 bg-white rounded-2xl px-6 py-4 shadow-card hover:shadow-card-hover hover:-translate-y-0.5 transition-all duration-200">
                    <div class="w-8 h-8 bg-jusa-green-container/50 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="text-xs text-jusa-text-muted">Email us</p>
                        <p class="text-sm font-semibold text-jusa-text">hello@jusacafe.com</p>
                    </div>
                </a>
                <a href="tel:{{ config('jusa.phone_e164') }}" class="flex items-center gap-2 bg-white rounded-2xl px-6 py-4 shadow-card hover:shadow-card-hover hover:-translate-y-0.5 transition-all duration-200">
                    <div class="w-8 h-8 bg-jusa-green-container/50 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="text-xs text-jusa-text-muted">Call us</p>
                        <p class="text-sm font-semibold text-jusa-text">{{ config('jusa.phone_display') }}</p>
                    </div>
                </a>
                <a href="{{ route('contact') }}" class="btn-primary">
                    Send a Message
                </a>
            </div>
        </div>
    </section>
</x-jusa-layout>
