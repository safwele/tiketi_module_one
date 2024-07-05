<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comptes;
use App\Models\Utilisateurs;
use App\Models\CategoriePlaces;
use App\Models\Evenements;
use App\Models\Places;

class PlacesFactory extends Factory
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

            "identifiantPlace" => $this->faker->text(10),
            "typePlace" => $this->faker->text(7),
            "coordonnee" => $this->faker->text(10),
            "is_freePlace" => $this->faker->numberBetween(0,1),
           // "tokenPlace" => $this->faker->password(60,90),
            "place_categ" => CategoriePlaces::all()->random()->idCategoriePlaces,

            /*
             $table->id("idPlace");
            $table->string('identifiantPlace');
            $table->string('typePlace');
            $table->string('coordonnee');
            $table->integer('is_freePlace');
            $table->integer("place_categ")->foreign('place_categ')->references('idCategoriePlaces')->on('categorie_places');
           
            */
        ];
    }
}
