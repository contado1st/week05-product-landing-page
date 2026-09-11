<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'BrewVery | Bold Flavors, Local Roots' }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body class="bg-[#0c0a09] text-stone-200 font-['Plus_Jakarta_Sans',sans-serif] antialiased selection:bg-emerald-500 selection:text-white flex flex-col min-h-screen relative overflow-x-hidden">

    <div class="global-background">
        <div class="grid-glow-spotlight"></div>
        <div class="bg-grid-pattern"></div>
        <div class="shape-blob blob-1"></div>
        <div class="shape-blob blob-2"></div>
        <div class="shape-blob blob-3"></div>
    </div>

    <x-navbar />

    <main class="flex-grow z-10">
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
</body>
</html>