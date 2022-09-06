<?php

namespace Database\Seeders;

use App\Models\Compagny;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
       $adjame =  \App\Models\Street::create([
            "name"=>"Adjamé"
        ]);
        
       $yopougon =   \App\Models\Street::create([
            "name"=>"Yopougon"
        ]);

       $compagny =  Compagny::create([
          'nameOfCompagny' => 'UTB',
          'identifier' => Str::uuid(),
          'phoneNumber' => '+22509876543',
        ]);

        $compagny->streets()->attach($adjame);
        $compagny->streets()->attach($yopougon);

      
    }
}
