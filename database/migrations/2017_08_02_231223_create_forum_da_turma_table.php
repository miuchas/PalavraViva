<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumDaTurmaTable extends Migration
{
  public function up()
  {
    Schema::create('forum_da_turma', function (Blueprint $table) {
      $table->increments('id');
      $table->string('assunto');
      $table->integer('id_usuario')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('forum_da_turma');
  }
}
