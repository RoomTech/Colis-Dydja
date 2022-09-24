@extends('template.layouts.master')
@section('content')

<!-- <div class="container grid px-6 mx-auto">
    
    <div class='flex justify-end'>
        <div class="px-6 my-6">
            <a href="{{ route('compagnies.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                Retour
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>
    </div>
</div>

<div class="flex items-center  p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1  max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto">

            <div class="flex items-center justify-center p-6 sm:p-12">
                <div class="w-full">

                    <h3 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                        Détails sur la compagnie {{ $compagny->name }}
                    </h3>
                    <div class="flex justify-center">
                        <form>

                            <div class="flex justify-between space-x-4 p-3 ">

                                <div class=" space-y-4">
                                    <label for="">Matricule </label>
                                    <p class="text-bold-100 px-2 py-1 font-semibold leading-tight text-green-700
                                    bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        {{ $compagny->identifier }} </p>
                                </div>

                                <div class=" space-y-4">
                                    <label for="">Propriétaire de la compagnie </label>
                                    <p class="text-bold-100 px-2 py-1 font-semibold text-center">
                                        {{ $compagny->name_owner }} </p>
                                </div>

                            </div>
                            <div class="flex justify-between space-x-3 p-3 ">
                                <div class="w-full space-y-4">
                                    <label for="">Nombre de personnel: </label>
                                    <span class="text-bold-100 px-2 py-1 font-semibold text-center">
                                        {{ $compagny->number_employment }}</span>

                                </div>

                                <div class="w-full ">
                                    <label for="">Téléphone: </label>
                                    <span class="text-bold-100  font-semibold text-center">
                                        {{ $compagny->phone_number }}</span>

                                </div>

                            </div>
                           
                            <div class="flex justify-end">
                                <button
                                    class="block flex justify-end px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-700 border border-transparent rounded-lg active:bg-green-700 hover:bg-green-800 focus:outline-none focus:shadow-outline-green">
                                    Exporter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->




<div class="container grid p-2 mx-auto">

    <div class='flex justify-end'>
        <h4 class="mb-2 text-lg font-semibold text-gray-600 dark:text-gray-300">
            <!-- Détails des informations sur l'employé -->
        </h4>
    </div>

</div>

<div
    class="flex items-center justify-center w-full p-6 sm:p-10 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 p-1">
    <div class="bg-white shadow-md mt-8 overflow-hidden sm:rounded-lg">

        <div class="p-4 sm:px-6 bg-stone-100">
            <h3 class="text-lg leading-6 font-medium text-gray-900"> Détails sur la compagnie {{ $compagny->name }}
            </h3>
            <!--   <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>-->
        </div>
        <div class="border-t border-gray-200 p-4 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Matricule</dt>
                    <dd class="mt-1 text-lg  text-bold-100  font-semibold leading-tight text-green-700">
                        {{ $compagny->identifier}} </dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Propriétaire de la compagnie</dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $compagny->name_owner }}</dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Nombre de personnel</dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $compagny->number_employment }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Numéro </dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $compagny->phone_number }}
                    </dd>
                </div>
            </dl>
        </div>

        <div class="border-t border-gray-200 p-1 bg-stone-100">
            <div class='flex justify-end mt-1'>
                <div class="p-2">
                    <a href="#"
                        class="flex items-center shadow-lg justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-sky-400 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                        Exporter
                        <span class="ml-2" aria-hidden="true">+</span>
                    </a>
                </div>
                <div class="p-2">
                    <a href=" {{ route('compagnies.index') }}"
                        class="flex items-center shadow-lg justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-neutral-500 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                        Retour
                        <span class="ml-2" aria-hidden="true">+</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection