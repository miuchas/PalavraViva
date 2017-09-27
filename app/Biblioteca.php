<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
  protected $table = 'biblioteca';
  protected $fillable = ['nome_obra', 'autor', 'texto', 'tipo', 'genero', 'indicacao_para_modolo'];

  public function scopePegaTextos(){
    return $query->get();
  }
}
