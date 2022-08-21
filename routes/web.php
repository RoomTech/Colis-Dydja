<?php

use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\CompagnyController;
use App\Http\Controllers\CompagnieController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



//VUE PAGE LOGIN 
//Route::view('/','page-authentification.login');
Route::view('/','page-authentification.login')->name('login');
//VUE PAGE FORGOT-PASSWORD
Route::view('/forgot-password','page-authentification/forgot-password')->name('forgot.password');


//VUE PAGE DE CREATION DE COMPTE ET LIST
Route::view('/account','pages/account/create-account')->name('account');
Route::view('/list','pages/account/list-account')->name('list');

//VUE PAGE GESTION DES COLIS
Route::view('add-packages','pages/packages/add-package')->name('add-packages');
Route::view('list-packages','pages/packages/list-package')->name('list-packages');

//VUE PAGE GESTION DES COMPAGNIES
Route::view('add-compagny','pages/compagny/add-compagny')->name('add-compagny');
Route::view('list-compagny','pages/compagny/list-compagny')->name('list-compagny');

//VUE PAGE REPORTING
Route::view('activity-compagnie','pages/reporting/account-habilitation')->name('activity-compagny');
Route::view('account-historique','pages/reporting/activity-compagny')->name('account.history');


//Pour accéder à ces routes il faut être authentifié
Route::middleware(['auth'])->group(function(){
 //VUE PAGE ACCUEIL
    Route::view('/home','welcome')->name('home');
    //Routes des autres pages
    Route::resource('users',UserController::class);
    Route::resource('compagnies',CompagnyController::class);
    Route::resource('packages',PackageController::class);

    /*Route::controller(CompagnieController::class)->group(function(){
        Route::get('compagnies/create', 'create')->name('compagnies.create');
        Route::get('compagnies', 'index')->name('compagnies.index');
        Route::post('compagnies/store','store')->name('compagnies.Store');
   });*/

    
});

//Group controller pour l'authentification
Route::controller(LoginController::class)->group(function(){
    Route::post('login', 'login')->name('login.store');
    Route::post('logout','logout')->name('logout.store');
});