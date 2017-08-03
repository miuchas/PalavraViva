<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsDoForumTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts_do_forum', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_usuario')->unsigned();
      $table->integer('id_topico')->unsigned();
      $table->string('mensagem');
      $table->timestamps();

      $table->foreign('id_usuario')->references('id')->on('usuarios');
      $table->foreign('id_topico')->references('id')->on('posts_do_forum');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts_do_forum');
  }
}
