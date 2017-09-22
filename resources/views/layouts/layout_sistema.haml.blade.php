!!!
%html{:lang => "en"}
  %head
    %title PalavraViva
    %meta{:content => "text/html; charset=US-ASCII", "http-equiv" => "Content-Type"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    %link{:href => "/favicon.ico", :rel => "icon", :type => "image/x-icon"}

    %link#theme{:href => "/css/theme-default.css", :rel => "stylesheet", :type => "text/css"}

  %body
    .page-container
      @include('sidebar.sidebar')

      .page-content
        @include('topo.topo')

        @yield('link_caminho')

        @include('alerts.alerts')

        @yield('corpo')


    @include('login.logout_box')

    %audio#audio-alert{:preload => "auto", :src => "/audio/alert.mp3"}
    %audio#audio-fail{:preload => "auto", :src => "/audio/fail.mp3"}

    %script{:src => "/js/plugins/jquery/jquery.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/jquery/jquery-ui.min.js", :type => "text/javascript"}
    %script{:src => "/js/plugins/bootstrap/bootstrap.min.js", :type => "text/javascript"}

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

    %script{:src => "/js/plugins.js", :type => "text/javascript"}
    %script{:src => "/js/actions.js", :type => "text/javascript"}
