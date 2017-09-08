@extends('layout')
@section('corpo')
/ START BREADCRUMB
%ul.breadcrumb
  %li
    %a{:href => "#"} Home
  %li.active Dashboard
/ END BREADCRUMB
/ PAGE CONTENT WRAPPER
.page-content-wrap
  / START WIDGETS
  .row
    .col-md-3
      / START WIDGET SLIDER
      .widget.widget-default.widget-carousel
        #owl-example.owl-carousel
          %div
            .widget-title Total Visitors
            .widget-subtitle 27/08/2014 15:23
            .widget-int 3,548
          %div
            .widget-title Returned
            .widget-subtitle Visitors
            .widget-int 1,695
          %div
            .widget-title New
            .widget-subtitle Visitors
            .widget-int 1,977
        .widget-controls
          %a.widget-control-right.widget-remove{"data-placement" => "top", "data-toggle" => "tooltip", :href => "#", :title => "Remove Widget"}
            %span.fa.fa-times
      / END WIDGET SLIDER
    .col-md-3
      / START WIDGET MESSAGES
      .widget.widget-default.widget-item-icon{:onclick => "location.href='pages-messages.html';"}
        .widget-item-left
          %span.fa.fa-envelope
        .widget-data
          .widget-int.num-count 48
          .widget-title New messages
          .widget-subtitle In your mailbox
        .widget-controls
          %a.widget-control-right.widget-remove{"data-placement" => "top", "data-toggle" => "tooltip", :href => "#", :title => "Remove Widget"}
            %span.fa.fa-times
      / END WIDGET MESSAGES
    .col-md-3
      / START WIDGET REGISTRED
      .widget.widget-default.widget-item-icon{:onclick => "location.href='pages-address-book.html';"}
        .widget-item-left
          %span.fa.fa-user
        .widget-data
          .widget-int.num-count 375
          .widget-title Registred users
          .widget-subtitle On your website
        .widget-controls
          %a.widget-control-right.widget-remove{"data-placement" => "top", "data-toggle" => "tooltip", :href => "#", :title => "Remove Widget"}
            %span.fa.fa-times
      / END WIDGET REGISTRED
    .col-md-3
      / START WIDGET CLOCK
      .widget.widget-info.widget-padding-sm
        .widget-big-int.plugin-clock 00:00
        .widget-subtitle.plugin-date Loading...
        .widget-controls
          %a.widget-control-right.widget-remove{"data-placement" => "left", "data-toggle" => "tooltip", :href => "#", :title => "Remove Widget"}
            %span.fa.fa-times
        .widget-buttons.widget-c3
          .col
            %a{:href => "#"}
              %span.fa.fa-clock-o
          .col
            %a{:href => "#"}
              %span.fa.fa-bell
          .col
            %a{:href => "#"}
              %span.fa.fa-calendar
      / END WIDGET CLOCK
  / END WIDGETS
  .row
    .col-md-4
      / START USERS ACTIVITY BLOCK
      .panel.panel-default
        .panel-heading
          .panel-title-box
            %h3 Users Activity
            %span Users vs returning
          %ul.panel-controls{:style => "margin-top: 2px;"}
            %li
              %a.panel-fullscreen{:href => "#"}
                %span.fa.fa-expand
            %li
              %a.panel-refresh{:href => "#"}
                %span.fa.fa-refresh
            %li.dropdown
              %a.dropdown-toggle{"data-toggle" => "dropdown", :href => "#"}
                %span.fa.fa-cog
              %ul.dropdown-menu
                %li
                  %a.panel-collapse{:href => "#"}
                    %span.fa.fa-angle-down
                    Collapse
                %li
                  %a.panel-remove{:href => "#"}
                    %span.fa.fa-times
                    Remove
        .panel-body.padding-0
          #dashboard-bar-1.chart-holder{:style => "height: 200px;"}
      / END USERS ACTIVITY BLOCK
    .col-md-4
      / START VISITORS BLOCK
      .panel.panel-default
        .panel-heading
          .panel-title-box
            %h3 Visitors
            %span Visitors (last month)
          %ul.panel-controls{:style => "margin-top: 2px;"}
            %li
              %a.panel-fullscreen{:href => "#"}
                %span.fa.fa-expand
            %li
              %a.panel-refresh{:href => "#"}
                %span.fa.fa-refresh
            %li.dropdown
              %a.dropdown-toggle{"data-toggle" => "dropdown", :href => "#"}
                %span.fa.fa-cog
              %ul.dropdown-menu
                %li
                  %a.panel-collapse{:href => "#"}
                    %span.fa.fa-angle-down
                    Collapse
                %li
                  %a.panel-remove{:href => "#"}
                    %span.fa.fa-times
                    Remove
        .panel-body.padding-0
          #dashboard-donut-1.chart-holder{:style => "height: 200px;"}
      / END VISITORS BLOCK
    .col-md-4
      / START PROJECTS BLOCK
      .panel.panel-default
        .panel-heading
          .panel-title-box
            %h3 Projects
            %span Projects activity
          %ul.panel-controls{:style => "margin-top: 2px;"}
            %li
              %a.panel-fullscreen{:href => "#"}
                %span.fa.fa-expand
            %li
              %a.panel-refresh{:href => "#"}
                %span.fa.fa-refresh
            %li.dropdown
              %a.dropdown-toggle{"data-toggle" => "dropdown", :href => "#"}
                %span.fa.fa-cog
              %ul.dropdown-menu
                %li
                  %a.panel-collapse{:href => "#"}
                    %span.fa.fa-angle-down
                    Collapse
                %li
                  %a.panel-remove{:href => "#"}
                    %span.fa.fa-times
                    Remove
        .panel-body.panel-body-table
          .table-responsive
            %table.table.table-bordered.table-striped
              %thead
                %tr
                  %th{:width => "50%"} Project
                  %th{:width => "20%"} Status
                  %th{:width => "30%"} Activity
              %tbody
                %tr
                  %td
                    %strong Joli Admin
                  %td
                    %span.label.label-danger Developing
                  %td
                    .progress.progress-small.progress-striped.active
                      .progress-bar.progress-bar-danger{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 85%;"} 85%
                %tr
                  %td
                    %strong Gemini
                  %td
                    %span.label.label-warning Updating
                  %td
                    .progress.progress-small.progress-striped.active
                      .progress-bar.progress-bar-warning{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 40%;"} 40%
                %tr
                  %td
                    %strong Taurus
                  %td
                    %span.label.label-warning Updating
                  %td
                    .progress.progress-small.progress-striped.active
                      .progress-bar.progress-bar-warning{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 72%;"} 72%
                %tr
                  %td
                    %strong Leo
                  %td
                    %span.label.label-success Support
                  %td
                    .progress.progress-small.progress-striped.active
                      .progress-bar.progress-bar-success{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 100%;"} 100%
                %tr
                  %td
                    %strong Virgo
                  %td
                    %span.label.label-success Support
                  %td
                    .progress.progress-small.progress-striped.active
                      .progress-bar.progress-bar-success{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 100%;"} 100%
      / END PROJECTS BLOCK
  .row
    .col-md-8
      / START SALES BLOCK
      .panel.panel-default
        .panel-heading
          .panel-title-box
            %h3 Sales
            %span Sales activity by period you selected
          %ul.panel-controls.panel-controls-title
            %li
              #reportrange.dtrange
                %span
                %b.caret
            %li
              %a.panel-fullscreen.rounded{:href => "#"}
                %span.fa.fa-expand
        .panel-body
          .row.stacked
            .col-md-4
              .progress-list
                .pull-left
                  %strong In Queue
                .pull-right 75%
                .progress.progress-small.progress-striped.active
                  .progress-bar.progress-bar-primary{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 75%;"} 75%
              .progress-list
                .pull-left
                  %strong Shipped Products
                .pull-right 450/500
                .progress.progress-small.progress-striped.active
                  .progress-bar.progress-bar-primary{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 90%;"} 90%
              .progress-list
                .pull-left
                  %strong.text-danger Returned Products
                .pull-right 25/500
                .progress.progress-small.progress-striped.active
                  .progress-bar.progress-bar-danger{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 5%;"} 5%
              .progress-list
                .pull-left
                  %strong.text-warning Progress Today
                .pull-right 75/150
                .progress.progress-small.progress-striped.active
                  .progress-bar.progress-bar-warning{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "50", :role => "progressbar", :style => "width: 50%;"} 50%
              %p
                %span.fa.fa-warning
                Data update in end of each hour. You can update it manual by pressign update button
            .col-md-8
              #dashboard-map-seles{:style => "width: 100%; height: 200px"}
      / END SALES BLOCK
    #common-Modal1.common-modal.modal.fade{"aria-hidden" => "true", :role => "dialog", :tabindex => "-1"}
      .modal-content
        %ul.list-inline.item-details
          %li
            %a{:href => "http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/"} Admin templates
          %li
            %a{:href => "http://themescloud.org"} Bootstrap themes
    .col-md-4
      / START SALES & EVENTS BLOCK
      .panel.panel-default
        .panel-heading
          .panel-title-box
            %h3 Sales & Event
            %span Event "Purchase Button"
          %ul.panel-controls{:style => "margin-top: 2px;"}
            %li
              %a.panel-fullscreen{:href => "#"}
                %span.fa.fa-expand
            %li
              %a.panel-refresh{:href => "#"}
                %span.fa.fa-refresh
            %li.dropdown
              %a.dropdown-toggle{"data-toggle" => "dropdown", :href => "#"}
                %span.fa.fa-cog
              %ul.dropdown-menu
                %li
                  %a.panel-collapse{:href => "#"}
                    %span.fa.fa-angle-down
                    Collapse
                %li
                  %a.panel-remove{:href => "#"}
                    %span.fa.fa-times
                    Remove
        .panel-body.padding-0
          #dashboard-line-1.chart-holder{:style => "height: 200px;"}
      / END SALES & EVENTS BLOCK
  / START DASHBOARD CHART
  #dashboard-area-1.chart-holder{:style => "height: 200px;"}
  .block-full-width
  / END DASHBOARD CHART
/ END PAGE CONTENT WRAPPER
@endsection
