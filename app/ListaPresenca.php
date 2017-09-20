<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista_de_presenca extends Model
{
  protected $table = 'lista_de_presenca';
  protected $fillable = ['presenca', 'id_turma', 'id_usuario'];

  public function pegaListaPresenca(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
