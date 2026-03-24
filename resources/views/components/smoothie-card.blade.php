@props([
    'name',
    'description',
    'price',
    'tags' => [],
    'image',
    'featured' => false,
])

<div class="group bg-white rounded-3xl overflow-hidden shadow-card hover:shadow-card-hover hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
    {{-- Image --}}
    <div class="relative overflow-hidden {{ $featured ? 'h-56' : 'h-44' }}">
        <img
            src="{{ $image }}"
            alt="{{ $name }}"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
            loading="lazy"
        >
        {{-- Tag overlay --}}
        @if (!empty($tags))
            <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                @foreach (array_slice($tags, 0, 2) as $tag)
                    <x-dietary-tag :tag="$tag" />
                @endforeach
            </div>
        @endif
    </div>

    {{-- Content --}}
    <div class="p-5 flex flex-col flex-1">
        <h3 class="font-display font-bold text-lg text-jusa-text mb-1.5 group-hover:text-jusa-green transition-colors duration-200">
            {{ $name }}
        </h3>
        <p class="text-sm text-jusa-text-muted leading-relaxed flex-1 mb-4">
            {{ $description }}
        </p>
        <div class="mt-auto border-t border-jusa-surface-dim/60 pt-4">
            <span class="font-display font-bold text-xl text-jusa-green">
                ${{ number_format($price, 2) }}
            </span>
        </div>
    </div>
</div>
