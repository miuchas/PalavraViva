<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitores extends Model
{
  protected $table = 'monitores';
  protected $fillable = ['user_id', 'turma_id'];

  public function scopePegaTurmas(){
    return $query->get();
  }
}
