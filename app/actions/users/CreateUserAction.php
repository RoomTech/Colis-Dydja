<?php
namespace App\Actions\users;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateUserAction{
    public function handle(array $data):User{
        /**
         * Assure que tt les infos se trouve das la base de donnéé
         * fait la sauvegarde
         */
    $passwordGenerate = Str::random(8);
    $identifier = explode("@",$data["email"])[0];

       DB::beginTransaction();

       $user = User::create([
        'identifier'=>$identifier,
        'firstname'=>$data['firstname'],
        'lastname'=>$data['lastname'],
        'email'=>$data['email'],
        'phone_number'=>$data['phone_number'],
        'password'=>bcrypt($passwordGenerate),
        'profil'=>$data['profil'],  
        'role_id'=>$data['role_id'], 
        'compagnie_id'=>$data['compagnie_id'],
       
      ]);

      dd($user);

       DB::commit();
       $user->notify(new UserNotification($passwordGenerate));
       return $user;
    }
}