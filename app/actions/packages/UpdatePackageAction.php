<?php

namespace App\actions\packages;

use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UpdatePackageAction{

   /**
    * Mise à jour des data 
    */

    public function update(Package $package, array $data):Package{

        DB::beginTransaction();

        $package->update([
            'lastname_expeditor'=>$data['lastname_expeditor'],
            'firstname_expeditor'=>$data['firstname_expeditor'],
            'phone_expeditor'=>$data['phone_expeditor'],
            'lastname_recipient'=>$data['lastname_recipient'],
            'firstname_recipient'=>$data['firstname_recipient'],
            'phone_recipient'=>$data['phone_recipient'],
            'package_status'=>$data['package_status'],
            'description_package'=>$data['description_package'],
            'price_package'=>$data['price_package'],
        ]);
       // dd($package);
        /**
         * Sauvegarde validé enregistrons le now
         */
        DB::commit();
        return $package;
    }
}