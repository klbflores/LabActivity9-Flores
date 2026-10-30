@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="space-y-7">

    <div>
        <h2 class="text-3xl font-black text-emerald-950 tracking-tight">{{ $title }}</h2>
        <p class="text-sm font-medium text-emerald-700/80 mt-1">Operations Deck</p>
    </div>

    {{-- Alert Banner --}}
    @if($alerts->count() > 0)
        <div class="bg-rose-50 border-l-4 border-rose-500 p-5 rounded-r-xl shadow-xs">
            <p class="text-base font-bold text-rose-900">
                @if($alerts->count() === 1)
                    Urgent: There is 1 overdue patient vaccination appointment requiring immediate follow-up!
                @else
                    Urgent: There are {{ $alerts->count() }} overdue patient vaccination appointments requiring immediate follow-up!
                @endif
            </p>
        </div>
    @elseif($schedules->isEmpty())
        <div class="bg-amber-50 border-l-4 border-amber-500 p-5 rounded-r-xl shadow-xs">
            <p class="text-base font-semibold text-amber-900">Vaccine stocks ready, but no appointments are scheduled.</p>
        </div>
    @else
        <div class="bg-emerald-100/70 border-l-4 border-emerald-600 p-5 rounded-r-xl shadow-xs">
            <p class="text-base font-bold text-emerald-950">All clear! All active schedules are on track.</p>
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 place-items-center">
        @foreach($stats as $stat)
            <x-stat-card :title="$stat['label']" :value="$stat['value']" />
        @endforeach
    </div>

    <x-panel title="Purok Vaccination Queue">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-base border border-emerald-100">
                <thead>
                    <tr class="border-b border-emerald-150 bg-emerald-50/70 text-emerald-900 text-xs font-bold uppercase tracking-wider divide-x divide-emerald-100">
                        <th class="py-3.5 px-4 text-center w-12">#</th>
                        <th class="py-3.5 px-4">Patient Name</th>
                        <th class="py-3.5 px-4">Purok</th>
                        <th class="py-3.5 px-4">Vaccine & Dose</th>
                        <th class="py-3.5 px-4">Scheduled Date</th>
                        <th class="py-3.5 px-4 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-emerald-100">
                    @forelse($schedules as $item)
                        <tr class="{{ $loop->odd ? 'bg-white' : 'bg-emerald-50/25' }} hover:bg-emerald-100/30 transition divide-x divide-emerald-100">
                            <td class="py-4 px-4 text-sm font-mono text-emerald-700/80 text-center">{{ $loop->iteration }}</td>
                            <td class="py-4 px-4 font-bold text-emerald-950">{{ $item->patient_name }}</td>
                            <td class="py-4 px-4 font-medium text-emerald-900">{{ $item->purok }}</td>
                            <td class="py-4 px-4 font-medium text-emerald-900">{{ $item->vaccine }} ({{ $item->dose }})</td>
                            <td class="py-4 px-4 font-medium text-emerald-900">{{ $item->scheduled_at->format('M d, Y') }}</td>
                            <td class="py-4 px-4 text-center">
                                @if($item->status === 'Done')
                                    <span class="inline-flex px-3 py-1 text-xs font-bold rounded-full bg-emerald-100 text-emerald-900">Done</span>
                                @elseif($item->status === 'Scheduled')
                                    <span class="inline-flex px-3 py-1 text-xs font-bold rounded-full bg-teal-100 text-teal-900">Scheduled</span>
                                @else
                                    <span class="inline-flex px-3 py-1 text-xs font-bold rounded-full bg-rose-100 text-rose-900">Overdue</span>
                                @endif

                                @unless($item->status === 'Overdue')
                                    <span class="text-xs font-medium text-emerald-700/60 ml-1">(On-time)</span>
                                @endunless
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-10 text-emerald-800/60 font-medium">No schedules yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>

</div>
@endsection