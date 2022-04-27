<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Anggaran</title>
    <?php $this->load->view('dashboard/_part/head'); ?>
</head>

<body>
    <div class="row">

        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="<?php echo site_url('C_ajuananggaran/update_datapengajuan/') . $id; ?>" class="btn btn-info ">Input</a>
                    <a href="<?php echo site_url('C_ajuananggaran/show_rekapanggaran/') . $id; ?>" class="btn btn-info active">Rekap</a>



                    <div class="box-body">



                        <!-- mulai ini -->

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th> POS</th>
                                            <th>SUB POS</th>
                                            <th>SUB POS</th>
                                            <th>Kegiatan</th>
                                            <th>Deskripsi</th>
                                            <th>Nominal</th>
                                            <th>Disetujui</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php foreach ($detailajuan as $key) : ?>
                                            <tr>



                                                <td>
                                                    <h4><?php echo $key['nama_pos']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['nama_subpos']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['nama_subpos2']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['kegiatan2']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['deskripsi2']; ?></h4>
                                                </td>

                                                <td>
                                                    <h4><?php echo $key['nominal_pengajuan2']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['nominal_persetujuan2']; ?></h4>
                                                </td>


                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                    <tfoot class="bg-gray">
                                        <td colspan="5"><b> Total Anggaran diajukan Minggu <?= $ajuan['minggu2'];?></b></td>
                                        <td><h4><?php echo $total['nominal_pengajuan2'];?></h4></td>
                                        <td><h4><?php echo $total['nominal_persetujuan2'];?></h4></td>
                                    </tfoot>





                                </table>

                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a onclick="FormSubmit()" class="btn btn-info pull-right">Draft</a>

                    </div>
                    <!-- /.box-footer -->

                </div>
                <!-- /.box-header -->
                <!-- form start -->

            </div>
            <!-- /.box -->

        </div>


    </div>









    <script>
        function FormSubmit() {
            document.getElementById("aju").submit();
        }
    </script>




    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>