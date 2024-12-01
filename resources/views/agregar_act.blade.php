@extends('partials.plantilla')

@section('header')
<div class="logo">
<img width="70px" height="70px"
src="{{asset('assets/logo/logo.png')}}" alt="">

</div>

@endsection
@section('main')
<div class="inicio" id="inicio" style="height: 100vh;">
    <div class="contenedor-formulario">


<form action="/guardar_act" method="POST" enctype="multipart/form-data" class="form-control form-agregar">
    @csrf
    @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <center><h2>AGREGAR ACTOR</h2></center>
    <label class="form-label">
        Nombre:
        <input class="form-control" name="nombre" type="text" placeholder="Nombre del Actor">
    </label>
    <br><br>
    <label class="form-label">
        fecha de nacimiento:
        <input class="form-control" name="nacimiento" type="date">
    </label>
    <br><br>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto del Actor:</label>

        <input type="file" name="foto" id="foto" class="form-control" required>

        <div class="mt-3">
        <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; height: 150px; width:150px; border-radius: 5px;">

        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-success">Guardar</button>
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

<a target="_blank" href=""><i class="fa-brands fa-github"></i></a>

</div>
<div class="tools">

<a target="_blank" href="https://github.com/"><i class="fa-brands fa-
github"></i></a>

<a target="_blank" href="https://fontawesome.com/"><i class="fa-solid
fa-font-awesome"></i></a>

<a target="_blank" href="https://getbootstrap.com/"><i class="fa-brands fa-bootstrap"></i></a>

</div>
@endsection
