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
      $table->integer('portifolio_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('portifolio_alunos');
  }
}
