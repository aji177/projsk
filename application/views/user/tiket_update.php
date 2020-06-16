<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('src/') ?>images/logo-polres.png">
    <title>Halaman Pengguna - <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('app/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Form Wizard -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet" />
    <!-- Date Picker -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- toast CSS -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Dropfy -->
    <link rel="stylesheet" href="<?= base_url('app/') ?>plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- This is a Animation CSS -->
    <link href="<?= base_url('app/') ?>css/animate.css" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="<?= base_url('app/') ?>css/user.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (default.css) for this starter
         page. However, you can choose any other skin from folder css / colors .
         -->
    <link href="<?= base_url('app/') ?>css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?= base_url('app/') ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?= base_url('app/') ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <?php
        $this->load->view('user/ui/navbar');
        $this->load->view('user/ui/sidebar');
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= $title ?></h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active"><?= $title ?></li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php
                            $arr = array_column($lampiran, null, 'name');
                            ?>
                            <?php extract($request_skck) ?>
                            <div id="alert" class="alert alert-warning">
                                <i class="fa fa-refresh fa-spin" style="margin-right: 1rem;"></i>
                                <span id="messages"></span>
                            </div>
                            <div id="exampleValidator" class="wizard">
                                <ul class="wizard-steps" role="tablist">
                                    <li class="active" role="tab">
                                        <h6>
                                            Identitas Pemohon
                                        </h6>
                                    </li>
                                    <li role="tab">
                                        <h6>
                                            Keperluan Pemohon
                                        </h6>
                                    </li>
                                    <li role="tab">
                                        <h6>
                                            Foto Terbaru
                                        </h6>
                                    </li>
                                    <li role="tab">
                                        <h6>
                                            Lampiran
                                        </h6>
                                    </li>
                                </ul>
                                <form id="validation" class="form-horizontal" autocomplete="off">
                                    <div class="wizard-content">
                                        <div class="wizard-pane active" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">NIK</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor NIK KTP" value="<?= $user->no_ktp ?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Paspor</label>
                                                <div class="col-xs-7">
                                                    <input type="text" class="form-control" name="paspor" id="paspor" placeholder="Nomor Paspor (Jika Ada)" value="<?= $user->paspor ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Nama</label>
                                                <div class="col-xs-7">
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sesuai AKTE / IJAZAH" value="<?= $user->nama ?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Tempat Lahir</label>
                                                <div class="col-xs-7">
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $user->tempat_lahir ?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Tanggal Lahir</label>
                                                <div class="col-xs-7">
                                                    <div class="input-group date-container">
                                                        <span id="tl-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                                        <input type="text" class="form-control date-pick-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" value="<?= $user->tanggal_lahir ?>" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Tinggal Di Indonesia</label>
                                                <div class="col-xs-7">
                                                    <div class="input-group date-container">
                                                        <span id="td-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                                        <input type="text" class="form-control date-pick-control" id="tinggal_dari" name="tinggal_dari" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" value="<?= $user->tanggal_lahir ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label"></label>
                                                <div class="col-xs-7">
                                                    <div class="input-group date-container">
                                                        <span id="ts-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                                        <input type="text" class="form-control date-pick-control" id="tinggal_sampai" name="tinggal_sampai" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" value="<?= date('Y-m-d') ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Jenis Kelamin</label>
                                                <?php
                                                $laki_laki = '';
                                                $perempuan = '';
                                                if ($user->jk == "LAKI-LAKI" || $user->jk == '') {
                                                    $laki_laki = 'checked';
                                                } else {
                                                    $perempuan = 'checked';
                                                }

                                                ?>
                                                <div class="col-xs-2">
                                                    <div class="radio radio-success">
                                                        <input type="radio" class="form-control" name="jk" id="jk" value="LAKI-LAKI" <?= $laki_laki ?> />
                                                        <label for="jk">LAKI-LAKI</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="radio radio-success">
                                                        <input type="radio" class="form-control" name="jk" id="jk" value="PEREMPUAN" <?= $perempuan ?> />
                                                        <label for="jk">PEREMPUAN</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Alamat</label>
                                                <div class="col-xs-9">
                                                    <input type="text" name="nama_jalan" id="nama_jalan" class="form-control" placeholder="Nama Jalan" value="<?= $user->nama_jalan ?>" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label"></label>
                                                <div class="col-xs-2">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">RT</span>
                                                        <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?= $user->rt ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">RW</span>
                                                        <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?= $user->rw ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label"></label>
                                                <div class="col-xs-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Kota/Kab</span>
                                                        <select name="kota" id="kota" class="form-control" data-id="<?= $user->id_kota ?>" required>
                                                            <option value="">-- Pilih Kota/Kabupaten</option>
                                                            <?php foreach ($kabkota as $kab) : ?>
                                                                <option value="<?= $kab->id ?>" <?= $kab->id == $user->id_kota ? 'selected' : '' ?>><?= $kab->nama_kabkota ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label"></label>
                                                <div class="col-xs-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Kecamatan</span>
                                                        <select name="kecamatan" id="kecamatan" class="form-control" data-id="<?= $user->id_kecamatan ?>" required>
                                                            <option value="">-- Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label"></label>
                                                <div class="col-xs-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Kel/Desa</span>
                                                        <select name="kelurahan" id="kelurahan" class="form-control" data-id="<?= $user->id_desa ?>" required>
                                                            <option value="">-- Pilih Kelurahan/Desa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Agama</label>
                                                <div class="col-xs-4">
                                                    <select name="agama" id="agama" class="form-control" data-value="<?= $user->agama ?>" required>
                                                        <option value="">-- Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                                                        <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konhuchu">Konhuchu</option>
                                                        <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Pekerjaan</label>
                                                <div class="col-xs-5">
                                                    <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" class="form-control" value="<?= $user->pekerjaan ?>" required />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <?php
                                            $select = ($check_keperluan()) ? ['', 'checked', ''] : ['disabled', '', 'name="keperluan"'];
                                            $input =  ($check_keperluan()) ? ['disabled', '', 'name="keperluan"'] : ['', 'checked', ''];
                                            $input_value =  ($check_keperluan()) ? '' : $keperluan;
                                            ?>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="keperluan" class="col-xs-3 control-label">Keperluan</label>
                                                        <div class="col-xs-8">
                                                            <select <?= $select[2] ?> id="keperluan" class="form-control" <?= $select[0] ?>>
                                                                <option value="">-- Pilih Keperluan</option>
                                                                <?php foreach ($data_keperluan as $kep) : ?>
                                                                    <?php $selected = $kep['keperluan_nama'] == $keperluan ? 'selected' : '' ?>
                                                                    <option value="<?= $kep['keperluan_nama'] ?>" <?= $selected ?>><?= $kep['keperluan_nama'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-xs-1">
                                                            <input type="radio" name="keperluan_action" id="" value="0" <?= $select[1] ?>>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-xs-3 control-label"></label>
                                                        <div class="col-xs-8">
                                                            <input type="text" id="keperluan_ekstra" <?= $input[2] ?> class="form-control" placeholder="(Isi Jika Tidak ada keperluan yang tersedia diatas)" value="<?= $input_value ?>" <?= $input[0] ?>>
                                                        </div>
                                                        <div class="col-xs-1">
                                                            <input type="radio" name="keperluan_action" id="" value="1" <?= $input[1] ?>>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Ambil Foto Terbaru</label>
                                                <div class="col-xs-5">
                                                    <button class="btn btn-primary">Start Camera</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Foto Pemohon</label>
                                                <div class="col-xs-2">
                                                    <input type="file" id="input_file_ktp" class="dropify" name="foto_ktp" data-max-file-size="2M" />
                                                    <img id="foto_ktp" src="<?= base_url('user/file/' . $id_skck . '/foto_ktp') ?>" class="img-responsive">
                                                </div>
                                                <div class="col-xs-2">
                                                    <button id="ganti_foto" class="btn btn-warning" type="button">
                                                        <i class="fa fa-pencil" style="margin-right: 1rem;"></i>Ganti Foto</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Lampiran EKTP</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input_lampiran_ktp" class="dropify" name="lampiran_ktp" data-max-file-size="2M" data-default-file="<?= base_url('uploads/' . $request_skck['id_skck'] . '/' . $arr['lampiran_ktp']['file']) ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Lampiran KK</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input_lampiran_kk" class="dropify" name="lampiran_kk" data-max-file-size="2M" data-default-file="<?= base_url('uploads/' . $request_skck['id_skck'] . '/' . $arr['lampiran_kk']['file']) ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Ijazah</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input_lampiran_ijazah" class="dropify" name="lampiran_ijazah" data-max-file-size="2M" data-default-file="<?= base_url('uploads/' . $request_skck['id_skck'] . '/' . $arr['lampiran_ijazah']['file']) ?>" />
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div>
            <?php $this->load->view('user/ui/footer') ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
    <script src="<?= base_url('app/') ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Form Wizard -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('app/') ?>plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css" />
    <script src="<?= base_url('app/') ?>plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="<?= base_url('app/') ?>plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <!-- Dropfy -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('app/') ?>js/custom.js"></script>
    <script src="<?= base_url('src/') ?>js/main.js"></script>
    <script src="<?= base_url('src/') ?>js/formulir_update.js"></script>
    <script>
        $(document).ready(function() {

            $('a').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });

        });
    </script>
    <!--Style Switcher -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>