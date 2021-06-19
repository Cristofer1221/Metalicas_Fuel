<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\models\Instalacion;

class InstalacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instalacion::create([
            'infecha'=>'2001-05-05',
            'inciudad'=>'Quito',
            'incalles'=>'Pichincha Y Joaquin de Olmedo',
            'inindescripcion'=>'Instalacion de un porton',
            'inobservacion'=>'el trabajo no se concluye por mal clima',
            'personal_id'=>'1',
            'cliente_id'=>'1'
        ]);

        Instalacion::factory(69)->create();
    }
}
