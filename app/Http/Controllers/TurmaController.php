<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function new(){
    return view('turma.formulario_turma');
  }

  public function store(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }

  public function update(Turma $turma){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }

  public function list(){
    $turmas = Turma::orderBy('modolo', 'asc')->get();
    return view('turma.listar_turma', compact('turmas'));
  }

  public function show(Turma $turma){
    return view('turma.editar_turma', compact('turma'));
  }

  public function destroy(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }
}
