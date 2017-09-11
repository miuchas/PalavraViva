<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('usuarios', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('acesso');
      $table->string('nome');
      $table->string('senha');
      $table->string('reseta_senha')->nullable();
      $table->string('imagem')->nullable();
      $table->string('email')->unique();
      $table->string('cpf')->unique()->nullable();
      $table->string('cep')->nullable();
      $table->string('cidade')->nullable();
      $table->string('rua')->nullable();
      $table->string('numero')->nullable();
      $table->string('complemento')->nullable();
      $table->integer('telefone')->nullable();
      $table->boolean('mostrar_contato')->default(true);
      $table->boolean('bolsista')->default(false);
      $table->integer('porcentagem')->nullable();
      $table->integer('id_turma')->unsigned()->nullable();
      $table->timestamps();

      $table->foreign('id_turma')->references('id')->on('turma');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('usuarios');
  }
}
