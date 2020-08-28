<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.home');

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.museums');

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.collections');

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.parts');

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.users');

// Route::get('/', function () {
//     return view('gama.home');
// })->name('gama.login');

// Route::view('ver', 'gama.ver');
Route::view('ver', 'gama.showmuseu');

//

Route::view('home', 'gama.home');

Route::resource('museus', 'MuseuController');
// ADD MUSEU
Route::get('addmuseu', 'MuseuController@create');
// SHOW MUSEU
Route::get('museus.show/{id}', 'MuseuController@show');

Route::resource('colecoes', 'ColecaoController');
// ADD COLEÇÃO
Route::get('addcolecao', 'ColecaoController@create');
// SHOW COLEÇÃO
Route::get('colecoes.show/{id}', 'ColecaoController@show');

Route::resource('pecas', 'PecaController');
// ADD PEÇA
Route::get('addpeca', 'PecaController@create');
// SHOW PEÇAS
Route::get('pecas.show/{id}', 'PecaController@show');

Route::resource('usuarios', 'UserController');
// ADD USUÁRIO
Route::get('addusuario', 'UserController@create');

Route::view('login', 'gama.login');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
