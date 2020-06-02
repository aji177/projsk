<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/ui/head') ?>
    <title>Pelayaan | <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('app/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan Disini -->
    <!-- Tambahan Disini -->
    <!-- This is Sidebar menu CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="<?= base_url('app/') ?>css/animate.css" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="<?= base_url('app/') ?>css/style.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
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
                <form class="form-horizontal" action="<?= base_url('pelayanan/input_template_skck') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="white-box">
                                <h3 class="box-title text-center">Cari Data SKCK</h3>
                                <div class="form-group">
                                    <label for="daerah_satuan" class="col-xs-3 control-label">Daerah Satuan</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="daerah_satuan" id="daerah_satuan" class="form-control form-control-sm" value="<?= $data['daerah_satuan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="resor_satuan" class="col-xs-3 control-label">Resor Satuan</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="resor_satuan" id="resor_satuan" class="form-control form-control-sm" value="<?= $data['resor_satuan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_satuan" class="col-xs-3 control-label">Alamat Satuan</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="alamat_satuan" id="alamat_satuan" class="form-control form-control-sm" value="<?= $data['alamat_satuan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="atas_nama" class="col-xs-3 control-label">Atas Nama</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="atas_nama" id="atas_nama" class="form-control form-control-sm" value="<?= $data['atas_nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="satuan_kepala" class="col-xs-3 control-label">Satuan Kepala</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="satuan_kepala" id="satuan_kepala" class="form-control form-control-sm" value="<?= $data['satuan_kepala'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pejabat" class="col-xs-3 control-label">Pejabat</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="pejabat" id="pejabat" class="form-control form-control-sm" value="<?= $data['pejabat'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan" class="col-xs-3 control-label">Jabatan</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="jabatan" id="jabatan" class="form-control form-control-sm" value="<?= $data['jabatan'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pernyataan_id" class="col-xs-3 control-label">Pernyataan (Default Indonesia)</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="pernyataan_id" id="pernyataan_id" class="form-control form-control-sm" value="<?= $data['pernyataan_id'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pernyataan_en" class="col-xs-3 control-label">Pernyataan (Default English)</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="pernyataan_en" id="pernyataan_en" class="form-control form-control-sm" value="<?= $data['pernyataan_en'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi_cetak" class="col-xs-3 control-label">Lokasi Cetak</label>
                                    <div class="col-xs-9">
                                        <input type="text" name="lokasi_cetak" id="lokasi_cetak" class="form-control form-control-sm" value="<?= $data['lokasi_cetak'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="skck_berlaku" class="col-xs-3 control-label">Masa Berlaku SKCK</label>
                                    <div class="col-xs-9">
                                        <input type="number" name="skck_berlaku" id="skck_berlaku" class="form-control form-control-sm" value="<?= $data['skck_berlaku'] ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="white-box">
                                <h3 class="box-title text-center">E_SIGN / Tanda Tangan Atasan</h3>
                                <button type="submit" class="btn btn-primary">Atur Template SKCK</button>
                            </div>
                        </div>
                    </div>
                </form>
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
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?= base_url('app/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('app/') ?>js/waves.js"></script>
    <!-- Toast -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
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
        })
    </script>
</body>

</html>