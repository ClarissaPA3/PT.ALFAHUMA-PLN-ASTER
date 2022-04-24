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
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Role Admin</a></li>
                   
                    <li><a href="<?php echo site_url("C_masterpos_subpos/show_pos"); ?>"><i class="fa fa-circle-o"></i> Pos</a></li>
                    <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos"); ?>"><i class="fa fa-circle-o"></i> Sub Pos</a></li>
                    <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos2"); ?>"><i class="fa fa-circle-o"></i> Sub Pos Barang </a></li>
                </ul>
            </li>
            <li class=" active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Rekapitulasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Rekap Pos Anggaran</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Rekap Anggaran </a></li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-check"></i> <span>Persetujuan DMPAU</span>
                    <span class="pull-right-container">
                        <span class="pull-right-container">
                        </span>
                </a>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Koreksi Anggaran</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("C_user/show_user"); ?>">
                    <i class="fa fa-user"></i> <span>Add User</span>
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
                <a href="pages/widgets.html">
                    <i class="fa fa-laptop"></i> <span>Setting Pagu Anggaran</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>