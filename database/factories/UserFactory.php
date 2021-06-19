<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('123'), // password

            'cedula'=>$this->faker->numberBetween($min = 1000000000, $max = 9000000000),
            'nacimiento'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'estadocivil'=>$this->faker->randomElement(['casad@','solter@']),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->biasedNumberBetween($min = 1111111, $max = 9999999, $function = 'sqrt'),
            'celular'=>$this->faker->biasedNumberBetween($min = 900000000, $max = 9999999999, $function = 'sqrt'),
            'especializacion'=>$this->faker->randomElement(['Industrial','Artesanal']),
            'jornada'=>$this->faker->randomElement(['Matutina','Vespertina','Completa']),
            'genero'=>$this->faker->randomElement(['M','F']),

            'remember_token' => Str::random(10),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
