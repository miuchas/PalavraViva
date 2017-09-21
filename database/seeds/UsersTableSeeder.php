<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Phelipe Evangelista Simim Diniz',
      'email' => 'phelipeevangelistasimimdiniz@gmail.com',
      'password' => bcrypt('Mah4cin8em'),
      'cpf' => '01623736609',
      'cep' => '32341290',
      'cidade' => 'Contagem',
      'rua' => 'Av. Guilhermino de Oliveira',
      'numero' => '82',
      'complemento' => 'Casa',
      'telefone' => '31999676396',
      'imagem' => '/images/avatar/15059393471505939347eu.jpg',
    ]);

    DB::table('users')->insert([
      'name' => 'Phelipe',
      'email' => 'phelipe@gmail.com',
      'password' => bcrypt('Mah4cin8em'),
      'cpf' => '01623736608',
      'cep' => '32341290',
      'cidade' => 'Contagem',
      'rua' => 'Av. Guilhermino de Oliveira',
      'numero' => '82',
      'complemento' => 'Casa',
      'telefone' => '31999676396',
      'imagem' => '/images/avatar/15059393471505939347eu.jpg',
    ]);

    DB::table('users')->insert([
      'name' => 'Phelipe2',
      'email' => 'phelipe2@gmail.com',
      'password' => bcrypt('Mah4cin8em'),
      'cpf' => '01623736607',
      'cep' => '32341290',
      'cidade' => 'Contagem',
      'rua' => 'Av. Guilhermino de Oliveira',
      'numero' => '82',
      'complemento' => 'Casa',
      'telefone' => '31999676396',
      'imagem' => '/images/avatar/15059393471505939347eu.jpg',
    ]);
  }
}
