%ul.x-navigation.x-navigation-horizontal.x-navigation-panel
  / TOGGLE NAVIGATION
  %li.xn-icon-button
    %a.x-navigation-minimize{:href => "#"}
      %span.fa.fa-dedent
  / END TOGGLE NAVIGATION
  / SEARCH
  %li.xn-search
    %form{:role => "form"}
      %input{:name => "search", :placeholder => "Search...", :type => "text"}/
  / END SEARCH
  / SIGN OUT
  %li.xn-icon-button.pull-right
    %a.mb-control{"data-box" => "#mb-signout", :href => "#"}
      %span.fa.fa-sign-out
  / END SIGN OUT
  / MESSAGES
  %li.xn-icon-button.pull-right
    %a{:href => "#"}
      %span.fa.fa-comments
    .informer.informer-danger 4
    .panel.panel-primary.animated.zoomIn.xn-drop-left.xn-panel-dragging
      .panel-heading
        %h3.panel-title
          %span.fa.fa-comments
          Messages
        .pull-right
          %span.label.label-danger 4 new
      .panel-body.list-group.list-group-contacts.scroll{:style => "height: 200px;"}
        %a.list-group-item{:href => "#"}
          .list-group-status.status-online
          %img.pull-left{:alt => "John Doe", :src => "assets/images/users/user2.jpg"}/
          %span.contacts-title John Doe
          %p Praesent placerat tellus id augue condimentum
        %a.list-group-item{:href => "#"}
          .list-group-status.status-away
          %img.pull-left{:alt => "Dmitry Ivaniuk", :src => "assets/images/users/user.jpg"}/
          %span.contacts-title Dmitry Ivaniuk
          %p Donec risus sapien, sagittis et magna quis
        %a.list-group-item{:href => "#"}
          .list-group-status.status-away
          %img.pull-left{:alt => "Nadia Ali", :src => "assets/images/users/user3.jpg"}/
          %span.contacts-title Nadia Ali
          %p Mauris vel eros ut nunc rhoncus cursus sed
        %a.list-group-item{:href => "#"}
          .list-group-status.status-offline
          %img.pull-left{:alt => "Darth Vader", :src => "assets/images/users/user6.jpg"}/
          %span.contacts-title Darth Vader
          %p I want my money back!
      .panel-footer.text-center
        %a{:href => "pages-messages.html"} Show all messages
  / END MESSAGES
  / TASKS
  %li.xn-icon-button.pull-right
    %a{:href => "#"}
      %span.fa.fa-tasks
    .informer.informer-warning 3
    .panel.panel-primary.animated.zoomIn.xn-drop-left.xn-panel-dragging
      .panel-heading
        %h3.panel-title
          %span.fa.fa-tasks
          Tasks
        .pull-right
          %span.label.label-warning 3 active
      .panel-body.list-group.scroll{:style => "height: 200px;"}
        %a.list-group-item{:href => "#"}
          %strong Phasellus augue arcu, elementum
          .progress.progress-small.progress-striped.active
            .progress-bar.progress-bar-danger{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 50%;"} 50%
          %small.text-muted John Doe, 25 Sep 2014 / 50%
        %a.list-group-item{:href => "#"}
          %strong Aenean ac cursus
          .progress.progress-small.progress-striped.active
            .progress-bar.progress-bar-warning{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "80", :role => "progressbar", :style => "width: 80%;"} 80%
          %small.text-muted Dmitry Ivaniuk, 24 Sep 2014 / 80%
        %a.list-group-item{:href => "#"}
          %strong Lorem ipsum dolor
          .progress.progress-small.progress-striped.active
            .progress-bar.progress-bar-success{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "95", :role => "progressbar", :style => "width: 95%;"} 95%
          %small.text-muted John Doe, 23 Sep 2014 / 95%
        %a.list-group-item{:href => "#"}
          %strong Cras suscipit ac quam at tincidunt.
          .progress.progress-small
            .progress-bar{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "100", :role => "progressbar", :style => "width: 100%;"} 100%
          %small.text-muted John Doe, 21 Sep 2014 /
          %small.text-success Done
      .panel-footer.text-center
        %a{:href => "pages-tasks.html"} Show all tasks
  / END TASKS
