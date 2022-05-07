<!DOCTYPE html>
<html>

<head>
    <title>E-Budgeting | Persetujuan DM</title>
    <?php $this->load->view("dashboard/_part/head.php") ?>
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
                <h1>Persetujuan DM</h1>

            </section>

            <!-- Main content -->
            <div class="card mb-3">
                <section class="content-header mb-5"></section>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover text-center table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <td rowspan="2">ID Pengajuan</td>
                                    <td rowspan="2">Bulan</td>
                                    <td rowspan="2">Minggu Ke</td>
                                    <td rowspan="2">Tanggal Mulai</td>
                                    <td rowspan="2">Tanggal Sampai</td>
                                    <td rowspan="2">Item</td>
                                    <td rowspan="2">Status</td>
                                    <td rowspan="2">Catatan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                <?php foreach ($pengajuan as $ajuan):?>
                                
                                <tr>
                                    <td><?php echo $ajuan['id_pengajuan'];?></td>
                                    <td><?php echo $ajuan['bulan2'];?></td>
                                    <td><?php echo $ajuan['minggu2'];?></td>
                                    <td><?php echo $ajuan['tanggal_mulai2'];?></td>
                                    <td><?php echo $ajuan['tanggal_sampai2'];?></td>
                               
                                    <td></td>
                                    <td>
                                        <?php 
                                        
                                        if ($ajuan['status2'] == 2) {
                                            ?> 
                                            <p class="btn btn-primary">Menunggu persetujuan</p>
                                            
                                            <?php
                                        }
                                        elseif ($ajuan['status2'] == 3) {
                                            
                                            ?> 
                                            <p class="btn btn-primary">Selesai</p>
                                            
                                            <?php
                                        }
                                        ?>
                                   
                                    <td>-</td>
                                    <td>
                                        <a href="<?php echo site_url('C_persetujuan_dmpau/reviewdmpau/'). $ajuan['id_pengajuan'];?>" class="btn btn-primary">Review</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                            <select name="bln">
                                <?php
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $jlh_bln = count($bulan);
                                for ($c = 0; $c < $jlh_bln; $c += 1) {
                                    echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                }
                                ?>
                            </select>
                        </table>
                    </div>
                </div>
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