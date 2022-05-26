<!DOCTYPE html>
<html>

<head>
  <title>E-Budgeting | Dashboard</title>
  <?php $this->load->view('dashboard/_part/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo site_url('C_login/login_admin'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BDG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>E-Budgeting</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning"><?php echo  $this->session->userdata('totalnotifikasi'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Anda memiliki <?php echo  $this->session->userdata('totalnotifikasi'); ?> notifikasi</li>
                <li>

                  <ul class="menu">
                    <?php foreach ($this->session->userdata('dm') as $iddm) : ?>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> <?= 'Pengajuan No ' . $iddm['id_pengajuan'] . ' Diajukan Sub'; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>

                    <?php foreach ($this->session->userdata('koreksi')  as $iddm) : ?>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> <?= 'Pengajuan No ' . $iddm['id_pengajuan'] . ' Telah dikoreksi'; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>

              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama_anggota'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Account - DM/ Bidang
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                  <div class="pull-right">
                    <a href="<?php echo site_url('C_login/logout_admin') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Welcome DM/ Bidang</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?php echo site_url("C_persetujuan_dm/show_pengajuandm"); ?>"><i class="fa fa-check"></i> <span>Persetujuan DM</span>
              <span class="pull-right-container">
                <span class="pull-right-container">
                </span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url("C_menutransfer"); ?>">
              <i class="fa fa-edit"></i> <span>Transfer</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i> <span>Rekapitulasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i><i class=""></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url("C_rekap_pos"); ?>"><i class="fa fa-circle-o"></i> Rekap Pos Anggaran</a></li>
              <li><a href="<?php echo site_url("C_rekap_anggaran"); ?>"><i class="fa fa-circle-o"></i> Rekap Anggaran </a></li>
            </ul>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>DM/ Bidang</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $pengajuan['totalanggaran'] == 0 ? '0' : $pengajuan['totalanggaran']; ?></h3>

                <p>Total Ajuan Anggaran</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $pengajuan['totaldisetujui'] == 0 ? '0' : $pengajuan['totaldisetujui']; ?></h3>

                <p>Pengajuan Disetujui</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $pengajuan['totalrevisi'] == 0 ? '0' : $pengajuan['totalrevisi']; ?></h3>

                <p>Koreksi</p>
              </div>
              <div class="icon">
                <i class="fa fa-edit"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">

                <h4><?php echo $pagu['paguterpakai'] == 0 ? '0' :  'Rp.' . number_format($pagu['paguterpakai'], 2, ',', '.'); ?>/<?php echo $pagu['paguanggaran'] == 0 ? '0' :  'Rp.' . number_format($pagu['paguanggaran'], 2, ',', '.'); ?></h4>

                <p>Pagu Anggaran</p>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#revenue-chart" data-toggle="tab"></a></li>

                <h4 class="box-title"><i class="fa fa-inbox"></i> History Pengajuan dan Persetujuan Anggaran</h4>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->

          </section>
          <!-- /.Left col -->

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


  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>