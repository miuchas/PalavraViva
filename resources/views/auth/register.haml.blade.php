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
            %input{ :type => "hidden", :name => "_token", :value => "{{ csrf_token() }}" }
            /CADASTRO
            .form-group
              %label.col-md-3.col-xs-12.control-label Nome
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-user
                  %input.form-control{:type => "text", :name=>"name", :value =>  @old('name'), :class => $errors->has('name') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('name')) )
                  %label#site-error.error{ :for => "name"}
                    =$errors->first('name')
                %span.help-block Nome completo

            .form-group
              %label.col-md-3.col-xs-12.control-label Email
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-envelope-o
                  %input.form-control{:type => "text", :name=>"email", :value =>  @old('email'), :class => $errors->has('email') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('email')) )
                  %label#site-error.error{ :for => "email"}
                    =$errors->first('email')
                %span.help-block Email


            .form-group
              %label.col-md-3.col-xs-12.control-label Senha
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-lock
                  %input.form-control{:type => "password", :name=>"password"}
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
              %label.col-md-3.col-xs-12.control-label CPF
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-list-alt
                  %input.form-control{:type => "text", :name=>"cpf", :value =>  @old('cpf'), :class => $errors->has('cpf') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('cpf')) )
                  %label#site-error.error{ :for => "cpf"}
                    =$errors->first('cpf')
                %span.help-block CPF

            .form-group
              %label.col-md-3.col-xs-12.control-label Foto
              .col-md-6.col-xs-12
                %a.file-input-wrapper.btn.btn-default.fileinput.btn-primary
                  %span Buscar Arquivo
                  %input#filename.fileinput.btn-primary{:name => "filename", :style => "left: -179.25px; top: 8px;", :title => "Buscar Imagem", :type => "file"}
                  %input.form-control.hidden{:type => "text", :name=>"imagem"}
                %span.help-block Foto do perfil

          .panel-body
            %p Endereço

          .panel-body
            .form-group
              %label.col-md-3.col-xs-12.control-label CEP
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control{:type => "text", :name=>"cep", :value =>  @old('cep'), :class => $errors->has('cep') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('cep')) )
                  %label#site-error.error{ :for => "cep"}
                    =$errors->first('cep')
                %span.help-block CEP

            .form-group
              %label.col-md-3.col-xs-12.control-label Cidade
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control{:type => "text", :name=>"cidade", :value =>  @old('cidade'), :class => $errors->has('cidade') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('cidade')) )
                  %label#site-error.error{ :for => "cidade"}
                    =$errors->first('cidade')
                %span.help-block Cidade

            .form-group
              %label.col-md-3.col-xs-12.control-label Rua
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control{:type => "text", :name=>"rua", :value =>  @old('rua'), :class => $errors->has('rua') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('rua')) )
                  %label#site-error.error{ :for => "rua"}
                    =$errors->first('rua')
                %span.help-block Rua

            .form-group
              %label.col-md-3.col-xs-12.control-label Numero
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control{:type => "text", :name=>"numero", :value =>  @old('numero'), :class => $errors->has('numero') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('numero')) )
                  %label#site-error.error{ :for => "numero"}
                    =$errors->first('numero')
                %span.help-block Numero

            .form-group
              %label.col-md-3.col-xs-12.control-label Complemento
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-map-marker
                  %input.form-control{:type => "text", :name=>"complemento", :value =>  @old('complemento'), :class => $errors->has('complemento') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('complemento')) )
                  %label#site-error.error{ :for => "complemento"}
                    =$errors->first('complemento')
                %span.help-block Complemento casa, apartamento, bloco...

            .form-group
              %label.col-md-3.col-xs-12.control-label Telefone
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-phone
                  %input.form-control{:type => "text", :name=>"telefone", :value =>  @old('telefone'), :class => $errors->has('telefone') ? "error" : ""}
                -if( (count($errors) > 0) && ($errors->has('telefone')) )
                  %label#site-error.error{ :for => "telefone"}
                    =$errors->first('telefone')
                %span.help-block Telefone Fixo / Celular

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
