<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Menu Transfer</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <?php
        if ($this->session->userdata('id_jabatan') == 1) {
            $this->load->view('dashboard/sidebarnav/_headsubbidang');
        } else if ($this->session->userdata('id_jabatan') == 2) {
            $this->load->view('dashboard/sidebarnav/_headdm');
        } else if ($this->session->userdata('id_jabatan') == 3) {
            $this->load->view('dashboard/sidebarnav/_headdmpau');
        }

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Transfer</h1>
                    </a>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <form action="<?= base_url('C_menutransfer/view_transfer') ?>" method="POST" class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <label for="Dari">Dari :</label>
                                            <input type="date" class="form-control" name="dari">
                                        </div>
                                        <div class="form-group">
                                            <label for="Sampai">Sampai :</label>
                                            <input type="date" class="form-control" name="sampai">
                                        </div>
                                        <button type="submit" class="btn btn-success">Cari</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <a href="<?php echo site_url('C_menutransfer/add'); ?>" class="btn btn-block btn-info"><i class="fa fa-fw fa-plus"></i> Tambah Rekap Transfer</a>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Anggota</th>
                                                        <th>Nama Pengirim</th>
                                                        <th>Email</th>
                                                        <th>No Telp</th>
                                                        <th>No Rekening</th>
                                                        <th>Nama Bank</th>
                                                        <th>Tgl Kirim</th>
                                                        <th>Kategori</th>
                                                        <th>PPN</th>
                                                        <th>PPN 21</th>
                                                        <th>PPN 22</th>
                                                        <th>PPN 23</th>
                                                        <th>Denda</th>
                                                        <th>Administrasi Bank</th>
                                                        <th>Total Dibayar</th>
                                                        <th>Berita</th>
                                                        <th>Honor Asesmen</th>
                                                        <th>Honor Evaluator</th>
                                                        <th>Nilai Kontrak</th>
                                                        <th>Honor Tester</th>
                                                        <th>Honor Feedback</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Honor Pewawancara</th>
                                                        <th>Honor Korektor Pauli</th>
                                                        <th>Lumpsum Transport Bandara</th>
                                                        <th>Lumpsum Komsumsi</th>
                                                        <th>Lumpsum Transport Lok</th>
                                                        <th>Waktu Kerja</th>
                                                        <th>Lumpsum Uang Cod</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-striped">

                                                    <?php
                                                    $id = 0;
                                                    foreach ($transfer as $id_anggota) :
                                                        $id++;

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $id; ?></td>
                                                            <td><?php echo $id_anggota['id_anggota'] ?></td>
                                                            <td><?php echo $id_anggota['nama_pengirim'] ?></td>
                                                            <td><?php echo $id_anggota['email'] ?></td>
                                                            <td><?php echo $id_anggota['no_telp'] ?></td>
                                                            <td><?php echo $id_anggota['no_rekening'] ?></td>
                                                            <td><?php echo $id_anggota['nama_bank'] ?></td>
                                                            <td><?php echo $id_anggota['tgl_kirim'] ?></td>
                                                            <td><?php echo $id_anggota['kategori'] ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['PPN'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['PPH_21'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['PPH_22'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['PPH_23'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['denda'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['administrasi_bank'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['total_dibayar'], 2, ',', '.') ?></td>
                                                            <td><?php echo $id_anggota['berita']; ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_asesmen'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_evaluator'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['nilai_kontrak'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_tester'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_feedback'], 2, ',', '.') ?></td>
                                                            <td><?php echo $id_anggota['pekerjaan'] ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_pewawancara'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['honor_korektor_pauli'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['lumpsum_transport_bandara'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['lumpsum_komsumsi'], 2, ',', '.') ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['lumpsum_transpoet_lok'], 2, ',', '.') ?></td>
                                                            <td><?php echo $id_anggota['waktu_kerja'] ?></td>
                                                            <td>Rp. <?php echo number_format($id_anggota['lumpsum_uang_cod'], 2, ',', '.') ?></td>
                                                            <td>

                                                                <a href="<?php echo site_url('C_menutransfer/edit/') . $id_anggota['id_transfer']; ?>" class="btn btn-block btn-primary">Edit</a>
                                                                <a href="<?php echo site_url('C_menutransfer/delete/') . $id_anggota['id_transfer']; ?>" class="btn btn-block btn-danger">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>


                        </div>



                    </div>
                    <!-- /.row -->
                </section>

                <!-- /.box -->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Create by</b> Mahasiswa UNS 2020.
            </div>
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">PLN ASTER</a>.</strong> All rights
            reserved.
        </footer>
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>



    <!-- Slimscroll -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <script>
        $(function() {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    title: 'Rincian Pembayaran Transfer',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    }
                }, {
                    extend: 'csvHtml5',
                    title: 'Rincian Pembayaran Transfer',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    }
                }, {
                    extend: 'pdfHtml5',
                    title: 'Rincian Pembayaran Transfer',
                    orientation: 'landscape',
                    pageSize: 'A0',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    },
                    // pageLength: 200,
                    customize: function(doc) {
                        doc.defaultStyle.fontSize = 20; //2, 3, 4,etc
                        // doc.styles.tableHeader.fontSize = 10; //2, 3, 4, etc
                    }
                }]
            });
        });
    </script>
</body>

</html>