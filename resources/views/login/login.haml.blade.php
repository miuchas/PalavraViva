@extends('layouts.login_layout')
@section('corpo')
.login-box.animated.fadeInDown
  .login-body
    .login-title
      %strong Seja Bem vindo
    %form.form-horizontal{:action => "index.html", :method => "post"}
      .form-group
        .col-md-12
          %input.form-control{:placeholder => "email", :type => "text"}
      .form-group
        .col-md-12
          %input.form-control{:placeholder => "password", :type => "password"}
      .form-group
        .col-md-6
          %a.btn.btn-link.btn-block{:href => "#"} Esqueceu a senha?
        .col-md-6
          %button.btn.btn-info.btn-block Entrar
@endsection
