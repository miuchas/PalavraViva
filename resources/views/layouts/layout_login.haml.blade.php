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
      @yield('corpo')
