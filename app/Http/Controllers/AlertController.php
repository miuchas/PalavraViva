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

  public function alertaDeConfirmacao($type, $message){
    $class = "";
    switch ($type) {
      case 'Confirmacao': $class = "alert-success"; break;
      case 'Notificacao': $class = "alert-info"   ; break;
      case 'Requisicao':  $class = "alert-warning"; break;
      case 'Alerta':      $class = "alert-danger" ; break;
    }

    $alert = array( "type" => $type, "message" => $message, "class" => $class );
    return $alert;
  }
}
