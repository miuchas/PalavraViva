<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  protected $table = 'usuarios';

  public function turma(){
    return $this->belongsTo(Turma::class);
  }
}
