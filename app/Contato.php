<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
  protected $table = 'contato';
  protected $fillable = ['descricao_contato', 'contato', 'id_usuario'];

  public function pegaContato(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
