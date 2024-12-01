<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BLACK FILMS</title>
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.
css" rel="stylesheet" integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
<link rel="stylesheet"

href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.5.2/css/all.min.css" integrity="sha512-

SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl
9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="shortcut icon" href="{{asset('assets/logo/logo.png')}}"
type="image/x-icon">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="contenedor">
<!-- Encabezado de la pagina -->
<header class="header">
@yield('header')
<div class="d-flex ">
    <form class="d-flex mr-0 formi" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" style="width: 100px;" type="submit">Buscar</button>
      </form>
    <nav class="navbar" data-bs-theme="dark">
        <div class="container-sm">

        <button class="navbar-toggler bg-black border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Inicio</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('peliculas')}}">Peliculas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('actores')}}">Actores</a>
                </li>


              </ul>
            </div>
          </div>
        </div>
        </div>

    </nav>
</div>
{{-- <nav class="navbar">
    <form class="formi">
    <input class="form-control mr-sm-2" type="search"

    placeholder="Buscar" aria-label="Search">

    <button class="btn btn-outline-success my-2 my-sm-0"

    type="submit">Buscar</button>
    </form>


</nav> --}}


</header>
<!-- Contenido principal de la pagina -->
<main class="main">
@yield('main')
</main>
<!-- Pie de pagina -->
<footer class="footer" id="footer">
@yield('footer')
</footer>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle
.min.js" integrity="sha384-
YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
