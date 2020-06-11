<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/ui/head') ?>
    <title>Pelayaan | <?= $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('app/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan Disini -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?= base_url('app/') ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
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
                            <h3 class="box-title text-center">Laporan Data SKCK</h3>
                            <form action="" class="form-inline" style="margin-bottom: 2rem;">
                                <div class="form-group">
                                    <div class="input-group date-container">
                                        <span id="tl-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                        <input type="text" class="form-control date-pick-control" id="tanggal_awal" name="tanggal_awal" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" value="<?= date('Y-m-d', strtotime('-1 month', time())) ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group date-container">
                                        <span id="tl-container" class="input-group-addon"><i class="icon-calender"></i></span>
                                        <input type="text" class="form-control date-pick-control" id="tanggal_akhir" name="tanggal_akhir" placeholder="tahun(yyyy)-bulan(mm)-tanggal(dd)" value="<?= date('Y-m-d') ?>" />
                                    </div>
                                </div>
                                <button type="button" id="filter" class="btn btn-warning"><i class="fa fa-eye fa-fw"></i> Filter</button>
                                <button type="button" id="reset" class="btn btn-info"><i class="fa fa-refresh fa-fw"></i> Reset</button>
                            </form>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>TGL. CETAK</th>
                                            <th>NO SKCK</th>
                                            <th>NIK</th>
                                            <th>NAMA</th>
                                            <th>TTL</th>
                                            <th>ALAMAT</th>
                                            <th>KEPERLUAN</th>
                                            <th>DIBUAT DARI</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?= base_url('app/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('app/') ?>js/waves.js"></script>
    <script src="<?= base_url('app/') ?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Toast -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        var tgl = new Date()
        var tahun = Intl.DateTimeFormat('id', {
            year: 'numeric'
        }).format(tgl)
        var bulan = Intl.DateTimeFormat('id', {
            month: '2-digit'
        }).format(tgl)
        var tanggal = Intl.DateTimeFormat('id', {
            month: '2-digit'
        }).format(tgl)

        $(document).ready(function() {
            $("#tanggal_awal").datepicker({
                format: "yyyy-mm-dd",
                orientation: "bottom left",
                container: "#tl-container",
                autoclose: true,
                todayHighlight: true,
            })

            $("#tanggal_akhir").datepicker({
                format: "yyyy-mm-dd",
                orientation: "bottom left",
                container: "#tl-container",
                autoclose: true,
                todayHighlight: true,
            })

            $('#filter').on('click', (e) => {
                e.preventDefault();
                dataTable({
                    tanggal_awal: $('#tanggal_awal').val(),
                    tanggal_akhir: $('#tanggal_akhir').val()
                })
            })

            $('#reset').on('click', (e) => {
                e.preventDefault();
                $('#tanggal_awal').val('<?= date('Y-m-d', strtotime('-1 month', time())) ?>')
                $('#tanggal_akhir').val('<?= date('Y-m-d') ?>')
                dataTable().ajax.reload()
            })

            dataTable().ajax.reload()
        });


        function dataTable(data = {
            tanggal_awal: '<?= date('Y-m-d', strtotime('-1 month', time())) ?>',
            tanggal_akhir: '<?= date('Y-m-d') ?>',
        }) {

            var tabel = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf',
                ],
                ordering: true,
                order: [
                    [0, 'asc']
                ],
                ajax: {
                    url: '<?= base_url('api/laporan_skck') ?>',
                    data: {
                        tanggal_awal: data.tanggal_awal,
                        tanggal_akhir: data.tanggal_akhir,
                    },
                    type: 'POST',
                },
                deferRender: true,
                columns: [{
                        render: (data, type, row) => {
                            var tgl = new Date(row.create_at * 1000)
                            var tahun = Intl.DateTimeFormat('id', {
                                year: 'numeric'
                            }).format(tgl)
                            var bulan = Intl.DateTimeFormat('id', {
                                month: 'long'
                            }).format(tgl)
                            var tanggal = Intl.DateTimeFormat('id', {
                                month: '2-digit'
                            }).format(tgl)

                            return `${tanggal} ${bulan} ${tahun} ${tgl.getHours()}:${tgl.getMinutes()}`
                        }
                    },
                    {
                        data: 'format'
                    },
                    {
                        data: "no_ktp"
                    },
                    {
                        data: "nama"
                    },
                    {
                        render: (data, type, row) => {
                            var tgl = new Date(`${row.tanggal_lahir}`)
                            var tahun = Intl.DateTimeFormat('id', {
                                year: 'numeric'
                            }).format(tgl)
                            var bulan = Intl.DateTimeFormat('id', {
                                month: 'long'
                            }).format(tgl)
                            var tanggal = Intl.DateTimeFormat('id', {
                                month: '2-digit'
                            }).format(tgl)
                            var ttl = `${row.tempat_lahir}, ${tanggal} ${bulan} ${tahun}`
                            return ttl
                        }
                    },
                    {
                        data: "Alamat"
                    },
                    {
                        data: "keperluan"
                    },
                    {
                        render: function(data, type, row) {
                            return `<span class="text-uppercase">${row.create_from}</span>`
                        }
                    },
                    {
                        render: (data, type, row) => {
                            var src = '<?= base_url('pelayanan/image/') ?>' + `${row.id_skck}/foto_ktp`

                            return `<img src="${src}" class="img-responsive" />`
                        }
                    }
                ],
                destroy: true,
            });

            return tabel;
        }
    </script>
    <!--Style Switcher -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>