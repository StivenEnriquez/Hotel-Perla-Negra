<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precio = [
            [
                'id'=>511,  
                'Tipo'=> 'sencilla',
                'precio' => 50000,
            ],

            [
                'id'=>512,  
                'Tipo'=> 'doble',
                'precio' => 60000,
            ],

            [
                'id'=>513,  
                'Tipo'=> 'matrimonial',
                'precio' => 70000,
            ],

            [
                'id'=>514,  
                'Tipo'=> 'suite',
                'precio' => 80000,
            ],

            [
                'id'=>515,  
                'Tipo'=> 'sencilla',
                'precio' => 90000,
            ],
        ];
        DB::table('precio')->insert($precio);
    }
}
