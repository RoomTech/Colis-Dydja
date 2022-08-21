@extends('template.layouts.main')
@section('content')
<div class="container px-6 mx-auto grid">
    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-6 my-6">
            <a href="{{ route('compagnies.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                Retour
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>

    </div>
    <!-- General elements -->
    <h4 class="mb-6 text-lg font-semibold text-orange-400 dark:text-gray-300">
        Ajouter de nouvelle compagnie
    </h4>
</div>

<div class="flex justify-center">
    <div class="px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex justify-center">
            <div class=" dark:bg-gray-800">
                <form method="post" action="{{ route('compagnies.store') }}">
                    @csrf

                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nom de la compagnie</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Jane" type="text" name="nameOfCompagny" />
                            </label>
                            @error('nameOfCompagny')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nom du propriétaire</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Doe" name="nameOwner" type="text" />
                            </label>
                            @error('nameOwner')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Téléphone</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="+225XXXXXX" name="phoneNumber" type="text" />
                            </label>
                            @error('phoneNumber')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class="w-full space-y-4">
                            <label class="block  text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Commune
                                </span>
                                <select
                                    class=" block w-full px-6 py-6  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="street_id">
                                    <option value=""></option>
                                    @foreach($commune as $street)
                                    <option value="{{ $street->id }}">{{ $street->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('street_id')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full space-y-4">
                            <label class="block  text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Heure d'ouverture
                                </span>
                                <select
                                    class=" block w-full px-6 py-6  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="openingHours">
                                    <option value="other"></option>
                                    <option value="partiellement(2h-3h)">2H-3H (Lundi)-6H30 (Les autres jours)</option>
                                    <option value="Frequement(6h30)">6H30 (Tous Les autres jours)</option>
                                </select>
                            </label>
                            @error('openingHours')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class="w-full space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nombre d'employés</span>
                                <input
                                    class="block w-full px-6 py-6 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="0" name="numberEmployment" min="0" max=1000 type="number" />
                            </label>
                            @error('numberEmployment')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Heure de fermeture</span>
                                <input
                                    class="block w-full  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    name="closingTime" type="text" />
                            </label>
                            @error('closingTime')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" flex justify-end">
                        <button type="submit"
                            class="block flex justify-end  px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Enregistrer
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection