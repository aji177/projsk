<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/ui/head') ?>
    <title>Pelayaan | <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('app/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan Disini -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Tambahan Disini -->
    <!-- This is Sidebar menu CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="<?= base_url('app/') ?>css/animate.css" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="<?= base_url('app/') ?>css/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (default.css) for this starter
         page. However, you can choose any other skin from folder css / colors .
         -->
    <link href="<?= base_url('app/') ?>css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="fix-header">
    <div id="wrapper">
        <!-- Header -->
        <?php $this->load->view('admin/ui/navbar') ?>
        <?php $this->load->view('admin/ui/sidebar') ?>
        <!-- Header -->
        <div id="page-wrapper">
            <!-- Content -->
            <div class="container-fluid">
                <div class="row bg-title p-0">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= $title ?></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)">Pelayanan</a></li>
                            <li class="active"><?= $title ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title text-center"><?= $title ?></h3>
                            <div class="table-responsive">
                                <table id="tablePencarian" class="table table-striped table-bordered" role="grid">
                                    <thead>
                                        <tr>
                                            <th>TGL. LAPOR</th>
                                            <th>TGL. CETAK</th>
                                            <th>NO. SKCK</th>
                                            <th>NIK</th>
                                            <th>NAMA</th>
                                            <th>KEPERLUAN</th>
                                            <th>JENIS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_skck() as $data) : ?>
                                            <?php extract($data) ?>
                                            <tr>
                                                <td><?= strftime('%e %B %Y, %I:%M %p', strtotime($request_at)) ?></td>
                                                <td><?= $create_at ?></td>
                                                <td><?= $nomor_skck($nomor)['format'] ?></td>
                                                <td><?= $no_ktp ?></td>
                                                <td><?= $nama ?></td>
                                                <td><?= $keperluan ?></td>
                                                <td><?= $create_from ?></td>
                                                <td>
                                                    <a class="text-success" href="<?= base_url('pelayanan/buat_skck_online?document=' . $id_skck) ?>" <?= $is_print == 1 ? 'onclick="return confirm(`Data ini sudah pernah di cetak. Tetap ingin mengubah isi data ini?`)"' : '' ?>><i class="fa fa-pencil"></i></a>
                                                    <a class="text-danger" href="<?= base_url('pelayanan/hapus_skck/' . $id_skck) ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data SKCK Ini? Berkas Lampiran dari data ini akan dihapus secara permanen.')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <!-- Footer -->
            <?php $this->load->view('admin/ui/footer') ?>
            <!-- Footer -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('app/') ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('app/') ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?= base_url('app/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('app/') ?>js/waves.js"></script>
    <script src="<?= base_url('app/') ?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            <?php if ($this->session->flashdata('error')) : ?>
                $.toast({
                    heading: 'Oopsss',
                    text: '<?= $this->session->flashdata('error') ?>',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            <?php elseif ($this->session->flashdata('success')) : ?>
                $.toast({
                    heading: 'Selamat!!',
                    text: '<?= $this->session->flashdata('success') ?>',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3500
                });
            <?php endif; ?>

            $('#tablePencarian').DataTable();
        })
    </script>
</body>

</html>