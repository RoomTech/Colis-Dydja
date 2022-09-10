<?php
namespace App\Actions\roles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class CreateRoleAction{
    public function handle(Role $role,array $data):Role{
        /**
         * Mise à jour des data
         * 
         */
       DB::beginTransaction();
      $role->update(['name'=>$data['name']]);

       DB::commit();
       return $role;
    }
}