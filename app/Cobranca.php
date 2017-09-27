<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
  protected $table = 'cobranca';
  protected $fillable = ['valor', 'tipo', 'data', 'pago', 'id_aluno'];

  public function scopeInadimplente(){
    return $query->where("pago", 0)->get();
  }
}
