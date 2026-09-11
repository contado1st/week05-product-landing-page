<header class="sticky top-0 z-50 bg-gradient-to-r from-emerald-950 via-[#064e3b] to-[#0c0a09] backdrop-blur-xl border-b border-emerald-500/40 shadow-lg shadow-emerald-950/60 transition-all duration-300">
    
    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-emerald-400 to-transparent opacity-80 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="#home" class="flex items-center gap-3 group">
                <div class="relative">
                    <div class="absolute -inset-1 rounded-full bg-emerald-500/30 blur-sm group-hover:bg-emerald-400/50 transition duration-300"></div>
                    <img src="{{ asset('images/logo.png') }}" alt="BrewVery Logo" class="relative h-11 w-auto object-contain transition-transform group-hover:scale-105">
                </div>
                <span class="text-xl font-black tracking-tight text-white">
                    Brew<span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-amber-300">Very</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-1.5 lg:gap-3 bg-stone-950/40 border border-emerald-500/20 px-4 py-1.5 rounded-full backdrop-blur-md">
                <a href="#home" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">Home</a>
                <a href="#highlights" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">Bestsellers</a>
                <a href="#story" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">Our Story</a>
                <a href="#features" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">The Craft</a>
                <a href="#pricing" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">Pricing</a>
                <a href="#testimonials" class="px-3.5 py-1.5 rounded-full text-xs lg:text-sm font-semibold text-emerald-100 hover:text-white hover:bg-emerald-800/50 transition-all duration-200">Reviews</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <a href="#contact" class="px-4 py-2 rounded-full text-xs font-bold text-stone-200 hover:text-white bg-stone-900/60 border border-emerald-500/30 hover:border-emerald-400 hover:bg-emerald-950/60 transition-all">
                    Find Branch
                </a>
                <a href="#pricing" class="px-5 py-2.5 rounded-full text-xs font-extrabold text-stone-950 bg-gradient-to-r from-amber-400 via-amber-300 to-amber-500 hover:from-amber-300 hover:to-amber-400 shadow-md shadow-amber-500/30 hover:shadow-amber-500/50 hover:scale-105 transition-all duration-200">
                    Order Now (₱28+)
                </a>
            </div>

            <button id="mobile-menu-btn" type="button" aria-label="Toggle navigation" class="md:hidden p-2.5 rounded-xl text-emerald-300 hover:text-white hover:bg-emerald-900/60 border border-emerald-500/30 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-emerald-500/30 bg-gradient-to-b from-[#064e3b] to-stone-950 px-5 pt-4 pb-6 space-y-2">
        <a href="#home" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">Home</a>
        <a href="#highlights" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">Bestsellers</a>
        <a href="#story" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">Our Story</a>
        <a href="#features" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">The Craft</a>
        <a href="#pricing" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">Pricing</a>
        <a href="#testimonials" class="mobile-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-100 hover:bg-emerald-800/50 hover:text-white">Reviews</a>
        <div class="pt-4 border-t border-emerald-800/50 flex flex-col gap-2.5">
            <a href="#contact" class="mobile-link text-center px-4 py-2.5 rounded-full text-xs font-bold text-white border border-emerald-500/40 bg-emerald-950/60">
                Find Branch
            </a>
            <a href="#pricing" class="mobile-link text-center px-4 py-2.5 rounded-full text-xs font-black text-stone-950 bg-amber-400 hover:bg-amber-300 shadow-md">
                Order Now (₱28+)
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const links = document.querySelectorAll('.mobile-link');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });

                links.forEach(link => {
                    link.addEventListener('click', () => menu.classList.add('hidden'));
                });
            }
        });
    </script>
</header>