<?php

namespace App\actions\packages;

use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreatePackageAction{
    
 public function handle(array $data):Package{
    /**
     *Assure que tt les infos se trouve das la base de donnéé
    * fait la sauvegarde 
     */
     $matricule = Str::random(5);
     DB::beginTransaction();
     
     $package = Package::create([
      
     'identifier'=>$matricule,
     'lastname_expeditor'=>$data['lastname_expeditor'],
     'firstname_expeditor'=>$data['firstname_expeditor'],
     'phone_expeditor'=>$data['phone_expeditor'],
     'lastname_recipient'=>$data['lastname_recipient'],
     'firstname_recipient'=>$data['firstname_recipient'],
     'phone_recipient'=>$data['phone_recipient'],
     'package_status'=>$data['package_status'],
     'description_package'=>$data['description_package'],
     'price_package'=>$data['price_package'],
     'user_id'=>$data['user_id'],

     ]);
     //dd($package);
     /**
      * Faire l'enregistrement tout c'est bien passé
      */
     DB::commit();
     return $package;

  }
}