<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortifolioTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('portifolio', function (Blueprint $table) {
      $table->increments('id');
      $table->string('apresentacoes');
      $table->string('sinopse')->nullable();
      $table->string('descricao_evento')->nullable();
      $table->string('data_apresentacao');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('portifolio');
  }
}
