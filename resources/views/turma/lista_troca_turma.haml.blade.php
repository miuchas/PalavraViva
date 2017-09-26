@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "/"} Home
    %a{:href => "/turmas"} Turmas
  %li.active
    Requisições de troca de turma
@endsection

@section('corpo')
.page-content-wrap
  .row
    .col-md-12
      .panel.panel-default
        .panel-heading
          %h3.panel-title
            %strong Turmas
        .panel-body
          -foreach( $alerts as $alert )
            .lista{ :style => "position: relative;" }
              %a.list-group-item{:href => "/turma/listar/".$turma->id}
                %span.contacts-title
                  %strong
                    =$alert->tipo
                %p
                  =$alert->descricao_basica
                %p
                  =$turma->obs
              .list-group-controls
                %a.btn.btn-danger.btn-rounded{:href => "/turma/remover/".$turma->id, :style => "margin: 5px;"}
                  %span.fa.fa-trash-o{ :style => "margin-right: 0px;" }

        .panel-footer
          %a.btn.btn-default.pull-right{ :href => "/turma/cadastrar" } Cadastrar uma nova turma
@endsection
