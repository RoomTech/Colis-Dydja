<?php

namespace  App\actions\compagny;

use App\Models\Compagny;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateCompagnyAction{
    
    public function handle(array $data):Compagny{
      
          $matricule = Str::random(5);
       /**
        * Sauvegarde les data dans la base de donnée
        */
       DB::beginTransaction();
        $compagnies = Compagny::create([
         'identifier'=>$matricule,
         'name'=>$data['name'],
         'name_owner'=>$data['name_owner'],
         'number_employment'=>$data['number_employment'],
         'phone_number'=>$data['phone_number']
        ]);
         dd($compagnies);
        /**
         * Faire l'enregistrement des data validations ok 
         */
        DB::commit();
        return $compagnies;
    }
}