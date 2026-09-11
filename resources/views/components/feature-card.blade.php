@props([
    'title',
    'description',
])

<div {{ $attributes->merge(['class' => 'group relative p-7 rounded-2xl bg-stone-900/60 border border-stone-800 hover:border-emerald-500/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-950/20 flex flex-col']) }}>
    <div class="w-12 h-12 rounded-xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm">
        {{ $slot }}
    </div>

    <h3 class="text-lg font-bold text-white group-hover:text-emerald-300 transition-colors mb-2">
        {{ $title }}
    </h3>

    <p class="text-sm text-stone-400 leading-relaxed mt-auto">
        {{ $description }}
    </p>
</div>