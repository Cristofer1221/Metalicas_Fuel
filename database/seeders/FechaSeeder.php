<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fecha;

class FechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=20;$i++)
        {
            Fecha::create(['fecha_trabajo'=>'2021-06-'.$i]);
        }

    }
}
