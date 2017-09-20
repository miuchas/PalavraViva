<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
  protected $table = 'biblioteca';
  protected $fillable = ['nome_obra', 'autor', 'texto', 'tipo', 'genero', 'indicacao_para_modolo'];

  public function pegaTextos(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex: Biblioteca::pegaTextos()->where("dia", "segunda");
    */
    return $query->get();
  }
}
