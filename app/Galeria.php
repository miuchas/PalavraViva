<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
  protected $table = 'galeria_portifolio';
  protected $fillable = ['imagem', 'descricao', 'portifolio_id'];

  public function scopePegaGaleria(){
    return $query->get();
  }
}
