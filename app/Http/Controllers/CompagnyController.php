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
        $compagny = Compagny::paginate(10);
        //dd($compagny);
        return view('pages.compagny.index',['compagny'=>$compagny]);
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
            'nameOfCompagny' => 'required|unique:compagnies|max:255',
            'nameOwner' => 'required',
            'street_id'=>'required',
            'openingHours'=>'required',
            'closingTime'=>'required',
            'numberEmployment'=>'required|integer',
            'phoneNumber'=>'required',
        ]);
        // dd($validated);
        
        $matricule = Str::random(5);

       //Traitement des data 
      $compagnie = Compagny::create([
            'identifier'=>$matricule,
            'nameOfCompagny'=>$request->nameOfCompagny,
            'nameOwner'=>$request->nameOwner,
            'street_id'=>$request->street_id,
            'openingHours'=>$request->openingHours,
            'closingTime'=>$request->closingTime,
            'numberEmployment'=>$request->numberEmployment,
            'phoneNumber'=>$request->phoneNumber
       ]);
        //dd($compagnie);

       //session()->flash("success","Inscription effectué avec succès!");
       toast('Enregistrement effectué avec succès','success');

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
        //
        $compagny = Compagny::find($compagny);
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
        return view("pages.compagny.edit");
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
        //
         $compagnie = Compagny::create([
            'nameOfCompagny'=>$request->nameOfCompagny,
            'nameOwner'=>$request->nameOwner,
            'street_id'=>$request->street_id,
            'openingHours'=>$request->openingHours,
            'closingTime'=>$request->closingTime,
            'numberEmployment'=>$request->numberEmployment,
       ]);

       session()->flash("success","Mise à jour effectué avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny)
    {
        //
        //$compagny = Compagny::find($compagny);
        $compagny->destroy;
        return redirect()->route('compagnies.index');
    }
}