@extends('layouts.app')

@section('content')

    <x-hero />

    <section id="features" class="py-20 bg-stone-950/50 border-t border-stone-800/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-950/60 border border-emerald-800/50 px-3 py-1 rounded-full">
                    The BrewVery Standard
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-4 tracking-tight">
                    Crafted for Quality, Priced for Everyone
                </h2>
                <p class="text-stone-400 mt-4 text-base">
                    Every cup combines premium local beans, authentic tea leaves, and student-friendly pricing to brighten your day.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <x-feature-card 
                    title="100% Batangas Barako" 
                    description="Authentic Batangas Liberica beans brewed strong with heavy aroma and deep native chocolate undertones.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </x-feature-card>

                <x-feature-card 
                    title="Milk Tea Suprema Lineup" 
                    description="Rich brewed black tea layered with silky krema, house-cooked chewy pearls, and decadent syrups.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </x-feature-card>

                <x-feature-card 
                    title="Ice-Blended Frappe Treats" 
                    description="Sweet dessert treats blended smooth with Milo Krunch, Oreo & Cream, Coffee Crumble, and whipped foam.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </x-feature-card>

                <x-feature-card 
                    title="Student-First Pricing" 
                    description="Quality drinks starting at ₱28 for Clasica Media (16oz) and ₱38 for Grande (22oz). Premium doesn't mean costly.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-feature-card>

                <x-feature-card 
                    title="Always Fresh Daily Prep" 
                    description="Boba cooked every 4 hours, coffee ground on demand, and teas steeped fresh daily for optimal taste.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-feature-card>

                <x-feature-card 
                    title="Local Laguna Roots" 
                    description="Proudly expanding across Majayjay, Mabitac, and surrounding towns to serve your friendly neighborhood hub.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </x-feature-card>

            </div>
        </div>
    </section>

@endsection