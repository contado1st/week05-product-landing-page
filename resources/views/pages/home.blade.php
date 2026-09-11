@extends('layouts.app')

@section('content')

    <x-hero />

    <section id="features" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <span class="text-xs font-extrabold uppercase tracking-widest text-emerald-400 bg-emerald-950/60 border border-emerald-700/40 px-3.5 py-1.5 rounded-full shadow-sm">
                    The BrewVery Standard
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white mt-4 tracking-tight">
                    Crafted for Quality, Priced for Everyone [cite: 275]
                </h2>
                <p class="text-stone-400 mt-3 text-base leading-relaxed">
                    Every cup combines Batangas-grown beans, authentic tea leaves, and student-friendly pricing to brighten your day[cite: 277, 279, 322].
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-feature-card 
                    class="animate-fade-in-up delay-100"
                    title="100% Batangas Barako" 
                    [cite_start]description="Authentic Batangas Liberica beans brewed strong with a heavy aroma and deep native chocolate undertones[cite: 277, 322].">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </x-feature-card>

                <x-feature-card 
                    class="animate-fade-in-up delay-200"
                    title="Milk Tea Suprema Lineup" 
                    [cite_start]description="Rich brewed black tea layered with silky krema, house-cooked chewy pearls, and premium decadent syrups[cite: 279].">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </x-feature-card>

                <x-feature-card 
                    class="animate-fade-in-up delay-300"
                    title="Ice-Blended Frappe Treats" 
                    [cite_start]description="Smooth treats blended with Milo Krunch, Oreo & Cream, Coffee Crumble, and velvety foam[cite: 278].">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                </x-feature-card>

                <x-feature-card 
                    class="animate-fade-in-up delay-100"
                    title="Student-First Pricing" 
                    [cite_start]description="Quality drinks starting at ₱28 for Clasica Media (16oz) and ₱38 for Grande (22oz)[cite: 284, 285]. Premium doesn't mean costly.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </x-feature-card>

                <x-feature-card 
                    class="animate-fade-in-up delay-200"
                    title="Always Fresh Daily Prep" 
                    description="Boba cooked every 4 hours, coffee ground on demand, and teas steeped fresh daily for peak taste.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </x-feature-card>

                <x-feature-card 
                    class="animate-fade-in-up delay-300"
                    title="Local Laguna Roots" 
                    [cite_start]description="Proudly serving neighborhood hubs in Majayjay, Mabitac, Santa Cruz, and Los Baños[cite: 274, 293, 311, 314].">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </x-feature-card>
            </div>
        </div>
    </section>

    <div class="section-transition-border"></div>

    <section id="showcase" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <span class="text-xs font-extrabold uppercase tracking-widest text-amber-400 bg-amber-950/60 border border-amber-700/40 px-3.5 py-1.5 rounded-full shadow-sm">
                    Digital Ordering Experience [cite: 330]
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white mt-4 tracking-tight">
                    Order Ahead, Skip the Counter Queue [cite: 330, 351]
                </h2>
                <p class="text-stone-400 mt-3 text-base">
                    Preview our digital barista queue and mobile ordering system built for quick takeout in Laguna[cite: 296, 330].
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 rounded-3xl glass-card p-6 shadow-2xl relative overflow-hidden animate-fade-in-up">
                    <div class="flex items-center justify-between pb-4 border-b border-stone-800 mb-6">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-red-500"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                            <span class="ml-2 text-xs font-mono text-stone-400">brewvery-pos-system.local/queue</span>
                        </div>
                        <span class="text-xs font-bold text-emerald-400 bg-emerald-950/80 px-3 py-1 rounded-full border border-emerald-700/50">
                            Live Prep: 3 Orders Active
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Cups Brewed Today</p>
                            <p class="text-2xl font-black text-white mt-1">428</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Avg. Prep Time</p>
                            <p class="text-2xl font-black text-emerald-400 mt-1">2.4 min</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Batangas Barako Beans</p>
                            <p class="text-2xl font-black text-amber-400 mt-1">98% Stock</p>
                        </div>
                    </div>

                    <div class="rounded-2xl overflow-hidden border border-stone-800 relative group">
                        <img src="{{ asset('images/hero.jpg') }}" alt="Drink Showcase" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-stone-950/70 backdrop-blur-xs flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="px-5 py-2.5 rounded-full bg-emerald-600 text-white text-xs font-bold tracking-wide shadow-lg">
                                Viewing Signature Drink Showcase [cite: 320]
                            </span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex justify-center animate-fade-in-up delay-200">
                    <div class="w-full max-w-[280px] rounded-[40px] border-4 border-stone-700 bg-stone-950 p-4 shadow-2xl relative">
                        <div class="w-24 h-4 bg-stone-800 rounded-full mx-auto mb-4"></div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between pb-2 border-b border-stone-800">
                                <span class="text-xs font-bold text-white">BrewVery Express</span>
                                <span class="text-[10px] text-emerald-400">● Majayjay [cite: 293]</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-stone-900 border border-stone-800 flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-emerald-950 text-emerald-400 flex items-center justify-center text-xs font-bold">16oz</div>
                                <div>
                                    <p class="text-xs font-bold text-white">Kapeng Barako Media [cite: 282, 284]</p>
                                    <p class="text-[11px] text-emerald-400 font-black">₱28.00 [cite: 284]</p>
                                </div>
                            </div>
                            <div class="p-3 rounded-2xl bg-stone-900 border border-stone-800 flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-amber-950 text-amber-400 flex items-center justify-center text-xs font-bold">22oz</div>
                                <div>
                                    <p class="text-xs font-bold text-white">Milk Tea Suprema [cite: 279, 283]</p>
                                    <p class="text-[11px] text-emerald-400 font-black">₱38.00 [cite: 284]</p>
                                </div>
                            </div>
                            <div class="pt-2">
                                <x-button variant="primary" size="sm" href="#pricing" class="w-full text-xs py-2.5">
                                    Quick Checkout
                                </x-button>
                            </div>
                        </div>
                        <div class="w-20 h-1 bg-stone-800 rounded-full mx-auto mt-6"></div>
                    </div>
                </div>
            </div>

            <div class="mt-14 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-5 rounded-2xl glass-card">
                    <p class="text-emerald-400 font-extrabold text-sm">⚡ Fast Prep</p>
                    <p class="text-xs text-stone-400 mt-1">Ready under 3 mins</p>
                </div>
                <div class="p-5 rounded-2xl glass-card">
                    <p class="text-emerald-400 font-extrabold text-sm">📱 QR Touchless</p>
                    <p class="text-xs text-stone-400 mt-1">Skip the queue</p>
                </div>
                <div class="p-5 rounded-2xl glass-card">
                    <p class="text-emerald-400 font-extrabold text-sm">🛵 Local Delivery</p>
                    <p class="text-xs text-stone-400 mt-1">Foodpanda & Grab [cite: 330]</p>
                </div>
                <div class="p-5 rounded-2xl glass-card">
                    <p class="text-emerald-400 font-extrabold text-sm">⭐ 5.0 Rating</p>
                    <p class="text-xs text-stone-400 mt-1">Verified Laguna reviews [cite: 290, 308]</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-transition-border"></div>

    <section id="pricing" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <span class="text-xs font-extrabold uppercase tracking-widest text-emerald-400 bg-emerald-950/60 border border-emerald-700/40 px-3.5 py-1.5 rounded-full shadow-sm">
                    Transparent Menu Pricing
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white mt-4 tracking-tight">
                    Affordable Sips for Every Budget [cite: 275]
                </h2>
                <p class="text-stone-400 mt-3 text-base">
                    Select your preferred cup size or barkada bundle without the mall markup.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <x-pricing-card 
                    class="animate-fade-in-up delay-100"
                    name="Clasica Media"
                    price="₱28"
                    [cite_start]period="/ 16 oz cup [cite: 284, 285]"
                    [cite_start]description="Your everyday pocket-friendly morning fuel or study session companion[cite: 282]."
                    :features="[
                        '100% Batangas Liberica Barako drip',
                        'Choice of Pure Black or Krema Caramel',
                        'Fresh ice-drip preparation',
                        'Standard sweetness level',
                    ]"
                    buttonText="Choose Clasica"
                    buttonHref="#contact"
                />

                <x-pricing-card 
                    class="animate-fade-in-up delay-200"
                    name="Suprema Grande"
                    price="₱38"
                    [cite_start]period="/ 22 oz cup [cite: 284, 286]"
                    [cite_start]description="Our signature oversized cups loaded with toppings, krema, and rich teas[cite: 279, 283]."
                    :features="[
                        'Signature Milk Tea Suprema or Ice Blend',
                        'Slow-cooked brown sugar boba pearls included',
                        'Custom sweetness (0%, 50%, 75%, 100%)',
                        'Choice of Krema, Cheesecake, or Oreo walling',
                        'Free cup carrier for takeout',
                    ]"
                    :popular="true"
                    buttonText="Order Suprema Grande"
                    buttonHref="#contact"
                />

                <x-pricing-card 
                    class="animate-fade-in-up delay-300"
                    name="Barkada Bundle"
                    price="₱199"
                    period="/ 6-Cup Pack"
                    description="Ideal for family gatherings, study groups, office breaks, and group hangouts."
                    :features="[
                        'Mix & match 6 Grande cups (22 oz)',
                        'Includes 3 Milk Teas & 3 Ice-Blended Frappes',
                        'Double toppings (Pearls + Egg Pudding)',
                        'Heavy-duty insulated takeout carrier',
                        'Priority queue barista preparation',
                    ]"
                    buttonText="Get Barkada Bundle"
                    buttonHref="#contact"
                />
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <span class="text-xs font-extrabold uppercase tracking-widest text-emerald-400 bg-emerald-950/60 border border-emerald-700/40 px-3.5 py-1.5 rounded-full shadow-sm">
                    Community Reviews
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white mt-4 tracking-tight">
                    Loved by Local Coffee Enthusiasts
                </h2>
                <p class="text-stone-400 mt-3 text-base">
                    Real feedback from students, remote professionals, and cyclists in Laguna.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-testimonial-card 
                    class="animate-fade-in-up delay-100"
                    name="Alyssa Marie Ramos" 
                    [cite_start]position="LSPU Student, Majayjay Branch [cite: 293]" 
                    photo="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="BrewVery is literally our lifesaver during finals! The ₱28 Barako Media gives me enough caffeine to power through late-night reviews without draining my budget."
                    :rating="5"
                />

                <x-testimonial-card 
                    class="animate-fade-in-up delay-200"
                    name="Jayson Perez" 
                    [cite_start]position="Graphic Designer, Mabitac Hub [cite: 311]" 
                    photo="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="The Milk Tea Suprema easily rivals expensive mall tea brands. The pearls are consistently fresh and chewy, and the staff in Mabitac always treat you like family."
                    :rating="5"
                />

                <x-testimonial-card 
                    class="animate-fade-in-up delay-300"
                    name="Coach Ryan Bautista" 
                    position="Laguna Loop Cyclist & Commuter" 
                    photo="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="Our cycling group always stops by the Majayjay branch after steep climbs. The Milo Krunch Frappe is the ultimate reward—ice cold, sweet, and made on the spot."
                    :rating="5"
                />
            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 glass-card p-12 sm:p-16 rounded-[40px] shadow-2xl border border-emerald-500/30">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                Ready to Taste the Difference? <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-amber-300">
                    Visit Your Nearest BrewVery Hub. [cite: 319]
                </span>
            </h2>
            <p class="text-stone-300 mt-5 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Experience Laguna's fastest-growing homegrown coffee and milk tea brand[cite: 274]. Drop by our branches in Majayjay or Mabitac, or inquire about community franchise spots[cite: 293, 311].
            </p>

            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-button variant="primary" size="lg" href="#contact" class="w-full sm:w-auto shadow-emerald-700/40">
                    Join BrewVery VIP Club (Free) [cite: 90]
                </x-button>
                <x-button variant="secondary" size="lg" href="#contact" class="w-full sm:w-auto">
                    Inquire for Franchising [cite: 89]
                </x-button>
            </div>
            
            <p class="text-xs text-stone-500 mt-6 font-medium">
                Counters Open Daily from 9:00 AM – 10:00 PM across Laguna[cite: 292, 310].
            </p>
        </div>
    </section>

@endsection