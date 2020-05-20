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
                            <hr>
                            <?php if ($this->session->flashdata('no_skck')) : ?>
                                <p class="text-center text-success"><?= $this->session->flashdata('no_skck') ?></p>
                            <?php else : ?>
                                <p class="text-center" style="margin-bottom: 2em">Nomor SKCK terakhir <?= $last_no_skck->no_skck ?> dibuat jam <?= date('d F Y, H:i:s', $last_no_skck->create_at) ?></p>
                            <?php endif; ?>
                            <form action="<?= base_url('pelayanan/generate_skck') ?>" role="form" class="form-horizontal" method="POST">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="no_skck" class="col-xs-4 control-label">No SKCK Terakhir</label>
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" name="no_skck" id="no_skck" value="<?= $last_no_skck->no_skck ?>">
                                            <div class="small text-danger"><?= $this->session->flashdata('no_skck') ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulan" class="col-xs-4 control-label">Bulan</label>
                                        <div class="col-xs-2">
                                            <select class="form-control" name="bulan" id="bulan">
                                                <?php foreach ($bulan_romawi as $romawi) :
                                                    if ($romawi->romawi == $last_no_skck->bulan) : ?>
                                                        <option value="<?= $romawi->romawi ?>" selected><?= $romawi->bulan ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $romawi->romawi ?>"><?= $romawi->bulan ?></option>
                                                <?php
                                                    endif;
                                                endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun" class="col-xs-4 control-label">Tahun</label>
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" name="tahun" id="tahun" value="<?= date('Y') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="divisi" class="col-xs-4 control-label">Divisi</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" name="divisi" id="divisi" value="<?= $last_no_skck->divisi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="format" class="col-xs-4 control-label">Format No SKCK</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" name="format" id="format" value="<?= $last_no_skck->format ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
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
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?= base_url('app/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('app/') ?>js/waves.js"></script>
</body>

</html>