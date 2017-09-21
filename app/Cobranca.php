<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
  protected $table = 'cobranca';
  protected $fillable = ['valor', 'tipo', 'data', 'pago', 'id_aluno'];

  public function inadimplente(){
    /*
      faz uma query basica, ao chamar esta query no controler pode-se adicionar mais parametros
      ex:
        cobranca::inadimplente()->where("data", "<", Date.now());
    */
    return $query->where("pago", 0)->get();
  }
}
