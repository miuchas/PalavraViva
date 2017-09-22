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
        %img.pull-left{:alt => "John Doe", :src => "/assets/images/users/user2.jpg"}/
        %span.contacts-title John Doe
        %p Praesent placerat tellus id augue condimentum
      %a.list-group-item{:href => "#"}
        .list-group-status.status-away
        %img.pull-left{:alt => "Dmitry Ivaniuk", :src => "/assets/images/users/user.jpg"}/
        %span.contacts-title Dmitry Ivaniuk
        %p Donec risus sapien, sagittis et magna quis
      %a.list-group-item{:href => "#"}
        .list-group-status.status-away
        %img.pull-left{:alt => "Nadia Ali", :src => "/assets/images/users/user3.jpg"}/
        %span.contacts-title Nadia Ali
        %p Mauris vel eros ut nunc rhoncus cursus sed
      %a.list-group-item{:href => "#"}
        .list-group-status.status-offline
        %img.pull-left{:alt => "Darth Vader", :src => "/assets/images/users/user6.jpg"}/
        %span.contacts-title Darth Vader
        %p I want my money back!
    .panel-footer.text-center
      %a{:href => "pages-messages.html"} Show all messages
