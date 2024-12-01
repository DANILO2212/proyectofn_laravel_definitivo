@extends('partials.plantilla')

@section('header')
<div class="logo">
<img width="65px" height="65px"
src="{{asset('assets/logo/logo.png')}}" alt="">

</div>
<nav class="navbar">
{{-- <form class="formi">
<input class="form-control mr-sm-2" type="search"

placeholder="Buscar" aria-label="Search">

<button class="btn btn-outline-success my-2 my-sm-0"

type="submit">Buscar</button>
</form> --}}
</nav>
@endsection
@section('main')
<div class="inicio" id="inicio" style="height: 150vh;">

    @if ($actores->isEmpty())
    <div class="caja">
        <h1>No hay Actores</h1>
        <br>
        <div>
            <a href="{{route('agregar_act')}}" class="btn btn-primary">Agregar</a>
        </div>
    </div>

    @else
    <div class="agre">
        <a href="{{route('agregar_act')}}" class="btn btn-primary">Agregar</a>
    </div>
    <div class="peli">
        @foreach ($actores as $actor)
        <div class="card" style="width: 18rem; margin: 50px; height: 90%">
            <img class="card-img-top" src="imagenes/actores/{{$actor->foto}}" alt="Card image cap">
            <div class="card-body">
              <h2>{{$actor->nombre}}</h2>
              <p>Fecha de nacimiento: {{$actor->nacimiento}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex" >
                  {{--Editar--}}<a class="btn btn-primary" style="margin: 15px;" href="{{route('editar_act', $actor)}}"><i class="fa-solid fa-pencil"></i></a>
                  {{--Eliminar--}}
                  <form action="{{route('borrar_act', $actor)}}" method="post" style="margin: 15px;">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                  </form>
              </li>

              </ul>
          </div>


        @endforeach
        @endif
    </div>

    <div class="pagination pagination-sm">
        {{ $actores->links() }}
    </div>

</div>

@endsection
@section('footer')
<div class="contacto">
<h5>Contacto</h5>
<br>
<p>
correo@correo.com
</p>
</div>
<div class="redes">
<a target="_blank" href=""><i
class="fa-brands fa-instagram"></i></a>

<a target="_blank" href=""><i class="fa-brands fa-github"></i></a>

</div>
<div class="tools">

<a target="_blank" href="https://github.com/"><i class="fa-brands fa-github"></i></a>

<a target="_blank" href="https://fontawesome.com/"><i class="fa-solid fa-font-awesome"></i></a>

<a target="_blank" href="https://getbootstrap.com/"><i class="fa-brands fa-bootstrap"></i></a>

</div>

@endsection
