@extends('layouts.app')

@section('content')

    <x-hero />

    <section id="highlights" class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
                    Our Bestsellers
                </h2>
                <p class="text-stone-400 mt-3 text-base">
                    The top local favorites keeping Laguna fueled and refreshed.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-3xl text-center hover:-translate-y-2 transition-transform animate-fade-in-up delay-100">
                    <div class="w-16 h-16 mx-auto bg-stone-900 rounded-full flex items-center justify-center border border-emerald-500/30 mb-6">
                        <span class="text-2xl">☕</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Signature Coffee</h3>
                    <p class="text-sm text-stone-400">Genuine Batangas Liberica beans, Ube Lattes, and classic coffee.</p>
                </div>
                
                <div class="glass-card p-8 rounded-3xl text-center hover:-translate-y-2 transition-transform animate-fade-in-up delay-200 border-emerald-500/40 shadow-lg shadow-emerald-950/20">
                    <div class="w-16 h-16 mx-auto bg-emerald-950 rounded-full flex items-center justify-center border border-emerald-500/50 mb-6">
                        <span class="text-2xl">🧋</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Milk Tea Suprema</h3>
                    <p class="text-sm text-stone-400">Premium brewed tea layered with rich krema and sweet boba.</p>
                </div>
                
                <div class="glass-card p-8 rounded-3xl text-center hover:-translate-y-2 transition-transform animate-fade-in-up delay-300">
                    <div class="w-16 h-16 mx-auto bg-stone-900 rounded-full flex items-center justify-center border border-emerald-500/30 mb-6">
                        <span class="text-2xl">🥤</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Ice-Blended Frappes</h3>
                    <p class="text-sm text-stone-400">Ice-cold frappes blended with cookies, caramel, and chocolate.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-transition-border"></div>

    <section id="story" class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative rounded-3xl overflow-hidden glass-card p-2 animate-fade-in-up">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Brewing Craft" class="w-full h-[400px] object-cover rounded-2xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 to-transparent flex items-end p-8">
                        <span class="text-emerald-400 font-bold tracking-widest uppercase text-sm">Founded in Calabarzon</span>
                    </div>
                </div>
                
                <div class="space-y-6 animate-fade-in-up delay-200">
                    <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
                        Rooted in Community, Crafted with Pride.
                    </h2>
                    <p class="text-stone-300 text-lg leading-relaxed">
                        We began with a simple goal: to serve high-quality beverages to the local community at friendly prices.
                    </p>
                    <p class="text-stone-400 leading-relaxed">
                        By supporting our local coffee farmers and perfecting our daily-brewed teas, we've built a neighborhood hangout where everyone can enjoy great drinks without the expensive mall markups. 
                    </p>
                    <div class="pt-4">
                        <x-button variant="outline" size="md" href="#features">Learn About Our Quality</x-button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="py-20 relative bg-stone-950/50 border-y border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight">
                    Order Online, Skip the Line
                </h2>
                <p class="text-stone-400 mt-3 text-base">
                    Experience our digital barista queue and mobile ordering system for rapid takeout.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-24">
                <div class="lg:col-span-8 rounded-3xl glass-card p-6 shadow-2xl relative overflow-hidden animate-fade-in-up">
                    <div class="flex items-center justify-between pb-4 border-b border-stone-800 mb-6">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-red-500"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                            <span class="ml-2 text-xs font-mono text-stone-400">brew-pos-system.local/queue</span>
                        </div>
                        <span class="text-xs font-bold text-emerald-400 bg-emerald-950/80 px-3 py-1 rounded-full border border-emerald-700/50">
                            Live Queue: 3 Orders
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Cups Served Today</p>
                            <p class="text-2xl font-black text-white mt-1">428</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Average Wait</p>
                            <p class="text-2xl font-black text-emerald-400 mt-1">2.4 min</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-stone-950/60 border border-stone-800">
                            <p class="text-xs text-stone-400">Bean Stock</p>
                            <p class="text-2xl font-black text-amber-400 mt-1">98%</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex justify-center animate-fade-in-up delay-200">
                    <div class="w-full max-w-[280px] rounded-[40px] border-4 border-stone-700 bg-stone-950 p-4 shadow-2xl relative">
                        <div class="w-24 h-4 bg-stone-800 rounded-full mx-auto mb-4"></div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between pb-2 border-b border-stone-800">
                                <span class="text-xs font-bold text-white">Mobile App</span>
                                <span class="text-[10px] text-emerald-400">● Active</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-stone-900 border border-stone-800 flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-emerald-950 text-emerald-400 flex items-center justify-center text-xs font-bold">16oz</div>
                                <div>
                                    <p class="text-xs font-bold text-white">Kapeng Barako</p>
                                    <p class="text-[11px] text-emerald-400 font-black">₱28.00</p>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-feature-card title="Pure Batangas Barako" description="Sourced directly from local farmers for a strong, chocolatey aroma.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </x-feature-card>
                <x-feature-card title="Signature Milk Teas" description="Freshly brewed tea paired with perfectly cooked tapioca pearls.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </x-feature-card>
                <x-feature-card title="Ice-Cold Frappes" description="Delicious dessert drinks perfect for beating the afternoon heat.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                </x-feature-card>
                <x-feature-card title="Affordable Menu" description="High quality shouldn't be expensive. Our drinks start at just 28 pesos.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </x-feature-card>
                <x-feature-card title="Prepared Fresh Daily" description="We steep our teas and grind our espresso beans fresh every single morning.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </x-feature-card>
                <x-feature-card title="Proudly Local" description="Serving our beloved neighborhoods across the province with a smile.">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </x-feature-card>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch mb-24">
                <x-pricing-card 
                    name="Clasica Size" price="₱28" period="/ 16 oz"
                    description="Perfect for your morning commute or quick study session."
                    :features="['Pure local beans', 'Choice of Black or Krema', 'Standard sweetness']" buttonText="Choose Clasica"
                />
                <x-pricing-card 
                    name="Suprema Size" price="₱38" period="/ 22 oz"
                    description="Our large cup filled with premium toppings and rich flavors."
                    :features="['Free boba pearls', 'Custom sugar levels', 'Walling options']" :popular="true" buttonText="Order Suprema"
                />
                <x-pricing-card 
                    name="Group Bundle" price="₱199" period="/ 6 Drinks"
                    description="The best choice for sharing with friends, family, or classmates."
                    :features="['Mix and match any 6 drinks', 'Double toppings', 'Priority prep']" buttonText="Get Bundle"
                />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-testimonial-card 
                    name="Alyssa R." position="Student" photo="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="This place saves me during exam week! The coffee is strong and fits my student budget perfectly."
                />
                <x-testimonial-card 
                    name="Jayson P." position="Designer" photo="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="The milk tea here is better than the famous mall brands. The staff is also incredibly friendly."
                />
                <x-testimonial-card 
                    name="Ryan B." position="Cyclist" photo="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&h=200&q=80" 
                    review="Our go-to stop after a long ride. The cold frappes are exactly what we need to cool down."
                />
            </div>
        </div>
    </section>

    <section class="py-16 relative overflow-hidden bg-emerald-950/40 border-t border-emerald-900/50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight mb-8">
                Order Online Now – Pickup & Delivery
            </h2>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-button variant="primary" size="lg" href="#contact" class="w-full sm:w-auto shadow-emerald-700/40">
                    Order via Foodpanda
                </x-button>
                <x-button variant="secondary" size="lg" href="#contact" class="w-full sm:w-auto text-stone-900 bg-amber-400 hover:bg-amber-500 border-none">
                    Order via GrabFood
                </x-button>
            </div>
        </div>
    </section>

@endsection