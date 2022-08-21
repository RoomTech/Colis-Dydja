@extends('template.layouts.master')
@section('content')
<div class="container grid px-6 mx-auto">
    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-4 my-6">
            <a href="{{ route('packages.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
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
                    <!--<h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Ajouter un nouveau colis
                    </h1>-->
                    <h3 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                        Modifier les informations du colis
                    </h3>
                    <div class="flex justify-center">
                        <form action="{{ route('packages.update') }}" method="put">
                            @csrf
                            <div class="flex justify-between space-x-4 p-3 ">

                                <div class=" space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Nom de
                                            l'expéditeur</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Doe" name="lastNameExpeditor"
                                            value="{{ old('lastNameExpeditor') }}" />
                                    </label>
                                    @error('lastNameExpeditor')
                                    <span class=" text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-1/2 space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Prénom de
                                            l'expéditeur</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="joe" name="firstNameExpeditor"
                                            value="{{ old('firstNameExpeditor') }}" required />
                                    </label>
                                    @error('firstNameRecipient')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class=" space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Téléphone de l'expéditeur</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="XXXXXXx" value="{{ old('phoneNumberExpeditor') }}" name="
                                            phoneNumberExpeditor" />
                                    </label>
                                    @error('phoneNumberExpeditor')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-between space-x-4 p-3 ">
                                <div class="w-1/2 space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Nom du
                                            destinataire</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Jane" name="lastNameRecipient"
                                            value="{{ old('lastNameRecipient') }}" required />
                                    </label>
                                    @error('lastNameRecipient')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-1/2 space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Prénom du
                                            destinataire</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Doe" name="firstNameRecipient"
                                            value="{{ old('firstNameRecipient') }}" required />
                                    </label>
                                    @error('firstNameRecipient')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class=" space-y-4">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Téléphone du destinataire</span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="XXXXXXx" value="{{ old('phoneNumberRecipient') }}"
                                            name="phoneNumberRecipient" />
                                    </label>
                                </div>
                            </div>

                            <div class="flex justify-between space-x-3 p-3 ">
                                <div class="w-full space-y-4">
                                    <label class="block  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">
                                            Prix d'envoi du colis
                                        </span>
                                        <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="1000" name="pricesPackages"
                                            value="{{ old('pricesPackages') }}" />
                                    </label>
                                    @error('pricesPackages')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full space-y-4">
                                    <label class="block  text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">
                                            Status du colis
                                        </span>
                                        <select
                                            class=" block w-full px-6 py-6  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                            name="packageStatus" value="{{ old('packageStatus') }}">
                                            <option value="other"></option>
                                            <option value="en cours">En cours
                                            </option>
                                            <option value="terminé">terminé</option>
                                        </select>
                                    </label>
                                    @error('packageStatus')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-between  space-x-3 p-3 ">
                                <div class="w-full space-y-6 space-x-3">
                                    <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Description du colis</span>
                                        <textarea name="descriptionPackages" value="{{ old('descriptionPackages') }}"
                                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                            rows="3" placeholder="Enter some long form content."></textarea>
                                    </label>
                                    @error('descriptionPackages')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="block flex justify-end  px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    Mettre à jour
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection