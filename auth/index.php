<!DOCTYPE html>
<html lang="en">

<!-- get heade -->
<?php include_once "../layouts/heade.php" ?>

<body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="../dist/img/gestion-de-projet.png" alt="" srcset="" width="90px">
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form method="post" action="{{ url('/login') }}">
                        <div class="input-group mb-3">
                            <input type="email" name="email" value="email" placeholder="Email"
                                class="form-control" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                        </div>                        

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <a href="../project/index.php" type="submit" class="btn btn-primary btn-block">Sign In</a>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
        <!-- /.login-box -->
    </body>

<!-- get script -->
<?php include_once "../layouts/script-link.php" ?>
</html>