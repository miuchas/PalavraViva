-if( isset($alert) )
  .col-md-12
    -if( $alert["type"] == 'Confirmacao' )
      .alert{:role => "alert", :class => $alert["class"]}
        %button.close{"data-dismiss" => "alert", :type => "button"}
          %span{"aria-hidden" => "true"} ×
          %span.sr-only Fechar
        %strong
        =$alert['message']
