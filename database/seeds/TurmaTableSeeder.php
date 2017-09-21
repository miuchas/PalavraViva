<?php

use Illuminate\Database\Seeder;

class TurmaTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 0,
      'dia' => 'Segunda',
      'horario' => '10:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 1,
      'dia' => 'Terça',
      'horario' => '11:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 2,
      'dia' => 'Quarta',
      'horario' => '12:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 3,
      'dia' => 'Quinta',
      'horario' => '13:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 4,
      'dia' => 'Sexta',
      'horario' => '14:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 5,
      'dia' => 'Sabado',
      'horario' => '15:00',
    ]);

    DB::table('turma')->insert([
      'contato_facebook' => "facebook_da_turma",
      'modolo' => 6,
      'dia' => 'Domingo',
      'horario' => '16:00',
    ]);
  }
}
