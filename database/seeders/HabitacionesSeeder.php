<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habitacion = [
            [
                'Numero'=>01,  
                'descripcion'=> 'sencilla',
                'Numcamas'=>2,
                'foto'=>'6.jpg',
                'precio_id'=> 50000,
            ],

            [
                'Numero'=>02,  
                'descripcion'=> 'sencilla',
                'Numcamas'=>3,
                'foto'=>'7.jpg',
                'precio_id'=> 60000,
            ],

            [
                'Numero'=>03,  
                'descripcion'=> 'sencilla',
                'Numcamas'=>4,
                'foto'=>'8.jpg',
                'precio_id'=> 70000,
            ],

            [
                'Numero'=>04,  
                'descripcion'=> 'sencilla',
                'Numcamas'=> 5,
                'foto'=>'9.jpg',
                'precio_id'=> 80000,
            ],

            [
                'Numero'=>05,  
                'descripcion'=> 'sencilla',
                'Numcamas'=>6,
                'foto'=>'10.jpg',
                'precio_id'=> 90000,
            ],
        ];
        DB::table('habitacion')->insert($habitacion);
    }
}

