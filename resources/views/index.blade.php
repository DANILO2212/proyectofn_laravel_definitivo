@extends('partials.plantilla')
@section('header')
<div class="logo">
<img width="70px" height="70px" src="{{asset('assets/logo/logo.png')}}" alt="">

</div>
<nav class="navbar">
</nav>
@endsection
@section('main')
<div class="inicio" id="inicio">
<div class="slider">
<div>
<center><h4 style="color: rgb(255, 255, 255);">CARTELERA</h4></center>
</div>
<div id="carouselExampleCaptions" class="carousel slide">
<div class="carousel-indicators" >
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide1"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>

</div>
<div class="carousel-inner rounded-1" >
<div class="carousel-item active">
<img src="{{asset('assets/cartelera/peliculas/pelicula1.jpg')}}" alt="..." height="500px" width="400px">

<div class="carousel-caption d-none d-md-block">
</div>
</div>
@foreach ($cartelera as $carte)
<div class="carousel-item">
<img src="{{$carte['img']}}" class="d-block w-100 rounded-1"

alt="..." height="500px" width="1000px">

<div class="carousel-caption d-none d-md-block">
</div>
</div>
@endforeach

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">

<span class="carousel-control-prev-icon" aria-hidden="true"></span>

<span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">

<span class="carousel-control-next-icon" aria-hidden="true"></span>

<span class="visually-hidden">Next</span>
</button>
</div>
</div>
</div>
<div class="cont-1" id="contenido">
<div class="container-1 cont-global">
<h3>Peliculas</h3>
<div class="ir">
<a class="btn-ir" style="color: white; text-decoration: none;" href="{{route('peliculas')}}" >IR</a>
</div>
</div>
<div class="info-1 cont-global-1">
<h3>Actores</h3>
<div class="ir">
<a class="btn-ir" style="color: white; text-decoration: none;" href="{{route('actores')}}" >IR</a>
</div>

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
