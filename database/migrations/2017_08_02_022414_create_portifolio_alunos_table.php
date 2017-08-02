<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortifolioAlunosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('portifolio_alunos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_portifolio')->unsigned();
      $table->integer('id_aluno')->unsigned();
      $table->timestamps();

      $table->foreign('id_portifolio')->references('id')->on('portifolio');
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
    Schema::drop('portifolio_alunos');
  }
}
