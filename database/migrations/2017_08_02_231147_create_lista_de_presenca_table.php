<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaDePresencaTable extends Migration
{
  public function up()
  {
    Schema::create('lista_de_presenca', function (Blueprint $table) {
      $table->increments('id');
      $table->boolean('presenca')->default(false);
      $table->integer('id_turma')->unsigned()->nullable();
      $table->integer('id_usuario')->unsigned()->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('lista_de_presenca');
  }
}
