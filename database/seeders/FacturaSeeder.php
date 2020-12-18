<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura = [
            [
                'codigoF'=> 101,
                'Numero' =>01,
                'cliente'=>1,
                'formaPago'=> 333,
                'entrada'=>'2020-01-01',
                'salida'=> '2020-01-10',
                'total' => 500000,
            ],

            [
                'codigoF'=> 102,
                'Numero' =>02,
                'cliente'=>2,
                'formaPago'=>333,
                'entrada'=>'2020-01-01',
                'salida'=> '2020-01-20',
                'total' => 500000,
            ],

            [
                'codigoF'=> 103,
                'Numero' =>03,
                'cliente'=>3,
                'formaPago'=>333,
                'entrada'=>'2020-01-01',
                'salida'=> '2020-01-15',
                'total' => 500000,
            ],

            [
                'codigoF'=> 104,
                'Numero' =>04,
                'cliente'=>4,
                'formaPago'=>333,
                'entrada'=>'2020-01-01',
                'salida'=> '2020-01-18',
                'total' => 500000,
            ],

            [
                'codigoF'=> 105,
                'Numero' =>05,
                'cliente'=>5,
                'formaPago'=>333,
                'entrada'=>'2020-01-01',
                'salida'=> '2020-01-17',
                'total' => 500000,
            ],
        ];
        DB::table('factura')->insert($factura);
    }
}
