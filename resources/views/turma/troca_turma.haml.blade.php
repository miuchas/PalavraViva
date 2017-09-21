@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "/"} Home
  %li
    %a{:href => "/turma/listar"} Turmas
  %li.active
    Requisição de troca de turma
@endsection

@section('corpo')
.page-content-wrap
  .row
    .col-md-12
      %form.form-horizontal{:action => "/turma/troca-turma/".@Auth::user()->id, :method => "post"}
        .panel.panel-default
          .panel-heading
            %h3.panel-title
              %strong Turma
          .panel-body
            %p Requisitar troca de turma
          .panel-body
            %input{ :type => "hidden", :name => "_token", :value => "{{{ csrf_token() }}}" }

            .form-group
              %label.col-md-3.col-xs-12.control-label Nova Turma
              .col-md-6.col-xs-12
                %select.form-control.select{:name=>"turma"}
                  -foreach( $turmas as $turma )
                    %option{ :value => $turma->id }
                      Turma do modolo
                      =$turma->modolo." - "
                      =$turma->dia. " - "
                      =$turma->horario
                %span.help-block Modolo de ensino da turma

            .form-group
              %label.col-md-3.col-xs-12.control-label Observação
              .col-md-6.col-xs-12
                .input-group.col-xs-12
                  %textarea.form-control{ :rows => "5", :name=>"obs", :style => 'resize: none', :value =>  @old('obs'), :class => $errors->has('obs') ? "error" : "" }
                -if( (count($errors) > 0) && ($errors->has('obs')) )
                  %label#site-error.error{ :for => "obs"}
                    =$errors->first('obs')
                %span.help-block Adicione comentarios sobre o porque da troca de turma

          .panel-footer
            %button.btn.btn-default Limpar formulario
            %button.btn.btn-primary.pull-right Confirmar
@endsection
