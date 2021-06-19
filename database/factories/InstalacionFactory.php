<?php

namespace Database\Factories;

use App\Models\Instalacion;
use App\Models\Personal;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstalacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instalacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'infecha'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'inciudad'=>$this->faker->city(),
            'incalles'=>$this->faker->address(),
            'inindescripcion'=>$this->faker->text($maxNbChars = 200),
            'inobservacion'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'personal_id'=>$this->faker->numberBetween(1, Personal::count()),
            'cliente_id'=>$this->faker->numberBetween(1, Cliente::count())
        ];
    }
}
