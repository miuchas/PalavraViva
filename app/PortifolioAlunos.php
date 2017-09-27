<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio_alunos extends Model
{
  protected $table = 'portifolio';
  protected $fillable = ['portifolio_id', 'user_id'];

  public function scopePegaPortifolioAluno(){
    return $query->get();
  }
}
