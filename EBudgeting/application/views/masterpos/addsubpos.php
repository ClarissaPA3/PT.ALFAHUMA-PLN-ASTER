<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pos</title>
    <?php 
    $this->load->view('templatesub/header');
    ?>
</head>
<body>

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php site_url('C_masterpos_subpos/add_subpos');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Sub Pos</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama POS">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets');?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/dist/js/demo.js"></script>
    
</body>
</html>