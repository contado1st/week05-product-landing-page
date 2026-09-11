<section id="home" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28">
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-emerald-600/15 blur-[120px] rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-1/3 right-10 w-[400px] h-[300px] bg-amber-600/10 blur-[100px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-emerald-500/30 bg-emerald-950/40 text-emerald-400 text-xs font-semibold tracking-wide uppercase">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Laguna's Favorite Daily Hangout
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.1]">
                    Bold Flavors, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-emerald-300 to-amber-300">
                        Local Roots.
                    </span>
                </h1>

                <p class="text-lg sm:text-xl text-stone-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    From proudly Filipino Batangas Kapeng Barako to our handcrafted Milk Tea Suprema, discover handcrafted café beverages crafted fresh for your everyday hustle across Calabarzon.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <x-button variant="primary" size="lg" href="#showcase" class="w-full sm:w-auto shadow-emerald-900/40">
                        Explore Bestsellers
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </x-button>
                    <x-button variant="outline" size="lg" href="#branches" class="w-full sm:w-auto">
                        Find a Branch
                    </x-button>
                </div>

                <div class="pt-6 border-t border-stone-800/80 grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <p class="text-2xl font-extrabold text-white">₱28+</p>
                        <p class="text-xs text-stone-400 font-medium">Affordable Starts</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-emerald-400">100%</p>
                        <p class="text-xs text-stone-400 font-medium">Batangas Barako</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-white">4+ Towns</p>
                        <p class="text-xs text-stone-400 font-medium">Laguna Branches</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <div class="absolute -inset-1.5 rounded-3xl bg-gradient-to-tr from-emerald-500/30 to-amber-500/20 blur-lg opacity-70 group-hover:opacity-100 transition duration-1000"></div>
                    
                    <div class="relative rounded-2xl overflow-hidden border border-stone-800 bg-stone-900/80 shadow-2xl">
                        <img src="{{ asset('images/hero.jpg') }}" 
                             alt="BrewVery Specialty Beverages" 
                             class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                             
                        <div class="absolute bottom-4 left-4 right-4 bg-stone-950/85 backdrop-blur-md border border-stone-800 p-3.5 rounded-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <div>
                                    <p class="text-xs font-bold text-white tracking-wide">Signature Milk Tea Suprema</p>
                                    <p class="text-[11px] text-stone-400">Freshly brewed daily pearls & krema</p>
                                </div>
                            </div>
                            <span class="text-xs font-extrabold text-emerald-400 bg-emerald-950/80 px-2 py-1 rounded border border-emerald-800">₱38 Clasica</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>