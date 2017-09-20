<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecaTable extends Migration
{
  public function up()
  {
    Schema::create('biblioteca', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nome_obra');
      $table->string('autor');
      $table->string('texto');
      $table->string('tipo')->nullable();
      $table->string('genero')->nullable();
      $table->string('indicacao_para_modolo')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('biblioteca');
  }
}
