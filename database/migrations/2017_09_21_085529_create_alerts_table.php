<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
  public function up()
  {
    Schema::create('alerts', function (Blueprint $table) {
      $table->increments('id');
      $table->enum('tipo', ['Requisicao', 'Alerta', 'Confirmacao', 'Notificacao']);
      $table->string('descricao_basica');
      $table->string('obs');//descrição adicional que pode ser feita pelo usuario
      $table->string('comando'); // passar um comando a ser executado ex.: <nome_comando>TrocaTurma|<usuario_id>|<turma_id>
      $table->boolean('confirmacao');//necessita de confirmação para executar a ação
      $table->boolean('visualizacao');//confirmar visualização (apenas alertas rotineiros)
      $table->integer('user_id');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('alerts');
  }
}
