<?php
namespace App\Actions\roles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class CreateRoleAction{
    public function handle(array $data):Role{
        /**
         * Assure que tt les infos se trouve das la base de donnéé
         * fait la sauvegarde
         */
       DB::beginTransaction();
       $role = Role::create(['name'=>$data['name']]);

       DB::commit();
       return $role;
    }
}