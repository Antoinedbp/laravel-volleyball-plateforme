<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" =>$this->faker->lastName(),
            "prenom" =>$this->faker->firstName(),
            "age" =>$this->faker->numberBetween(16, 35),
            "telephone" =>$this->faker->phoneNumber(),
            "email" =>$this->faker->email(),
            "genre" =>$this->faker->randomElement($array = array ("M","F")),
            "paysOrigine" =>$this->faker->country(),
            "role_id" =>$this->faker->numberBetween(1, count(Role::all())),
            "equipe_id" =>$this->faker->numberBetween(1, count(Equipe::all()))
        ];
    }
}
