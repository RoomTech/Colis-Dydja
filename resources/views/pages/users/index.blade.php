@extends('template.layouts.master')
@section('content')




<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Les employés de la compagnie repartie sur différentes zones
    </h2>
    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-4 my-6">
            <a href="{{ route('users.create') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-800 border border-transparent rounded-lg active:bg-blue-800 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Ajouter un chef de gare
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>

    </div>

    <!-- With actions -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Liste de nos chefs de gare
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Matricule</th>
                        <th class="px-4 py-3">Nom complet</th>
                        <th class="px-4 py-3">Profil</th>
                        <th class="px-4 py-3">Télephone</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                @forelse($users as $user)
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ $user->identifier }}
                        </td>

                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $user->lastname }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{ $user->firstname }}
                                    </p>
                                </div>
                            </div>
                        </td>



                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{ $user->profil}}
                            </span>
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{$user->phone_number}}
                        </td>
                        <td class="px-2 py-2">
                            <div class="flex items-center space-x-2 text-sm">
                                <button
                                    class="flex items-center justify-between px-1 py-1 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <a href="{{ route('users.show',$user) }}">
                                        <x-component-icon icon="show" />
                                    </a>
                                </button>

                                <button
                                    class="flex items-center justify-between px-1 py-1 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <a href="{{ route('users.edit',$user) }}">
                                        <x-component-icon icon="edit" />
                                    </a>
                                </button>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete">
                                        <x-component-icon icon="delete" />
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                </tbody>
                @empty
                <p>No users</p>
                @endforelse
            </table>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-3 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end ">
                    {{ $users->links() }}
                </span>
            </div>
        </div>

    </div>
</div>



@endsection