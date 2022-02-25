<?php

namespace Database\Seeders;

use App\Models\Corraldos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorraldosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Corraldos::create
        ([
            'nombredelanimal' => 'Jefferson davian Piedrahita',
            'Dirección' => 'luego del carro, coje un caballo, son 10 horas de camino, grita cuando llegue',
            'Telefono' => 'grite',
        ]);
    Corraldos::factory(10)->create();
    }
}
