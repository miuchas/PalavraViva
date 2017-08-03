<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaDePresencaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('lista_de_presenca', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_turma')->unsigned()->nullable();
      $table->integer('id_usuario')->unsigned()->nullable();
      $table->boolean('presenca')->default(false);
      $table->date('data');
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
    Schema::dropIfExists('lista_de_presenca');
  }
}
