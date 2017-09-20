@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "/"} Home
  %li
    %a{:href => "/turma/listar"} Turma
  %li.active
    Cadastrar Turma
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
                %select.form-control.select{:name=>"modolo"}
                  %option{ :value => "0" } 0
                  %option{ :value => "1" } 1
                  %option{ :value => "2" } 2
                  %option{ :value => "3" } 3
                  %option{ :value => "4" } 4
                  %option{ :value => "5" } 5
                  %option{ :value => "6" } 6
                  %option{ :value => "7" } 7
                  %option{ :value => "8" } 8
                  %option{ :value => "9" } 9
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
                    %span.glyphicon.glyphicon-time
                  %input.form-control{:type => "text", :name=>"horario"}
                %span.help-block Horario de aula da turma (formato 00:00)

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
