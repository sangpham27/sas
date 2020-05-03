<?php namespace Template; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Student Attendace System</title>
    <link rel="stylesheet" href="./GUI/template/plugins/font_awesome/css/all.css">
    <link rel="stylesheet" href="./GUI/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./GUI/template/dist/css/adminlte.min.css">
     <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php echo $header; ?>
        <?php echo $sidebar; ?>
        <div class='content-wrapper'>
        <?php echo $content; ?>
        </div>
        <?php echo $footer; ?>
    </div>
    <!-- ./wrapper -->
    <script src="./GUI/template/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./GUI/template/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- PAGE SCRIPTS -->
    <script src="./GUI/template/dist/js/adminlte.js"></script>
  </body>
</html>