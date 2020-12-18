@extends('layouts.master')
@section('content')
	
<h1> Listado de Clientes </h1>
<div class></div>
    
   
    <div class="container">
    <div class ="row">
    @foreach($cliente as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/cliente/$p->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$p->nombres}} </h5>
                    <p class="card-text"> {{$p->dni}} </p>
                    <p class="card-text"> {{$p->id}} </p>
                    <p class="card-text"> {{$p->genero}} </p>
                    <p class="card-text"> {{$p->domicilio}} </p>
                    <p class="card-text"> {{$p->telefono}} </p>
                    
                    </div>
            </div>
        </div>
    @endforeach
    </div>
    </div>

    
@stop