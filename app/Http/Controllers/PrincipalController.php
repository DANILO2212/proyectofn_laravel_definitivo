<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use App\Models\Actores;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $peliculas = Peliculas::all();

        $cartelera =
        [
        ['img' => 'assets/cartelera/peliculas/pelicula2.jpg'],
        ['img' => 'assets/cartelera/peliculas/pelicula3.jpg'],
        ['img' => 'assets/cartelera/peliculas/pelicula4.png'],
        ['img' => 'assets/cartelera/peliculas/pelicula5.jpg'],
        ['img' => 'assets/cartelera/peliculas/pelicula6.jpg'],
        ['img' => 'assets/cartelera/peliculas/pelicula7.jpg'],
        ['img' => 'assets/cartelera/peliculas/pelicula8.jpg']
        ];
        return view('index', compact('cartelera','peliculas'));
    }

    public function agregar()
    {
        return view('agregar');
    }

    public function peliculas()
    {
        $peliculas = Peliculas::all();

        $peliculas = Peliculas::paginate(2);

        return view('peliculas', compact('peliculas'));
    }

    public function editar(Peliculas $pelicula)
    {
        return view('editar', compact('pelicula'));
    }

    public function guardar(Request $request, Peliculas $pelicula)
    {
    $request->validate([
    'nombre' => 'required',
    'sinopsis' => 'required',
    'duracion' => 'required',
    'trailer' => 'required',
    'foto' => 'required|image'
    ],[
    'nombre.required' => 'El campo Nombre es necesario',
    'sinopsis.required' => 'El campo Nombre es necesario',
    'duracion.required' => 'El campo Nombre es necesario',
    'trailer.required' => 'El campo Nombre es necesario',
    'foto.required' => 'El campo Foto es requerida'
    ]);


    $foto = time() . '.' . $request->foto->extension();
    $request->foto->move(public_path('imagenes/peliculas/'), $foto);
    $pelicula = Peliculas::create([
    'nombre' => $request->nombre,
    'sinopsis' => $request->sinopsis,
    'categoria' => $request->categoria,
    'duracion' => $request->duracion,
    'trailer' => $request->trailer,
    'foto' => $foto,
    ]);

    return redirect()->route('peliculas')->with('mensaje','Pelicula
    Agregada correctamente');
    }

    public function borrar($pelicula)
    {
        $peli = Peliculas::find($pelicula);
        $image_path = public_path(). '/imagenes/peliculas/'. $peli->foto;
        unlink($image_path);
        $peli->delete();
        return redirect()->route('peliculas');
    }

    public function actualizar(Request $request, Peliculas $pelicula)
    {

    $request->validate([
    'nombre' => 'required',
    'sinopsis' => 'required',
    'duracion' => 'required',
    'trailer' => 'required',
    'foto' => 'required|image'
    ],[
    'nombre.required' => 'El campo Nombre es necesario',
    'sinopsis.required' => 'El campo Nombre es necesario',
    'duracion.required' => 'El campo Nombre es necesario',
    'trailer.required' => 'El campo Nombre es necesario',
    'foto.required' => 'El campo Foto es requerida'
    ]);



    $image_path = public_path(). '/imagenes/peliculas/'. $pelicula->foto;
    unlink($image_path);

    $foto = time() . '.' . $request->foto->extension();

    $request->foto->move(public_path('imagenes/peliculas/'), $foto);

    $pelicula->update([
    'nombre' => $request->nombre,
    'sinopsis' => $request->sinopsis,
    'categoria' => $request->categoria,
    'duracion' => $request->duracion,
    'trailer' => $request->trailer,
    'foto' => $foto,
    ]);

    return redirect()->route('peliculas')->with('mensaje','PeliculaAgregada correctamente');
    }


    public function actores()
    {
        $actores = Actores::all();


        $actores = Actores::paginate(3);

        return view('actores', compact('actores'));
    }

    public function agregar_act()
    {
        return view('agregar_act');
    }

    public function guardar_act(Request $request, Actores $actor)
    {
        $request->validate([
            'nombre' => 'required',
            'nacimiento' => 'required',
            'foto' => 'required|image'
            ],[
            'nombre.required' => 'El campo Nombre es necesario',
            'nacimiento.required' => 'El campo Nacimiento es necesario',
            'foto.required' => 'El campo Foto es requerida'
            ]);


            $foto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('imagenes/actores/'), $foto);
            $actor = Actores::create([
            'nombre' => $request->nombre,
            'nacimiento' => $request->nacimiento,
            'foto' => $foto,
            ]);

            return redirect()->route('actores')->with('mensaje','Pelicula
            Agregada correctamente');
    }

    public function editar_act(Actores $actor)
    {
        return view('editar_act', compact('actor'));
    }

    public function borrar_act($actor)
    {
        $act = Actores::find($actor);
        $image_path = public_path(). '/imagenes/actores/'. $act->foto;
        unlink($image_path);
        $act->delete();
        return redirect()->route('actores');
    }

    public function actualizar_act(Request $request, Actores $actor)
    {

        $request->validate([
            'nombre' => 'required',
            'nacimiento' => 'required',
            'foto' => 'required|image'
            ],[
            'nombre.required' => 'El campo Nombre es necesario',
            'nacimiento.required' => 'El campo Nacimiento es necesario',
            'foto.required' => 'El campo Foto es requerida'
            ]);






            $foto = time() . '.' . $request->foto->extension();

            $image_path = public_path(). '/imagenes/actores/'. $actor->foto;
            unlink($image_path);

            $request->foto->move(public_path('imagenes/actores/'), $foto);

            $actor->update([
            'nombre' => $request->nombre,
            'nacimiento' => $request->nacimiento,
            'foto' => $foto,
            ]);

    return redirect()->route('actores')->with('mensaje','Pelicula
    Agregada correctamente');
    }

    public function ordenar($orden){

     

        $peliculas= [];

        switch($orden){
            case 'nombre': $peliculas=Peliculas::orderby('nombre','asc')->get();
            break;
            case 'nombre2': $peliculas=Peliculas::orderby('nombre','desc')->get();
            break;

        }

        $peliculas = Peliculas::paginate(2);

        return view('peliculas', compact('peliculas'));

    }

}
