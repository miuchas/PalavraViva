<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsDoForumTable extends Migration
{
  public function up()
  {
    Schema::create('posts_do_forum', function (Blueprint $table) {
      $table->increments('id');
      $table->string('mensagem');
      $table->integer('user_id')->unsigned();
      $table->integer('postsite_id')->unsigned();
      $table->integer('postforum_id')->unsigned();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('posts_do_forum');
  }
}
