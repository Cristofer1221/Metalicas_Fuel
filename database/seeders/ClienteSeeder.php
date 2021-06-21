<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'cnombre'=>'Luis',
            'capellido'=>'Suarez',
            'cemail'=>'Luismi@gmail.com',
            'ccedula'=>'1723321211',
            'ccelular'=>'0912345678'
        ]);

        Cliente::factory(30)->create();
    }
}
