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
      $table->enum('acesso', ['administrador', 'professor', 'monitor', 'aluno']);
      $table->integer('id_turma')->unsigned();
      $table->string('nome');
      $table->string('senha');
      $table->string('imagem')->nullable();
      $table->string('email')->unique();
      $table->string('cpf')->nullable();
      $table->string('endereço completo')->nullable();
      $table->string('Cep')->nullable();
      $table->string('Cidade')->nullable();
      $table->string('Rua')->nullable();
      $table->string('Numero')->nullable();
      $table->string('Complemento')->nullable();
      $table->integer('telefone')->nullable();
      $table->boolean('mostrar_contato')->default(true);
      $table->boolean('bolsista')->default(true);
      $table->integer('porcentagem')->nullable();
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
