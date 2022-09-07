<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    
    public function login(Request $request){
     
      

       /* $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);*/

        //recuperons le dernier email 

        $user = User::whereEmail($request->email)->first();
        
       /// dd(Hash::check($request->password,$user->password));
        
        if($user && Hash::check($request->password,$user->password)){
            Auth::login($user);
            toast(' Bienvenue ' . $user->fullname ,'success');
            return redirect()->route('home');
            
        }
       toast('error','E-mail ou mot de passe incorrect!','error');
       return back();
    }

    //function de déconnexion
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}