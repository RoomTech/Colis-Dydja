@extends('template.layouts.master')
@section('content')

<div class="container grid px-6 mx-auto">
    <!-- CTA -->
    <div class='flex justify-end'>
        <div class="px-4 my-6">
            <a href="{{ route('users.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Retour
                <span class="ml-2" aria-hidden="true">+</span>
            </a>
        </div>
    </div>
</div>

<div class="flex items-center p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto">

            <div class="flex items-center justify-center p-6 sm:p-10">
                <div class="w-full">

                    <h3 class="mb-2 font-semibold text-gray-600 dark:text-gray-300">
                        Détails sur l'employé {{ $user->fullName }}
                    </h3>
                    <div class="flex justify-center">
                        <form>

                            <div class="flex justify-between ml-6 space-x-4 p-3 ">
                                <div class="w-full space-y-4">
                                    <label for="">Matricule </label>
                                    <span class="text-bold-100  px-2 py-1 font-semibold leading-tight text-green-700
                                    bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        {{ $user->identifier }} </span>
                                </div>

                                <div class="w-full space-y-4">
                                    <label for="">E-mail </label>
                                    <span class="text-bold-100  px-2 py-1 font-semibold"> {{ $user->email }} </span>
                                </div>
                            </div>

                            <div class="flex justify-between space-x-4 p-3 ">
                                <div class="w-full space-y-4">
                                    <label for="">Téléphone : </label>
                                    <span class="text-bold-100  px-2 py-1 font-semibold"> {{ $user->phoneNumber }}
                                    </span>

                                </div>
                            </div>

                            <div class="flex justify-between space-x-3 p-3 ">
                                <div class="w-full space-y-4">
                                    <label for="">Status du personnel: </label>
                                    <span
                                        class="text-bold-100  px-2 py-1 font-semibold">{{ $user->accountStatus }}</span>
                                </div>

                            </div>

                            <div class="flex justify-between space-x-3 p-3 ">

                                <div class="w-full space-y-4">
                                    <label for="">Compagnie: </label>
                                    <span class="text-bold-100 px-2 py-1 font-semibold">{{ $user->compagnie_id }}</span>
                                </div>

                            </div>
                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <div class="flex justify-end">
                                <button
                                    class="block flex justify-end  px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    Exporter
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