<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PokemonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\PokemonController;

// Route::get('/', [PokemonController::class, 'index']);

Route::get('/', function(){

})->middleware('prueba');

// Route::resource('pokemons', PokemonController::class);


// Route::get('/', [PokemonController::class, 'nombreDelMetodo']);

// Route::resource('pokemons', PokemonController::class);
