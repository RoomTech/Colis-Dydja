<?php 
namespace App\Actions\Users;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserNotification;


class CreateUserAction 
{
  public function handle(array $data) : User 
  {
    $password = Str::random(8);
    $identifier = explode("@",$data["email"])[0];
    DB::beginTransaction();

    $user = User::create([
      'identifier' => $identifier,
      'lastname' => $data['lastname'],
      'firstname' => $data['firstname'],
      'email' => $data['email'],
      'password' => Hash::make($password),
      'role_id' => $data['role_id'],
      'compagny_id' => $data['compagnie_id'],
      'phone_number' => $data['phone_number'],
      'profil' => $data['profil'],
    ]);

    DB::commit();

    $user->notify(new UserNotification($password));
    return $user;
  }
  
}
