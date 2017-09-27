<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio_alunos extends Model
{
  protected $table = 'portifolio';
  protected $fillable = ['id_portifolio', 'id_usuario'];

  public function scopePegaPortifolioAluno(){
    return $query->get();
  }
}
