<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilisateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Utilisateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'date_naissance' => $this->faker->date(),
            'actif' => $this->faker->boolean(),
        ];
    }

    protected function withFaker()
    {
        return \Faker\Factory::create('en');
    }
}
