<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_do_site extends Model
{
  protected $table = 'posts_do_site';
  protected $fillable = ['assunto', 'image', 'mensagem', 'user_id'];

  public function scopePegaTurmas(){
    return $query->get();
  }
}
