<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
            'identifier'=>"CM08",
            'lastName'=>"Konan",
            'firstName'=>"Jean",
            'email' => 'test@example.com',
            'phoneNumber'=>"+22509876543",
            'password'=> bcrypt("password"),
            "accountStatus"=>"en cours",
            "role_id"=>Role::Administrator,
         ]);

         $this->call([
        RoleSeeder::class,
        StreetSeeder::class
      ]);
    }
}