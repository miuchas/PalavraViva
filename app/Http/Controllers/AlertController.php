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

  public function mostrarAlertasUsuario(){
    return Alert::pegaAlertas()->where("id", Auth::user()->id);
  }

  public function mostrarAlertas(){
    return Alert::pegaAlertas();
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

  public function listaTarefas(){
    $class = "";
    $alertas = (new AlertController)->mostrarAlertas();
    $tarefas = [];

    foreach( $turmas as $turma ){
      switch ($type) {
        case 'Requisicao':  $class = "progress-bar-success"; break;
        case 'Notificacao': $class = "progress-bar-warning"; break;
        case 'Confirmacao': $class = "progress-bar-danger" ; break;
        case 'Alerta':      $class = "progress-bar-inative"; break;
      }

      $tarefas = array(
        "type" => $type,
        "message" => $message,
        "class" => $class,
        "numeroTarefas" => count($alertas),
        "alerts" => $alertas,
      );
    }
    return $tarefas;
  }
}
