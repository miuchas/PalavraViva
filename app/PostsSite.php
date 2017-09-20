<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_do_site extends Model
{
  protected $table = 'posts_do_site';
  protected $fillable = ['assunto', 'image', 'mensagem', 'id_usuario'];

  public function pegaTurmas(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
