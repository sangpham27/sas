<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Attendace System</title>
    <link rel="stylesheet" href="./GUI/template/plugins/font_awesome/css/all.css">
    <link rel="stylesheet" href="./GUI/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./GUI/template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./GUI/template/dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="">Student Attdence System</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form action="" method="post" class="booking">
                    <div class="form-group control-group">
                        <div class="controls">
                            <div class="input-group mb-3">
                                <input type="text" name="us" class="form-control" placeholder="UserName"
                                    data-validation-required-message="UserName is not blank">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group control-group">
                        <div class="controls">
                            <div class="input-group mb-3">
                                <input type="password" name="pw" class="form-control" placeholder="Password"
                                    data-validation-required-message="Password is not blank">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- 
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <!-- ./wrapper -->
    <script src="./GUI/template/plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="./GUI/template/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- PAGE SCRIPTS -->
    <script src="./GUI/template/dist/js/adminlte.js"></script>
    <script src="./GUI/template/dist/js/jqBootstrapValidation.js"></script>
    <?php include './GUI/template/dist/js/file_js.php' ?>
</body>

</html>