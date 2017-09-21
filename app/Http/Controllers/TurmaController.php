<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Turma;
use App\User;
use DB;

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

  public function showTrocaTurma(){
    $turmas = Turma::orderBy('modolo', 'asc')->get();
    return view('turma.troca_turma', compact('turmas'));
  }

  public function createTrocaTurma(Request $request, User $user){
    $turma = Turma::find($request->turma);

    DB::table('alerts')->insert([
      'tipo' => 'Requisicao',
      'descricao_basica' => 0,
      'obs' => $request->obs,
      'comando' => $user->id .'|'. $turma->id,
      'confirmacao' => $user->name." requisitou troca de turma para a turma de ".$turma->dia." - modolo ".$turma->modolo." - ".$turma->horario,
      'visualizacao' => '',
      'id_usuario' => $user->id,
    ]);

    return redirect()->action('TurmaController@list');
  }

  public function adicionaUsuarioTurma(Alert $alert){
    $id_turma = explode("|",$alert->comando)[1];

    Alert::where('id', $alert->id)->update(["confirmacao", '1']);
    User::where('id', $alert->id_usuario)->update([ "turma_id", intval($id_turma) ]);
  }

  public function aprovarTrocaTurma(){}
  public function listaAprovarTrocaTurma(){}

}
