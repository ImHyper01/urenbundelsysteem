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
    <content class="grid grid-cols-3 max-w-9xl mx-auto mt-10">
        <main class="col-span-2 mx-[10%] ">
           <div class="flex bg-blue-200 relative mb-2 pb-1 h-250 shadow-xl rounded-xl p-5 ">
                <div class="mx-auto">
                    <h1 class="font-bold text-3xl">Hallo, John</h1>
                    <div>Dashboard</div>

                    <section class="grid grid-cols-2 gap-10 mx-auto mt-6 justify-center align-center">

    <!-- Bundel Overzicht -->
    <section class="bg-white p-6 w-140 h-100 rounded-xl shadow-xl ">
        <h2 class="font-bold text-xl mb-2">Uren Bundel</h2>
        <p class="text-gray-600">Totaal uren: <span class="font-semibold">40</span></p>
        <p class="text-gray-600">Nog beschikbaar: <span class="font-semibold text-green-600">28</span></p>
        <div class="w-full bg-gray-200 rounded-full h-3 mt-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 70%"></div>
        </div>
    </section>
                        <section class="bg-white p-6 w-140 h-100 rounded-xl shadow-xl ">
                            <h2 class="font-bold text-xl mb-2">Verbruik deze maand</h2>
                            <p class="text-gray-600">Ingezet: <span class="font-semibold">12 uur</span></p>
                            <p class="text-gray-600">Nog resterend: <span class="font-semibold">28 uur</span></p>
                            <p class="text-sm text-gray-400 mt-2">Laatst geregistreerd: 2 dagen geleden</p>
                        </section>

                        
                        <section class="bg-white p-6 w-140 h-100 rounded-xl shadow-xl ">
                            <h2 class="font-bold text-xl mb-2">Facturatie</h2>
                            <p class="text-gray-600">Bundel start: <span class="font-semibold">01-09-2025</span></p>
                            <p class="text-gray-600">Einddatum: <span class="font-semibold">30-09-2025</span></p>
                            <p class="text-gray-600">Prijs bundel: <span class="font-semibold">€1200</span></p>
                            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg shadow">Factuur bekijken</button>
                        </section>

                        
                        <section class="bg-white p-6 w-140 h-100 rounded-xl shadow-xl ">
                            <h2 class="font-bold text-xl mb-2">Acties</h2>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg shadow w-full mb-2">Nieuw uur loggen</button>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow w-full mb-2">Rapport downloaden</button>
                            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow w-full">Support</button>
                        </section>

                    </section>
                </div>
           </div>
        </main>

        <aside class="bg-blue-200 col-span-1 mr-[20%] rounded-xl shadow-xl">
            <content class="grid grid-cols-2">
                <section class="flex col-span-2 gap-20 p-10 mx-[10%] relative bg-white w-137 h-30 mt-10 shadow-xl rounded-lg">
                    section 1
                </section>

                <section class="flex col-span-2 gap-20 p-10 mx-[10%] relative bg-white w-137 h-30 mt-10 shadow-xl rounded-lg">
                    section 2
                </section>

                <section class="flex col-span-2 gap-20 p-10 mx-[10%] relative bg-white w-137 h-30 mt-10 shadow-xl rounded-lg">
                    section 3
                </section> 

                <section class="flex col-span-2 gap-20 p-10 mx-[10%] relative bg-white w-137 h-30 mt-10 shadow-xl rounded-lg">
                    section 4
                </section>

            </content>
        </aside>

    </content>
</body>
</html>
