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
              %a.list-group-item{:href => "#"}
                %span{ :style => "display: inline-block" }
                  %img{ :src => @Auth::user()->imagem, :style => "max-width: 92px; margin-top: -14px; border: 1px solid #E5E5E5; border-radius: 4px;"}
                %span.contacts-title{ :style => "display: inline-block" }
                  %strong
                    =$alert->tipo
                  %p
                    =$alert->descricao_basica
                  -if ( $alert->obs != "" )
                    %p
                      Obs.:
                      =$alert->obs
              .list-group-controls
                %a.btn.btn-success.btn-rounded{:href => "/turma/aprovar-troca-turma/".$alert->id, :style => "margin-top: 28px;", "data-toggle" => "tooltip", "data-placement" => "bottom", :title => "Aprovar troca de turma" }
                  %span.fa.fa-check{ :style => "margin-right: 0px;" }
                %a.btn.btn-danger.btn-rounded{:href => "/turma/remove-troca-turma/".$alert->id, :style => "margin-top: 28px; margin-right: 10px;", "data-toggle" => "tooltip", "data-placement" => "bottom", :title => "Excluir requisição" }
                  %span.fa.fa-trash-o{ :style => "margin-right: 0px;" }

        .panel-footer
          %a.btn.btn-default.pull-right{ :href => "/turma/cadastrar" } Cadastrar uma nova turma
@endsection
