@extends('template.layouts.master')
@section('content')




<div class="container grid px-6 mx-auto">

    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-4 my-6">
            <a href="{{ route('compagnies.create') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-800 border border-transparent rounded-lg active:bg-blue-800 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Ajouter une nouvelle compagnie
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>

    </div>

    <!-- With actions -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Liste de nos compagnies
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Matricule</th>
                        <th class="px-4 py-3">Nom complet</th>
                        <th class="px-4 py-3">Nom/Adresse de la compagnie</th>
                        <th class="px-4 py-3">Télephone</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                @foreach($compagnies as $compagny)
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ $compagny->identifier }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $compagny->name_owner }}
                        </td>

                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">

                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">
                                        {{ $compagny->name}}
                                    </p>
                                    <!--<p class="text-xs text-gray-600 dark:text-gray-400">
                                        10x Developer
                                    </p>-->
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $compagny->phone_number }}
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-2 text-sm">
                                <button class="flex items-center justify-between px-1 py-1 " aria-label="Show">
                                    <a href="{{ route('compagnies.show',$compagny->id) }}">
                                        <x-component-icon icon="show" />
                                    </a>
                                </button>
                                <button class="flex items-center justify-between px-1 py-1 " aria-label="Edit">
                                    <a href="{{ route('compagnies.edit', $compagny) }}">
                                        <x-component-icon icon="edit" />
                                    </a>
                                </button>
                                <form action="{{ route('compagnies.destroy',$compagny->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="flex items-center justify-between  " aria-label="Delete">
                                        <x-component-icon icon="delete" />
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach

            </table>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-3 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end ">
                    {{ $compagnies->links() }}
                </span>
            </div>

        </div>

    </div>
</div>



@endsection