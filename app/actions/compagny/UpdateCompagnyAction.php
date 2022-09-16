<?php

namespace  App\actions\compagny;

use App\Models\Compagny;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UpdateCompagnyAction{
    
    public function update(Compagny $compagny,array $data):Compagny{
     
       /**
        * Sauvegarde les data dans la base de donnée
        */
       DB::beginTransaction();
        $compagny->update([
         'name'=>$data['name'],
         'name_owner'=>$data['name_owner'],
         'number_employment'=>$data['number_employment'],
         'phone_number'=>$data['phone_number']
        ]);
        dd($compagny);

        /**
         * Faire l'enregistrement des data validations ok 
         */
        DB::commit();
        return $compagny;
    }
}