<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitores extends Model
{
  protected $table = 'monitores';
  protected $fillable = ['id_usuario', 'id_turma'];

  public function pegaTurmas(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
