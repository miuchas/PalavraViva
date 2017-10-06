.page-sidebar
  %ul.x-navigation
    %li.xn-logo
      %a{:href => "index.html"}
        -if(Auth::user()->acesso == 3)
          Administrador
        -if(Auth::user()->acesso == 2)
          Professor
        -if(Auth::user()->acesso == 1)
          Monitor
        -if(Auth::user()->acesso == 0)
          Aluno

      %a.x-navigation-control{:href => "#"}
    %li.xn-profile
      %a.profile-mini{:href => "#"}
        %img{:alt => @Auth::user()->name, :src => @Auth::user()->imagem }
      .profile
        .profile-image
          %img{:alt => @Auth::user()->name, :src => @Auth::user()->imagem }
        .profile-data
          .profile-data-name {{ Auth::user()->name }}

    @include('sidebar.menus')
