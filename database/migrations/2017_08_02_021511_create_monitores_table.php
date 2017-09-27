<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoresTable extends Migration
{
  public function up()
  {
    Schema::create('monitores', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
    	$table->integer('turma_id')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('monitores');
  }
}
