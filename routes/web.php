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
    return view('cadastros_informacoes/turma');
});

/* ROTAS DA SEÇÃO LOGO */
Route::group(['prefix' => '/turma'], function(){
  Route::get('/', 'TurmaController@index');
  /* Adição */
  Route::post('/adicionar', 'TurmaController@store');
  /* edição */
  Route::post('/editar', 'TurmaController@store');
  /* listagem */
  Route::get('/listar', 'TurmaController@store');
  Route::get('/listar/{turma}', 'TurmaController@store');
  /* Exclusão */
  Route::get('/remover/{id}', 'TurmaController@destroy');
});
