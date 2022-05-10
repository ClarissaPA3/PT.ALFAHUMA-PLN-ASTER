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
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>

              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> Koreksi Anggaran
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
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
                Account - DMPAU/ Admin
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
        <p>Welcome DMPAU/ Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url("C_input_jabatan/show_jabatan"); ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
          <li><a href="<?php echo site_url("C_user/show_user"); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
          <li><a href="<?php echo site_url("C_masterpos_subpos/show_pos"); ?>"><i class="fa fa-circle-o"></i> Pos</a></li>
          <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos"); ?>"><i class="fa fa-circle-o"></i> Sub Pos</a></li>
          <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos2"); ?>"><i class="fa fa-circle-o"></i> Sub Pos Barang </a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url("C_persetujuan_dmpau"); ?>">
          <i class="fa fa-check"></i> <span>Persetujuan DMPAU</span>
          <span class="pull-right-container">
            <span class="pull-right-container">
            </span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url("C_koreksi_anggaran"); ?>">
          <i class="fa fa-th"></i> <span>Koreksi Anggaran</span>
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
      <li>
        <a href="<?php echo site_url("C_paguanggaran"); ?>">
          <i class="fa fa-laptop"></i> <span>Setting Pagu Anggaran</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Rekapitulasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
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