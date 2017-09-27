<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
  protected $table = 'contato';
  protected $fillable = ['descricao_contato', 'contato', 'user_id'];

  public function scopePegaContato(){
    return $query->get();
  }
}
