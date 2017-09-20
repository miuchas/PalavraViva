<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio_alunos extends Model
{
  protected $table = 'portifolio';
  protected $fillable = ['id_portifolio', 'id_usuario'];

  public function pegaPortifolioAluno(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Turma::pegaTurmas()->where("dia", "segunda");
    */
    return $query->get();
  }
}
