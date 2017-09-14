@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "#"} Home
  %li
    %a{:href => "#"} Forms Stuff
  %li
    %a{:href => "#"} Form Layout
  %li.active One Column
@endsection

@section('corpo')
.page-content-wrap
  .row
    .col-md-12
      %form.form-horizontal{:action => "/turma/adicionar", :method => "post"}
        .panel.panel-default
          .panel-heading
            %h3.panel-title
              %strong Listar turmas
          .panel-body
            .list-group.border-bottom
              -foreach( $turmas as $turma )
                %a.list-group-item{:href => $turma->id}
                  Turma do modolo
                  =$turma->modolo
                  \-
                  =$turma->dia
                  \-
                  =$turma->horario



@endsection
