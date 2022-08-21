<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // const Administrator = 1;
   /* const Station_manager = 2;
    const Convoyer = 3;*/
        \App\Models\Role::create([
            "id"=>Role::Administrator,
            "name"=>"Admin fonctionnel"
        ]);

        \App\Models\Role::create([
            "id"=>Role::Station_manager,
            "name"=>"Chef de gare"
        ]);

         \App\Models\Role::create([
            "id"=>Role::Convoyer,
            "name"=>"Convoyeur"
        ]);
    }
}