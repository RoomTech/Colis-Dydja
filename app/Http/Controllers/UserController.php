<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Compagny;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Actions\Users\CreateUserAction;
use App\Actions\Users\DeleteUserAction;
use App\Actions\Users\UpdateUserAction;
use App\Notifications\UserNotification;


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
    public function store(UserRequest $request, CreateUserAction $action)
    {
      
        $data = array_merge($request->except("_token"), ['role_id' => Role::MANAGER]);

        $user = $action->handle($data);

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
    public function update(Request $request, User $user, UpdateUserAction $action)
    {
        //
        
      /*  $validated = $request->validate([
        'lastname'=>'required|string|max:155',
        'firstname'=>'required|string|max:155',
        'email'=>'required|unique:users',
        'phone_number'=>'required',
        'profil'=>'required',
        'compagnie_id'=>'required',
        ]);*/

        //dd($validated);
        //dd("mum");
      

        $user = $action->update($user, $request->except("_token"));
       //dd($users);
        toast(" Mise à jour effectué avec succès ","success");
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, DeleteUserAction $action)
    {
        //
        $action->execute($user);
        toast("Suppression effectué avec succès","error");
        return redirect()->route('users.index');
    }
}
