<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_da_turma extends Model
{
  protected $table = 'forum_da_turma';
  protected $fillable = ['assunto', 'user_id'];

  public function scopePegaForumTurma(){
    return $query->get();
  }
}
