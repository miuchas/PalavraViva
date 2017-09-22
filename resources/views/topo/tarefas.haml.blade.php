%li.xn-icon-button.pull-right
  %a{:href => "#"}
    %span.fa.fa-tasks
  .informer.informer-warning 3
  .panel.panel-primary.animated.zoomIn.xn-drop-left
    .panel-heading
      %h3.panel-title
        %span.fa.fa-tasks
        Notificações
      .pull-right
        %span.label.label-warning 3 tarefas ativas
    .panel-body.list-group.scroll{:style => "height: 200px;"}

      %a.list-group-item{:href => "#"}
        %strong Phasellus augue arcu, elementum
        .progress.progress-small.progress-striped.active
          .progress-bar.progress-bar-danger{"aria-valuemax" => "100", "aria-valuemin" => "0", "aria-valuenow" => "100", :role => "progressbar", :style => "width: 100%;"}
        %small.text-muted John Doe, 25 Sep 2014 / 50%
        %small.text-success Ecluir

    .panel-footer.text-center
      %a{:href => "pages-tasks.html"} Show all tasks
