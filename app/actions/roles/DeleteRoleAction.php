<?php
namespace App\Actions\roles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class CreateRoleAction{
    public function execute(Role $role):bool{
        /**
         * Suppression des data
         */
        $role->delete();
        return true;
      
    }
}