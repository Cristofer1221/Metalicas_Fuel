<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cnombre'=>$this->faker->firstName(),
            'capellido'=>$this->faker->lastName(),
            'cemail'=>$this->faker->unique()->safeEmail(),
            'ccedula'=>$this->faker->numberBetween($min = 1000000000, $max = 9000000000),
            'ccelular'=>$this->faker->biasedNumberBetween($min = 900000000, $max = 9999999999, $function = 'sqrt')
        ];
    }
}
