!!!
%html{:lang => "en"}
  %head
    %title PalavraViva
  %body
    @include('sidebar')
    @include('topo')
    .page-container

      @yield('corpo')
