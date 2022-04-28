<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transfer</title>
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

                <form action="<?php site_url('C_masterpos_subpos/update') ?>" method="post">
                    <?php foreach ($transfers as $key) : ?>

                        <input type="hidden" name="id_transfer" value="<?php echo $key['id_transfer']; ?>">
                        <input type="hidden" name="id_anggota" placeholder="id_anggota" value="<?php echo $key['id_anggota']; ?>">
                        <input type="text" name="nama_pengirim" placeholder="nama_pengirim" value="<?php echo $key['nama_pengirim']; ?>">
                        <input type="email" name="email" placeholder="email" value="<?php echo $key['email']; ?>">
                        <input type="number" name="no_telp" placeholder="no_telp" value="<?php echo $key['no_telp']; ?>">
                        <input type="number" name="no_rekening" placeholder="no_rekening" value="<?php echo $key['no_rekening']; ?>">
                        <input type="text" name="nama_bank" placeholder="nama_bank" value="<?php echo $key['nama_bank']; ?>">
                        <input type="datetime-local" name="tgl_kirim" placeholder="tgl_kirim" value="<?php echo date('Y-m-d\TH:i', strtotime($key['tgl_kirim'])); ?>">


                        <input type="text" name="kategori" placeholder="kategori" value="<?php echo $key['kategori']; ?>">
                        <input type="number" name="PPN" placeholder="PPN" value="<?php echo $key['PPN']; ?>">
                        <input type="number" name="PPH_21" placeholder="PPH_21" value="<?php echo $key['PPH_21']; ?>">
                        <input type="number" name="PPH_22" placeholder="PPH_22" value="<?php echo $key['PPH_22']; ?>">
                        <input type="number" name="PPH_23" placeholder="PPH_23" value="<?php echo $key['PPH_23']; ?>">
                        <input type="number" name="denda" placeholder="denda" value="<?php echo $key['denda']; ?>">
                        <input type="number" name="administrasi_bank" placeholder="administrasi_bank" value="<?php echo $key['administrasi_bank']; ?>">
                        <input type="text" name="total_dibayar" placeholder="total_dibayar" value="<?php echo $key['total_dibayar']; ?>">
                        <input type="text" name="berita" placeholder="berita" value="<?php echo $key['berita']; ?>">
                        <input type="number" name="honor_asesmen" placeholder="honor_asesmen" value="<?php echo $key['honor_asesmen']; ?>">
                        <input type="number" name="honor_evaluator" placeholder="honor_evaluator" value="<?php echo $key['honor_evaluator']; ?>">
                        <input type="text" name="nilai_kontrak" placeholder="nilai_kontrak" value="<?php echo $key['nilai_kontrak']; ?>">
                        <input type="number" name="honor_tester" placeholder="honor_tester" value="<?php echo $key['honor_tester']; ?>">
                        <input type="number" name="honor_feedback" placeholder="honor_feedback" value="<?php echo $key['honor_feedback']; ?>">
                        <input type="text" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $key['pekerjaan']; ?>">
                        <input type="number" name="honor_pewawancara" placeholder="honor_pewawancara" value="<?php echo $key['honor_pewawancara']; ?>">
                        <input type="number" name="honor_korektor_pauli" placeholder="honor_korektor_pauli" value="<?php echo $key['honor_korektor_pauli']; ?>">
                        <input type="text" name="lumpsum_transport_bandara" placeholder="lumpsum_transport_bandara" value="<?php echo $key['lumpsum_transport_bandara']; ?>">
                        <input type="text" name="lumpsum_komsumsi" placeholder="lumpsum_komsumsi" value="<?php echo $key['lumpsum_komsumsi']; ?>">
                        <input type="text" name="lumpsum_transpoet_lok" placeholder="lumpsum_transpoet_lok" value="<?php echo $key['lumpsum_transpoet_lok']; ?>">
                        <input type="text" name="waktu_kerja" placeholder="waktu_kerja" value="<?php echo $key['waktu_kerja']; ?>">
                        <input type="text" name="lumpsum_uang_cod" placeholder="lumpsum_uang_cod" value="<?php echo $key['lumpsum_uang_cod']; ?>">
                        <button type="submit">Submit</button>
                    <?php endforeach; ?>
            </div>
            </form>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>

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