@extends('layouts.layout_login')
@section('corpo')
.login-box.animated.fadeInDown
  .login-body
    .login-title
      %strong Seja Bem vindo
    %form.form-horizontal{ :method => "post", :action=> "login" }
      {{ csrf_field() }}
      .form-group
        .col-md-12
          %input.form-control{:placeholder => "email", :type => "text", :name => "email"}
      .form-group
        .col-md-12
          %input.form-control{:placeholder => "password", :type => "password", :name => "password"}
      .form-group
        .col-md-4
          %a.btn.btn-link.btn-block{:href => "/password/reset"} Esqueceu a senha?
        .col-md-4
          %a.btn.btn-default.btn-block{:href => "/register"} Registrar
        .col-md-4
          %button.btn.btn-info.btn-block Entrar
@endsection
