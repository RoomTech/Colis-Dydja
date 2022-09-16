@extends('template.layouts.master')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tableau de bord
    </h2>

    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Cards -->
        <x-dashboard-statics title="Clients" value="100"> </x-dashboard-statics>
        <x-dashboard-statics title="Colis expedié" value="10"> </x-dashboard-statics>
        <x-dashboard-statics title="Colis en attente" value="50"> </x-dashboard-statics>
        <x-dashboard-statics title="Compagnie" value="5"> </x-dashboard-statics>
        <button
            class="text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-7 w-10 p-3 border-4 shadow-lg shadow-red-600/50 hover:box-content rounded-full">
            Save changes
        </button>
    </div>

</div>
<!-- New Table -->

<!--<div class="w-full overflow-hidden rounded-lg shadow-xs">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Nos convoyeurs
        </h2>
        <div class="w-full overflow-x-auto">

            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nom et prénom</th>
                        <th class="px-4 py-3">Nombre de colis expédié</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                              Avatar with inset shadow 
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
        <img class="object-cover w-full h-full rounded-full"
            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
            alt="" loading="lazy" />
        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
        </div>
    </div>
    <div>
        <p class="font-semibold">Hans Burger</p>
        <p class="text-xs text-gray-600 dark:text-gray-400">
            10x Developer
        </p>
    </div>
</div>
</td>
<td class="px-4 py-3 text-sm">
    $ 863.45
</td>
<td class="px-4 py-3 text-xs">
    <span
        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
        En service
    </span>
</td>
<td class="px-4 py-3 text-sm">
    6/10/2020
</td>
</tr>
</tbody>
</table>
</div>

</div>-->




@endsection