<?php
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('index');

Route::get('/agregar', [PrincipalController::class, 'agregar'])->name('agregar');

Route::get('/peliculas', [PrincipalController::class, 'peliculas'])->name('peliculas');


Route::get('/agregar_act', [PrincipalController::class, 'agregar_act'])->name('agregar_act');

Route::get('/actores', [PrincipalController::class, 'actores'])->name('actores');


Route::post('/guardar', [PrincipalController::class, 'guardar'])->name('guardar');

Route::post('/guardar_act', [PrincipalController::class, 'guardar_act'])->name('guardar_act');

Route::get('/editar/{pelicula}', [PrincipalController::class, 'editar'])->name('editar');

Route::get('/editar_act/{actor}', [PrincipalController::class, 'editar_act'])->name('editar_act');


Route::delete('/borrar/{pelicula}', [PrincipalController::class, 'borrar'])->name('borrar');

Route::delete('/borrar_act/{actor}', [PrincipalController::class, 'borrar_act'])->name('borrar_act');

Route::put('/actualizar/{pelicula}', [PrincipalController::class, 'actualizar'])->name('actualizar');

Route::put('/actualizar_act/{actor}', [PrincipalController::class, 'actualizar_act'])->name('actualizar_act');

Route::get('/ordenar/{orden}', [PrincipalController::class, 'ordenar'])->name('ordenar');


