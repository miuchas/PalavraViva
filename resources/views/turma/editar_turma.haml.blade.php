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
      %form.form-horizontal{:action => "/turma/editar/".$turma->id, :method => "post"}
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
                  %input.form-control{:type => "text", :name=>"contato_facebook", :value=>$turma->contato_facebook}
                %span.help-block Link da Pagina/Grupo de facebook da turma

            .form-group
              %label.col-md-3.col-xs-12.control-label Modolo
              .col-md-6.col-xs-12
                %select.form-control.select{:name=>"modolo"}
                  %option{ :value => "0", :selected => $turma->modolo == "0" ? true : false } 0
                  %option{ :value => "1", :selected => $turma->modolo == "1" ? true : false } 1
                  %option{ :value => "2", :selected => $turma->modolo == "2" ? true : false } 2
                  %option{ :value => "3", :selected => $turma->modolo == "3" ? true : false } 3
                  %option{ :value => "4", :selected => $turma->modolo == "4" ? true : false } 4
                  %option{ :value => "5", :selected => $turma->modolo == "5" ? true : false } 5
                  %option{ :value => "6", :selected => $turma->modolo == "6" ? true : false } 6
                  %option{ :value => "7", :selected => $turma->modolo == "7" ? true : false } 7
                  %option{ :value => "8", :selected => $turma->modolo == "8" ? true : false } 8
                  %option{ :value => "9", :selected => $turma->modolo == "9" ? true : false } 9
                %span.help-block Modolo de ensino da turma

            .form-group
              %label.col-md-3.col-xs-12.control-label Dia
              .col-md-6.col-xs-12
                %select.form-control.select{:name=>"dia"}
                  %option{ :value => "Segunda", :selected => $turma->dia == "Segunda" ? true : false } Segunda
                  %option{ :value => "Terça", :selected => $turma->dia == "Terça" ? true : false  } Terça
                  %option{ :value => "Quarta", :selected => $turma->dia == "Quarta" ? true : false  } Quarta
                  %option{ :value => "Quinta", :selected => $turma->dia == "Quinta" ? true : false  } Quinta
                  %option{ :value => "Sexta", :selected => $turma->dia == "Sexta" ? true : false  } Sexta
                  %option{ :value => "Sabado", :selected => $turma->dia == "Sabado" ? true : false  } Sabado
                  %option{ :value => "Domingo", :selected => $turma->dia == "Domingo" ? true : false  } Domingo
                %span.help-block Dia da semana em que essa turma tem aula

            .form-group
              %label.col-md-3.col-xs-12.control-label Horario
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.glyphicon.glyphicon-time
                  %input.form-control{:type => "text", :name=>"horario", :value=>$turma->horario }
                %span.help-block Horario de aula da turma (formato 00:00)

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
