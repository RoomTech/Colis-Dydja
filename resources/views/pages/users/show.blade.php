@extends('template.layouts.master')
@section('content')

<!--<div class="container grid p-2 mx-auto">
  
    <div class='flex justify-end'>
        <div class=" ">
            <a href=" {{ route('users.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                Retour
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>
    </div>flex items-center p-6 bg-gray-50 dark:bg-gray-900

</div>-->

<div class="flex items-center justify-center w-full p-6 sm:p-10 bg-gray-50 dark:bg-gray-900">

    <div class="bg-white shadow-md mt-8 overflow-hidden sm:rounded-lg">
        <div class="p-4 sm:px-6 bg-stone-100">
            <h3 class="text-lg leading-6 font-medium text-gray-900"> Détails des informations de l'employé
                {{ $user->fullname }} </h3>
            <!-- <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>-->
        </div>
        <div class="border-t border-gray-200 p-4 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Matricule</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->identifier}}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Compagnie</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->compagnie_id }}</dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Nom complet</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->fullname}}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Profil</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->profil }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->email }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Numéro de téléphone</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $user->phone_number }}</dd>
                </div>
            </dl>
        </div>

        <div class="border-t border-gray-200 p-1 bg-stone-100">
            <div class='flex justify-end mt-1'>
                <div class="p-2">
                    <a href=" {{ route('users.index') }}"
                        class="flex items-center shadow-lg justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                        Exporter
                        <span class="ml-2" aria-hidden="true">+</span>
                    </a>
                </div>
                <div class="p-2">
                    <a href=" {{ route('users.index') }}"
                        class="flex items-center shadow-lg justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                        Retour
                        <span class="ml-2" aria-hidden="true">+</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- <button class="bg-cyan-500 shadow-lg shadow-cyan-500/50 ...">Subscribe</button>
        <button class="bg-blue-500 shadow-lg shadow-blue-500/50 ...">Subscribe</button>
        <button class="bg-indigo-500 shadow-lg shadow-indigo-500/50 ...">Subscribe</button>-->
    </div>

</div>
@endsection