@props(['tag', 'size' => 'sm'])

@php
    $styles = [
        'vegan'      => 'bg-jusa-green-container text-jusa-green-light',
        'protein'    => 'bg-jusa-orange-container text-jusa-orange-dark',
        'detox'      => 'bg-blue-100 text-blue-700',
        'popular'    => 'bg-jusa-coral-container text-jusa-coral-dark',
        'dairy-free' => 'bg-purple-100 text-purple-700',
        'seasonal'   => 'bg-yellow-100 text-yellow-700',
        'new'        => 'bg-teal-100 text-teal-700',
    ];

    $labels = [
        'vegan'      => 'Vegan',
        'protein'    => 'High-Protein',
        'detox'      => 'Detox',
        'popular'    => 'Popular',
        'dairy-free' => 'Dairy-Free',
        'seasonal'   => 'Seasonal',
        'new'        => 'New',
    ];

    $style = $styles[$tag] ?? 'bg-jusa-surface-high text-jusa-text-muted';
    $label = $labels[$tag] ?? ucfirst($tag);
@endphp

<span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-full {{ $style }}">
    {{ $label }}
</span>
