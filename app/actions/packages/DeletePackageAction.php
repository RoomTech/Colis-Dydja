<?php

namespace App\actions\packages;

use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DeletePackageAction{
    public function execute(Package $package):bool
    {
        /**
         * Suppression des data en mode refactoring
         */
        DB::beginTransaction();
        $package->delete();
        DB::commit();
        return true;
    }
}