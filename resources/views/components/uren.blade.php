<!-- resources/views/welcome.blade.php -->

<!-- flex items-center gap-2 bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js (CDN voor gemak) -->
    <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style type="text/tailwindcss">

        .navitems>li>a {
            @apply bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded
        }
    </style>
</head>
<body>
    <header class="flex gap-1 h-25 bg-blue-400 text-white items-center justify-between px-20 drop-shadow-lg list-none">
    <logo class="flex items-center gap-1">
        <img class="h-12 mt-1" src="https://img.icons8.com/color/48/time-machine--v1.png" alt="time-machine--v1"/>   
        <li><a class="font-bold text-3xl" href="/">Urenbundel systeem</a></li>
    </logo>

        <nav>
            <ul class="flex items-center gap-5 relative" >
                <li><a class="bg-green-500 text-black hover:bg-green-200 py-5 px-8 rounded" href="/uren">uren</a></li>
                <li><a class="bg-green-500 text-black hover:bg-green-200 py-5 px-8 rounded" href="/klanten">klanten</a></li>

                <li x-data="{ dropdownOpen: false }" >
                    
                <a @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = false" class="flex items-center gap-2 bg-green-500 text-black hover:bg-green-200 py-3 px-6 rounded cursor-pointer select-none" >
                <img class="h-8 rounded-full object-cover" src="https://img.icons8.com/color/48/test-account.png" alt="test-account"/>
                    mijn profiel
                <img class="w-4" src="https://img.icons8.com/ios/50/expand-arrow--v2.png" alt="expand-arrow--v2"/>
                </a>
                    <div x-show="dropdownOpen" x-cloak class="absolute right-0 bg-white text-black shadow rounded-lg w-40 p-2 z-20">
                        <ul class="hoverlist">
                            <li><a href="">Mijn profiel</a></li>
                            <li><a href="">instellingen</a></li>
                            <li><a href="">Log uit</a></li>
                        </ul>
                    </div>
                </li>
            </ul> 
        </nav>
    </header>
    <main>
        <div class="p-10">
            uren
        </div>
    </main>
</body>
</html>
