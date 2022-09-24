<aside
    class="z-20 hidden shadow-lg w-64 overflow-y-auto bg-gradient-to-r from-emerald-500 dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4  text-center text-gray-500 dark:text-gray-400 mb-4">
        <a class="ml-2 text-2xl uppercase font-bold text-green-900 " href="#">
            <!--text-base text-white capitalize font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-full w-full p-2 shadow-lg hover:box-content rounded-->
            {{ config('app.name') }}
        </a>
        <x-component-web
            value="{{ isActive('home') ? 'text-base text-white capitalize font-serif bg-blue-600 hover:bg-sky-400 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-40 w-48 p-2 mx-2 shadow-lg hover:box-content rounded' : '' }}"
            title="Tableau de bord" route="home" icon="home">
        </x-component-web>

        <x-component-web
            value="{{ isActive('compagnies.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-blue-600 hover:bg-sky-400 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-40 w-full p-2 shadow-lg text-center hover:box-content rounded' : '' }}"
            title="Compagnies" route="compagnies.index" icon="truck">
        </x-component-web>

        <x-component-web
            value="{{ isActive('users.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-blue-600 hover:bg-sky-400 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-full w-full p-2 shadow-lg hover:box-content rounded' : '' }}"
            title="Utilisateurs" route="users.index" icon="user">
        </x-component-web>

        <x-component-web
            value="{{ isActive('packages.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-blue-600 hover:bg-sky-400 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-full w-full p-2 shadow-lg hover:box-content rounded' : '' }}"
            title="Colis" route="packages.index" icon="colis">
        </x-component-web>

        <!--{{ isActive('compagnies.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-40 w-full p-2 shadow-lg text-center hover:box-content rounded' : '' }}-->



        <!--<ul class="mt-4">
            <li class="relative px-6 py-3">
                <span
                    class="absolute inset-y-0 left-0 w-1 {{ isActive('home') ? 'bg-green-900' : '' }} rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="{{ route('home') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4 text-white">Tableau de bord</span>
                </a>
            </li>
        </ul>

        <ul class="mt-2">
            <li class="relative px-6 py-3">
                <span
                    class="absolute inset-y-0 left-0 w-1 {{ isActive('users.*') ? 'bg-green-900' : '' }} rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="{{ route('users.index') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4 text-white">Utilisateurs</span>
                </a>
            </li>
        </ul>

        <ul class="mt-2">
            <li class="relative px-6 py-3">
                <span
                    class="absolute inset-y-0 left-0 w-1 {{ isActive('compagnies.*') ? 'bg-green-900' : '' }} rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="index.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4 text-white">Compagnies</span>
                </a>
            </li>
        </ul>

        <ul class="mt-3">
            <li class="relative px-6 py-3">
                <span
                    class="absolute inset-y-0 left-0 w-1 {{ isActive('packages.*') ? 'bg-green-900' : '' }} rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="index.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4 text-white">Colis</span>
                </a>
            </li>
        </ul>-->
        <!--<div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>-->
    </div>
</aside>