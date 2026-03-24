<x-jusa-layout>
    <x-slot:title>Get in Touch — JUSA Tropical Smoothie Café</x-slot:title>
    <x-slot:description>Contact JUSA's team for catering, feedback, or any questions. We'd love to hear from you.</x-slot:description>

    {{-- Page Hero --}}
    <section class="py-16 bg-jusa-surface-low relative overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 bg-jusa-green-container/15 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="section-label">We'd Love to Hear From You</span>
            <h1 class="section-title mt-1">Get in Touch</h1>
            <p class="text-jusa-text-muted mt-3 max-w-xl">Questions, feedback, catering inquiries, or just want to say hi — our team responds within 24 hours.</p>
        </div>
    </section>

    <div class="py-16 bg-jusa-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16">

                {{-- ====== LEFT: Contact Form ====== --}}
                <div class="lg:col-span-3">
                    {{-- Success message --}}
                    @if (session('success'))
                        <div class="bg-jusa-green-container/40 border border-jusa-green/30 rounded-3xl p-6 mb-8 flex items-start gap-4">
                            <div class="w-10 h-10 bg-jusa-green rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-jusa-green">Message Sent!</p>
                                <p class="text-sm text-jusa-text-muted mt-1">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="bg-white rounded-5xl shadow-card p-8 sm:p-10">
                        <h2 class="font-display font-bold text-2xl text-jusa-text mb-2">Send us a message</h2>
                        <p class="text-sm text-jusa-text-muted mb-8">We read every message. Typically respond within 24 hours on business days.</p>

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                {{-- Name --}}
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-jusa-text mb-2">Your Name <span class="text-jusa-coral">*</span></label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Amara Osei"
                                        class="input-jusa @error('name') ring-2 ring-jusa-coral @enderror"
                                        required
                                    >
                                    @error('name')
                                        <p class="text-xs text-jusa-coral mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-jusa-text mb-2">Email Address <span class="text-jusa-coral">*</span></label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="hello@email.com"
                                        class="input-jusa @error('email') ring-2 ring-jusa-coral @enderror"
                                        required
                                    >
                                    @error('email')
                                        <p class="text-xs text-jusa-coral mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Subject --}}
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-jusa-text mb-2">Subject</label>
                                <select id="subject" name="subject" class="input-jusa">
                                    <option value="">Select a topic...</option>
                                    <option value="feedback" {{ old('subject') === 'feedback' ? 'selected' : '' }}>General Feedback</option>
                                    <option value="visit" {{ old('subject') === 'visit' ? 'selected' : '' }}>Visit / Hours</option>
                                    <option value="catering" {{ old('subject') === 'catering' ? 'selected' : '' }}>Catering / Events</option>
                                    <option value="wholesale" {{ old('subject') === 'wholesale' ? 'selected' : '' }}>Wholesale / Partnerships</option>
                                    <option value="rewards" {{ old('subject') === 'rewards' ? 'selected' : '' }}>Rewards Program</option>
                                    <option value="other" {{ old('subject') === 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message" class="block text-sm font-semibold text-jusa-text mb-2">Message <span class="text-jusa-coral">*</span></label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us what's on your mind..."
                                    class="input-jusa resize-none @error('message') ring-2 ring-jusa-coral @enderror"
                                    required
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-xs text-jusa-coral mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn-primary w-full justify-center text-base py-4">
                                Send Message
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- ====== RIGHT: Info + Social + Hours ====== --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- Quick Contact Cards --}}
                    <div class="space-y-4">
                        <a href="mailto:hello@jusacafe.com" class="flex items-center gap-4 bg-white rounded-2xl p-5 shadow-card hover:shadow-card-hover hover:-translate-y-0.5 transition-all duration-200 group">
                            <div class="w-11 h-11 bg-jusa-green-container/50 rounded-xl flex items-center justify-center group-hover:bg-jusa-green transition-colors duration-200">
                                <svg class="w-5 h-5 text-jusa-green group-hover:text-white transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-jusa-text-muted">Email</p>
                                <p class="text-sm font-semibold text-jusa-text">hello@jusacafe.com</p>
                            </div>
                        </a>
                        <a href="tel:{{ config('jusa.phone_e164') }}" class="flex items-center gap-4 bg-white rounded-2xl p-5 shadow-card hover:shadow-card-hover hover:-translate-y-0.5 transition-all duration-200 group">
                            <div class="w-11 h-11 bg-jusa-green-container/50 rounded-xl flex items-center justify-center group-hover:bg-jusa-green transition-colors duration-200">
                                <svg class="w-5 h-5 text-jusa-green group-hover:text-white transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-jusa-text-muted">Phone</p>
                                <p class="text-sm font-semibold text-jusa-text">{{ config('jusa.phone_display') }}</p>
                            </div>
                        </a>
                        <a href="{{ config('jusa.maps_url') }}" target="_blank" rel="noopener noreferrer" class="flex items-start gap-4 bg-white rounded-2xl p-5 shadow-card hover:shadow-card-hover hover:-translate-y-0.5 transition-all duration-200 group">
                            <div class="w-11 h-11 bg-jusa-green-container/50 rounded-xl flex items-center justify-center group-hover:bg-jusa-green transition-colors duration-200 shrink-0">
                                <svg class="w-5 h-5 text-jusa-green group-hover:text-white transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-jusa-text-muted">Visit us</p>
                                <p class="text-sm font-semibold text-jusa-text leading-snug">{{ config('jusa.address') }}</p>
                                <p class="text-xs text-jusa-green mt-1 font-medium">Open in Google Maps →</p>
                            </div>
                        </a>
                    </div>

                    {{-- Social Media --}}
                    <div class="bg-white rounded-2xl p-5 shadow-card">
                        <h3 class="font-display font-bold text-sm text-jusa-text mb-4">Follow the Vibe</h3>
                        <div class="flex gap-3">
                            @foreach ([
                                ['label' => 'Instagram', 'handle' => '@jusastropicalsmoothiecafe', 'href' => 'https://www.instagram.com/explore/locations/111839788609318/jusas-tropical-smoothie-cafe/', 'color' => 'from-purple-500 to-pink-500'],
                                ['label' => 'TikTok', 'handle' => 'Coming soon', 'href' => '#', 'color' => 'from-gray-900 to-gray-700'],
                                ['label' => 'Facebook', 'handle' => 'Jusa\'s Tropical Smoothie Café', 'href' => 'https://www.facebook.com/jusastropicalsmoothiecafe', 'color' => 'from-blue-600 to-blue-700'],
                            ] as $social)
                                <a
                                    href="{{ $social['href'] }}"
                                    @if ($social['href'] !== '#') target="_blank" rel="noopener noreferrer" @endif
                                    class="flex-1 flex flex-col items-center gap-1.5 p-3 bg-jusa-surface-low rounded-xl hover:bg-jusa-surface-high transition-colors duration-200 text-center group"
                                >
                                    <div class="w-8 h-8 bg-gradient-to-br {{ $social['color'] }} rounded-lg flex items-center justify-center">
                                        <span class="text-white text-xs font-bold">{{ substr($social['label'], 0, 2) }}</span>
                                    </div>
                                    <span class="text-xs font-medium text-jusa-text-muted group-hover:text-jusa-green transition-colors duration-200">{{ $social['handle'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Hours --}}
                    <div class="bg-white rounded-2xl p-5 shadow-card">
                        <h3 class="font-display font-bold text-sm text-jusa-text mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4 text-jusa-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Typical Hours
                        </h3>
                        <div class="space-y-2">
                            @foreach (['Mon – Fri' => '7:00 AM – 9:00 PM', 'Saturday' => '8:00 AM – 10:00 PM', 'Sunday' => '9:00 AM – 8:00 PM'] as $day => $time)
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-jusa-text-muted">{{ $day }}</span>
                                    <span class="font-medium text-jusa-text">{{ $time }}</span>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('locations') }}" class="text-xs text-jusa-green font-semibold hover:underline underline-offset-2 mt-3 inline-block">Location-specific hours →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ==================== FAQ ACCORDION ==================== --}}
    <section class="py-20 bg-jusa-surface-low" x-data="{ openFaq: null }">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="section-label">Quick Answers</span>
                <h2 class="section-title">Frequently Asked</h2>
            </div>

            <div class="space-y-3">
                @foreach ($faqs as $index => $faq)
                    <div
                        class="bg-white rounded-2xl shadow-card overflow-hidden transition-all duration-200"
                        x-data="{ open: false }"
                    >
                        <button
                            @click="open = !open"
                            class="w-full flex items-start justify-between gap-4 p-6 text-left group"
                            :aria-expanded="open"
                        >
                            <span class="font-display font-bold text-base text-jusa-text group-hover:text-jusa-green transition-colors duration-200">
                                {{ $faq['question'] }}
                            </span>
                            <span
                                :class="open ? 'bg-jusa-green text-white rotate-45' : 'bg-jusa-surface-high text-jusa-text-muted'"
                                class="w-7 h-7 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300 mt-0.5"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                                </svg>
                            </span>
                        </button>
                        <div
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2"
                            class="px-6 pb-6"
                        >
                            <div class="border-t border-jusa-surface-dim pt-4">
                                <p class="text-sm text-jusa-text-muted leading-relaxed">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <p class="text-sm text-jusa-text-muted mb-4">Still have a question?</p>
                <a href="mailto:hello@jusacafe.com" class="btn-primary">
                    Email Us Directly
                </a>
            </div>
        </div>
    </section>
</x-jusa-layout>
