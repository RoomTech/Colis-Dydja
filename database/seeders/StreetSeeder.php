<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $adjame = \App\Models\Street::create([
            "name"=>"Adjamé"
        ]);
        
        $yopougon = \App\Models\Street::create([
            "name"=>"Yopougon"
        ]);
        
        //lions les tables lors de l'enregistrement
        


    }
}