<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comptes;
use App\Models\Utilisateurs;
use App\Models\CategoriePlaces;
use App\Models\Evenements;
use App\Models\Places;

class UtilisateursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['madame','monsieur','mademoiselle','couple']);
        return [

            //
            'nomUtilisateur' => $this->faker->name(),
            'postnomUtilisateur' => $this->faker->lastname(),
            'prenomUtilisateur' => $this->faker->userName(),
            'genreUtilisateur' => $gender,
            'emailUtilisateur' => $this->faker->unique()->safeEmail(),
            'telUtilisateur' => $this->faker->phoneNumber(),
            "comptes_user" => Comptes::all()->random()->idCompte
            /*
             $table->id('idUtilisateur');
            $table->string('nomUtilisateur');
            $table->string('postnomUtilisateur');
            $table->string('prenomUtilisateur');
            $table->string("genreUtilisateur");
            $table->string("emailUtilisateur");
            $table->string("telUtilisateur");
            $table->integer('comptes_user')->foreign('comptes_user')->references('idComptes')->on('comptes')
             * 
             */
        ];
    }
}
