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
        $packages = Package::orderBy('created_at','desc')->paginate(5);
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
           'lastname_expeditor'=>'required|string|max:155',
           'firstname_expeditor'=>'required|string|max:155',
           'phone_expeditor'=>'required',
           'lastname_recipient'=>'required',
           'firstname_recipient'=>'required',
           'phone_Recipient'=>'required',
           'package_status'=>'required',
           'description_package'=>'required',
           'price_package'	=>'required',
           
        ]);
        //dd($validated);
        $matricule = Str::random(5);
        //Traitement du formulaire
        $packages = Package::create([
           'identifier'=> $matricule,
           'lastname_expeditor'=>$request->lastname_expeditor,
           'firstname_expeditor'=>$request->firstname_expeditor,
           'phone_expeditor'=>$request->phone_expeditor,
           'lastname_recipient'=>$request->lastname_recipient,
           'firstname_recipient'=>$request->firstname_recipient,
           'phone_recipient'=>$request->phone_recipient,
           'package_status'=>$request->package_status,
           'description_Package'=>$request->description_Package,
           'price_Package'	=>$request->prices_Packages,
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
        $validated = $request->validate([
           'lastname_expeditor'=>'required|string|max:155',
           'firstname_expeditor'=>'required|string|max:155',
           'phone_expeditor'=>'required',
           'lastname_recipient'=>'required',
           'firstname_recipient'=>'required',
           'phone_Recipient'=>'required',
           'package_status'=>'required',
           'description_package'=>'required',
           'price_package'	=>'required',  
        ]);
 
       $package->update([
           'lastname_expeditor'=>$request->lastname_expeditor,
           'firstname_expeditor'=>$request->firstname_expeditor,
           'phone_expeditor'=>$request->phone_expeditor,
           'lastname_recipient'=>$request->lastname_recipient,
           'firstname_recipient'=>$request->firstname_recipient,
           'phone_recipient'=>$request->phone_recipient,
           'package_status'=>$request->package_status,
           'description_Package'=>$request->description_Package,
           'price_Package'	=>$request->prices_Packages,
    ]);
        //dd($users);
       
        toast("Modification effectuée avec succès","warning");
        return redirect()->route('packages.index');
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