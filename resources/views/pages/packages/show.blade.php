@extends('template.layouts.master')
@section('content')


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
            <h3 class="text-lg leading-6 font-medium text-gray-900"> Informations sur le colis
            </h3>
            <!--   <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>-->
        </div>
        <div class="border-t border-gray-200 p-4 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3">

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Nom de l'expéditeur</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $package->lastname_expeditor }} </dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Prénom de l'expéditeur</dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $package->firstname_recipient }}</dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Numéro de l'expéditeur</dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $package->phone_expeditor }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Prix du colis </dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $package->price_package }}
                        Fcfa</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Nom du destinataire </dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $package->lastname_recipient }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Prénom du destinataire </dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $package->firstname_recipient }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Numéro du destiataire </dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $package->phone_recipient }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Status d'envoi du colis</dt>
                    <dd class="mt-1 text-lg text-green-700 text-center text-bold-100 font-semibold leading-tight">
                        {{ $package->package_status }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Description du colis</dt>
                    <dd class="mt-1 text-lg text-gray-900"> {{ $package->description_package }}</dd>
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
                    <a href=" {{ route('packages.index') }}"
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