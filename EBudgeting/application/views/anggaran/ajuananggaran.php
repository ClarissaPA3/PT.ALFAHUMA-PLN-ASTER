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

<body>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">

        </div>
      </div>
    </div>
  </div>



  <div id="wrapper">



    <div id="content-wrapper">

      <div class="container-fluid">


        
        <!-- DataTables -->
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
                    <th>ID Anggota</th>
                    <th>Catatan DM </th>
                    <th>Total Pengajuan </th>
                    <th>Minggu </th>
                    <th>Bulan </th>
                    <th>Catatan DMPAU </th>
                    <th>Status </th>
                    <th>Tanggal Mulai </th>
                    <th>Tanggal Sampai </th>
                    <th>Tanggal Pengajuan </th>
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
                        
                        <?php 
                        if ($pengajuan_anggaran->status2 == 0) {
                          ?> 
                          <span class="btn btn-danger"><i class="fa fa-fw fa-warning"></i> Belum Diajukan</span>
                          <?php
                        }
                        else if ($pengajuan_anggaran->status2 == 1) {
                          ?> 
                          <p class="btn btn-info"><i class="fa fa-fw fa-thumbs-up"></i> Sudah diajukan</p>
                          <?php
                        }
                        else if ($pengajuan_anggaran->status2 == 2) {
                          ?> 
                          <p class="btn btn-warning"><i class="fa fa-fw fa-check"></i> Disetujui oleh DM</p>
                          <?php
                        }
                        else if ($pengajuan_anggaran->status2 == 3) {
                          ?> 
                          <p class="btn btn-success"><i class="fa fa-fw fa-check"></i> Disetujui oleh DMPAU</p>
                          <?php
                        }
                        ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tanggal_mulai2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tanggal_sampai2 ?>
                      </td>
                      <td>
                        <?php echo $pengajuan_anggaran->tgl_pengajuan2 ?>
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
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->








    </div>
    <!-- /.content-wrapper -->

  </div>
  <div class="modal fade" id="modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Menambahkan Ajuan?</h4>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="<?php echo site_url('C_ajuananggaran/add_datapengajuan');?>" method="post">
            <button type="submit" class="btn btn-primary">Save changes</button>

          </form>
          
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- /#wrapper -->


  <!-- jQuery 3 -->
  <script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url('assets/') ?>dist/js/demo.js"></script>




</body>

</html>