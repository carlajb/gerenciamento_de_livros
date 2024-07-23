<?php
use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/jogos', 'jogos');

// Route::get('/jogos', function(){
//     return "Testando Rotas";
// });

// Route::view('/jogos', 'jogos', ['name' =>'GTA']);

// Route::get('/jogos/{name?}', function($name = null){
//     return view('jogos',['nomeJogo' => $name]);
// })->where('name', '[A-Z-a-z]+');

// Route::get('/jogos/{id?}', function($id = null){
//     return view('jogos',['idJogo' => $id]);
// })->where('id', '[0-9]+');

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos',['idJogo' => $id, 'nomeJogo' => $name]);
// })->where('id', '[0-9]+', 'name', '[A-Z-a-z]+');

// Route::get('/jogos', function(){
//     return view('jogos');
// });

// Route::get('/home', function () {
//     return view('welcome');
// })->name('home-index');

// Route::fallback(function(){
//     return "Erro ao localizar a rota.";
// });

//-----------CONTROLLER-------------------------

Route::get('/jogos',[JogosController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return "Erro ao localizar a rota.";
});