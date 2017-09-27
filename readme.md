<p align="center"><img style="max-width:100%;max-height: 200px;" src="https://scontent.fplu1-1.fna.fbcdn.net/v/t1.0-9/426215_3395503243833_1459338326_n.jpg?oh=a04df4b05da9035daa6c5dde331138b8&oe=59EEBAA8"></p>

## Sobre o projeto

Ao copiar o projeto
- npm install
- composer install

## Usar função scope nos models

A função deve possuir o prefixo scope e ser declarada em camelcase
Ex.:
  public function scopePegaUsuariosAtivos($query){
    return $query->where("usuario", "ativo")->get();
  }
Essa função cria uma query basica que define parametros iniciais para facilitar a consulta
quando a função for chamada ela deve ser chamada sem o scope e começando o camel a partir da proxima letra

Ex.:
  Usuario::pegaUsuariosAtivos();

**Compilador css/js diretamente pelo npm**
- npm run watch

**Esquema de permissões**
- administrador - 4
- professor - 2
- monitor - 1
- aluno - 0

<!--
  Regras:
  turma
  usuarios
  contato
  monitores
  biblioteca
  portifolio
  galeria
  portifolio_alunos
  cobranca
  lista_de_presenca
  forum_da_turma
  posts_do_site
  posts_do_forum
-->
