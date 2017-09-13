@extends('layouts.layout_login')
@section('corpo')
.page-content-wrap
  .row
    .col-md-3
    .col-md-6
      %form.form-horizontal{:action => "register", :method => "post"}
        .panel.panel-default
          .panel-heading
            %h3.panel-title
              %strong Turma
          .panel-body
            %p Cadastrar dados do usuario
          .panel-body
            %input{ :type => "hidden", :name => "_token", :value => "{{{ csrf_token() }}}" }
            /CADASTRO
            .form-group
              %label.col-md-3.col-xs-12.control-label Nome
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-user
                  %input.form-control{:type => "text", :name=>"name"}
                %span.help-block Nome completo

            .form-group
              %label.col-md-3.col-xs-12.control-label Email
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-envelope-o
                  %input.form-control{:type => "text", :name=>"email"}
                %span.help-block Email

            .form-group
              %label.col-md-3.col-xs-12.control-label Senha
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-lock
                  %input.form-control#password-confirm{:type => "password", :name=>"password"}
                %span.help-block Senha

            .form-group
              %label.col-md-3.col-xs-12.control-label Confirma senha
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-lock
                  %input.form-control#password-confirm{:type => "password", :name=>"password_confirmation"}
                %span.help-block Confirma senha

            .form-group
              %label.col-md-3.col-xs-12.control-label File
              .col-md-6.col-xs-12
                %a.file-input-wrapper.btn.btn-default.fileinput.btn-primary
                  %span Buscar Arquivo
                  %input#filename.fileinput.btn-primary{:name => "filename", :style => "left: -179.25px; top: 8px;", :title => "Buscar Imagem", :type => "file"}
                  %input.form-control.hidden{:type => "text", :name=>"imagem"}
                %span.help-block Buscar Arquivo
          .panel-body
            %p Endereço
          .panel-body
            .form-group
              %label.col-md-3.col-xs-12.control-label CPF
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-list-alt
                  %input.form-control#password-confirm{:type => "text", :name=>"cpf"}
                %span.help-block CPF

            .form-group
              %label.col-md-3.col-xs-12.control-label CEP
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control#password-confirm{:type => "text", :name=>"cep"}
                %span.help-block CEP

            .form-group
              %label.col-md-3.col-xs-12.control-label Cidade
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control#password-confirm{:type => "text", :name=>"cidade"}
                %span.help-block Cidade

            .form-group
              %label.col-md-3.col-xs-12.control-label Rua
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control#password-confirm{:type => "text", :name=>"rua"}
                %span.help-block Rua

            .form-group
              %label.col-md-3.col-xs-12.control-label Numero
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control#password-confirm{:type => "text", :name=>"numero"}
                %span.help-block Numero

            .form-group
              %label.col-md-3.col-xs-12.control-label Complemento
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control#password-confirm{:type => "text", :name=>"complemento"}
                %span.help-block Complemento

            .form-group
              %label.col-md-3.col-xs-12.control-label Telefone
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-phone
                  %input.form-control#password-confirm{:type => "text", :name=>"telefone"}
                %span.help-block Telefone

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
