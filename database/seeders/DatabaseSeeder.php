<?php

namespace Database\Seeders;

//use App\Models\Comptes;
//use App\Models\Utilisateurs;
//use App\Models\CategoriePlaces;
//use App\Models\Evenements;
//use App\Models\Places;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
       \App\Models\Comptes::factory(3)->create();
        \App\Models\Utilisateurs::factory(2)->create();
        \App\Models\CategoriePlaces::factory(6)->create();
        \App\Models\Evenements::factory(10)->create();
        \App\Models\Places::factory(10)->create();
    }
}
