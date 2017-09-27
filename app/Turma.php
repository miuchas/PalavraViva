<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $table = 'turma';
  protected $fillable = ['contato_facebook', 'modolo', 'dia', 'horario'];

  public function pegaTurmas(){
    return $query->get();
  }

  public function usuarios(){
    return $this->hasMany(User::class);
  }
}
