<?php 
namespace App\Actions\Roles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UpdateRoleAction 
{
   public function update(Role $role, array $data) : Role 
   {
         DB::beginTransaction();

          $role->update([
              "name"=>$data["name"]
          ]);

          DB::commit();

          return $role;
   }
}
