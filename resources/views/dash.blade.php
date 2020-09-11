<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MonGraphisme Labs</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

    <aside class="w-56 md:w-56 bg-gray-800 md:min-h-screen">

        <div>
            <ul>
                <li class="bg-gray-900 rounded">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Dashboard</span>
                    </a>
                </li>
                <li class="hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Logos</span>
                    </a>
                </li>

                <li class="hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Flyers</span>
                    </a>
                </li>
                <li class="hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Cartes visite</span>
                    </a>
                </li>                
                <li class="3 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Affiches</span>
                    </a>
                </li>
                <li class="hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Dépliants</span>
                    </a>
                </li>
                <li class="hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Affiches</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Cartes postales</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Cartes de voeux</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Bâches et Vinyles</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Cartes d'invitation</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Kakémonos</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Entête</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Stickers</span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Rollups | Totems | Banners</span>
                    </a>
                </li>
                <li class="flex px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <div class="flex items-center">
                    
                    <a href="#" class="relative flex">

                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>

                        <div class="text-center text-white text-xs bg-blue-600 rounded-full w-4 h-4 absolute top-0 right-0">0</div> 

                       
                        </div> </a>
                        <span class="mx-2 text-gray-300">Rollups</span> 
                        
                   
              
                </li>                                

            </ul>
            <div class="border-t border-gray-700 -mx-2 mt-2 md:hidden"></div>
            <ul class="mt-6 md:hidden">
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <a href="#" class="mx-2 text-gray-300">Account Settings</a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded mt-2">
                    <button class="mx-2 text-gray-300" @click="logout">Logout</button>
                </li>
            </ul>
        </div>
    </aside>
</body>
