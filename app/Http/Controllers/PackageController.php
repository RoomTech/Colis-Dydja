<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = Package::all();
        return view("pages.packages.index",["packages"=>$packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pages.packages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
           'lastNameExpeditor'=>'required|string|max:155',
           'firstNameExpeditor'=>'required|string|max:155',
           'phoneNumberExpeditor'=>'required',
           'lastNameRecipient'=>'required',
           'firstNameRecipient'=>'required',
           'phoneNumberRecipient'=>'required',
           'packageStatus'=>'required',
           'descriptionPackages'=>'required',
           'pricesPackages'	=>'required',
           
        ]);
        //dd($validated);
        $matricule = Str::random(5);
        //Traitement du formulaire
        $packages = Package::create([
           'identifier'=> $matricule,
           'lastNameExpeditor'=>$request->lastNameExpeditor,
           'firstNameExpeditor'=>$request->firstNameExpeditor,
           'phoneNumberExpeditor'=>$request->phoneNumberExpeditor,
           'lastNameRecipient'=>$request->lastNameRecipient,
           'firstNameRecipient'=>$request->firstNameRecipient,
           'phoneNumberRecipient'=>$request->phoneNumberRecipient,
           'packageStatus'=>$request->packageStatus,
           'descriptionPackages'=>$request->descriptionPackages,
           'pricesPackages'	=>$request->pricesPackages,
           'user_id'=>Auth::user()->id,
        ]);
        //dd($package);

        toast('Colis enregistré avec succès','success');
        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //Affichae d'un élémént en fonction de son id
        //$packages =Package::find($package);
        return view("pages.packages.show",["package"=>$package]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
        return view("pages.packages.edit",["package"=>$package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
       // $package = Package::find($package);
        $package->delete();
        toast('Colis supprimé avec succès','error');
        return redirect()->route('packages.index');

       
    }
}