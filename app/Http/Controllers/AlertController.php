<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use Auth;

class AlertController extends Controller
{
  public function createAlert(){
    $alert = Alert::create(request([ 'tipo', 'descricao_basica', 'obs', 'comando', 'confirmacao', 'visualizacao', 'id_usuario' ]));
    return $alert->id;
  }

  public function mostrarAlertas(){
    Alert::pegaAlertas()->where("id", Auth::user()->id);
  }

}
