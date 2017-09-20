<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsDoSiteTable extends Migration
{
  public function up()
  {
    Schema::create('posts_do_site', function (Blueprint $table) {
      $table->increments('id');
      $table->string('assunto');
      $table->string('image');
      $table->string('mensagem');
      $table->integer('id_usuario')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('posts_do_site');
  }
}
