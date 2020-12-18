<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">HOTEL PERLA NEGRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Mision y Vision</a>
          <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item active">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/servicios/habitacion')}}">Habitacion</a>
          <a class="dropdown-item" href="{{url('/servicios/evento')}}">Evento</a>
          
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item active">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{url('/cliente/registrar')}}">Registrar</a>
          <a class="dropdown-item" href="{{url('/cliente/visualizar')}}">Visualizar</a>
          
          </div>
          </li>
          
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/reservas/reserva')}}">Reserva <span class="sr-only">(current)</span></a>
      </li>
      

          <a class="nav-link" href="{{url('/facturacion/facturacion')}}">Facturacion</a>
      </li>

        <a class="nav-link" href="{{url('/contactos/contacto')}}">Contacto</a>
      </li>

      
      
    </ul>
     <form class="form-inline">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     </form> 
  </div>  
</nav>