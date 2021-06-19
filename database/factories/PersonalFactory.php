<?php

namespace Database\Factories;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            return [
                'pcedula'=>$this->faker->numberBetween($min = 1000000000, $max = 9000000000),
                'pnacimiento'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
                'pestadocivil'=>$this->faker->randomElement(['casad@','solter@']),
                'pdireccion'=>$this->faker->address(),
                'ptelefono'=>$this->faker->biasedNumberBetween($min = 1111111, $max = 9999999, $function = 'sqrt'),
                'pcelular'=>$this->faker->biasedNumberBetween($min = 900000000, $max = 9999999999, $function = 'sqrt'),
                'pespecializacion'=>$this->faker->randomElement(['Industrial','Artesanal']),
                'pgenero'=>$this->faker->randomElement(['M','F']),
                'user_id'=>$this->faker->unique(true)->numberBetween(1, User::count()) //se movio el true
            ];


    }
}
