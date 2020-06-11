<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('src/') ?>images/logo-polres.png">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('app/bootstrap/dist/css/bootstrap.min.css') ?>">
    <!-- toast CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('src/css/login.css') ?>">
</head>

<body>

    <div class="container" id="login-wrapper">
        <div class="row">
            <div id="login-area" class="col-lg-6 col-md-6 col-sm-12">
                <form action="<?= base_url('api/user_login') ?>" method="post" class="container-fluid" autocomplete="off" id="login-form">
                    <h2 class="login-header"><?= $title ?></h2>
                    <div class="form-group">
                        <label for="nik" class="control-label">Nomor KTP</label>
                        <input type="number" name="nik" id="nik" class="form-control" placeholder="Nomor Induk KTP">
                        <p class="valid-text text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Sesuai Akte/Ijazah">
                        <p class="valid-text text-danger"></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <hr class="hidden-lg hidden-md">
            </div>
            <div id="note-area" class="col-lg-6 col-md-6 col-sm-12">
                <div class="container-fluid">
                    <h2 class="login-note">Panduan Login</h2>
                    <ol>
                        <li>Masukkan Kolom Nomor KTP dan Nama Lengkap anda. (Nama Lengkap Sesuai Akte/Ijazah)</li>
                        <li>Tidak ada sistem registrasi akun disini. Data SKCK akan disimpan dan akan digunakan ulang untuk sistem login</li>
                        <li>Untuk Pengguna yang belum pernah melakukan Pengajuan SKCK secara online juga bisa login. (Hanya Perlu Mengikuti Petunjuk Nomor 1)</li>
                        <li>Sistem login ini juga bisa digunakan untuk Pengguna yang pernah mengajukan SKCK secara Offline</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('app/plugins/bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('app/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('app/') ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url('src/js/login.js') ?>"></script>

</body>

</html>