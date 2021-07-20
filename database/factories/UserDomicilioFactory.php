<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->streetName(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
            'user_id' => User::all()->random()->id
        ];
    }
}
