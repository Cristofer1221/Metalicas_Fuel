<?php

namespace Database\Factories;

use App\Models\Asistencia;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asistencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1, User::count()),
            'afecha'=> $this->faker->date(),
            'estado'=>$this->faker->randomElement(['Presente','Ausente']),
        ];
    }
}
