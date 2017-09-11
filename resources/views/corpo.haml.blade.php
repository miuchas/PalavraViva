@extends('layout')
@section('link_caminho')
%ul.breadcrumb
  %li
    %a{:href => "#"} Home
  %li
    %a{:href => "#"} Forms Stuff
  %li
    %a{:href => "#"} Form Layout
  %li.active One Column
@endsection

@section('corpo')
.page-content-wrap
  .row
    .col-md-12
      %form.form-horizontal
        .panel.panel-default
          .panel-heading
            %h3.panel-title
              %strong One Column
              Layout
            %ul.panel-controls
              %li
                %a.panel-remove{:href => "#"}
                  %span.fa.fa-times
          .panel-body
            %p Cadastrar Turma
          .panel-body
            .form-group
              %label.col-md-3.col-xs-12.control-label Text Field
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-pencil
                  %input.form-control{:type => "text"}/
                %span.help-block This is sample of text field
            .form-group
              %label.col-md-3.col-xs-12.control-label Password
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-unlock-alt
                  %input.form-control{:type => "password"}/
                %span.help-block Password field sample
            .form-group
              %label.col-md-3.col-xs-12.control-label Datepicker
              .col-md-6.col-xs-12
                .input-group
                  %span.input-group-addon
                    %span.fa.fa-calendar
                  %input.form-control.datepicker{:type => "text", :value => "2014-11-01"}/
                %span.help-block Click on input field to get datepicker
            .form-group
              %label.col-md-3.col-xs-12.control-label Textarea
              .col-md-6.col-xs-12
                %textarea.form-control{:rows => "5"}
                %span.help-block Default textarea field
            .form-group
              %label.col-md-3.col-xs-12.control-label Tags
              .col-md-6.col-xs-12
                %input.tagsinput{:type => "text", :value => "First,Second,Third"}/
                %span.help-block Default textarea field
            .form-group
              %label.col-md-3.col-xs-12.control-label Select
              .col-md-6.col-xs-12
                %select.form-control.select
                  %option Option 1
                  %option Option 2
                  %option Option 3
                  %option Option 4
                  %option Option 5
                %span.help-block Select box example
            .form-group
              %label.col-md-3.col-xs-12.control-label File
              .col-md-6.col-xs-12
                %input#filename.fileinput.btn-primary{:name => "filename", :title => "Browse file", :type => "file"}/
                %span.help-block Input type file
            .form-group
              %label.col-md-3.col-xs-12.control-label Checkbox
              .col-md-6.col-xs-12
                %label.check
                  %input.icheckbox{:checked => "checked", :type => "checkbox"}/
                  Checkbox title
                %span.help-block Checkbox sample, easy to use
          .panel-footer
            %button.btn.btn-default Clear Form
            %button.btn.btn-primary.pull-right Submit
@endsection
