<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumDaTurmaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('forum_da_turma', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_usuario')->unsigned();
      $table->string('assunto');
      $table->timestamps();

      $table->foreign('id_usuario')->references('id')->on('usuarios');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('forum_da_turma');
  }
}
