<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">

    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            {{ config('app.name') }}
        </a>
        <ul class="mt-6">
            <x-component-web
                value="{{ isActive('home') ? 'text-base text-white capitalize  font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-40 w-40 p-2 shadow-lg hover:box-content rounded' : '' }}"
                title="Tableau de bord" route="home" icon="home">
            </x-component-web>

            <x-component-web
                value="{{ isActive('compagnies.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-40 w-full p-2 shadow-lg text-center hover:box-content rounded' : '' }}"
                title="Compagnies" route="compagnies.index" icon="truck">
            </x-component-web>

            <x-component-web
                value="{{ isActive('users.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-full w-full p-2 shadow-lg hover:box-content rounded' : '' }}"
                title="Utilisateurs" route="users.index" icon="user">
            </x-component-web>

            <x-component-web
                value="{{ isActive('packages.*') ? 'text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-full w-full p-2 shadow-lg hover:box-content rounded' : '' }}"
                title="Colis" route="packages.index" icon="colis">
            </x-component-web>

        </ul>


        <!--<div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>-->
    </div>

</aside>