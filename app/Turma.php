<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $table = 'turma';
  protected $fillable = ['contato_facebook', 'modolo', 'dia', 'horario'];

  public function usuarios(){
    return $this->hasMany(Usuarios::class);
  }

  public function addUser(){
    
  }
}
