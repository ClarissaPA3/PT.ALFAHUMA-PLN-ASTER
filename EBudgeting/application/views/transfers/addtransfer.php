<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Transfer</title>
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
                    <h1>Tambah Rekap Transfer</h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                </div>
                                <form action="<?php site_url('C_masterpos_subpos/add') ?>" method="post">
                                    <div class="card-body">
         
                                  

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pengirim</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="nama_pengirim" placeholder="Nama Pengirim">                                  
                                     </div>
                                        </div>

                                     <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-5">
                                      <input type="email" name="email" placeholder="Email">                                    
                                    </div>
                                     </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No Telp</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="no_telp" placeholder="No Telp">
                                      </div>
                                    </div>

                                      <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No Rekening</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="no_rekening" placeholder="No Rekening">
                                    </div>
                                      </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Bank</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="nama_bank" placeholder="Nama Bank">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl Kirim</label>
                                            <div class="col-sm-5">
                                      <input type="datetime-local" name="tgl_kirim" placeholder="Tgl Kirim">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="kategori" placeholder="Kategori">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">PPN</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="PPN" placeholder="PPN">
                                    </div>
                                    </div>
                                  

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">PPH 21</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="PPH_21" placeholder="PPH 21">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">PPH 22</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="PPH_22" placeholder="PPH 22">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">PPH 23</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="PPH_23" placeholder="PPH 23">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Denda</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="denda" placeholder="Denda">
                                    </div>     
                                    </div>                            

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Administrasi Bank</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="administrasi_bank" placeholder="Administrasi Bank">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Total Dibayar</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="total_dibayar" placeholder="Total Dibayar">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Berita</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="berita" placeholder="Berita">
                                    </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Asesmen</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_asesmen" placeholder="Honor Asesmen">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Evaluator</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_evaluator" placeholder="Honor Evaluator">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Tester</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_tester" placeholder="Honor Tester">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Feedback</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_feedback" placeholder="Honor Feedback">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Pewawancara</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_pewawancara" placeholder="Honor Pewawancara">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Honor Korektor Pauli</label>
                                            <div class="col-sm-5">
                                      <input type="number" name="honor_korektor_pauli" placeholder="Honor Korektor Pauli">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nilai Kontrak</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="nilai_kontrak" placeholder="Nilai Kontrak">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Waktu Kerja</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="waktu_kerja" placeholder="Waktu Kerja">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Lumpsum Transport Bandara</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="lumpsum_transport_bandara" placeholder="Lumpsum Transport Bandara">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Lumpsum Konsumsi</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="lumpsum_komsumsi" placeholder="Lumpsum Komsumsi">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Lumpsum Transpoet Lok</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="lumpsum_transpoet_lok" placeholder="Lumpsum Transpoet Lok">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Lumpsum Uang Cod</label>
                                            <div class="col-sm-5">
                                      <input type="text" name="lumpsum_uang_cod" placeholder="Lumpsum Uang Cod">
                                    </div>
                                    </div>
            
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->

                </section>
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