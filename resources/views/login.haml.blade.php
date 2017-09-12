!!!
%html.body-full-height{:lang => "en"}
  %head
    / META SECTION
    %title Joli Admin - Responsive Bootstrap Admin Template
    %meta{:content => "text/html; charset=US-ASCII", "http-equiv" => "Content-Type"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    %link{:href => "favicon.ico", :rel => "icon", :type => "image/x-icon"}
    / END META SECTION
    / CSS INCLUDE
    %link#theme{:href => "css/theme-default.css", :rel => "stylesheet", :type => "text/css"}
    / EOF CSS INCLUDE
  %body
    .login-container
      .login-box.animated.fadeInDown
        .login-logo
        .login-body
          .login-title
            %strong> Welcome
            , Please login
          %form.form-horizontal{:action => "index.html", :method => "post"}
            .form-group
              .col-md-12
                %input.form-control{:placeholder => "Username", :type => "text"}
            .form-group
              .col-md-12
                %input.form-control{:placeholder => "Password", :type => "password"}
            .form-group
              .col-md-6
                %a.btn.btn-link.btn-block{:href => "#"} Forgot your password?
              .col-md-6
                %button.btn.btn-info.btn-block Log In
        .login-footer
          .pull-left
          .pull-right
            %a{:href => "#"} About
            |
            %a{:href => "#"} Privacy
            |
            %a{:href => "#"} Contact Us
