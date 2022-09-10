<?php 
namespace App\Actions\Roles;
use App\Models\Role;

class DeleteRoleAction 
{
   public function execute(Role $role) : bool 
   {
         $role->delete();
         return true;
   }
}
