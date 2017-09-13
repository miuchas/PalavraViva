<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoresTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('monitores', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_usuario')->unsigned();
    	$table->integer('id_turma')->unsigned();
      $table->timestamps();

      $table->foreign('id_usuario')->references('id')->on('users');
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
    Schema::drop('monitores');
  }
}
