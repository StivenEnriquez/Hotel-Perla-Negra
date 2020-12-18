<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes()
    {

        // Consulta
        $cliente= DB::table('cliente')->get();


        return view ('cliente.listado',['cliente' =>$cliente]);

                                                  
    }

    public function registroClient()
    {
        return view ('cliente.registrar');
                                                  
    }

}
