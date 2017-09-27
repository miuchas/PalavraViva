<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoTable extends Migration
{
  public function up()
  {
    Schema::create('contato', function (Blueprint $table) {
      $table->increments('id');
      $table->string('descricao_contato');
      $table->string('contato');
      $table->integer('user_id')->unsigned();
      $table->integer('id_usuario_destino')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('contato');
  }
}
