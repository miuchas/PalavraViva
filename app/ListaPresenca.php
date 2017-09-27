<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista_de_presenca extends Model
{
  protected $table = 'lista_de_presenca';
  protected $fillable = ['presenca', 'turma_id', 'user_id'];

  public function scopePegaListaPresenca(){
    return $query->get();
  }
}
