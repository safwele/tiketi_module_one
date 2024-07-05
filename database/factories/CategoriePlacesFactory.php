<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comptes;
use App\Models\Utilisateurs;
use App\Models\CategoriePlaces;
use App\Models\Evenements;
use App\Models\Places;

class CategoriePlacesFactory extends Factory
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
            "nomCategoriePlaces" => $this->faker->streetName(),
            "nbCategoriePlaces" => $this->faker->numberBetween(1,1000),
            'tokenCategoriePlaces' => $this->faker->password(35,60),
        ];
    }
}
