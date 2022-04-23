<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master POS </title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/AdminLTE.min.css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/skins/_all-skins.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
</head>

<body>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo site_url('C_masterpos_subpos/add_pos'); ?>" class="btn btn-block btn-info"><i class="fa fa-fw fa-plus"></i> Tambah POS</a>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sub POS</th>
                                    <th colspan="2">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $id = 0;
                                foreach ($sub_pos as $nama) :
                                    $id++;


                                ?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $nama['nama_subpos'] ?></td>
                                        <td><a  href="<?php echo site_url('C_masterpos_subpos/update_subpos/'). $nama['id_subpos']; ?>" class="btn btn-block btn-primary">Edit</a></td>
                                        <td> <a href="<?php echo site_url('C_masterpos_subpos/delete_subpos/'). $nama['id_subpos']; ?>" class="btn btn-block btn-danger">Hapus</a></td>
                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/') ?>dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
            });
        });
    </script>
</body>

</html>