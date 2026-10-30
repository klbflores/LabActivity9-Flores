@extends('layouts.app')
@section('title', 'Sign In - Bakuna Tracker')

@section('content')
<div class="max-w-md mx-auto mt-12">
    <div class="bg-white border border-emerald-100 rounded-2xl p-8 shadow-xs">
        <h2 class="text-2xl font-black text-emerald-950 mb-1">Staff Sign In</h2>
        <p class="text-sm font-medium text-emerald-700/80 mb-6">Enter your authorized health worker credentials</p>

        <form method="POST" action="{{ url('/login') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-bold text-emerald-900 mb-1.5">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full border border-emerald-200 rounded-xl p-3 text-base text-emerald-950 focus:ring-2 focus:ring-emerald-600 focus:outline-none">
                @error('email') <p class="text-rose-600 text-xs mt-1.5 font-semibold">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-emerald-900 mb-1.5">Password</label>
                <input type="password" name="password" required
                    class="w-full border border-emerald-200 rounded-xl p-3 text-base text-emerald-950 focus:ring-2 focus:ring-emerald-600 focus:outline-none">
                @error('password') <p class="text-rose-600 text-xs mt-1.5 font-semibold">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl p-3 text-base transition shadow-sm cursor-pointer">
                Sign in to Tracker
            </button>
        </form>
    </div>
</div>
@endsection