<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Notifications\UserNotification;
use App\Http\Requests\UsersRequest;
use App\Actions\users\CreateUserAction;
use App\Actions\users\DeleteUserAction;
use App\Actions\users\UpdateUserAction;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('created_at','desc')->paginate(5);
        return view('pages.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compagny = Compagny::all();
        return view('pages.users.create',["compagny"=>$compagny]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request,CreateUserAction $action)
    {
        //
       $data = array_merge($request->except("_token"),['role_id'=>Role::Station_manager]);
      // dd($data);
       $user = $action->handle($data);
       

        //dd($validated);
       

      
        //dd($users);
        //Notifions l'utilisateur créer avec son password
       
        toast("L'employé" . $user->fullname . " enregistré avec succès vérifier votre e-mail ","success");
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view("pages.users.show",["user"=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        
        $compagny = Compagny::all();
        return view ("pages.users.edit",["user"=>$user,"compagny"=>$compagny]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user,UpdateUserAction $action)
    {
        //   
      /*$users = $user->update([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($passwordGenerate),
            'profil'=>$request->profil,
            'compagnie_id'=>$request->compagny_id,
            'role_id'=> Role::Station_manager,
        ]);*/
       //dd($users);
       $user = $action->update($user,$request->except("_token"));
        toast(" Mise à jour effectué avec succès ","success");
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,DeleteUserAction $action)
    {
        //
       $action->execute($user);
        toast("Suppression effectué avec succès","error");
        return redirect()->route('users.index');
    }
}