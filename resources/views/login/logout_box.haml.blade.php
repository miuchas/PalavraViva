#mb-signout.message-box.animated.fadeIn{"data-sound" => "alert"}
  .mb-container
    .mb-middle
      .mb-title
        %span.fa.fa-sign-out
        Deseja realmente
        %strong sair
        ?
      .mb-content
        %p Pressione o botão não para continuar conectado.
        %p Pressione o botão sim para sair do sistema
      .mb-footer
        .pull-right
          %a.btn.btn-success.btn-lg{:href => "/logout", :onclick => "event.preventDefault(); document.getElementById('logout-form').submit();"} Sim
          %form#logout-form.hidden{ :action => "/logout", :method => "POST" }
            {{ csrf_field() }}
          %button.btn.btn-default.btn-lg.mb-control-close Não
