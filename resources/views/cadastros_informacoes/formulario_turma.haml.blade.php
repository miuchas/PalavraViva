@extends('layout')
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
              %strong Turma
            %ul.panel-controls
              %li
                %a.panel-remove{:href => "#"}
                  %span.fa.fa-times
          .panel-body
            %p Cadastrar Turma
          .panel-body
            %input{ :type => "hidden", :name => "_token", :value => "{{{ csrf_token() }}}" }
            .form-group
              %label.col-md-3.col-xs-12.control-label Facebook
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-facebook
                  %input.form-control{:type => "text", :name=>"contato_facebook"}
                %span.help-block Link da Pagina/Grupo de facebook da turma

            .form-group
              %label.col-md-3.col-xs-12.control-label Modolo
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-puzzle-piece
                  %input.form-control{:type => "text", :name=>"modolo"}
                %span.help-block Modolo de ensino da turma

            .form-group
              %label.col-md-3.col-xs-12.control-label Dia
              .col-md-6.col-xs-12
                %select.form-control.select{:name=>"dia"}
                  %option{ :value => "Segunda" } Segunda
                  %option{ :value => "Terça" } Terça
                  %option{ :value => "Quarta" } Quarta
                  %option{ :value => "Quinta" } Quinta
                  %option{ :value => "Sexta" } Sexta
                  %option{ :value => "Sabado" } Sabado
                  %option{ :value => "Domingo" } Domingo
                %span.help-block Dia da semana em que essa turma tem aula

            .form-group
              %label.col-md-3.col-xs-12.control-label Horario
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-clock-o
                  %input.form-control{:type => "text", :name=>"horario"}
                %span.help-block Horario de aula da turma

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
