@props(['title', 'value'])

<div class="w-36 h-36 sm:w-40 sm:h-40 mx-auto rounded-full bg-white border-2 border-emerald-200/80 p-3 sm:p-4 flex flex-col items-center justify-center text-center shadow-xs hover:border-emerald-400 hover:scale-105 transition-all duration-200">
    <p class="text-[11px] sm:text-xs uppercase tracking-wider text-emerald-800 font-bold leading-tight max-w-[110px] sm:max-w-[125px]">
        {{ $title }}
    </p>
    <p class="text-2xl sm:text-3xl font-black text-emerald-950 mt-1">
        {{ $value }}
    </p>
</div>