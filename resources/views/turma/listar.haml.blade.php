@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "/"} Home
  %li.active
    Turmas
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
          -foreach( $turmas as $turma )
            .lista{ :style => "position: relative;" }
              %a.list-group-item{:href => "/turma/listar/".$turma->id}
                %span.contacts-title
                  %strong
                    =$turma->dia
                %p
                  Turma do modolo
                  =$turma->modolo
                  \-
                  =$turma->horario
              .list-group-controls
                %a.btn.btn-danger.btn-rounded{:href => "/turma/remover/".$turma->id, :style => "margin: 5px;"}
                  %span.fa.fa-trash-o{ :style => "margin-right: 0px;" }

        .panel-footer
          %a.btn.btn-default.pull-right{ :href => "/turma/cadastrar" } Cadastrar uma nova turma
@endsection
