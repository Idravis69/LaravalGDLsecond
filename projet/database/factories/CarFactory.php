<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "typeboite"=>fake()->text(),
            "immatriculation"=>fake()->name(),
            "couleur"=>fake()->colorName(),
            "nportes"=>fake()->numberBetween(2,5),
            "klm"=>fake()->numberBetween(0,300000),
            "nplaces"=>fake()->numberBetween(1,9),
            "climatisation"=>fake()->boolean(),
            "carburant"=>fake()->name(),
            "categorie"=>fake()->name(),
            "photo"=>fake()->imageUrl
            ,
            "permis"=>fake()->text(),
            "prixparj"=>fake()->numberBetween(200,1500),
        ];
    }
}
