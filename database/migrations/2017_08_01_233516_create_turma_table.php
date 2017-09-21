<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
  public function up()
  {
    Schema::create('turma', function (Blueprint $table) {
      $table->increments('id');
      $table->string('contato_facebook');
    	$table->string('modolo');
      $table->enum('dia', [ 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo' ]);
      $table->string('horario');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('turma');
  }
}
