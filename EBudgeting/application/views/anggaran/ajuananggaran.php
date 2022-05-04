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
    <?php $this->load->view('dashboard/sidebarnav/_footpage.php'); ?>

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
        <form class="form-horizontal" id="aju" action="<?php echo site_url('C_ajuananggaran/add_datapengajuan'); ?>" method="post">
          <div class="content">


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="minggu2" class="col-sm-2 control-label">Minggu</label>

                  <div class="col-sm-10">

                    <select name="minggu2" id="minggu2" class="form-control">
                      <option value="" selected disabled>=== Pilih Minggu ==</option>
                      <?php foreach ($minggu as $mingguu) : ?>
                        <?php print_r($mingguu); ?>
                        <option <?= set_select('minggu2', $mingguu); ?> value="<?= $mingguu ?>">Minggu ke -<?= $mingguu; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </div>
                </div>

                <div class=" form-group">
                  <label for="tanggal_mulai2" class="col-sm-2 control-label">Tanggal Mulai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_mulai2" id="tanggal_mulai2" placeholder="tanggal mulai">

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bulan2" class="col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-10">
                    <select name="bulan2" id="bulan2" class="form-control">
                      <option value="" selected disabled>=== Pilih Bulan ==</option>
                      <?php foreach ($bulan as $bulann) : ?>

                        <option <?= set_select('bulan2', $bulann); ?> value="<?= $bulann ?>"><?= $bulann; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal_sampai2" class="col-sm-2 control-label">Tanggal Sampai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_sampai2" id="tanggal_sampai2" placeholder="tanggal sampai">

                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_pengajuan2" class="col-sm-2 control-label">Tanggal pengajuan</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pengajuan2" id="tgl_pengajuan2" placeholder="tanggal pengajuan">

                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-primary">Save changes</button>


          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- Add the sidebar's background. This div must be placed

  <div class="control-sidebar-bg"></div>
  </div>
  




  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>