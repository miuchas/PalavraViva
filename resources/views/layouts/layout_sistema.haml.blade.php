!!!
%html{:lang => "en"}
  %head
    / META SECTION
    %title PalavraViva
    %meta{:content => "text/html; charset=US-ASCII", "http-equiv" => "Content-Type"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    %link{:href => "/favicon.ico", :rel => "icon", :type => "image/x-icon"}
    / END META SECTION
    / CSS INCLUDE
    %link#theme{:href => "/css/theme-default.css", :rel => "stylesheet", :type => "text/css"}
    / EOF CSS INCLUDE

  %body

    / START PAGE CONTAINER
    .page-container
      @include('sidebar.sidebar')
      / PAGE CONTENT
      .page-content
        @include('topo.topo')

        @yield('link_caminho')

        @include('alerts.alerts')

        @yield('corpo')


    / MESSAGE BOX - logout
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
    / END MESSAGE BOX
    / START PRELOADS
    %audio#audio-alert{:preload => "auto", :src => "/audio/alert.mp3"}
    %audio#audio-fail{:preload => "auto", :src => "/audio/fail.mp3"}
    / END PRELOADS
    / START SCRIPTS
    / START PLUGINS
    %script{:src => "/js/plugins/jquery/jquery.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/jquery/jquery-ui.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap.min.js", :type => "text/javascript"}
      / END PLUGINS
    / START THIS PAGE PLUGINS
    %script{:src => "/js/plugins/icheck/icheck.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/scrolltotop/scrolltopcontrol.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/morris/raphael-min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/morris/morris.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/rickshaw/d3.v3.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/rickshaw/rickshaw.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap-datepicker.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/owl/owl.carousel.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/moment.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/daterangepicker/daterangepicker.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap-file-input.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap-select.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/tagsinput/jquery.tagsinput.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap-timepicker.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap-colorpicker.js", :type => "text/javascript"}
    / END THIS PAGE PLUGINS

    %script{:src => "/js/plugins.js", :type => "text/javascript"}
    %script{:src => "/js/actions.js", :type => "text/javascript"}
