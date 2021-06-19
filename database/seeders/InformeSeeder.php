<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Informe;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informe::create([
            'ifecha'=>'2001-05-05',
            'iestado'=>'en progreso',
            'idescripcion'=>'la instalacion se a demorado en los dias venideros por mal clima',
            'iobservaciones'=>'Perdida de herramientas en la instalacion.',
            'instalacion_id'=>'1'
        ]);

        Informe::factory(69)->create();


    }
}
