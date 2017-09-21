.page-sidebar
  %ul.x-navigation
    %li.xn-logo
      %a{:href => "index.html"} Joli Admin
      %a.x-navigation-control{:href => "#"}
    %li.xn-profile
      %a.profile-mini{:href => "#"}
        %img{:alt => "John Doe", :src => @Auth::user()->imagem }
      .profile
        .profile-image
          %img{:alt => "John Doe", :src => @Auth::user()->imagem }
        .profile-data
          .profile-data-name {{ Auth::user()->name }}
    %li.active
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Portifólio
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Verificar cobrança
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Trocar permissão
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Turmas
      %ul
        %li
          %a{:href => "/turma/cadastrar"}
            %span.fa.fa-image
            Adicionar turma
        %li
          %a{:href => "/turma/listar"}
            %span.fa.fa-user
            Editar turmas
        %li
          %a{:href => "/turma/troca-turma"}
            %span.fa.fa-image
            Requisitar troca de turma
        %li
          %a{:href => "/turma/aprovar-troca-turma"}
            %span.fa.fa-image
            Aprovar troca de turma
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Controle de frequência
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Verificar frequência
        %li
          %a{:href => "#"}
            %span.fa.fa-user
            fazer chamada
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Cobrança
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Gerar cobranças
        %li
          %a{:href => "#"}
            %span.fa.fa-user
            Verificar pendencias
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Biblioteca
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Cadastra textos
        %li
          %a{:href => "#"}
            %span.fa.fa-user
            Verificar pendencias
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Forum
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Forum da turma
