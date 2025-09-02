<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js (CDN voor gemak) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header class="flex gap-1 h-25 bg-blue-400 text-white items-center justify-between px-20 drop-shadow-lg list-none">
    <logo class="flex items-center gap-1">
        <img class="h-12 -mt-1" src="https://img.icons8.com/color/48/time-machine--v1.png" alt="time-machine--v1"/>   
        <li><a href="/">Urenbundel systeem</a></li>
    </logo>

        <nav class="flex text-center gap-5">
            <li><a class="bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded" href="/uren">uren</a></li>
            <li><a class="bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded" href="/klanten">klanten</a></li>
            <li><a class="bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded" href="/profiel">mijn profiel</a></li>
        </nav>

    </header>
    <main>
        <div class="p-10">
            klanten screen
        </div>
    </main>
</body>
</html>