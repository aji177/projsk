<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('src/css/') ?>tiket.css" />
</head>

<body>
    <div class="tiket-container">
        <div class="tiket-header">
            <img src="<?= base_url('src/images') ?>/12.png" id="tiket-header-img" />
            <div class="barcode">
                <img src="<?= base_url('barcode/' . $request_skck['tiket']) ?>" id="tiket-barcode" />
                <span class="code">Kode Tiket : <?= $request_skck['tiket'] ?></span>
            </div>
        </div>
        <div class="tiket-body">
            <div class="pasphoto">
                <img src="<?= base_url('user/file/' . $request_skck['id_skck'] . '/foto_ktp') ?>" />
            </div>
            <div class="bagan">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?= $user->nama ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $user->nama_jalan ?></td>
                    </tr>
                    <tr>
                        <td>Kelurahan / Desa</td>
                        <td>:</td>
                        <td><?= $user->nama_desa ?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><?= $user->nama_kecamatan ?></td>
                    </tr>
                    <tr>
                        <td>Kabupaten / Kota</td>
                        <td>:</td>
                        <td><?= $user->nama_kabkota ?></td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>:</td>
                        <td><?= $request_skck['keperluan'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengajuan</td>
                        <td>:</td>
                        <td><?= strftime('%e %B %Y, %I:%M %p', strtotime($request_skck['request_at'])) ?></td>
                    </tr>
                    <tr>
                        <td>Berakhir Hingga</td>
                        <td>:</td>
                        <td><?= strftime('%e %B %Y, %I:%M %p', strtotime('+1 WEEK', strtotime($request_skck['request_at']))) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="tiket-footer">
            <p>POLRESTA BANDA ACEH</p>
            <p>Jl. Cut Mutia, 25 Banda Aceh. 23242.</p>
        </div>
    </div>
</body>

<script>
    document.addEventListener("load", window.print());
</script>

</html>