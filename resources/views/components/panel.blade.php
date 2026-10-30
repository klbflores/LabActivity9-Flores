@props(['title'])

<div class="bg-white border border-emerald-100 rounded-2xl shadow-xs overflow-hidden mb-6">
    <div class="px-6 py-4.5 border-b border-emerald-100 bg-emerald-50/50 flex justify-between items-center">
        <h3 class="text-base font-bold text-emerald-950">{{ $title }}</h3>
    </div>
    <div class="p-6">
        {{ $slot }}
    </div>
</div>