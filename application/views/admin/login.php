<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('src/') ?>images/logo-polres.png">
    <title>Login Pelayanan SKCK</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('app/bootstrap/dist/css/bootstrap.min.css') ?>">
    <!-- Auth Style -->
    <link rel="stylesheet" href="<?= base_url('app/auth/css/') ?>style.css">
</head>

<body>
    <!-- Login Area : Start -->
    <main id="wrapper">
        <img src="<?= base_url('src/') ?>images/logo-polres.png" class="img-wrapper" alt="Logo Polisi">
        <form id="login-form" method="POST" role="form" action="<?= base_url('pelayanan/do_login') ?>">
            <h2>Login</h2>
            <?php if ($this->session->flashdata('error_username')) : ?>
                <div class="form-group has-error">
                    <label for="username" class="control-label">username</label>
                    <input type="text" id="username" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Masukkan Username" autocomplete="nickname" autofocus>
                    <label id="username_error" for="username" class="error"><?= $this->session->flashdata('error_username') ?></label>
                </div>
            <?php else : ?>
                <div class="form-group">
                    <label for="username" class="control-label">username</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username') ?>" placeholder="Masukkan Username" autocomplete="nickname">
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error_password')) : ?>
                <div class="form-group has-error">
                    <label for="password" class="control-label">password</label>
                    <input type="password" id="password" name="password" class="form-control with-errors" placeholder="Masukkan Password" autofocus>
                    <label id="password_error" for="password" class="error"><?= $this->session->flashdata('error_password') ?></label>
                </div>
            <?php else : ?>
                <div class="form-group">
                    <label for="password" class="control-label">password</label>
                    <input type="password" id="password" name="password" class="form-control with-errors" placeholder="Masukkan Password">
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </main>
    <!-- Login Area : End -->

    <!-- Script : Start -->
    <script src="<?= base_url('app/plugins/bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('app/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('app/plugins/bower_components/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('app/auth/js/proces.min.js') ?>"></script>

</body>

</html>