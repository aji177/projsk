<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/ui/head') ?>
    <title>Pelayaan | <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('app/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan Disini -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- Tambahan Disini -->
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
                            <h3 class="box-title">Form SKCK Online <?= array_key_exists('kode_tiket', $_GET) ? '|| Kode Tiket : ' . $_GET['kode_tiket'] : '' ?></h3>
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
                                            Nomor SKCK
                                        </h6>
                                    </li>
                                    <li role="tab">
                                        <h6>
                                            Catatan Kriminal
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
                                            Rekam Fingerprint
                                        </h6>
                                    </li>
                                    <li role="tab">
                                        <h6>
                                            Digital Signature
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
                                            <div class="row">
                                                <input type="text" name="id_skck" value="<?= $data_skck->id_skck ?>" hidden>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">NIK</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor NIK KTP" value="<?= $data_skck->no_ktp ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Paspor</label>
                                                        <div class="col-xs-7">
                                                            <input type="text" class="form-control" name="paspor" id="paspor" placeholder="Nomor Paspor (Jika Ada)" value="<?= $data_skck->paspor ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Nama</label>
                                                        <div class="col-xs-7">
                                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sesuai AKTE / IJAZAH" value="<?= $data_skck->nama ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tempat Lahir</label>
                                                        <div class="col-xs-7">
                                                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $data_skck->tempat_lahir ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tanggal Lahir</label>
                                                        <div class="col-xs-7">
                                                            <div class="input-group date-container">
                                                                <span id="tl-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                                                <input type="text" class="form-control date-pick-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data_skck->tanggal_lahir ?>" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tinggal Di Indonesia</label>
                                                        <div class="col-xs-7">
                                                            <div class="input-group date-container">
                                                                <span id="td-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                                                <input type="text" class="form-control date-pick-control" id="tinggal_dari" name="tinggal_dari" value="<?= $data_skck->berada_di_indonesia_dari ?>" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" />
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
                                                        <div class="col-xs-2">
                                                            <div class="radio radio-success">
                                                                <input type="radio" class="form-control" name="jk" id="jk" value="LAKI-LAKI" <?= $data_skck->jk == 'LAKI-LAKI' ? 'checked' : '' ?> />
                                                                <label for="jk">LAKI-LAKI</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <div class="radio radio-success">
                                                                <input type="radio" class="form-control" name="jk" id="jk" value="PEREMPUAN" <?= $data_skck->jk == 'PEREMPUAN' ? 'checked' : '' ?> />
                                                                <label for="jk">PEREMPUAN</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Alamat</label>
                                                        <div class="col-xs-9">
                                                            <input type="text" name="nama_jalan" id="nama_jalan" class="form-control" placeholder="Nama Jalan" value="<?= $data_skck->nama_jalan ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label"></label>
                                                        <div class="col-xs-2">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">RT</span>
                                                                <input type="text" class="form-control" id="rt" name="rt" value="<?= $data_skck->rt ?>" placeholder="RT" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">RW</span>
                                                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $data_skck->rw ?>" placeholder="RW" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label"></label>
                                                        <div class="col-xs-7">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Kota/Kab</span>
                                                                <select name="kota" id="kota" class="form-control" required>
                                                                    <option value="">-- Pilih Kota/Kabupaten</option>
                                                                    <?php foreach ($kabkota as $kab) : ?>
                                                                        <option value="<?= $kab->id ?>" <?= $data_skck->id_kota == $kab->id ? 'selected' : '' ?>><?= $kab->nama_kabkota ?></option>
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
                                                                <select name="kecamatan" id="kecamatan" class="form-control" required>
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
                                                                <select name="kelurahan" id="kelurahan" class="form-control" required>
                                                                    <option value="">-- Pilih Kelurahan/Desa</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Agama</label>
                                                        <div class="col-xs-4">
                                                            <select name="agama" id="agama" class="form-control" required>
                                                                <option value="">-- Pilih Agama</option>
                                                                <?php foreach ($agama as $ag) : ?>
                                                                    <option value="<?= $ag ?>" <?= $ag == $data_skck->agama ? 'selected' : '' ?>><?= $ag ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Pekerjaan</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" class="form-control" value="<?= $data_skck->pekerjaan ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Foto EKTP</label>
                                                        <input type="file" id="input-file-ktp" class="dropify" name="ktp" data-max-file-size="2M" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sidik Jari EKTP</label>
                                                        <input type="file" id="input-file-ktp" class="dropify" name="sidik_ktp" data-max-file-size="2M" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Signature EKTP</label>
                                                        <input type="file" id="input-file-ktp" class="dropify" name="signature_ktp" data-max-file-size="2M" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Nomor SKCK</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="nomor_skck" id="nomor_skck" required />
                                                </div>
                                                <div class="col-xs-3">
                                                    <button id="generate_no_skck" class="btn btn-primary" type="button">Buat Nomor SKCK</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label for="btnCekDataPusat" class="col-xs-3 control-label">Cek Data Kriminal</label>
                                                <div class="col-xs-4">
                                                    <button class="btn btn-primary" id="btnCekDataPusat" type="button">
                                                        Cek Data Pusat
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="catatan_kriminal" class="col-xs-3 control-label">Catatan Kriminal</label>
                                                <div class="col-xs-8">
                                                    <input type="text" name="catatan_kriminal" id="catatan_kriminal" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="catatan_kriminal_en" class="col-xs-3 control-label">Catatan Kriminal (Inggris)</label>
                                                <div class="col-xs-8">
                                                    <input type="text" name="catatan_kriminal_en" id="catatan_kriminal_en" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <?php
                                            $select = $check_keperluan($data_skck->keperluan) ? ['', 'checked', '', 'keperluan'] : ['disabled', '', '', ''];
                                            $input = $check_keperluan($data_skck->keperluan) ? ['disabled', '', '', ''] : ['', 'checked', $data_skck->keperluan, 'keperluan'];
                                            ?>
                                            <div class="form-group">
                                                <label for="keperluan" class="col-xs-3 control-label">Keperluan</label>
                                                <div class="col-xs-8">
                                                    <select name="<?= $select[3] ?>" id="keperluan" class="form-control" <?= $select[0] ?>>
                                                        <option value="">-- Pilih Keperluan</option>
                                                        <?php foreach ($keperluan as $kep) : ?>
                                                            <option value="<?= $kep->keperluan_nama ?>" <?= $check_keperluan($kep->keperluan_nama) ? 'selected' : ''  ?>><?= $kep->keperluan_nama ?></option>
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
                                                    <input type="text" id="keperluan_ekstra" name="<?= $input[3] ?>" class="form-control" value="<?= $input[2] ?>" placeholder="(Isi Jika Tidak ada keperluan yang tersedia diatas)" <?= $input[0] ?>>
                                                </div>
                                                <div class="col-xs-1">
                                                    <input type="radio" name="keperluan_action" id="" value="1" <?= $input[1] ?>>
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
                                                    <input type="file" id="input-file-ktp" class="dropify" name="foto_ktp" data-max-file-size="2M" data-default-file="<?= base_url($lampiran['foto_ktp']) ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Ambil Sidik Jari</label>
                                                <div class="col-xs-5">
                                                    <button class="btn btn-primary">Start Fingerprint</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Simpan Sidik Jari</label>
                                                <div class="col-xs-2">
                                                    <div class="radio radio-success">
                                                        <input type="checkbox" class="form-control" name="simpan" id="simpan" value="simpan" />
                                                        <label for="simpan">Simpan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 2em">
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="ibu_jari_kanan" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="telunjuk_jari_kanan" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_tengah_kanan" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_manis_kanan" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_kelingking_kanan" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 2em">
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="ibu_jari_kiri" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="telunjuk_jari_kiri" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_tengah_kiri" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_manis_kiri" data-max-file-size="2M" />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="jari_kelingking_kiri" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Rumus Sidik Jari</label>
                                                <div class="col-xs-9">
                                                    <div class="row" style="margin-bottom: 1.5em">
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_1" id="rumus_1" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_2" id="rumus_2" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_3" id="rumus_3" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_4" id="rumus_4" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_5" id="rumus_5" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_6" id="rumus_6" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 1.5em">
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_7" id="rumus_7" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_8" id="rumus_8" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_9" id="rumus_9" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_10" id="rumus_10" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_11" id="rumus_11" class="form-control">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <input type="text" name="rumus_12" id="rumus_12" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">SignaturePad</label>
                                                <div class="col-xs-5">
                                                    <button class="btn btn-primary">Start SignaturePad</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">SignaturePad</label>
                                                <div class="col-xs-5">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="files" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Lampiran EKTP</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="lampiran_ktp" data-max-file-size="2M" data-default-file="<?= base_url($lampiran['lampiran_ktp']) ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Lampiran KK</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="lampiran_kk" data-max-file-size="2M" data-default-file="<?= base_url($lampiran['lampiran_kk']) ?>" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-3">Ijazah</label>
                                                <div class="col-xs-3">
                                                    <input type="file" id="input-file-ktp" class="dropify" name="lampiran_ijazah" data-max-file-size="2M" data-default-file="<?= base_url($lampiran['lampiran_ijazah']) ?>" />
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('a').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            $("#alert").hide();
            $('#kecamatan').html(`<option value="">-- Pilih Kecamatan</option>`);
            $('#kelurahan').html(`<option value="">-- Pilih Kelurahan/Desa</option>`);
            $.get(`<?= base_url('api/kabkota/kecamatan/') ?>${$('#kota').val()}`, respon => {
                var html = `<option value="">-- Pilih Kecamatan</option>`;

                for (let index = 0; index < respon.data.length; index++) {
                    const element = respon.data[index];
                    html += `<option value="${element.id}" ${element.id==<?= $data_skck->id_kecamatan ?>? 'selected' : ''}>${element.nama_kecamatan}</option>`;
                }
                $('#kecamatan').html(html);
            }).done(function() {
                $.get(`<?= base_url('api/kecamatan/desa/') ?>${$('#kecamatan').val()}`, respon => {
                    var html = `<option value="">-- Pilih Kelurahan/Desa</option>`;

                    for (let index = 0; index < respon.data.length; index++) {
                        const element = respon.data[index];
                        html += `<option value="${element.id}" ${element.id==<?= $data_skck->id_desa ?>? 'selected' : ''}>${element.nama_desa}</option>`;
                    }
                    $('#kelurahan').html(html);
                })
            })
        });
        (function() {
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

            // Basic
            $('.dropify').dropify();
            var tanggal_lahir = document.getElementById('tanggal_lahir');
            var tinggal_dari = document.getElementById('tinggal_dari');
            const validators = {
                validators: {
                    notEmpty: {
                        message: "Harap Isi Bidang Ini",
                    },
                },
            }

            tanggal_lahir.addEventListener('keyup', (e) => {
                tinggal_dari.value = tanggal_lahir.value;
            })

            $("#tanggal_lahir").datepicker({
                format: "yyyy-mm-dd",
                orientation: "bottom left",
                container: "#tl-container",
                autoclose: true,
                todayHighlight: true,
            })

            $("#tinggal_dari").datepicker({
                format: "yyyy-mm-dd",
                orientation: "bottom left",
                container: "#td-container",
                autoclose: true,
                todayHighlight: true,
            })

            $("#tinggal_sampai").datepicker({
                format: "yyyy-mm-dd",
                orientation: "bottom left",
                container: "#ts-container",
                autoclose: true,
                todayHighlight: true,
            })

            $('#kota').on('change', e => {
                $('#kecamatan').html(`<option value="">-- Pilih Kecamatan</option>`);
                $('#kelurahan').html(`<option value="">-- Pilih Kelurahan/Desa</option>`);
                $.get(`<?= base_url('api/kabkota/kecamatan/') ?>${$('#kota').val()}`, respon => {
                    var html = `<option value="">-- Pilih Kecamatan</option>`;

                    for (let index = 0; index < respon.data.length; index++) {
                        const element = respon.data[index];
                        html += `<option value="${element.id}">${element.nama_kecamatan}</option>`;
                    }
                    $('#kecamatan').html(html);
                })
            })

            $('#kecamatan').on('change', e => {
                $.get(`<?= base_url('api/kecamatan/desa/') ?>${$('#kecamatan').val()}`, respon => {
                    var html = `<option value="">-- Pilih Kelurahan/Desa</option>`;

                    for (let index = 0; index < respon.data.length; index++) {
                        const element = respon.data[index];
                        html += `<option value="${element.id}">${element.nama_desa}</option>`;
                    }
                    $('#kelurahan').html(html);
                })
            })

            $('#generate_no_skck').on('click', (e) => {
                $.get('<?= base_url('api/generate_no_skck') ?>', data => {
                    $('#nomor_skck').val(data.data.format)
                })
            })

            $('input:radio[name="keperluan_action"]').click(function(e) {
                if ($(this).val() == 1 && $(this).is(':checked')) {
                    $('#keperluan').attr('disabled', 'disabled')
                    $('#keperluan_ekstra').attr('name', 'keperluan')
                    $('#keperluan').removeAttr('name')
                    $('#keperluan_ekstra').removeAttr('disabled')
                } else {
                    $('#keperluan_ekstra').attr('disabled', 'disabled')
                    $('#keperluan').attr('name', 'keperluan')
                    $('#keperluan').removeAttr('disabled')
                    $('#keperluan_ekstra').removeAttr('name')
                }
            })

            $("#exampleValidator").wizard({
                onInit: function() {
                    $("#validation").formValidation({
                        framework: "bootstrap",
                        fields: {
                            nik: validators,
                            tempat_lahir: validators,
                            tanggal_lahir: validators,
                            nama_jalan: validators,
                            kota: validators,
                            kecamatan: validators,
                            kelurahan: validators,
                            agama: validators,
                            pekerjaan: validators,
                            nomor_skck: validators,
                        },
                    });
                },
                validator: function() {
                    var fv = $("#validation").data("formValidation");
                    var $this = $(this);
                    // Validate the container
                    fv.validateContainer($this);
                    var isValidStep = fv.isValidContainer($this);
                    if (isValidStep === false || isValidStep === null) {
                        return false;
                    }
                    return true;
                },
                onFinish: function() {
                    $.ajax({
                        url: `<?= base_url('pelayanan/update_skck_online') ?>`,
                        type: "post",
                        data: new FormData(document.getElementById("validation")),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        beforeSend: function() {
                            $("#alert").removeClass("alert-danger");
                            $("#alert").removeClass("alert-success");
                            $("#alert").addClass("alert-warning");
                            $("#alert").show();
                            $("#messages").text("Menyimpan Data Anda, Silahkan Tunggu");
                        },
                        error: function(xhr, error, thrown) {
                            console.log(xhr);
                            console.log(error);
                            console.log(thrown);
                        },
                        success: function(d) {
                            $("#alert").fadeOut(500);
                            var data = JSON.parse(d);
                            console.log(data);

                            if (data["errors"] === 1) {
                                $("#alert").removeClass("alert-warning");
                                $("#alert").removeClass("alert-success");
                                $("#alert").addClass("alert-danger");
                                $("#alert").fadeIn(500);
                                $("#messages").text(data["messages"]);
                            } else {
                                $("#alert").removeClass("alert-warning");
                                $("#alert").removeClass("alert-danger");
                                $("#alert").addClass("alert-success");
                                $("#alert").fadeIn(500);
                                $("#messages").text(data["messages"]);
                                setTimeout(() => {
                                    window.location.href = data['redirect']
                                }, 5000);
                            }
                        },
                    });
                },
            });
        })();
    </script>
    <!--Style Switcher -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>