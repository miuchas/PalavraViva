<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
  public function createAlert(){
    $alert = Alert::create(request([ 'tipo', 'descricao_basica', 'obs', 'comando', 'confirmacao', 'visualizacao', 'id_usuario' ]));
    return $alert->id;
  }

}
