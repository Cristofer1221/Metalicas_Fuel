<?php

namespace Database\Factories;

use App\Models\Informe;
use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ifecha'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'iestado'=>$this->faker->randomElement(['en progeso','finalizado']),
            'idescripcion'=>$this->faker->text($maxNbChars = 200),
            'iobservaciones'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'instalacion_id'=>$this->faker->unique(true)->numberBetween(1, Instalacion::count())
        ];

    }
}
