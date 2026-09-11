@props([
    'title',
    'description',
])

<div {{ $attributes->merge(['class' => 'group relative p-7 rounded-3xl glass-card flex flex-col hover:-translate-y-2']) }}>
    <div class="w-13 h-13 rounded-2xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-gradient-to-br group-hover:from-emerald-500 group-hover:to-emerald-600 group-hover:text-white transition-all duration-300 shadow-md">
        {{ $slot }}
    </div>

    <h3 class="text-lg font-bold text-white group-hover:text-emerald-300 transition-colors mb-2">
        {{ $title }}
    </h3>

    <p class="text-sm text-stone-400 leading-relaxed mt-auto">
        {{ $description }}
    </p>
</div>