<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaPortifolioTable extends Migration
{
  public function up()
  {
    Schema::create('galeria_portifolio', function (Blueprint $table) {
      $table->increments('id');
    	$table->string('imagem');
    	$table->string('descricao')->nullable();
      $table->integer('id_portifolio')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('galeria_portifolio');
  }
}
