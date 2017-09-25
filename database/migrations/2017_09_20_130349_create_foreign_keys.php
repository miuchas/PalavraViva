<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
  /**
   *Cria as chaves estrangeiras das tabelas
  */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->foreign('id_turma')->references('id')->on('turma')->onDelete('cascade');
    });

    Schema::table('contato', function (Blueprint $table) {
      $table->foreign('id_usuario_atual')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('id_usuario_destino')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('monitores', function (Blueprint $table) {
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('id_turma')->references('id')->on('turma')->onDelete('cascade');
    });

    Schema::table('galeria_portifolio', function (Blueprint $table) {
      $table->foreign('id_portifolio')->references('id')->on('portifolio')->onDelete('cascade');
    });

    Schema::table('portifolio_alunos', function (Blueprint $table) {
      $table->foreign('id_portifolio')->references('id')->on('portifolio')->onDelete('cascade');
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('cobranca', function (Blueprint $table) {
      $table->foreign('id_aluno')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('lista_de_presenca', function (Blueprint $table) {
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('forum_da_turma', function (Blueprint $table) {
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('posts_do_site', function (Blueprint $table) {
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('posts_do_forum', function (Blueprint $table) {
      $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('id_topico')->references('id')->on('posts_do_forum')->onDelete('cascade');
    });
  }

  /**
   *Deleta as chaves estrangeiras das tabelas
  */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropForeign('users_id_turma_foreign');
    });

    Schema::table('contato', function (Blueprint $table) {
      $table->dropForeign('contato_id_usuario_foreign');
    });

    Schema::table('monitores', function (Blueprint $table) {
      $table->dropForeign('monitores_id_turma_foreign');
      $table->dropForeign('monitores_id_usuario_foreign');
    });

    Schema::table('galeria_portifolio', function (Blueprint $table) {
      $table->dropForeign('galeria_portifolio_id_portifolio_foreign');
    });

    Schema::table('portifolio_alunos', function (Blueprint $table) {
      $table->dropForeign('portifolio_alunos_id_portifolio_foreign');
      $table->dropForeign('portifolio_alunos_id_usuario_foreign');
    });

    Schema::table('cobranca', function (Blueprint $table) {
      $table->dropForeign('cobranca_id_aluno_foreign');
    });

    Schema::table('lista_de_presenca', function (Blueprint $table) {
      $table->dropForeign('lista_de_presenca_id_usuario_foreign');
    });

    Schema::table('forum_da_turma', function (Blueprint $table) {
      $table->dropForeign('forum_da_turma_id_usuario_foreign');
    });

    Schema::table('posts_do_site', function (Blueprint $table) {
      $table->dropForeign('posts_do_site_id_usuario_foreign');
    });

    Schema::table('posts_do_forum', function (Blueprint $table) {
      $table->dropForeign('posts_do_forum_id_topico_foreign');
      $table->dropForeign('posts_do_forum_id_usuario_foreign');
    });
  }
}
