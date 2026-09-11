<section id="home" class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left animate-fade-in-up">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-emerald-500/30 bg-emerald-950/50 backdrop-blur-md text-emerald-400 text-xs font-bold tracking-wide uppercase shadow-lg shadow-emerald-950/40">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    Homegrown in Laguna • 100% Batangas Barako
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.1]">
                    The local brew you can <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-emerald-300 to-amber-400">
                        actually savor every day.
                    </span>
                </h1>

                <p class="text-base sm:text-lg text-stone-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    From genuine Batangas Liberica Kapeng Barako to our creamy Milk Tea Suprema, BrewVery delivers premium handcrafted café beverages at friendly community prices across Majayjay and Mabitac.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <x-button variant="primary" size="lg" href="#showcase" class="w-full sm:w-auto shadow-emerald-600/30">
                        Explore Our Menu
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </x-button>
                    <x-button variant="outline" size="lg" href="#pricing" class="w-full sm:w-auto">
                        View Cup Sizes (₱28+)
                    </x-button>
                </div>

                <div class="pt-6 border-t border-stone-800/80 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-xs font-bold text-stone-400">
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-400 text-base">✓</span> Batangas Liberica Beans 
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-400 text-base">✓</span> Fresh Pearls Daily
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-400 text-base">✓</span> Majayjay & Mabitac Hubs 
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative animate-fade-in-up delay-200">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <div class="absolute -inset-2 rounded-3xl bg-gradient-to-tr from-emerald-500/25 to-amber-500/20 blur-xl opacity-75"></div>
                    
                    <div class="relative animate-float rounded-3xl overflow-hidden glass-card p-2 shadow-2xl">
                        <img src="{{ asset('images/hero.jpg') }}" 
                             alt="BrewVery Fresh Signature Cups" 
                             class="w-full h-auto rounded-2xl object-cover">
                             
                        <div class="absolute bottom-5 left-5 right-5 bg-stone-950/85 backdrop-blur-md border border-white/10 p-3.5 rounded-2xl flex items-center justify-between shadow-xl">
                            <div class="flex items-center gap-3">
                                <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                                <div>
                                    <p class="text-xs font-bold text-white">Milk Tea Suprema & Frappes </p>
                                    <p class="text-[11px] text-stone-400">Freshly brewed daily pearls & krema</p>
                                </div>
                            </div>
                            <span class="text-xs font-black text-emerald-400 bg-emerald-950/90 px-2.5 py-1 rounded-full border border-emerald-700/50">
                                ₱38 Grande
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>