<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $table = 'turma';
  protected $fillable = ['contato_facebook', 'modolo', 'dia', 'horario'];

  public function pegaTurmas(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }

  public function usuarios(){
    return $this->hasMany(Usuarios::class);
  }

  public function addUser(){

  }
}
