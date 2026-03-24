<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'JUSA Tropical Smoothie Café' }}</title>
    <meta name="description" content="{{ $description ?? 'Crafted with sun-ripened tropical fruits and organic superfoods. Experience the JUSA glow.' }}">

    <link rel="icon" type="image/png" href="{{ asset('images/jusa-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/jusa-logo.png') }}">

    {{-- Preconnect to Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;500;600;700;800;900&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Material Symbols (for icons) --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="font-manrope bg-jusa-cream text-jusa-text antialiased">

    {{-- Sticky Navigation --}}
    <x-jusa-nav />

    {{-- Page Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-jusa-footer />

    @stack('scripts')
</body>
</html>
