<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cobranca;

class CobrancaController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){

  }

  public function store(){
    Cobranca::create(request([ 'id_aluno', 'valor', 'tipo', 'data' ]));
    return redirect('/');
  }
}
