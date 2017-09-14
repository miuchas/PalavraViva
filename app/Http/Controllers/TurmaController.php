<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{

  //midleware - validação de login
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    return view('turma.formulario_turma');
  }

  public function store(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }

  public function update(Turma $turma){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }

  public function list(){
    $turmas = Turma::all();
    return view('turma.listar_turma', compact('turmas'));
  }

  public function show(Turma $turma){
    return redirect()->action('TurmaController@index', compact('task') );
  }

  public function destroy(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }
}
