@extends('partials.plantilla')

@section('header')
<div class="logo">
<img width="70px" height="70px"
src="{{asset('assets/logo/logo.png')}}" alt="">

</div>

@endsection
@section('main')
<div class="inicio" id="inicio">
    <div class="contenedor-formulario">


<form action="{{route('actualizar', $pelicula)}}" method="POST" enctype="multipart/form-data" class="form-control form-agregar">
    @csrf
    @method('PUT')
    @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <center><h2>EDITAR PELICULA</h2></center>
    <label class="form-label">
        Nombre:
        <input class="form-control" name="nombre" type="text" placeholder="Nombre de la Pelicula" value="{{old('nombre', $pelicula->nombre)}}">
    </label>
    <br><br>
    <label class="form-label">
        Sinopsis: <br>
        <textarea class="form-control" name="sinopsis" id="" cols="40" rows="5" placeholder="Sinopsis:">{{($pelicula->sinopsis)}}</textarea>
    </label>
    <br><br>
    <label class="form-label">
        Categoria:
        <select class="form-control" name="categoria" id="">
            <option value="Terror" {{ $pelicula->categoria == 'Terror' ? 'selected' : '' }}>Terror</option>
            <option value="Infantil" {{ $pelicula->categoria == 'Infantil' ? 'selected' : '' }}>Infantil</option>
            <option value="Accion" {{ $pelicula->categoria == 'Accion' ? 'selected' : '' }}>Accion</option>
            <option value="Aventura" {{ $pelicula->categoria == 'Aventura' ? 'selected' : '' }}>Aventura</option>
            <option value="Catastrofe" {{ $pelicula->categoria == 'Catastrofe' ? 'selected' : '' }}>Catastrofe</option>
            <option value="Ciencia Ficcion" {{ $pelicula->categoria == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficcion</option>
            <option value="Comedia" {{ $pelicula->categoria == 'Comedia' ? 'selected' : '' }}>Comedia</option>
            <option value="Drama" {{ $pelicula->categoria == 'Drama' ? 'selected' : '' }}>Drama</option>
        </select>
    </label>
    <br><br>
    <label class="form-label">
        Duracion (mins):
        <input class="form-control" name="duracion" type="number" placeholder="Duracion de la pelicula" value="{{old('duracion', $pelicula->duracion)}}">
    </label>
    <br><br>
    <label class="form-label">
        Link del Trailer:
        <input class="form-control" name="trailer" type="text" placeholder="Enlace del trailer" value="{{old('trailer', $pelicula->trailer)}}">
    </label>
    <br><br>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto de la

        Pelicula:</label>

        <input type="file" name="foto" id="foto" class="form-control" required>

        <div class="mt-3">
        <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; height: 150px; width:150px; border-radius: 5px;">

        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </center>

</form>
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

<a target="_blank" href=""><i class="fa-
brands fa-github"></i></a>

</div>
<div class="tools">

<a target="_blank" href="https://github.com/"><i class="fa-brands fa-
github"></i></a>

<a target="_blank" href="https://fontawesome.com/"><i class="fa-solid
fa-font-awesome"></i></a>

<a target="_blank" href="https://getbootstrap.com/"><i class="fa-
brands fa-bootstrap"></i></a>

</div>
@endsection
