<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    return view('cadastros_informacoes.formulario_turma');
  }

  public function store(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }

  public function list(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }

  public function show(Turma $turma){
    return redirect()->action('TurmaController@index', compact('task') );
  }

  public function edit(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }

  public function delete(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect()->action('TurmaController@index');
  }
}
