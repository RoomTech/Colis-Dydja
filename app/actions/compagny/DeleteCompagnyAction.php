<?php

namespace  App\actions\compagny;

use App\Models\Compagny;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DeleteCompagnyAction{
    
    public function execute(Compagny $compagny):bool{
       $matricule = Str::random(5);
       /**
        * bool signifie boolean
        * Sauvegarde les data dans la base de donnée
        */
       DB::beginTransaction();
        
       $compagny->delete();
        /**
         * Faire l'enregistrement des data validations ok 
         */
        DB::commit();
        return true;
    }
}