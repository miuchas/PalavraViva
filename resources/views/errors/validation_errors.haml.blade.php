-if( count($errors) )
  .form-group
    .alert.alert-danger
      %ul
        -foreach($errors->all() as $error)
          %li
            =$error
