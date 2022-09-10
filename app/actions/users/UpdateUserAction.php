<?php

namespace App\Actions\users;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UpdateUserAction{
    
    public function update(User $user, array $data):User{
        /**
         * Assure que tt les infos se trouve das la base de donnéé
         * fait la sauvegarde
         */
   // $passwordGenerate = Str::random(8);
   // $identifier = explode("@",$data["email"])[0];

       DB::beginTransaction();

       $user->update([
        'firstname'=>$data['firstname'],
        'lastname'=>$data['lastname'],
        'email'=>$data['email'],
        'phone_number'=>$data['phone_number'],
        'profil'=>$data['profil'],  
        
      ]);

       DB::commit();
       return $user;
    }
}