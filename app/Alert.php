<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
  protected $table = 'alerts';
  protected $fillable = ['tipo', 'descricao_basica', 'obs', 'comando', 'confirmacao', 'visualizacao', 'id_usuario'];

  public function pegaAlertas(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Biblioteca::pegaTextos()->where("dia", "segunda");
    */
    return $query->get();
  }

  public function pegaRequisicoes(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex:
        Alert::pegaRequisicoes()->where("data", "<", Date.now());
    */
    return $query->where("tipo", "Requisicao")->get();
  }
}
