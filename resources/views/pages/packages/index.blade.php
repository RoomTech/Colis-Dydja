@extends('template.layouts.master')
@section('content')
<div class="container grid px-6 mx-auto">

    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-4 my-6">
            <a href="{{ route('packages.create') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-800 border border-transparent rounded-lg active:bg-blue-800 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Ajouter un colis
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>

    </div>

    <!-- With actions -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Liste des colis
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Matricule</th>
                        <th class="px-4 py-3">Destinataire</th>
                        <th class="px-4 py-3">Expéditeur</th>
                        <th class="px-4 py-3">Type de colis</th>
                        <th class="px-4 py-3">Status du colis</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                @foreach($packages as $package)
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ $package->identifier }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $package->fullname_recipient }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ $package->fullname_expeditor }}
                        </td>

                        <td class="px-4 py-3 text-center text-sm">
                            {{ $package->description }}
                        </td>

                        <!--<td class="px-4 py-3 text-center text-sm">
                            {{ $package->pricesPackages }}
                        </td>-->

                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{ $package->status }}
                            </span>
                        </td>

                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4 text-sm">
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Show">
                                    <a href="{{ route('packages.show',$package->id) }}">
                                        Show
                                    </a>
                                </button>

                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <a href="{{ route('packages.edit',$package->id) }}">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>
                                </button>

                                <form action="{{ route('packages.destroy',$package->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete">

                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
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
                    {{ $packages->links() }}
                </span>
            </div>
        </div>

    </div>
</div>
@endsection