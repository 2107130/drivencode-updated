<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login | Admin-Cruise Line Rentals</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dist/css/AdminLTE.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

    <style>
        .login-page,
        .register-page {
            background: #badee5 !important;
        }
    </style>

</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= base_url('logo.png'); ?>" height="150px" alt="Logo"> <br>
            <a class="mt-2 text-success" href="<?= base_url(); ?>">Admin Login</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?= base_url('/admin/login/process') ?>" method="post">
                <?= csrf_field() ?>

                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger"><?= session('error') ?></div>
                <?php endif; ?>

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="<?= old('email') ?>" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <?php if (session('errors.email')): ?>
                    <small class="text-danger"><?= session('errors.email') ?></small>
                <?php endif; ?>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <?php if (session('errors.password')): ?>
                    <small class="text-danger"><?= session('errors.password') ?></small>
                <?php endif; ?>

                <div class="row mt-4">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?= base_url('plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>