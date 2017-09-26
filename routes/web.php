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

//auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');


/* ROTAS DA TURMA */
Route::group(['prefix' => '/turma'], function(){
  /* Index */
  Route::get('/', 'TurmaController@list');
  /* Adição */
  Route::get('/cadastrar', 'TurmaController@new')->middleware('permicao_aluno');
  Route::post('/adicionar', 'TurmaController@store');
  /* edição */
  Route::post('/editar/{turma?}', 'TurmaController@update');
  Route::post('/troca-turma/{user?}', 'TurmaController@createTrocaTurma');
  Route::post('/aprovar-troca-turma/{alert?}', 'TurmaController@aprovarTrocaTurma');
  /* listagem */
  Route::get('/listar', 'TurmaController@list');
  Route::get('/listar/{turma?}', 'TurmaController@show');
  Route::get('/troca-turma', 'TurmaController@showTrocaTurma');
  Route::get('/aprovar-troca-turma', 'TurmaController@listaAprovarTrocaTurma');
  /* Exclusão */
  Route::get('/remover/{turma?}', 'TurmaController@destroy');
  Route::get('/remover/remove-troca-turma/{alert?}', 'TurmaController@destroyTrocaTurma');
});
