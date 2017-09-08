.page-sidebar
  %ul.x-navigation
    %li.xn-logo
      %a{:href => "index.html"} Joli Admin
      %a.x-navigation-control{:href => "#"}
    %li.xn-profile
      %a.profile-mini{:href => "#"}
        %img{:alt => "John Doe", :src => "assets/images/users/avatar.jpg"}/
      .profile
        .profile-image
          %img{:alt => "John Doe", :src => "assets/images/users/avatar.jpg"}/
        .profile-data
          .profile-data-name John Doe
          .profile-data-title Web Developer/Designer
        .profile-controls
          %a.profile-control-left{:href => "pages-profile.html"}
            %span.fa.fa-info
          %a.profile-control-right{:href => "pages-messages.html"}
            %span.fa.fa-envelope
    %li.xn-title Navigation
    %li.active
      %a{:href => "index.html"}
        %span.fa.fa-desktop
        %span.xn-text Dashboard
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-files-o
        %span.xn-text Pages
      %ul
        %li
          %a{:href => "pages-gallery.html"}
            %span.fa.fa-image
            Gallery
        %li
          %a{:href => "pages-profile.html"}
            %span.fa.fa-user
            Profile
        %li
          %a{:href => "pages-address-book.html"}
            %span.fa.fa-users
            Address Book
        %li.xn-openable
          %a{:href => "#"}
            %span.fa.fa-clock-o
            Timeline
          %ul
            %li
              %a{:href => "pages-timeline.html"}
                %span.fa.fa-align-center
                Default
            %li
              %a{:href => "pages-timeline-simple.html"}
                %span.fa.fa-align-justify
                Full Width
        %li.xn-openable
          %a{:href => "#"}
            %span.fa.fa-envelope
            Mailbox
          %ul
            %li
              %a{:href => "pages-mailbox-inbox.html"}
                %span.fa.fa-inbox
                Inbox
            %li
              %a{:href => "pages-mailbox-message.html"}
                %span.fa.fa-file-text
                Message
            %li
              %a{:href => "pages-mailbox-compose.html"}
                %span.fa.fa-pencil
                Compose
        %li
          %a{:href => "pages-messages.html"}
            %span.fa.fa-comments
            Messages
        %li
          %a{:href => "pages-calendar.html"}
            %span.fa.fa-calendar
            Calendar
        %li
          %a{:href => "pages-tasks.html"}
            %span.fa.fa-edit
            Tasks
        %li
          %a{:href => "pages-content-table.html"}
            %span.fa.fa-columns
            Content Table
        %li
          %a{:href => "pages-faq.html"}
            %span.fa.fa-question-circle
            FAQ
        %li
          %a{:href => "pages-search.html"}
            %span.fa.fa-search
            Search
        %li.xn-openable
          %a{:href => "#"}
            %span.fa.fa-file
            Blog
          %ul
            %li
              %a{:href => "pages-blog-list.html"}
                %span.fa.fa-copy
                List of Posts
            %li
              %a{:href => "pages-blog-post.html"}
                %span.fa.fa-file-o>
                Single Post
        %li.xn-openable
          %a{:href => "#"}
            %span.fa.fa-sign-in
            Login
          %ul
            %li
              %a{:href => "pages-login.html"} App Login
            %li
              %a{:href => "pages-login-website.html"} Website Login
            %li
              %a{:href => "pages-login-website-light.html"} Website Login Light
        %li.xn-openable
          %a{:href => "#"}
            %span.fa.fa-warning
            Error Pages
          %ul
            %li
              %a{:href => "pages-error-404.html"} Error 404 Sample 1
            %li
              %a{:href => "pages-error-404-2.html"} Error 404 Sample 2
            %li
              %a{:href => "pages-error-500.html"} Error 500
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-file-text-o
        %span.xn-text Layouts
      %ul
        %li
          %a{:href => "layout-boxed.html"} Boxed
        %li
          %a{:href => "layout-nav-toggled.html"} Navigation Toggled
        %li
          %a{:href => "layout-nav-top.html"} Navigation Top
        %li
          %a{:href => "layout-nav-right.html"} Navigation Right
        %li
          %a{:href => "layout-nav-top-fixed.html"} Top Navigation Fixed
        %li
          %a{:href => "layout-nav-custom.html"} Custom Navigation
        %li
          %a{:href => "layout-frame-left.html"} Frame Left Column
        %li
          %a{:href => "layout-frame-right.html"} Frame Right Column
        %li
          %a{:href => "layout-search-left.html"} Search Left Side
        %li
          %a{:href => "blank.html"} Blank Page
    %li.xn-title Components
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-cogs
        %span.xn-text UI Kits
      %ul
        %li
          %a{:href => "ui-widgets.html"}
            %span.fa.fa-heart
            Widgets
        %li
          %a{:href => "ui-elements.html"}
            %span.fa.fa-cogs
            Elements
        %li
          %a{:href => "ui-buttons.html"}
            %span.fa.fa-square-o
            Buttons
        %li
          %a{:href => "ui-panels.html"}
            %span.fa.fa-pencil-square-o
            Panels
        %li
          %a{:href => "ui-icons.html"}
            %span.fa.fa-magic
            Icons
          .informer.informer-warning +679
        %li
          %a{:href => "ui-typography.html"}
            %span.fa.fa-pencil
            Typography
        %li
          %a{:href => "ui-portlet.html"}
            %span.fa.fa-th
            Portlet
        %li
          %a{:href => "ui-sliders.html"}
            %span.fa.fa-arrows-h
            Sliders
        %li
          %a{:href => "ui-alerts-popups.html"}
            %span.fa.fa-warning
            Alerts  Popups
        %li
          %a{:href => "ui-lists.html"}
            %span.fa.fa-list-ul
            Lists
        %li
          %a{:href => "ui-tour.html"}
            %span.fa.fa-random
            Tour
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-pencil
        %span.xn-text Forms
      %ul
        %li
          %a{:href => "form-layouts-two-column.html"}
            %span.fa.fa-tasks
            Form Layouts
          .informer.informer-danger New
          %ul
            %li
              %a{:href => "form-layouts-one-column.html"}
                %span.fa.fa-align-justify
                One Column
            %li
              %a{:href => "form-layouts-two-column.html"}
                %span.fa.fa-th-large
                Two Column
            %li
              %a{:href => "form-layouts-tabbed.html"}
                %span.fa.fa-table
                Tabbed
            %li
              %a{:href => "form-layouts-separated.html"}
                %span.fa.fa-th-list
                Separated Rows
        %li
          %a{:href => "form-elements.html"}
            %span.fa.fa-file-text-o
            Elements
        %li
          %a{:href => "form-validation.html"}
            %span.fa.fa-list-alt
            Validation
        %li
          %a{:href => "form-wizards.html"}
            %span.fa.fa-arrow-right
            Wizards
        %li
          %a{:href => "form-editors.html"}
            %span.fa.fa-text-width
            WYSIWYG Editors
        %li
          %a{:href => "form-file-handling.html"}
            %span.fa.fa-floppy-o
            File Handling
    %li.xn-openable
      %a{:href => "tables.html"}
        %span.fa.fa-table
        %span.xn-text Tables
      %ul
        %li
          %a{:href => "table-basic.html"}
            %span.fa.fa-align-justify
            Basic
        %li
          %a{:href => "table-datatables.html"}
            %span.fa.fa-sort-alpha-desc
            Data Tables
        %li
          %a{:href => "table-export.html"}
            %span.fa.fa-download
            Export Tables
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-bar-chart-o
        %span.xn-text Charts
      %ul
        %li
          %a{:href => "charts-morris.html"}
            %span.xn-text Morris
        %li
          %a{:href => "charts-nvd3.html"}
            %span.xn-text NVD3
        %li
          %a{:href => "charts-rickshaw.html"}
            %span.xn-text Rickshaw
        %li
          %a{:href => "charts-other.html"}
            %span.xn-text Other
    %li
      %a{:href => "maps.html"}
        %span.fa.fa-map-marker
        %span.xn-text Maps
    %li.xn-openable
      %a{:href => "#"}
        %span.fa.fa-sitemap
        %span.xn-text Navigation Levels
      %ul
        %li.xn-openable
          %a{:href => "#"} Second Level
          %ul
            %li.xn-openable
              %a{:href => "#"} Third Level
              %ul
                %li.xn-openable
                  %a{:href => "#"} Fourth Level
                  %ul
                    %li
                      %a{:href => "#"} Fifth Level
