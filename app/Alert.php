<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
  protected $table = 'alerts';
  protected $fillable = ['tipo', 'descricao_basica', 'obs', 'comando', 'confirmacao', 'visualizacao', 'id_usuario'];

  public function scopePegaAlertas($query){
    return $query->get();
  }

  public function scopePegaRequisicoes($query){
    return $query->where("tipo", "Requisicao")->where("confirmacao", "0")->get();
  }
}
