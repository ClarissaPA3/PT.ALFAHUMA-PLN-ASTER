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
          <h1>Edit Pagu Anggaran</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">
                </div>
                <form action="<?php echo site_url('C_paguanggaran/edit/').$id; ?>" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <?php foreach ($paguanggaran as $key) : ?>

                      <input type="hidden" name="id_paguanggaran" value="<?php echo $key['id_paguanggaran']; ?>">
                      <input type="hidden" name="id_anggota" placeholder="Id Anggota" value="<?php echo $key['id_anggota']; ?>">

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nominal Pagu</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="nominal_pagu" name="nominal_pagu" placeholder="" value="<?php echo $key['nominal_pagu']; ?>" required>
                          <?php echo form_error('nominal_pagu');?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nominal Terpakai</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="nominal_terpakai" name="nominal_terpakai" placeholder="" value="<?php echo $key['nominal_terpakai']; ?>" required>
                          <?php echo form_error('nominal_terpakai');?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bulan</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="bulan" name="bulan" placeholder="" value="<?php echo $key['bulan']; ?>" required>
                          <?php echo form_error('bulan');?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="tahun" name="tahun" placeholder="" value="<?php echo $key['tahun']; ?>" required>
                          <?php echo form_error('tahun');?>
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                  </div>
                <?php endforeach; ?>
              </div>
              </form>
              <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>