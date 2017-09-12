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

//auth rpoutes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//register

Route::get('/login', 'HomeController@index')->name('home');

//any routes
Route::get('/', function () {
    return view('cadastros_informacoes/turma');
});

/* ROTAS DA SEÇÃO LOGO */
Route::group(['prefix' => '/turma'], function(){
  Route::get('/', 'TurmaController@index');
  /* Adição */
  Route::post('/adicionar', 'TurmaController@store');
  /* edição */
  Route::post('/editar', 'TurmaController@update');
  /* listagem */
  Route::get('/listar', 'TurmaController@list');
  Route::get('/listar/{turma}', 'TurmaController@show');
  /* Exclusão */
  Route::get('/remover/{id}', 'TurmaController@destroy');
});
