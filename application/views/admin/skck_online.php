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
                            <h3 class="box-title text-center">FOrm SKCK Online</h3>
                            <form class="form-horizontal" id="form_online">
                                <div class="form-group">
                                    <label for="barcode_reader" class="col-xs-3 control-label">Barcode Reader</label>
                                    <div class="col-xs-4">
                                        <button class="btn btn-primary" type="button" id="barcode_reader" data-toggle="modal" data-target="#exampleModal">
                                            Start Scanning
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kode_tiket" class="col-xs-3 control-label">Kode Tiket</label>
                                    <div class="col-xs-5">
                                        <input type="text" name="kode_tiket" id="kode_tiket" class="form-control" placeholder="Kode Tiket Pengajuan SKCK" required>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-success" type="submit">Buat SKCK</button>
                                    </div>
                                </div>
                            </form>
                            <img id="img" src="<?= base_url('pelayanan/image/1/contoh') ?>" alt="" srcset="">
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Barcode Scanner Camera</h5>
                </div>
                <div class="modal-body">
                    <div id="scanner_cam" class="container"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
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
    <!-- QuaggaJS Barcode Reader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').on('shown.bs.modal', function() {
                var scannerCam = document.getElementById('scanner_cam');
                var App = {
                    init: function() {
                        var self = this;

                        Quagga.init(this.config, function(err) {
                            if (err) {
                                return self.handleError(err);
                            }
                            Quagga.start();
                        });
                    },
                    handleError: function(err) {
                        console.log(err);
                    },
                    config: {
                        inputStream: {
                            target: scannerCam,
                            type: "LiveStream",
                            constraints: {
                                width: {
                                    min: 640
                                },
                                height: {
                                    min: 480
                                },
                                facingMode: "environment",
                                aspectRatio: {
                                    min: 1,
                                    max: 2
                                }
                            }
                        },
                        locator: {
                            patchSize: "medium",
                            halfSample: true
                        },
                        numOfWorkers: 2,
                        frequency: 10,
                        decoder: {
                            readers: [{
                                format: "code_128_reader",
                                config: {}
                            }]
                        },
                        locate: true
                    }
                };

                App.init();

                function scanItem(code) {
                    scanBeep.play();
                    var el = document.createElement('li');
                    el.innerText = code;
                    document.getElementsByClassName('codes-list')[0].appendChild(el);
                    scannerCam.classList.add('scanner-cam--scanned');
                }

                var debouncedScanner = _.debounce(scanItem, 1000, true);
                var styleTimer;

                Quagga.onDetected((result) => {
                    var code = result.codeResult.code;

                    if (!code.match(/[0-9]+\/[0-9]+\/[A-Z]+\/[0-9]+/g)) {
                        console.log(code);
                        return;
                    }
                    debouncedScanner(code);
                    clearTimeout(styleTimer);

                    styleTimer = setTimeout(function() {
                        scannerCam.classList.remove('scanner-cam--scanned');
                    }, 1000);
                });
            })
        })
    </script>
</body>

</html>