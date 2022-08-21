<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use Illuminate\Http\Request;
use App\Models\Street;
use Illuminate\Support\Str;
class CompagnieController extends Controller
{
    //

    public function index(){
      
        $compagny = Compagny::all();
        return view("pages.compagny.index",["compagnies"=>$compagny]);
    }

    public function create(){
        $commune = Street::all();
        return view("pages.compagny.create",['commune'=>$commune]);
    }

    public function store(Request $request,Street $street){
       // dd("mum");

        $validated = $request->validate([
            'nameOfCompagny'=>'required|max:155',
            'nameOwner'=>'required|string|max:255',
            'street_id'=>'required',
            'openingHours'=>'required',
            'closingTime'=>'required',
            'numberEmployment'=>'required|integer',
        ]);
        dd("mum");

        $matricule = Str::random(5);
       
        $compagny = Compagny::create([
            'identifier'=>$matricule,
            'nameOfCompagny'=>$request->nameOfCompagny,
            'nameOwner'=>$request->nameOwner,
            'street_id'=>$street->id,
            'openingHours'=>$request->openingHours,
            'closingTime'=>$request->closingTime,
            'numberEmployment'=>$request->numberEmployment,
        ]);

        dd($compagny);
        
    }
}