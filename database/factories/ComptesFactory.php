<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comptes;
use App\Models\Utilisateurs;
use App\Models\CategoriePlaces;
use App\Models\Evenements;
use App\Models\Places;

class ComptesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            "login" => $this->faker->text(50),
            "password" => $this->faker->password(50,90),
            "role" => $this->faker->domainName(),


            //
          /*  table->id('idCompte');
            $table->string('login');
            $table->string('password');
            $table->string('role');
            $table->timestamps(); 
            */
        ];
    }
}
