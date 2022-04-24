<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("view") ?>
</head>

<body id="page-top">

  <?php $this->load->view("view") ?>
  <div id="wrapper">

    <?php $this->load->view("view") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("view") ?>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('ajuan') ?>"><i class="fas fa-plus"></i> Pengajuan Anggaran</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Pengajuan</th>
                    <th>ID Anggota</th>
                    <th>Catatan DM 2</th>
                    <th>Total Pengajuan 2</th>
                    <th>Minggu 2</th>
                    <th>Bulan 2</th>
                    <th>Catatan DMPAU 2</th>
                    <th>Status 2</th>
                    <th>Tanggal Mulai 2</th>
                    <th>Tanggal Sampai 2</th>
                    <th>Tanggal Pengajuan 2</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pengajuan_anggaran as $pengajuan_anggaran) : ?>
                    <tr>
                      <td width="150">
                        <?php echo $pengajuan_anggaran->id_pengajuan ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->id_anggota ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->catatan_dm2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->total_pengajuan2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->minggu2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->bulan2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->catatan_dmpau2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->status2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tangal_mulai2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tanggal_sampai2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tgl_pengajuan2 ?>
                      </td>
                      <td class="small">
                      <td width="250">
                        <a href="<?php echo site_url('admin/edit/' . $pengajuan_anggaran->id_pengajuan) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('admin/delete/' . $pengajuan_anggaran->id_pengajuan) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("view") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <?php $this->load->view("view") ?>
  <?php $this->load->view("view") ?>

  <?php $this->load->view("view") ?>

</body>

</html>