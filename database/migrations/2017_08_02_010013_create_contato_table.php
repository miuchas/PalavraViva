<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contato', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_aluno')->unsigned();
      $table->string('descricao_contato');
      $table->string('contato');
      $table->timestamps();
      $table->foreign('id_aluno')->references('id')->on('usuarios');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('contato');
  }
}
