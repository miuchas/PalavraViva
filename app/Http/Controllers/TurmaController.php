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
    return view('turma.cadastrar');
  }

  public function store(){
    $this->validate(request(), [
      'contato_facebook' => 'required|string',
      'horario' => 'required|string|max:5',
    ]);

    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }

  public function update(Turma $turma){
    $this->validate(request(), [
      'contato_facebook' => 'required|string',
      'horario' => 'required|string|max:5',
    ]);

    Turma::where('id', $turma->id)->update(request(['contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }

  public function list(){
    $turmas = Turma::orderBy('modolo', 'asc')->get();
    return view('turma.listar', compact('turmas'));
  }

  public function show(Turma $turma){
    return view('turma.editar', compact('turma'));
  }

  public function destroy($turma){
    Turma::destroy($turma);
    return redirect()->action('TurmaController@list');
  }
}
