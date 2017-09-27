<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('reseta_senha')->nullable();
      $table->string('imagem')->nullable();
      $table->string('cpf')->unique();
      $table->string('cep')->nullable();
      $table->string('cidade')->nullable();
      $table->string('rua')->nullable();
      $table->string('numero')->nullable();
      $table->string('complemento')->nullable();
      $table->string('telefone')->nullable();
      $table->boolean('mostrar_contato')->default(true);//mostrar facebook/telefone
      $table->boolean('bolsista')->default(false);
      $table->integer('acesso')->default(0);//permissão
      $table->integer('porcentagem')->nullable();
      $table->boolean('ativo')->default(1);//não saiu da escola
      $table->boolean('confirmado')->default(0);//não confirmou a matricula
      $table->integer('turma_id')->unsigned()->nullable();
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
}
