@extends('template.layouts.master')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tableau de bord
    </h2>

    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Cards -->
        <x-dashboard-statics title="Clients" value="100"> </x-dashboard-statics>
        <x-dashboard-statics title="Colis expedié" value="10"> </x-dashboard-statics>
        <x-dashboard-statics title="Colis en attente" value="50"> </x-dashboard-statics>
        <x-dashboard-statics title="Compagnie" value="5"> </x-dashboard-statics>



        <!--
               <button
            class="text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-7 w-10 p-3 border-4 shadow-lg shadow-red-600/50 hover:box-content rounded-full">
            Save changes
        </button><div class="h-14 bg-gradient-to-r from-neutral-500 to-purple-700"></div>
        <div class="h-14 bg-gradient-to-r from-cyan-500 to-blue-500"></div>

        <div class="h-14 bg-gradient-to-r from-sky-500 to-indigo-500"></div>
        <div class="bg-gradient-to-r from-indigo-500"></div>-->

    </div>

    <!-- Charts -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Graphe recapitulatifs
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Repartition des ....
            </h4>
            <canvas id="pieCanvas" aria-label="chart" role="img"></canvas>
        </div>

        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Traffic au niveau des colis
            </h4>
            <canvas id="line" aria-label="chart" role="img"></canvas>
        </div>
    </div>




    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->




    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-green-500">Use a permanent address where you can receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="#" method="POST">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-3 ">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-1 block w-full rounded-md border-red-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <!-- 
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email-address" id="email-address" autocomplete="email"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="city" id="city" autocomplete="address-level2"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="region" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <input type="text" name="region" id="region" autocomplete="address-level1"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal code</label>
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="bg-stone-100 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-full  bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-700 focus:ring-offset-2">Save</button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>







    @endsection