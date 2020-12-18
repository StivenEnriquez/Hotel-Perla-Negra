<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HotelController::class, 'getIndex']);

// Ruta  Hotel/Historia
Route::get('hotel/historia', [HotelController::class, 'showHistoria']);


//Ruta hotel/mision-vision
Route::get('hotel/mision-vision', [HotelController::class, 'showMision']);

// Ruta hotel/ubicación
Route::get('hotel/ubicacion',[HotelController::class, 'showUbicacion']);

//Ruta servicios/habitaciones
Route::get('servicios/habitacion',[HabitacionesController::class, 'showHabitaciones']);

// Ruta servicios/eventos/{$id}
Route::get('servicios/evento/{id}', function ($id) {
    return view ('servicios.evento' , array('id'=> $id));
});

// Ruta reservas
Route::get('reservas/reserva', [ReservasController::class, 'getReservas']);
    

//Ruta contáctos
Route::get('contactos/contacto', [HotelController::class, 'showContactos']);
    
//Ruta contáctos
   Route::get('cliente/visualizar',[ClientesController::class, 'showClientes']);

 //Ruta Registro de clientes
 Route::get('cliente/registrar', [ClientesController::class, 'registroClient']);

//Ruta Factura
Route::get('facturacion/facturacion', [FacturacionController::class, 'getFactura']);

