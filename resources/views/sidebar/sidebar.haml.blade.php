.page-sidebar
  %ul.x-navigation
    %li.xn-logo
      %a{:href => "index.html"} Joli Admin
      %a.x-navigation-control{:href => "#"}
    %li.xn-profile
      %a.profile-mini{:href => "#"}
        %img{:alt => @Auth::user()->name, :src => @Auth::user()->imagem }
      .profile
        .profile-image
          %img{:alt => @Auth::user()->name, :src => @Auth::user()->imagem }
        .profile-data
          .profile-data-name {{ Auth::user()->name }}
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Home
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Informações Cadastrais
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Verificar cobrança
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Gerar cobrança
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Verificar pendências
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Trocar permissão
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Tornar Monitor
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Tornar Professor
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Portifólio
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Adicionar eventos
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Consultar eventos
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
            Ver turma
        %li
          %a{:href => "/turma/listar"}
            %span.fa.fa-user
            Editar turmas
        %li
          %a{:href => "/turma/troca-turma"}
            %span.fa.fa-image
            Requisitar troca de turma
        %li
          %a{:href => "/turma/listar-troca-turma"}
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
            %span.fa.fa-user
            Buscar textos
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Cadastra textos
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Forum
      %ul
        %li
          %a{:href => "#"}
            %span.fa.fa-image
            Forum da turma
    %li
      %a{:href => "#"}
        %span.fa.fa-desktop
        %span.xn-text Contato
