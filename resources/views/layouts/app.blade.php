<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-emerald-50/40 text-emerald-950 text-base antialiased min-h-screen flex flex-col justify-between">

    <header class="bg-white border-b border-emerald-100 px-6 py-5 shadow-xs">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-emerald-700 text-white flex items-center justify-center font-black text-base shadow-sm">
                    BT
                </div>
                <h1 class="text-xl font-black text-emerald-950 tracking-tight">Barangay Bakuna Tracker</h1>
            </div>

            <nav class="flex items-center gap-6 text-base font-semibold">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-emerald-900 hover:text-emerald-600 transition">Dashboard</a>
                    <a href="{{ route('schedule') }}" class="text-emerald-900 hover:text-emerald-600 transition">Schedule</a>
                    <span class="text-emerald-200">|</span>
                    <span class="text-emerald-900">Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-rose-600 font-bold hover:underline cursor-pointer">Logout</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="bg-emerald-700 text-white px-5 py-2.5 rounded-xl font-bold hover:bg-emerald-800 transition shadow-sm">Sign in</a>
                @endguest
            </nav>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto p-5 sm:p-8">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-emerald-100 py-5 text-center text-sm font-medium text-emerald-800/70">
        &copy; 2026 Barangay Health Center &middot; Davao City Health Office
    </footer>

</body>
</html>