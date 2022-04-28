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
      <!-- Content Header (Page header) -->
      <section class="content-header">
      </section>

      <!-- Main content -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">
        </div>
        <form action="<?php site_url('C_masterpos_subpos/add') ?>" method="post">
          <input type="text" name="id_anggota" placeholder="Id Anggota" value="">
          <input type="text" name="nama_pengirim" placeholder="Nama Pengirim">
          <input type="email" name="email" placeholder="Email">
          <input type="number" name="no_telp" placeholder="No Telp">
          <input type="number" name="no_rekening" placeholder="No Rekening">
          <input type="text" name="nama_bank" placeholder="Nama Bank">
          <input type="datetime-local" name="tgl_kirim" placeholder="Tgl Kirim">
          <input type="text" name="kategori" placeholder="Kategori">
          <input type="number" name="PPN" placeholder="PPN">
          <input type="number" name="PPH_21" placeholder="PPH 21">
          <input type="number" name="PPH_22" placeholder="PPH 22">
          <input type="number" name="PPH_23" placeholder="PPH 23">
          <input type="number" name="denda" placeholder="Denda">
          <input type="number" name="administrasi_bank" placeholder="Administrasi Bank">
          <input type="text" name="total_dibayar" placeholder="Total Dibayar">
          <input type="text" name="berita" placeholder="Berita">
          <input type="number" name="honor_asesmen" placeholder="Honor Asesmen">
          <input type="number" name="honor_evaluator" placeholder="Honor Evaluator">
          <input type="text" name="nilai_kontrak" placeholder="Nilai Kontrak">
          <input type="number" name="honor_tester" placeholder="Honor Tester">
          <input type="number" name="honor_feedback" placeholder="Honor Feedback">
          <input type="text" name="pekerjaan" placeholder="Pekerjaan">
          <input type="number" name="honor_pewawancara" placeholder="Honor Pewawancara">
          <input type="number" name="honor_korektor_pauli" placeholder="Honor Korektor Pauli">
          <input type="text" name="lumpsum_transport_bandara" placeholder="Lumpsum Transport Bandara">
          <input type="text" name="lumpsum_komsumsi" placeholder="Lumpsum Komsumsi">
          <input type="text" name="lumpsum_transpoet_lok" placeholder="Lumpsum Transpoet Lok">
          <input type="text" name="waktu_kerja" placeholder="Waktu Kerja">
          <input type="text" name="lumpsum_uang_cod" placeholder="Lumpsum Uang Cod">
          <button type="submit">Submit</button>
      </div>
      </form>
    </div>
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
</body>

</html>