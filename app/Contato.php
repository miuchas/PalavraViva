<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
  protected $table = 'contato';
  protected $fillable = ['descricao_contato', 'contato', 'id_usuario'];

  public function scopePegaContato(){
    return $query->get();
  }
}
