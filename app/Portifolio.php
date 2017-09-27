<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
  protected $table = 'portifolio';
  protected $fillable = ['apresentacoes', 'sinopse', 'descricao_evento', 'data_apresentacao'];

  public function scopePegaPortifolio(){
    return $query->get();
  }
}
