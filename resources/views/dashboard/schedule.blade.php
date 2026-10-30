@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="space-y-7">
    <div>
        <h2 class="text-3xl font-black text-emerald-950 tracking-tight">{{ $title }}</h2>
        <p class="text-sm font-medium text-emerald-700/80 mt-1">Chronological appointment registry</p>
    </div>

    <x-panel title="Full Schedule List">
        <ul class="divide-y divide-emerald-50 text-base">
            @forelse($schedules as $item)
                <li class="py-4 flex items-center justify-between">
                    <div>
                        <p class="font-bold text-emerald-950 text-lg">{{ $item->patient_name }}</p>
                        <p class="text-sm font-medium text-emerald-700 mt-0.5">{{ $item->vaccine }} &middot; {{ $item->dose }} &middot; {{ $item->purok }}</p>
                    </div>
                    <span class="text-sm font-mono font-semibold bg-emerald-50 text-emerald-900 border border-emerald-200 px-3 py-1.5 rounded-lg">
                        {{ $item->scheduled_at->format('Y-m-d') }}
                    </span>
                </li>
            @empty
                <li class="py-6 text-center text-emerald-800/60 font-medium">No schedules yet.</li>
            @endforelse
        </ul>
    </x-panel>
</div>
@endsection