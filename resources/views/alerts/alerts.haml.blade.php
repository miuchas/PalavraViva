-if( isset($alert) )
  -$class = ""

  .col-md-12
    -if( $alert["type"] == 'Confirmacao' )
      .alert{:role => "alert", :class => $alert["class"]}
        %button.close{"data-dismiss" => "alert", :type => "button"}
          %span{"aria-hidden" => "true"} ×
          %span.sr-only Fechar
        %strong
        =$alert['message']

    -# -if( $alert["type"] == 'Confirmacao' )
    -#   .alert.alert-success{:role => "alert"}
    -#     %button.close{"data-dismiss" => "alert", :type => "button"}
    -#       %span{"aria-hidden" => "true"} ×
    -#       %span.sr-only Fechar
    -#     %strong
    -#     =$alert['message']
    -# -if( $alert["type"] == 'Notificacao' )
    -#   .alert.alert-info{:role => "alert"}
    -#     %button.close{"data-dismiss" => "alert", :type => "button"}
    -#       %span{"aria-hidden" => "true"} ×
    -#       %span.sr-only Fechar
    -#     %strong
    -#     =$alert['message']
    -# -if( $alert["type"] == 'Requisicao' )
    -#   .alert.alert-warning{:role => "alert"}
    -#     %button.close{"data-dismiss" => "alert", :type => "button"}
    -#       %span{"aria-hidden" => "true"} ×
    -#       %span.sr-only Fechar
    -#     %strong
    -#     =$alert['message']
    -# -if( $alert["type"] == 'Alerta' )
    -#   .alert.alert-danger{:role => "alert"}
    -#     %button.close{"data-dismiss" => "alert", :type => "button"}
    -#       %span{"aria-hidden" => "true"} ×
    -#       %span.sr-only Fechar
    -#     %strong
    -#     =$alert['message']
