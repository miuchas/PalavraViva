<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
  protected $table = 'portifolio';
  protected $fillable = ['apresentacoes', 'sinopse', 'descricao_evento', 'data_apresentacao'];

  public function pegaPortifolio(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
