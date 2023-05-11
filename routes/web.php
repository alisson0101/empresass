<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/', 'App\Http\Controllers\HomeController@indexx')->name('home');


Route::get('/cadastro', 'App\Http\Controllers\CadastroController@create');
Route::POST('/cadastro', 'App\Http\Controllers\CadastroController@store')->name('cadastro_empresas');

Route::get('/vagasemprego', 'App\Http\Controllers\VagasController@gerarvagas');
Route::POST('/vagasemprego', 'App\Http\Controllers\VagasController@store2')->name('vagasemprego');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro_empresas', function () {
    return view('cadastro');
})->name('login');
//Route::post('/login', 'LoginController@login')->name('login');

Route::get('/vagasemprego', function () {
    return view('vagasemprego');
})->middleware('auth');



