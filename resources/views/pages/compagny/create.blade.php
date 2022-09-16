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
    <h4 class="mb-6 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Ajouter une nouvelle compagnie
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
                                    placeholder="Jane" type="text" name="name" value="{{ old('name') }}" />
                            </label>
                            @error('name')
                            <span class="text-red-600 text-sm-center">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nom du propriétaire</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Doe" name="name_owner" value="{{ old('name_owner') }}" type="text" />
                            </label>
                            @error('nameOwner')
                            <span class="text-red-600 text-sm-center">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Téléphone</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="+225XXXXXX" name="phone_number" value="{{ old('phone_number') }}"
                                    type="text" />
                            </label>
                            @error('phone_number')
                            <span class="text-red-600 text-sm-center">{{ $message }}</span>
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
                                    name="street">
                                    <option value=""></option>
                                    @foreach($commune as $street)
                                    <option value="{{ $street->id }}">
                                        {{ $street->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('street_id')
                            <span class="text-red-600 text-sm-center">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class="w-full space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nombre d'employés</span>
                                <input
                                    class="block w-full px-6 py-6 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="0" name="number_employment" min="0" max=1000
                                    value="{{ old('number_employment') }}" type="number" />
                            </label>
                            @error('number_employment')
                            <span class="text-red-600 text-sm-center">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class=" flex justify-end">
                        <button type="submit"
                            class="block flex justify-end  px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                            Enregistrer
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection