<footer class="bg-jusa-text text-white" aria-label="Site footer">
    {{-- Main Footer Grid --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            {{-- Column 1: Brand --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-block mb-5 group" aria-label="Jusa's Cafe — Home">
                    <span class="relative flex overflow-hidden rounded-full bg-white shadow-lg ring-2 ring-white/20 aspect-square h-16 w-16 sm:h-[4.5rem] sm:w-[4.5rem] transition-transform duration-300 group-hover:scale-105">
                        <img
                            src="{{ asset('images/jusa-logo.png') }}"
                            alt=""
                            width="72"
                            height="72"
                            decoding="async"
                            class="h-full w-full min-h-0 min-w-0 object-cover object-center select-none"
                        />
                    </span>
                </a>
                <p class="text-sm text-white/60 leading-relaxed mb-6">
                    Crafted with sun-ripened tropical fruits and organic superfoods. Fuel your vibrant lifestyle — sip by sip.
                </p>
                {{-- Social Links --}}
                <div class="flex items-center gap-3">
                    <a href="https://www.instagram.com/explore/locations/111839788609318/jusas-tropical-smoothie-cafe/" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-jusa-green hover:text-white transition-all duration-200" aria-label="Jusa's on Instagram" rel="noopener noreferrer" target="_blank">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/jusastropicalsmoothiecafe" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-jusa-green hover:text-white transition-all duration-200" aria-label="Jusa's Tropical Smoothie Café on Facebook" rel="noopener noreferrer" target="_blank">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/70 hover:bg-jusa-green hover:text-white transition-all duration-200" aria-label="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Column 2: Quick Links --}}
            <div>
                <h3 class="font-display font-bold text-sm uppercase tracking-widest text-white/50 mb-5">Explore</h3>
                <ul class="space-y-3">
                    @foreach ([
                        ['route' => 'menu', 'label' => 'Our Menu'],
                        ['route' => 'about', 'label' => 'Our Story'],
                        ['route' => 'rewards', 'label' => 'Oasis Rewards'],
                        ['route' => 'locations', 'label' => 'Locations'],
                        ['route' => 'contact', 'label' => 'Contact Us'],
                    ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="text-sm text-white/70 hover:text-white transition-colors duration-200">{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 3: Hours --}}
            <div>
                <h3 class="font-display font-bold text-sm uppercase tracking-widest text-white/50 mb-5">Hours</h3>
                <ul class="space-y-2.5">
                    <li class="flex justify-between gap-4 text-sm">
                        <span class="text-white/60">Mon – Fri</span>
                        <span class="text-white font-medium">7:00 AM – 9:00 PM</span>
                    </li>
                    <li class="flex justify-between gap-4 text-sm">
                        <span class="text-white/60">Saturday</span>
                        <span class="text-white font-medium">8:00 AM – 10:00 PM</span>
                    </li>
                    <li class="flex justify-between gap-4 text-sm">
                        <span class="text-white/60">Sunday</span>
                        <span class="text-white font-medium">9:00 AM – 8:00 PM</span>
                    </li>
                </ul>
                <div class="mt-5 pt-5 border-t border-white/10 space-y-3">
                    <a href="tel:{{ config('jusa.phone_e164') }}" class="text-sm text-white/70 hover:text-white transition-colors duration-200 flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        {{ config('jusa.phone_display') }}
                    </a>
                    <a href="{{ config('jusa.maps_url') }}" target="_blank" rel="noopener noreferrer" class="text-sm text-white/70 hover:text-white transition-colors duration-200 flex items-start gap-2">
                        <svg class="w-4 h-4 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span class="leading-snug">{{ config('jusa.address') }}</span>
                    </a>
                </div>
            </div>

            {{-- Column 4: Newsletter --}}
            <div>
                <h3 class="font-display font-bold text-sm uppercase tracking-widest text-white/50 mb-5">Stay Fresh</h3>
                <p class="text-sm text-white/60 leading-relaxed mb-5">
                    Get seasonal specials, new blends, and wellness tips — delivered to your inbox.
                </p>
                <form class="flex flex-col gap-3" action="#" method="POST">
                    @csrf
                    <input
                        type="email"
                        placeholder="your@email.com"
                        class="w-full bg-white/10 border border-white/20 rounded-full px-5 py-3 text-sm text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-jusa-green focus:border-transparent transition-all duration-200"
                    >
                    <button type="submit" class="btn-primary w-full justify-center text-sm py-3">
                        Subscribe
                    </button>
                </form>
                <p class="text-xs text-white/40 mt-3">No spam, ever. Unsubscribe anytime.</p>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-14 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-white/40 text-center sm:text-left">
                &copy; {{ date('Y') }} Jusa's Tropical Smoothie Café. All rights reserved.
            </p>
            <p class="text-sm text-white/40 text-center sm:text-right">
                Crafted with 🌿 for island lovers
            </p>
        </div>
    </div>
</footer>
