<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortifolioAlunosTable extends Migration
{
  public function up()
  {
    Schema::create('portifolio_alunos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_portifolio')->unsigned();
      $table->integer('id_usuario')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('portifolio_alunos');
  }
}
