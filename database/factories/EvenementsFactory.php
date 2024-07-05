<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comptes;
use App\Models\Utilisateurs;
use App\Models\CategoriePlaces;
use App\Models\Evenements;
use App\Models\Places;

class EvenementsFactory extends Factory
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

            "nomEvenement" => $this->faker->firstName(),
            //"descidEvenement" => $this->faker->text(100),
            "nbrplaceidEvenement" => $this->faker->numberBetween(1,1000),
            "tokenidEvenement" => $this->faker->password(73,89),
            "heureDebutEvenement" => $this->faker->dateTime(),
            "isValidateEvenement" => $this->faker->jobTitle(),
            "comptes_ev" =>Comptes::all()->random()->idCompte,
            "categ_idcateg_ev" => CategoriePlaces::all()->random()->idCategoriePlaces,
       


            /*
            $table->id('idEvenement');
            $table->string('nomEvenement');
            $table->integer('nbrplaceidEvenement');
            $table->string('tokenidEvenement',94)->unique();
            $table->dateTime("heureDebutEvenement");
            $table->string("isValidateEvenement");
            $table->integer('comptes_ev')->foreign('comptes_ev')->references('idComptes')->on('comptes');
            $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idCategEvenements')->on('categ_events');
          */
        ];
    }
}
