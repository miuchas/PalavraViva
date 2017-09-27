<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitores extends Model
{
  protected $table = 'monitores';
  protected $fillable = ['id_usuario', 'id_turma'];

  public function scopePegaTurmas(){
    return $query->get();
  }
}
