<?php 
namespace App\Actions\Users;
use App\Models\User;


class DeleteUserAction 
{
   public function execute(User $user) : bool 
   {
         $user->delete();
         return true;
   }
}
