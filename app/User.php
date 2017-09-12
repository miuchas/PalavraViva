<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
        'reseta_senha', 'imagem', 'cep', 'cidade', 'rua', 'numero',
        'complemento', 'telefone', 'mostrar_contato', 'bolsista', 'acesso',
        'porcentagem', 'id_turma',
      ];

    protected $hidden = [
        'password', 'remember_token', 'cpf',
    ];

    public function turma(){
      return $this->belongsTo(Turma::class);
    }
}
