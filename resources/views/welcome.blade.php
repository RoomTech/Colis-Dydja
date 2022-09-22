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
        <button
            class="text-base text-white capitalize hover:uppercase font-serif bg-red-600 hover:bg-purple-700 active:bg-orange-100 focus:outline-none focus:ring focus:ring-green-100 box-content h-7 w-10 p-3 border-4 shadow-lg shadow-red-600/50 hover:box-content rounded-full">
            Save changes
        </button>
    </div>

    <!--<div class="grid gap-4 grid-cols-2 ">

        <div>
            <h1 class="text-sm font-medium text-gray-500">Full name</h1>

        </div>


        <div>
            <h2 class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Margot Fost
        </div>
        <div>03</div>
        <div>04</div>
    </div>-->



</div>







@endsection