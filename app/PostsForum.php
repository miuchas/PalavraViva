<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_do_forum extends Model
{
  protected $table = 'posts_do_forum';
  protected $fillable = ['mensagem', 'id_usuario', 'id_topico'];

  public function pegaTurmas(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
