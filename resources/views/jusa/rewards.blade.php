<x-jusa-layout>
    <x-slot:title>Oasis Rewards — JUSA Tropical Smoothie Café</x-slot:title>
    <x-slot:description>Earn points with every sip. Unlock exclusive perks, free drinks, and island-level rewards with JUSA's Oasis Rewards program.</x-slot:description>

    {{-- ==================== HERO ==================== --}}
    <section class="relative py-24 overflow-hidden bg-jusa-red-dark">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1553530979-212c4b3b9a1f?w=1920&q=80" alt="" class="w-full h-full object-cover opacity-10 mix-blend-luminosity">
            <div class="absolute inset-0 bg-gradient-to-br from-jusa-red-dark via-jusa-red to-jusa-red-dark/80"></div>
        </div>
        <div class="absolute top-12 right-12 w-64 h-64 border-2 border-jusa-green-container/20 rounded-full hidden lg:block"></div>
        <div class="absolute bottom-8 right-24 w-32 h-32 border-2 border-jusa-orange/20 rounded-full hidden lg:block"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block text-xs font-bold tracking-[0.15em] uppercase text-jusa-orange mb-4">Earn with Every Sip</span>
                    <h1 class="font-display font-black text-5xl sm:text-6xl text-white leading-[0.92] tracking-tight mb-6">
                        Oasis<br>
                        <span class="text-jusa-orange">Rewards</span>
                    </h1>
                    <p class="text-lg text-white/80 leading-relaxed mb-8 max-w-md">
                        Every dollar you spend earns you 1 point. Climb the tiers, unlock perks, and get rewarded just for living your best tropical life.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('locations') }}" class="btn-white">Visit In Store</a>
                        <a href="#how-it-works" class="btn-outline border-white/50 text-white hover:bg-white hover:text-jusa-green">How It Works</a>
                    </div>
                </div>
                {{-- Points preview card --}}
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-5xl p-8 text-white">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-sm font-semibold text-white/70">Your Points</span>
                            <span class="text-xs font-bold bg-jusa-orange text-white px-3 py-1 rounded-full">🌺 Bloom Tier</span>
                        </div>
                        <div class="font-display font-black text-6xl mb-2">347</div>
                        <p class="text-white/60 text-sm mb-6">153 pts to unlock <span class="text-jusa-orange font-semibold">Oasis</span></p>
                        <div class="w-full bg-white/20 rounded-full h-2 mb-2">
                            <div class="bg-jusa-orange h-2 rounded-full" style="width: 34.7%"></div>
                        </div>
                        <div class="flex justify-between text-xs text-white/50">
                            <span>500 pts</span>
                            <span>1,000 pts (Oasis)</span>
                        </div>
                        <div class="mt-6 pt-6 border-t border-white/15 flex justify-between text-sm">
                            <span class="text-white/60">Next reward in</span>
                            <span class="font-bold text-jusa-orange">153 pts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== HOW IT WORKS ==================== --}}
    <section id="how-it-works" class="py-20 bg-jusa-surface-low">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="section-label">Simple & Rewarding</span>
                <h2 class="section-title">How It Works</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                @foreach ([
                    ['step' => '1', 'icon' => 'sign-up', 'title' => 'Sign Up Free', 'desc' => 'Create your free Oasis account in under 60 seconds — no credit card needed.'],
                    ['step' => '2', 'icon' => 'earn', 'title' => 'Earn Points', 'desc' => 'Get 1 point per $1 spent in-café or online. Double points on weekends.'],
                    ['step' => '3', 'icon' => 'redeem', 'title' => 'Redeem Rewards', 'desc' => 'Swap points for free drinks, add-ons, exclusive merch, and tier perks.'],
                ] as $step)
                    <div class="relative text-center p-8 bg-white rounded-3xl shadow-card">
                        <div class="w-12 h-12 bg-jusa-red text-white rounded-2xl flex items-center justify-center font-display font-black text-xl mx-auto mb-5 shadow-jusa">
                            {{ $step['step'] }}
                        </div>
                        <h3 class="font-display font-bold text-lg text-jusa-text mb-3">{{ $step['title'] }}</h3>
                        <p class="text-sm text-jusa-text-muted leading-relaxed">{{ $step['desc'] }}</p>
                        @if (!$loop->last)
                            <div class="absolute top-1/2 -right-3 -translate-y-1/2 text-jusa-surface-dim hidden sm:block">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== TIER SYSTEM ==================== --}}
    <section class="py-20 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="section-label">Level Up</span>
                <h2 class="section-title">Rewards Tiers</h2>
                <p class="section-subtitle mt-5 mx-auto">The more you sip, the more you unlock.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($tiers as $tier)
                    @php
                        $tierColors = [
                            'surface-high' => ['bg' => 'bg-jusa-surface-high', 'badge_bg' => 'bg-jusa-surface-highest', 'badge_text' => 'text-jusa-text-muted', 'border' => 'border-jusa-surface-dim'],
                            'green' => ['bg' => 'bg-jusa-green-container/30', 'badge_bg' => 'bg-jusa-green', 'badge_text' => 'text-white', 'border' => 'border-jusa-green/40'],
                            'orange' => ['bg' => 'bg-jusa-orange-container/30', 'badge_bg' => 'bg-jusa-orange', 'badge_text' => 'text-white', 'border' => 'border-jusa-orange/30'],
                            'coral' => ['bg' => 'bg-jusa-coral-container/30', 'badge_bg' => 'bg-jusa-coral', 'badge_text' => 'text-white', 'border' => 'border-jusa-coral/30'],
                        ];
                        $tc = $tierColors[$tier['color']] ?? $tierColors['surface-high'];
                    @endphp
                    <div class="rounded-3xl border-2 {{ $tc['border'] }} {{ $tc['bg'] }} p-6 flex flex-col">
                        <div class="text-3xl mb-3">{{ $tier['icon'] }}</div>
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-display font-bold text-xl text-jusa-text">{{ $tier['name'] }}</h3>
                            <span class="{{ $tc['badge_bg'] }} {{ $tc['badge_text'] }} text-xs font-bold px-2.5 py-1 rounded-full">
                                {{ $tier['points_required'] === 0 ? 'Free' : $tier['points_required'] . ' pts' }}
                            </span>
                        </div>
                        <p class="text-xs text-jusa-text-muted mb-5">
                            {{ $tier['points_required'] === 0 ? 'Starting tier — join for free' : 'Unlock at ' . $tier['points_required'] . ' lifetime points' }}
                        </p>
                        <ul class="space-y-2 mt-auto">
                            @foreach ($tier['perks'] as $perk)
                                <li class="flex items-start gap-2 text-sm text-jusa-text">
                                    <svg class="w-4 h-4 text-jusa-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $perk }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== ACTIVE PROMOS ==================== --}}
    <section class="py-20 bg-jusa-surface-low">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="section-label">Limited Time</span>
                <h2 class="section-title">Active Promos</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($promos as $promo)
                    @php
                        $badgeColors = [
                            'green' => 'bg-jusa-green text-white',
                            'orange' => 'bg-jusa-orange text-white',
                            'coral' => 'bg-jusa-coral text-white',
                        ];
                        $badgeClass = $badgeColors[$promo['badge_color']] ?? 'bg-jusa-surface-highest text-jusa-text-muted';
                    @endphp
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-card hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300">
                        <div class="relative h-40 overflow-hidden">
                            <img src="{{ $promo['image'] }}" alt="{{ $promo['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-3 left-3">
                                <span class="text-xs font-bold px-3 py-1.5 rounded-full {{ $badgeClass }}">{{ $promo['badge'] }}</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-display font-bold text-base text-jusa-text mb-2 leading-tight">{{ $promo['title'] }}</h3>
                            <p class="text-sm text-jusa-text-muted leading-relaxed mb-4">{{ $promo['description'] }}</p>
                            @if ($promo['expires'])
                                <p class="text-xs font-semibold text-jusa-coral">Expires {{ $promo['expires'] }}</p>
                            @else
                                <p class="text-xs font-semibold text-jusa-green">Ongoing offer</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== COMBO DEALS ==================== --}}
    <section class="py-20 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="section-label">Save More</span>
                <h2 class="section-title">Combo Deals</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
                @foreach ($combos as $combo)
                    @php
                        $savings = $combo['original_price'] - $combo['combo_price'];
                        $savings_pct = round(($savings / $combo['original_price']) * 100);
                    @endphp
                    <div class="bg-white rounded-3xl overflow-hidden shadow-card hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300">
                        <div class="relative h-40 overflow-hidden">
                            <img src="{{ $combo['image'] }}" alt="{{ $combo['name'] }}" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3 bg-jusa-coral text-white text-xs font-bold px-3 py-1.5 rounded-full">
                                Save {{ $savings_pct }}%
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-display font-bold text-lg text-jusa-text mb-3">{{ $combo['name'] }}</h3>
                            <ul class="space-y-1 mb-4">
                                @foreach ($combo['items'] as $item)
                                    <li class="flex items-center gap-2 text-sm text-jusa-text-muted">
                                        <span class="w-1.5 h-1.5 bg-jusa-red rounded-full flex-shrink-0"></span>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                            <div class="flex items-baseline gap-3">
                                <span class="font-display font-black text-2xl text-jusa-green">${{ number_format($combo['combo_price'], 2) }}</span>
                                <span class="text-sm text-jusa-text-muted line-through">${{ number_format($combo['original_price'], 2) }}</span>
                            </div>
                            <a href="{{ route('menu') }}" class="btn-primary w-full justify-center mt-4 text-sm py-2.5">View on Menu</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-16 tropical-gradient text-center overflow-hidden relative">
        <div class="relative z-10 max-w-xl mx-auto px-4">
            <h2 class="font-display font-bold text-3xl text-white mb-4">Ready to join the Oasis?</h2>
            <p class="text-white/70 mb-8">Sign up free and start earning from your very first sip.</p>
            <a href="{{ route('contact') }}" class="btn-white text-base px-8 py-4">Ask About Rewards</a>
        </div>
    </section>
</x-jusa-layout>
