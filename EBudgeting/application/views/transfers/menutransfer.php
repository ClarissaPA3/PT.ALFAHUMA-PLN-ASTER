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
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"
    />
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
                                                        <td><?php echo $id_anggota['PPN'] ?></td>
                                                        <td><?php echo $id_anggota['PPH_21'] ?></td>
                                                        <td><?php echo $id_anggota['PPH_22'] ?></td>
                                                        <td><?php echo $id_anggota['PPH_23'] ?></td>
                                                        <td><?php echo $id_anggota['denda'] ?></td>
                                                        <td><?php echo $id_anggota['administrasi_bank'] ?></td>
                                                        <td><?php echo $id_anggota['total_dibayar'] ?></td>
                                                        <td><?php echo $id_anggota['berita']; ?></td>
                                                        <td><?php echo $id_anggota['honor_asesmen'] ?></td>
                                                        <td><?php echo $id_anggota['honor_evaluator'] ?></td>
                                                        <td><?php echo $id_anggota['nilai_kontrak'] ?></td>
                                                        <td><?php echo $id_anggota['honor_tester'] ?></td>
                                                        <td><?php echo $id_anggota['honor_feedback'] ?></td>
                                                        <td><?php echo $id_anggota['pekerjaan'] ?></td>
                                                        <td><?php echo $id_anggota['honor_pewawancara'] ?></td>
                                                        <td><?php echo $id_anggota['honor_korektor_pauli'] ?></td>
                                                        <td><?php echo $id_anggota['lumpsum_transport_bandara'] ?></td>
                                                        <td><?php echo $id_anggota['lumpsum_komsumsi'] ?></td>
                                                        <td><?php echo $id_anggota['lumpsum_transpoet_lok'] ?></td>
                                                        <td><?php echo $id_anggota['waktu_kerja'] ?></td>
                                                        <td><?php echo $id_anggota['lumpsum_uang_cod'] ?></td>
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
    <script src="<?php echo base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/'); ?>dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
            });
        });
    </script>
</body>

</html>