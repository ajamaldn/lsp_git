<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/adminlte/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <?php $this->view('message'); ?>
                <form action="<?= base_url('login/') ?>" method="post">
                    <span class="badge badge-warning"><?= strip_tags(form_error('username')); ?></span>
                    <div class="input-group mb-3">
                        <span class="badge badge-warning"><?= strip_tags(form_error('username')); ?></span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="badge badge-warning"><?= strip_tags(form_error('password')); ?></span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="<?= base_url(); ?>/assets/adminlte/plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url(); ?>/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/assets/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>

</body>

</html>