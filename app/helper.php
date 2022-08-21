<?php

use Illuminate\Support\Facades\Route;

//lorsque une route est active(correcte) met la couleur sinon ne met rien
  if(!function_exists('isActive')){
    function isActive($path){
       return Route::is($path)? true : false;
    }
  }