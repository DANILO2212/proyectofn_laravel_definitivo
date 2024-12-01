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
<div class="inicio" id="inicio">
    @if ($peliculas->isEmpty())
    <div class="caja">
        <h1>No hay Peliculas</h1>
        <br>
        <div>
            <a href="{{route('agregar')}}" class="btn btn-primary">Agregar</a>
        </div>
    </div>
    @else
    <div class="agre">
        <a href="{{route('agregar')}}" class="btn btn-primary">Agregar</a>
        <br>
        <br><br>
        <center>
            <h4>Ordenar</h4>
            <a href="{{route('ordenar','nombre')}}"><i class="fa-solid fa-arrow-up-long"></i></a>

            <a href="{{route('ordenar','nombre2')}}"><i class="fa-solid fa-arrow-down-long"></i></a>
        </center>
    </div>
    <div class="lista-peliculas">

        @foreach ($peliculas as $pelicula)
        <div class="peli">
        <div class="card" id="b" style="width: 18rem; margin: 50px;">
            <img class="card-img-top" src="imagenes/peliculas/{{$pelicula->foto}}" alt="Card image cap" >
            <div class="card-body">

            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex" >
                {{--Editar--}}<a class="btn btn-primary" style="margin: 15px;" href="{{route('editar', $pelicula)}}"><i class="fa-solid fa-pencil"></i></a>
                {{--Eliminar--}}
                <form action="{{route('borrar', $pelicula)}}" method="post" style="margin: 15px;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                </form>
            </li>

            </ul>
            <div class="card-body">
              <a target="_blank" href="{{$pelicula->trailer}}" class="card-link">Trailer</a>
            </div>
          </div>
          {{-- Otra --}}
          <div class="card" id="b" style="width: 18rem; margin: 50px;">

            <div class="card-body">
              <h5 class="card-title">{{$pelicula->nombre}}</h5>
              <p class="card-text">{{$pelicula->sinopsis}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Categoria: {{$pelicula->categoria}}</li>
              <li class="list-group-item">Duracion: {{$pelicula->duracion}} Minutos</li>
            </ul>
          </div>
        </div>
        @endforeach

    </div>
    {{-- <div class="d-flex justify-content-center pagi">
        <center> {{$peliculas->links('pagination::bootstrap-5')}} </center>
     </div> --}}

     <div class="pagination pagination-sm">
        {{ $peliculas->links() }}
    </div>

</div>


@endif
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
