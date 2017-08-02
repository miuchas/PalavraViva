<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaPortifolioTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('galeria_portifolio', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_portifolio')->unsigned();
    	$table->string('imagem');
    	$table->string('descricao')->nullable();
      $table->timestamps();

      $table->foreign('id_portifolio')->references('id')->on('portifolio');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('galeria_portifolio');
  }
}
