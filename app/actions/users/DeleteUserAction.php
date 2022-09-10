<?php
namespace App\Actions\users;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DeleteUserAction{
     
    public function execute(User $user):bool{
      $user->delete();
      return true;
    }
}