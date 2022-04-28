<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("dashboard/_part/head"); ?>


  <!-- Google Font -->

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
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tambah Ajuan anggaran</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="card mb-3">
                <div class="card-header">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">



                    <i class="fa fa-fw fa-plus"></i> Pengajuan Anggaran

                  </button>

                </div>


                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>ID Pengajuan</th>
                          <th>Bulan</th>
                          <th>Pengajuan</th>
                          <th>Tanggal Mulai </th>
                          <th>Tanggal Sampai </th>
                          <th>Total </th>

                          <th>Status </th>
                          <th>Aksi</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($pengajuan_anggaran as $pengajuan_anggaran) : ?>

                          <tr>
                            <td width="150">
                              <?php echo $pengajuan_anggaran->id_pengajuan ?>
                            </td>
                            <td>
                              <?php echo $pengajuan_anggaran->bulan2 ?>
                            </td>
                            <td>
                              <?php echo $pengajuan_anggaran->tgl_pengajuan2 ?>
                            </td>
                            <td>
                              <?php echo $pengajuan_anggaran->tanggal_mulai2 ?>
                            </td>
                            <td>
                              <?php echo $pengajuan_anggaran->tanggal_sampai2 ?>
                            </td>
                            <td>
                              <?php echo $pengajuan_anggaran->total_pengajuan2 ?>
                            </td>
                            <td>

                              <?php
                              if ($pengajuan_anggaran->status2 == 0) {
                              ?>
                                <span class="btn btn-danger"><i class="fa fa-fw fa-warning"></i> Belum Diajukan</span>
                              <?php
                              } else if ($pengajuan_anggaran->status2 == 1) {
                              ?>
                                <p class="btn btn-info"><i class="fa fa-fw fa-thumbs-up"></i> Sudah diajukan</p>
                              <?php
                              } else if ($pengajuan_anggaran->status2 == 2) {
                              ?>
                                <p class="btn btn-warning"><i class="fa fa-fw fa-check"></i> Disetujui oleh DM</p>
                              <?php
                              } else if ($pengajuan_anggaran->status2 == 3) {
                              ?>
                                <p class="btn btn-success"><i class="fa fa-fw fa-check"></i> Disetujui oleh DMPAU</p>
                              <?php
                              }
                              ?>
                            </td>



                            <td class="small">
                            <td width="250">
                              <a href="<?php echo site_url('C_ajuananggaran/update_datapengajuan/') . $pengajuan_anggaran->id_pengajuan; ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit dan detail</a>
                              <a href="<?php echo site_url('C_ajuananggaran/delete_datapengajuan/') . $pengajuan_anggaran->id_pengajuan; ?>"><i class="fas fa-trash"></i> Hapus</a>
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
    <?php $this->load->view('dashboard/sidebarnav/_footpage.php');?>

    <!-- /.row (main row) -->

    
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Menambahkan Ajuan?</h4>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="<?php echo site_url('C_ajuananggaran/add_datapengajuan'); ?>" method="post">
            <button type="submit" class="btn btn-primary">Save changes</button>

          </form>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed

  <div class="control-sidebar-bg"></div>
  </div>
  




  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>