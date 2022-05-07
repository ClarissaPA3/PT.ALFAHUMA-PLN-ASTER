<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Master Pos</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
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
                    <a href="<?php echo site_url('C_menutransfer/add'); ?>">
                        <h4>Tambah Rekap Transfer</h4>
                    </a>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <section class="content-header mb-5"></section>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-hover text-center table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <td rowspan="2">No</td>
                                                    <td rowspan="2">Id Anggota</td>
                                                    <td rowspan="2">Nama Pengirim</td>
                                                    <td rowspan="2">Email</td>
                                                    <td rowspan="2">No Telp</td>
                                                    <td rowspan="2">No Rekening</td>
                                                    <td rowspan="2">Nama Bank</td>
                                                    <td rowspan="2">Tgl Kirim</td>
                                                    <td rowspan="2">Kategori</td>
                                                    <td rowspan="2">PPN</td>
                                                    <td rowspan="2">PPN 21</td>
                                                    <td rowspan="2">PPN 22</td>
                                                    <td rowspan="2">PPN 23</td>
                                                    <td rowspan="2">Denda</td>
                                                    <td rowspan="2">Administrasi Bank</td>
                                                    <td rowspan="2">Total Dibayar</td>
                                                    <td rowspan="2">Berita</td>
                                                    <td rowspan="2">Honor Asesmen</td>
                                                    <td rowspan="2">Honor Evaluator</td>
                                                    <td rowspan="2">Nilai Kontrak</td>
                                                    <td rowspan="2">Honor Tester</td>
                                                    <td rowspan="2">Honor Feedback</td>
                                                    <td rowspan="2">Pekerjaan</td>
                                                    <td rowspan="2">Honor Pewawancara</td>
                                                    <td rowspan="2">Honor Korektor Pauli</td>
                                                    <td rowspan="2">Lumpsum Transport Bandara</td>
                                                    <td rowspan="2">Lumpsum Komsumsi</td>
                                                    <td rowspan="2">Lumpsum Transpoet Lok</td>
                                                    <td rowspan="2">Waktu Kerja</td>
                                                    <td rowspan="2">Lumpsum Uang Cod</td>
                                                    <td rowspan="2">Aksi</td>
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

                                                            <a href="<?php echo site_url('C_menutransfer/edit/') . $id_anggota['id_transfer']; ?>">Edit</a>
                                                            <a href="<?php echo site_url('C_menutransfer/delete/') . $id_anggota['id_transfer']; ?>">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box -->

                    </div>


            </div>
            <!-- /.row -->
            </section>

            <!-- right col -->
        </div>
        <?php $this->load->view('dashboard/sidebarnav/_footpage.php'); ?>

        <!-- /.row (main row) -->


        <!-- /.content -->
    </div>

    </div>
    </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- Add the sidebar's background. This div must be placed

  <div class="control-sidebar-bg"></div>
  </div>
  




  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>