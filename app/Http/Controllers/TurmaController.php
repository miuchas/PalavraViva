<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Turma;

class TurmaController extends Controller
{
  public function index(){

  }

  public function store(){
    Turma::create(request([ 'contato_facebook', 'modolo', 'dia', 'horario' ]));
    return redirect('/');
  }
}
