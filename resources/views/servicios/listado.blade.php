@extends('layouts.master')
@section('content')
<h1> Listado de Habitaciones </h1>
<div class></div>
    
   
    <div class="container">
    <div class ="row">
    @foreach($habitacion as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/habitacion/$p->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$p->descripcion}} </h5>
                    <p class="card-text"> {{$p->Numero}} </p>
                    <p class="card-text"> {{$p->Numcamas}} </p>
                    <p class="card-text"> {{$p->precio_id}} </p>
                    </div>
            </div>
        </div>
    @endforeach
    </div>
    </div>
@stop