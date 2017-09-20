<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_da_turma extends Model
{
  protected $table = 'forum_da_turma';
  protected $fillable = ['assunto', 'id_usuario'];

  public function pegaForumTurma(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
