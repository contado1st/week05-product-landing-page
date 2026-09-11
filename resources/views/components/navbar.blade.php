<header class="sticky top-0 z-50 bg-stone-950/80 backdrop-blur-md border-b border-stone-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="#home" class="flex items-center gap-3 group">
                <img src="{{ asset('images/logo.png') }}" alt="BrewVery Logo" class="h-11 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="text-xl font-extrabold tracking-tight text-white">
                    Brew<span class="text-emerald-500">Very</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Home</a>
                <a href="#features" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Features</a>
                <a href="#showcase" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Menu Highlights</a>
                <a href="#pricing" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Pricing</a>
                <a href="#testimonials" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Testimonials</a>
                <a href="#contact" class="text-sm font-medium text-stone-300 hover:text-emerald-400 transition-colors">Contact</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <x-button variant="ghost" size="sm" href="#signin">
                    Sign In
                </x-button>
                <x-button variant="primary" size="sm" href="#pricing">
                    Get Started
                </x-button>
            </div>

            <button id="mobile-menu-btn" type="button" aria-label="Toggle navigation" class="md:hidden p-2 rounded-lg text-stone-400 hover:text-white hover:bg-stone-800 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-stone-800 bg-stone-950 px-4 pt-3 pb-6 space-y-3">
        <a href="#home" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Home</a>
        <a href="#features" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Features</a>
        <a href="#showcase" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Menu Highlights</a>
        <a href="#pricing" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Pricing</a>
        <a href="#testimonials" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Testimonials</a>
        <a href="#contact" class="mobile-link block px-3 py-2 rounded-lg text-base font-medium text-stone-300 hover:bg-stone-800 hover:text-white">Contact</a>
        <div class="pt-4 border-t border-stone-800 flex flex-col gap-2">
            <x-button variant="outline" size="sm" href="#signin" class="w-full">
                Sign In
            </x-button>
            <x-button variant="primary" size="sm" href="#pricing" class="w-full">
                Get Started
            </x-button>
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