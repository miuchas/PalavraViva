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

  /*----------------------------------ADIÇÂO----------------------------------*/
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

  public function createTrocaTurma(Request $request, User $user){
    $this->validate(request(), [
      'obs' => 'required|string',
    ]);

    $turma = Turma::find($request->turma);
    $turmas = Turma::orderBy('modolo', 'asc')->get();

    DB::table('alerts')->insert([
      'tipo' => 'Requisicao',
      'descricao_basica' => $user->name." requisitou troca de turma para a turma de ".$turma->dia." - modolo ".$turma->modolo." - ".$turma->horario,
      'obs' => $request->obs,
      'comando' => $user->id .'|'. $turma->id,
      'confirmacao' => 0,
      'visualizacao' => 0,
      'id_usuario' => $user->id,
    ]);

    $alert = (new AlertController)->alertaDeConfirmacao("Confirmacao", "Requisição de troca de turma efetuada com sucesso");
    return view('turma.listar', compact('turmas','alert'));
  }

  /*----------------------------------EDIÇÂO----------------------------------*/
  public function update(Turma $turma){
    $this->validate(request(), [
      'contato_facebook' => 'required|string',
      'horario' => 'required|string|max:5',
    ]);

    Turma::where('id', $turma->id)->update(request(['contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@list');
  }

  public function aprovarTrocaTurma(Alert $alert){
    $comand = explode("|",$alert->comando);

    Alert::where('id', $alert->id)->update(["confirmacao" => 1]);
    User::where('id', intval($comand[0]))->update([ "id_turma" => intval($comand[1]) ]);

    $turmas = Turma::orderBy('modolo', 'asc')->get();
    $alert = (new AlertController)->alertaDeConfirmacao("Confirmacao", "Troca de turma efetuada com sucesso");

    return view('turma.listar', compact('turmas','alert'));
  }

  /*---------------------------------LISTAGEM---------------------------------*/
  public function list(){
    $turmas = Turma::orderBy('modolo', 'asc')->get();
    return view('turma.listar', compact('turmas'));
  }

  public function show(Turma $turma){
    return view('turma.editar', compact('turma'));
  }

  public function showTrocaTurma(){
    $turmas = Turma::orderBy('modolo', 'asc')->get();
    return view('turma.troca_turma', compact('turmas'));
  }

  public function listaAprovarTrocaTurma(){
    $alerts = Alert::pegaRequisicoes();
    return view('turma.lista_troca_turma', compact('alerts'));
  }

  /*---------------------------------EXCLUSÂO---------------------------------*/
  public function destroy($turma){
    Turma::destroy($turma);
    return redirect()->action('TurmaController@list');
  }

  public function destroyTrocaTurma(Alert $alert){
    Alert::destroy($alert);
    $alert = (new AlertController)->alertaDeConfirmacao("Confirmacao", "Troca de turma excluida com sucesso");
    return view('turma.listar', compact('turmas','alert'));
  }

}
