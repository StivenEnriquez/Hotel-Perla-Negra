<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        $cliente = [
            [
                'id'=> 1,
                'dni' => 1087203359,
                'nombres' => 'Jose Solis',
                'genero' => 'M',
                'domicilio'=> 'Puente El Progreso',
                'telefono' => 3113268838,
                'foto'=> '1.jpg',

            ],

            [
                'id'=> 2,
                'dni' => 1087201202,
                'nombres' => 'Stiven Enriquez',
                'genero' => 'M',
                'domicilio'=> 'barranco',
                'telefono' => 3155038566,
                'foto'=> '2.jpg',

            ],

            [
                'id'=> 3,
                'dni' => 1087201194,
                'nombres' => 'Menuel Eduardo',
                'genero' => 'M',
                'domicilio'=> 'Puente las Flores',
                'telefono' => 312420678,
                'foto'=> '3.jpg',

            ],

            [
                'id'=> 4,
                'dni' => 1087202142,
                'nombres' => 'Diana Carolina',
                'genero' => 'F',
                'domicilio'=> 'Av.Los Estudiates',
                'telefono' => 3106140965,
                'foto'=> '4.jpg',

            ],

            [
                'id'=> 5,
                'dni' => 1087205444,
                'nombres' => 'Maria Del mar',
                'genero' => 'F',
                'domicilio'=> 'El Morro',
                'telefono' => 3156661223,
                'foto'=> '5.jpg',

            ],
        ];
        DB::table('cliente')->insert($cliente);
      
    }
}
