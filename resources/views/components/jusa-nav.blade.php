<nav
    x-data="{
        mobileOpen: false,
        scrolled: false,
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            });
        }
    }"
    :class="scrolled ? 'bg-jusa-cream/95 shadow-sm' : 'bg-jusa-cream/80'"
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-lg border-b border-jusa-surface-dim/60 transition-all duration-300"
    aria-label="Main navigation"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0" aria-label="Jusa's Cafe — Home">
                <span class="relative flex shrink-0 overflow-hidden rounded-full bg-white shadow-sm ring-1 ring-jusa-surface-dim/50 aspect-square h-10 w-10 sm:h-11 sm:w-11 transition-transform duration-300 group-hover:scale-105">
                    <img
                        src="{{ asset('images/jusa-logo.png') }}"
                        alt=""
                        width="48"
                        height="48"
                        decoding="async"
                        class="h-full w-full min-h-0 min-w-0 object-cover object-center select-none"
                    />
                </span>
                <span class="hidden min-[400px]:flex flex-col leading-tight">
                    <span class="font-display font-black text-base sm:text-lg text-jusa-text tracking-tight">Jusa's Cafe</span>
                    <span class="text-[10px] sm:text-xs font-manrope font-medium text-jusa-text-muted tracking-wide">P. Inocentes St., Naval · 6560</span>
                </span>
            </a>

            {{-- Desktop Nav Links --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $navLinks = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'menu', 'label' => 'Menu'],
                        ['route' => 'about', 'label' => 'Our Story'],
                        ['route' => 'rewards', 'label' => 'Rewards'],
                        ['route' => 'locations', 'label' => 'Locations'],
                        ['route' => 'contact', 'label' => 'Contact'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        class="nav-link px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200
                            {{ request()->routeIs($link['route']) ? 'text-jusa-red bg-jusa-red-container/40' : 'text-jusa-text-muted hover:text-jusa-red hover:bg-jusa-surface-high' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- Right: primary CTA --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('menu') }}" class="hidden sm:inline-flex btn-primary text-sm py-2.5 px-5">
                    View Menu
                </a>

                {{-- Mobile Hamburger --}}
                <button
                    @click="mobileOpen = !mobileOpen"
                    class="lg:hidden p-2 rounded-full text-jusa-text-muted hover:text-jusa-red hover:bg-jusa-surface-high transition-all duration-200"
                    :aria-expanded="mobileOpen"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!mobileOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden border-t border-jusa-surface-dim/60 bg-jusa-cream/98 backdrop-blur-lg"
        @click.away="mobileOpen = false"
    >
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1">
            @foreach ($navLinks as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @click="mobileOpen = false"
                    class="flex items-center px-4 py-3 rounded-2xl text-sm font-semibold transition-all duration-200
                        {{ request()->routeIs($link['route']) ? 'text-jusa-red bg-jusa-red-container/40' : 'text-jusa-text hover:text-jusa-red hover:bg-jusa-surface-high' }}"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
            <div class="pt-3 border-t border-jusa-surface-dim/60">
                <a href="{{ route('menu') }}" class="btn-primary w-full justify-center">
                    View Menu
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Spacer to prevent content from hiding under fixed nav --}}
<div class="h-16 lg:h-18"></div>
