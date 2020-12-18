<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones()
    {
          // consulta
          $habitacion = DB::table('habitacion')->get();

        return view ('servicios.listado ',['habitacion' =>$habitacion]);
                                         
      

    }
}
