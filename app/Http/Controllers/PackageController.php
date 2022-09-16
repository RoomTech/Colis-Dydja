<?php

namespace App\Http\Controllers;

use App\actions\packages\CreatePackageAction;
use App\actions\packages\DeletePackageAction;
use App\actions\packages\UpdaePackageAction;
use App\actions\packages\UpdatePackageAction;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests\PackageRequest;

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
    public function store(PackageRequest $request,CreatePackageAction $action)
    {
        //Enregistrement d'un colis refactoring du code
        $data = array_merge($request->except('_token'),['user_id'=>Auth::user()->id]);
        $package = $action->handle($data);
        //dd($data) dd($package);
    
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
    public function update(PackageRequest $request, Package $package, UpdatePackageAction $action)
    {
      
         /** 
          * Mise à jour du colis 
         */

         $package = $action->update($package,$request->except("_token"));
       
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
    public function destroy(Package $package,DeletePackageAction $action)
    {
        //Suppression data
       // $package = Package::find($package);
        $action->execute($package);
        toast('Colis supprimé avec succès','error');
        return redirect()->route('packages.index');

       
    }
}