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
Route::get('/', 'HomeController@index');
//any routes


/* ROTAS DA SEÇÃO LOGO */
Route::group(['prefix' => '/turma'], function(){
  /* Adição */
  Route::get('/cadastrar', 'TurmaController@new')->middleware('permicao_aluno');
  Route::post('/adicionar', 'TurmaController@store');
  /* edição */
  Route::post('/editar/{turma?}', 'TurmaController@update');
  /* listagem */
  Route::get('/listar', 'TurmaController@list');
  Route::get('/listar/{turma?}', 'TurmaController@show');
  /* Exclusão */
  Route::get('/remover/{turma?}', 'TurmaController@destroy');
});
