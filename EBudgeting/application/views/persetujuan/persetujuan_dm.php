<!DOCTYPE html>
<html>

<head>
    <title>E-Budgeting | Persetujuan DM</title>
    <?php $this->load->view("dashboard/_part/head.php") ?>
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
                    <h1>Persetujuan DM</h1>

                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <select name="bln">
                                <option selected="selected">Bulan</option>
                                <?php
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $jlh_bln = count($bulan);
                                for ($c = 0; $c < $jlh_bln; $c += 1) {
                                    echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                }
                                ?>
                            </select>
                            <div class="box">
                                <div class="box-header">
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>ID Pengajuan</th>
                                                <th>Bulan</th>
                                                <th>Minggu Ke</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Sampai</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Catatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-striped">
                                            <?php
                                            for ($i = 0; $i < count($pengajuan); $i++) :
                                            ?>


                                                <tr>
                                                    <td><?php echo $pengajuan[$i]['id_pengajuan']; ?></td>
                                                    <td><?php echo $pengajuan[$i]['bulan2']; ?></td>
                                                    <td><?php echo $pengajuan[$i]['minggu2']; ?></td>
                                                    <td><?php echo $pengajuan[$i]['tanggal_mulai2']; ?></td>
                                                    <td><?php echo $pengajuan[$i]['tanggal_sampai2']; ?></td>

                                                    <td><?= $item[$i]; ?></td>
                                                    <td>
                                                        <?php
                                                        $array = array_intersect(array($pengajuan[$i]['status2']),array_flip($status));
                                                        
                                                        
                                                        if (!empty($array)) {
                                                        
                                                            echo $status[$array[0]];

                                                      
                                                        }
                                                        ?>
                                                    </td>

                                                    <td><?= $pengajuan[$i]['catatan_dm2']; ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('C_persetujuan_dm/reviewdm/') . $pengajuan[$i]['id_pengajuan']; ?>" class="btn btn-primary">Review</a>
                                                    </td>

                                                </tr>
                                            <?php
                                            endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </section>




            </div>


        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Create by</b> Mahasiswa UNS 2020.
            </div>
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">PLN ASTER</a>.</strong> All rights
            reserved.
        </footer>



        <!-- /.content -->
    </div>

 




    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>