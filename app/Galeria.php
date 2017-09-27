<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
  protected $table = 'galeria_portifolio';
  protected $fillable = ['imagem', 'descricao', 'id_portifolio'];

  public function scopePegaGaleria(){
    return $query->get();
  }
}
