@props([
    'name',
    'price',
    'period' => '/ cup',
    'description',
    'features' => [],
    'popular' => false,
    'buttonText' => 'Order Now',
    'buttonHref' => '#contact',
])

<div {{ $attributes->merge(['class' => 'relative rounded-3xl p-8 flex flex-col transition-all duration-300 ' . ($popular ? 'bg-stone-900 border-2 border-emerald-500 shadow-2xl shadow-emerald-950/40 -translate-y-2' : 'bg-stone-900/60 border border-stone-800 hover:border-stone-700 hover:-translate-y-1')]) }}>
    
    @if ($popular)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-emerald-500 to-amber-500 text-stone-950 text-xs font-black tracking-wider uppercase shadow-md">
            Customer Favorite
        </div>
    @endif

    <div class="mb-6">
        <h3 class="text-xl font-bold text-white tracking-tight">{{ $name }}</h3>
        <p class="text-xs text-stone-400 mt-1.5 leading-relaxed">{{ $description }}</p>
    </div>

    <div class="flex items-baseline gap-1 mb-6 pb-6 border-b border-stone-800">
        <span class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">{{ $price }}</span>
        <span class="text-xs text-stone-400 font-medium">{{ $period }}</span>
    </div>

    <ul class="space-y-3.5 mb-8 flex-1 text-sm text-stone-300">
        @foreach ($features as $feature)
            <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button 
        :variant="$popular ? 'primary' : 'outline'" 
        size="md" 
        :href="$buttonHref" 
        class="w-full">
        {{ $buttonText }}
    </x-button>
</div>