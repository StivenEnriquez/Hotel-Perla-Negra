<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FormaPagoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formapago = [
            [
                'id'=> 1,
                'descripcion'=> 'Efectivo',
                
                
            ],

            [
                'id'=> 2,
                'Descripcion'=> 'Efectivo',
                
            ],

            [
                'id'=> 3,
                'Descripcion'=> 'Efectivo',
                
            ],

            [
                'id'=> 4,
                'Descripcion'=> 'Efectivo',
                
            ],

            [
                'id'=> 5,
                'Descripcion'=> 'Efectivo',
                
            ],
        ];
        DB::table('formapago')->insert($formapago);
    }
}