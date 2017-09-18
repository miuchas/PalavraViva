@extends('layouts.layout_sistema')
@section('link_caminho')
%ul.breadcrumb
  %li.active Home
@endsection

@section('corpo')
.page-content-wrap
  .row
    .col-md-12
      %form.form-horizontal
        .panel.panel-default
          .panel-heading
            %h3.panel-title
              %strong Bem Vindo
              {{ Auth::user()->name }}
          .panel-body
            Home
@endsection
