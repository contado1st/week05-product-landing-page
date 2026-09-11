@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-stone-900 disabled:opacity-50 disabled:cursor-not-allowed';

    $sizes = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-6 py-2.5 text-sm',
        'lg' => 'px-8 py-3.5 text-base',
    ];

    $variants = [
        'primary' => 'bg-emerald-600 hover:bg-emerald-500 text-white shadow-lg shadow-emerald-900/30 hover:shadow-emerald-700/40 hover:-translate-y-0.5 focus:ring-emerald-500',
        'secondary' => 'bg-amber-600 hover:bg-amber-500 text-white shadow-lg shadow-amber-950/30 hover:shadow-amber-800/40 hover:-translate-y-0.5 focus:ring-amber-500',
        'outline' => 'border border-stone-700 text-stone-300 hover:border-emerald-500 hover:text-white hover:bg-stone-800/50 focus:ring-stone-600',
        'ghost' => 'text-stone-300 hover:text-white hover:bg-stone-800/60 focus:ring-stone-600',
    ];

    $classes = $baseClasses . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif