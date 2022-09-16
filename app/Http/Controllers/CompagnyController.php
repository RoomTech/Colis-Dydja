<?php

namespace App\Http\Controllers;

use App\actions\compagny\CreateCompagnyAction;
use App\actions\compagny\DeleteCompagnyAction;
use App\actions\compagny\UpdateCompagnyAction;
use App\Models\Compagny;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CompagnyRequest;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compagnies = Compagny::orderBy('created_at','desc')->paginate(5);
        //dd($compagny);
        return view('pages.compagny.index',['compagnies'=>$compagnies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $commune = Street::all();
        return view('pages.compagny.create',['commune'=> $commune ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompagnyRequest $request,CreateCompagnyAction $action)
    {
       /**
         * Recupere l'id de la commune selectionné qui n'est pas dans la table compagnie
         * Vue que c'est une relation many to many 
         * je donne un name dans le select de la street
         */
       $commune = Street::find($request->street);
        //dd($commune);
       //Traitement des data 
      $data = array_merge($request->except("_token"));
      $compagnies = $action->handle($data);
        //dd($compagnies);//dd($request);
       
         /**
         * Lions nos deux tables via attach
         * streets() la methode qui se trouve in Compagny
         * $commune la variable qui contient la requête
         * on attache la commune a la compagnie
         */
         $compagnies->streets()->attach($commune);
       //session()->flash("success","Inscription effectué avec succès!");
       toast(' La compagnie ' . $request->name .' a été enregistré','success');

       return redirect()->route('compagnies.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function show(Compagny $compagny)
    {
        //Détails du champs
        //$compagny = Compagny::find($compagny);
        return view("pages.compagny.show",["compagny"=>$compagny]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function edit(Compagny $compagny)
    {
        //
        //dd($compagny);
         $commune = Street::all();
        return view("pages.compagny.edit",compact("commune","compagny"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function update(CompagnyRequest $request, Compagny $compagny,UpdateCompagnyAction $action)
    {
          
        //Traitement du form pour la mise à jour
         $compagnies = $action->update($compagny,$request->except("_token"));
        // dd($users);
         toast("Mise à jour effectué avec succès!","warning");
         return redirect()->route('compagnies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny,DeleteCompagnyAction $action)
    {
        //Suppression d'une compagnie via le refactoring
       $action->execute($compagny);
        toast("La compagnie " . $compagny->name . " supprimé avec succès!","error");
        return redirect()->route('compagnies.index');
    }
}