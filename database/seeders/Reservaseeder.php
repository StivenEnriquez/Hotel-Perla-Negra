<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Reservaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserva = [
            [
                'id'=> 1,
                'numero' => 1087205444,
                'cliente' => 1,
                'Entrada'=>'2020/10/20',
                'Salida'=> '2020/10/22',

            ],

            [
                'id'=> 2,
                'numero' => 1087205444,
                'cliente' => 2,
                'Entrada'=>'2020/10/20',
                'Salida'=> '2020/10/22',

            ],

            [
                'id'=> 3,
                'numero' => 1087205444,
                'cliente' => 3,
                'Entrada'=>'2020/10/20',
                'Salida'=> '2020/10/22',

            ],

            [
                'id'=> 4,
                'numero' => 1087205444,
                'cliente' => 4,
                'Entrada'=>'2020/10/20',
                'Salida'=> '2020/10/22',

            ],

            [
                'id'=> 5,
                'numero' => 1087205444,
                'cliente' => 5,
                'Entrada'=>'2020/10/20',
                'Salida'=> '2020/10/22',

            ],
        ];
        DB::table('reserva')->insert($reserva);
      
    }
}

