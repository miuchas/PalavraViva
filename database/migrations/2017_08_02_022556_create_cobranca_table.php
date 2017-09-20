<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrancaTable extends Migration
{
  public function up()
  {
    Schema::create('cobranca', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('valor');
      $table->enum('tipo', ['mensalidade', 'evento']);
      $table->date('data');
      $table->boolean('pago')->default(false);
      $table->integer('id_aluno')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('cobranca');
  }
}
