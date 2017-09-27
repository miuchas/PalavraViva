<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_do_forum extends Model
{
  protected $table = 'posts_do_forum';
  protected $fillable = ['mensagem', 'user_id', 'postsite_id', 'postforum_id'];

  public function scopePegaTurmas(){
    return $query->get();
  }
}
