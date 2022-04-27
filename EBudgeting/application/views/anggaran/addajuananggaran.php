<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah ajuan</title>
    <?php $this->load->view('dashboard/_part/head'); ?>
</head>

<body>
    <div class="row">

        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Horizontal Form</h3>
                    <form class="form-horizontal" action="<?php echo site_url('C_ajuananggaran/update_datapengajuan'); ?>" method="post">
                        <div class="box-body">
                            <input type="hidden" name="id_pengajuan" value="<?php echo $ajuan['id_pengajuan']; ?>">
                            <input type="hidden" name="id_anggota" value="<?php echo $ajuan['id_anggota']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="minggu2" class="col-sm-2 control-label">Minggu</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="minggu2" name="minggu2" id="minggu2" placeholder="minggu" value="<?php echo $ajuan['minggu2']; ?>">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_pengajuan2" class="col-sm-2 control-label">Total Pengajuan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="total_pengajuan2" id="total_pengajuan2" placeholder="total pengajuan" value="<?php echo $ajuan['total_pengajuan2']; ?>">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_mulai2" class="col-sm-2 control-label">Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_mulai2" id="tanggal_mulai2" placeholder="tanggal mulai" value="<?php echo date('Y-m-d', strtotime($ajuan['tanggal_mulai2'])); ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bulan2" class="col-sm-2 control-label">Bulan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="bulan2" id="bulan2" placeholder="bulan" value="<?php echo $ajuan['bulan2']; ?>">

                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="tanggal_sampai2" class="col-sm-2 control-label">Tanggal Sampai</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_sampai2" id="tanggal_sampai2" placeholder="tanggal sampai" value="<?php echo date('Y-m-d', strtotime($ajuan['tanggal_sampai2'])); ?>">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pengajuan2" class="col-sm-2 control-label">Tanggal pengajuan</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tgl_pengajuan2" id="tgl_pengajuan2" placeholder="tanggal pengajuan" value="<?php echo date('Y-m-d', strtotime($ajuan['tgl_pengajuan2'])); ?>">

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- mulai ini -->

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <th> POS</th>
                                            <th>SUB POS</th>
                                            <th>SUB POS</th>
                                            <th>Kegiatan</th>
                                            <th>nominal</th>
                                            <th colspan="2">Deskripsi</th>
                                        </tr>
                                        <tr>
                                            <form action="<?php echo site_url('C_detailajuan/add_detailanggaran') ?>" method="post">
                                                <input type="hidden" name="id_pengajuan" id="id_pengajuan" value="<?php echo $ajuan['id_pengajuan']; ?>">
                                                <td>
                                                    <select name="id_pos" id="id_pos" class="form-control">
                                                        <option value="" selected disabled>Pilih Supplier</option>
                                                        <?php foreach ($pos as $poss) : ?>
                                                            <option <?= set_select('id_pos', $poss['id_pos']) ?> value="<?= $poss['id_pos'] ?>"><?= $poss['nama_pos'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="id_subpos" id="id_subpos" class="form-control">
                                                        <option value="" selected disabled>Pilih Supplier</option>
                                                        <?php foreach ($subpos as $poss) : ?>
                                                            <option <?= set_select('id_subpos', $poss['id_subpos']) ?> value="<?= $poss['id_subpos'] ?>"><?= $poss['nama_subpos'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="id_subpos2" id="id_subpos2" class="form-control">
                                                        <option value="" selected disabled>Pilih Supplier</option>
                                                        <?php foreach ($subpos2 as $poss) : ?>
                                                            <option <?= set_select('id_subpos2', $poss['id_subpos2']) ?> value="<?= $poss['id_subpos2'] ?>"><?= $poss['nama_subpos2'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="kegiatan" id="kegiatan" placeholder="kegiatan" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="nominal" id="nominal" placeholder="nominal" class="form-control">
                                                </td>
                                                <td> <input type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi" class="form-control"></td>
                                                <td><button type="submit">Kirim</button></td>
                                            </form>
                                        </tr>
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
                                                    <h4><?php echo $key['nominal_pengajuan2']; ?></h4>
                                                </td>
                                                <td>
                                                    <h4><?php echo $key['deskripsi2']; ?></h4>
                                                </td>
                                                <td><a href="<?php echo site_url('C_detailajuan/delete_detailanggaran/') . $key['id_detailpengajuan']; ?>">Hapus</a></td>

                                            </tr>
                                        <?php endforeach; ?>


                                    </table>

                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <button type="submit" class="btn btn-info pull-right">Kirim</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

            </div>
            <!-- /.box -->

        </div>


    </div>














    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>