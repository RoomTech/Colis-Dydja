@extends('template.layouts.main')
@section('content')
<div class="container px-6 mx-auto grid">
    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-6 my-6">
            <a href="{{ route('users.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-900 border border-transparent rounded-lg active:bg-green-300 hover:bg-green-300 focus:outline-none focus:shadow-outline-purple">
                Retour
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>

    </div>
    <!-- General elements -->
    <h4 class="mb-6 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Ajouter un nouveau chef de gare au sein de la compagnie
    </h4>
</div>

<div class="flex justify-center">
    <div class="px-5 py-2 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex justify-center">
            <div class=" dark:bg-gray-800">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nom</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Jane" name="lastName" required />
                            </label>
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Prénom</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Doe" name="firstName" required />
                            </label>
                        </div>
                        <div class="w-1/2 space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Email</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="joe@gmail.com" name="email" required />
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-between space-x-4 p-3 ">
                        <div class=" space-y-4">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Téléphone</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="XXXXXXx" name="phoneNumber" />
                            </label>
                        </div>
                        <div class="w-full space-y-4">
                            <label class="block  text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Status de l'employé
                                </span>
                                <select
                                    class=" block w-full px-6 py-6  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="accountStatus">
                                    <option value="other"></option>
                                    <option value="employment">Employé</option>
                                    <option value="licencie">Licencié</option>
                                    <option value="vacance">En congé</option>
                                    <option value="other">Autre</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="flex  flex-row justify-between  space-x-4 p-3 ">

                        <div class="w-full space-y-4">
                            <label class="block  text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    Compagnie
                                </span>
                                <select name="compagnie_id"
                                    class=" block w-full px-6 py-6  mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <option value="other"></option>
                                    @foreach($compagny as $compagnies)
                                    <option value="{{ $compagnies->id }}">{{$compagnies->nameOfCompagny}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
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