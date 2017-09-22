%ul.x-navigation.x-navigation-horizontal.x-navigation-panel
  / TOGGLE NAVIGATION
  %li.xn-icon-button
    %a.x-navigation-minimize{:href => "#"}
      %span.fa.fa-dedent
  / END TOGGLE NAVIGATION
  / SEARCH
  %li.xn-search
    %form{:role => "form"}
      %input{:name => "search", :placeholder => "Search...", :type => "text"}
  / END SEARCH
  / SIGN OUT
  %li.xn-icon-button.pull-right
    %a.mb-control{"data-box" => "#mb-signout", :href => "#"}
      %span.fa.fa-sign-out

  @include('topo.mensagens')
  @include('topo.tarefas')
