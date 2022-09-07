<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function store(Request $request)
    {
        //	Validation des champs
      $validated = $request->validate([
            'name' => 'required|unique:compagnies|max:255',
            'name_owner' => 'required',
           // 'street_id'=>'required',
            'number_employment'=>'required|integer',
            'phone_number'=>'required',
        ]);
        
        /**
         * Recupere l'id de la commune selectionné qui n'est pas dans la table compagnie
         * Vue que c'est une relation many to many 
         * je donne un name dans le select de la street
         */
        $commune = Street::find($request->street);
        $matricule = Str::random(5);

       //Traitement des data 
      $compagnies = Compagny::create([
            'identifier'=>$matricule,
            'name'=>$request->name,
            'name_owner'=>$request->name_owner,
            //'street_id'=>$request->street_id,
            'number_employment'=>$request->number_employment,
            'phone_number'=>$request->phone_number,
       ]);
        //dd($compagnie);dd($request);
       
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
    public function update(Request $request, Compagny $compagny)
    {
          //	Validation des champs du form pour la mise à jour 
          $validated = $request->validate([
            'name' => 'required|unique:compagnies|max:255',
            'name_owner' => 'required',
            'street_id'=>'required',
            'number_employment'=>'required|integer',
            'phone_number'=>'required',
        ]);
        
        //Traitement du form pour la mise à jour
        $users = $compagny->update([
            "name" => $request->name,
            "name_owner" => $request->name_owner,
            "street_id" => $request->street_id,
            "number_employment" => $request->number_employment,
            "phone_number" => $request->phone_number,
         ]);
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
    public function destroy(Compagny $compagny)
    {
        //Suppression d'une compagnie
        $compagny->delete();
        toast("La compagnie" . $compagny->name . "supprimé avec succès!","error");
        return redirect()->route('compagnies.index');
    }
}